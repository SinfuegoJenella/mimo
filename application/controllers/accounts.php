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
			//if button sign in click
			if (isset($_POST['signin'])) {
			$username = $_POST['username'];
		        $password = $_POST['password'];
		        
		        $selector = 'username';
		        $condition = array('username'=>$username);
			//check if username exists
		        if($this->users->read($condition,$selector)){
		        	$selector = 'password';
		        	$query = $this->users->read($condition,$selector);
				//check if password is correct
		        	if(password_verify($password,$query[0]['password'])){
		        		
		        		echo 'Logged in!';
		        		
	                    $cstrong = True;
	                    $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
	                    $selector = 'id';
	                    $user_id = $this->users->read($condition,$selector)[0]['id'];
	                    $data = array('id'=>null,'token'=>sha1($token),'user_id'=>$user_id);
	                    $this->login_tokens->create($data);
	                    
	                    setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
	                    setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);
	                    redirect ('http://localhost/mimo/');
		        	}
				//if not alert invalid password
		        	else{
		        		echo "<script type='text/javascript'>alert('invalid pass');</script>";
		        	}
		        }
			//if not alert invalid user
		        else{
		        	echo "<script type='text/javascript'>alert('invalid user');</script>";
		        }
			}
			//if button signup is clicked
			else if(isset($_POST['signup'])){
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$username = $_POST['username'];
		        $password = $_POST['password'];
		        $email = $_POST['email'];
		        $birthdate = $_POST['bday'];
		        $sex = $_POST['sex'];
		        $selector = 'username';
		        $condition = array('username'=>$username);
			//check if username already taken
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
		                                $this->mail->sendMail('Welcome to our Mimo!', 'Your account has been created!', $email);
		                                redirect ('http://localhost/mimo/');
		                            } 
		                            else {
		                                echo "<script type='text/javascript'>alert('email in use');</script>";
		                            }
		                        } 
		                        else {
		                                echo "<script type='text/javascript'>alert('invalid email');</script>";
		                            }
		                    } 
		                    else {
		                            echo "<script type='text/javascript'>alert('invalid password, must be 6>32');</script>";
		                        }
		                } 
		            	else {
		                    echo "<script type='text/javascript'>alert('invalid username');</script>";
		                }
		            } 
		            else {
		                echo "<script type='text/javascript'>alert('invalid username');</script>";
		            }

		        } 
		        else {
		                echo "<script type='text/javascript'>alert('username already taken');</script>";
		        }

			}
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
	
	

}
