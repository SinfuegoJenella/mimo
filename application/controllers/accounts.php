<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accounts extends CI_Controller {
	public function __construct(){
		parent::__construct();
	
		$this->load->model('users','users');
		$this->load->model('login_tokens','login_tokens');
		$this->load->library('login');
		$this->load->library('mail');
	}//end of __contruct
	

	
	public function index()
	{
		//check if not logged in
		if(!$this->login->isLoggedIn()){

			//go to signup/login page
			$headerdata['title'] = "MimO | Login/Sign up";
			$this->load->view('include/header',$headerdata);
			$this->load->view('mimo_v/login');
			$this->load->view('include/footer');
		}
		else{
			redirect ('http://localhost/mimo/');
		}
	}//end of index

	public function signin(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$selector = 'username';
		$condition = array('username'=>$username);
		if($this->users->read($condition,$selector)){

			$selector = 'password';
		    $query = $this->users->read($condition,$selector);
		    if(password_verify($password,$query[0]['password'])){
		    	echo '{ "username": "'.$username.'" }';
				echo '{ "password": "'.$password.'" }';
		    	$cstrong = True;
	            $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
	            $selector = 'id';
	            $user_id = $this->users->read($condition,$selector)[0]['id'];
	            $data = array('id'=>null,'token'=>sha1($token),'user_id'=>$user_id);
	            $this->login_tokens->create($data);
	                   
	            setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
	            setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
	            echo '{ "Token": "'.$token.'" }';
	            // echo json_encode(array('status'=>'success'));
		    }
		    else{
		    	echo '{ "Error": "Invalid password!" }';
                http_response_code(401);
		    }
		}
		else{
			echo '{ "Error": "Invalid username!" }';
            http_response_code(401);
		}
	}
	
	public function signup(){
		$firstname = $this->input->post("firstname");
		$lastname = $this->input->post("lastname");
		$username = $this->input->post("username");
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$birthdate = $this->input->post("birthdate");
		$sex = $this->input->post("sex");

		if($birthdate!=''){
			if($sex!=null){
				$selector = 'username';
				$condition = array('username'=>$username);
				if (!$this->users->read($condition,$selector)) {
					if (strlen($username) >= 3 && strlen($username) <= 32) {
						if (preg_match('/[a-zA-Z0-9_]+/', $username)) {
							if (strlen($password) >= 6 && strlen($password) <= 60) {
								if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
									$selector = 'email';
				        			$condition = array('email'=>$email);
				                    if (!$this->users->read($condition,$selector)) {
					                    $data = array('id'=>null,'username'=>$username,'firstname'=>$firstname, 'lastname'=>$lastname, 'password'=>password_hash($password, PASSWORD_BCRYPT), 'email'=>$email, 'sex'=>$sex, 'birthdate'=>$birthdate, 'verified'=>0);
					                    $this->users->create($data);
					                    //Send to email your account has been created
					                    $this->mail->sendMail('Welcome to Mimo!', 'Your account has been created!', $email);
					                    echo 'success';
					                }
					                else{
					                	echo '{ "Error": "email in use!" }';
		            					http_response_code(401);
					                }
								}
								else{
									echo '{ "Error": "email invalid!" }';
		            				http_response_code(401);
								}

							}
							else{
								echo '{ "Error": "Password too short or too long!" }';
		            			http_response_code(401);
							}
						}
						else{
							echo '{ "Error": "Invalid Username" }';
		            		http_response_code(401);
						}

					}
					else{
						echo '{ "Error": "Invalid Username length" }';
		            	http_response_code(401);
					}
				}
				else{
					echo '{ "Error": "Username already taken!" }';
		            http_response_code(401);
				}
			}
			else{
				echo '{ "Error": "sex null!" }';
	            http_response_code(401);
			}
		}
		else{
			echo '{ "Error": "date null!" }';
            http_response_code(401);
		}

	}

}
