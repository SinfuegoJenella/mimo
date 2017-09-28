<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login {

      
        public function isLoggedIn() {
                
                $mCI =& get_instance();

                $mCI->load->helper('date');
                if (isset($_COOKIE['SNID'])) {
                        $selector = 'user_id';
                        $condition = array('token'=>sha1($_COOKIE['SNID']));
                        if ($mCI->login_tokens->read($condition,$selector)) {

                                $userid = $mCI->login_tokens->read($condition,$selector) [0]['user_id'];

                                if (isset($_COOKIE['SNID_'])) {
                                        return $userid;
                                } 
                                else {
                                        $format = "%Y-%m-%d %h:%i %a";
                                        echo @mdate($format);
                                        $cstrong = True;
                                        $token = bin2hex(openssl_random_pseudo_bytes(64, $cstrong));
                                        $data = array('id'=>null,'token'=>sha1($token), 'user_id'=>$userid, 'login_time'=>NOW());
                                        $mCI->login_tokens->create($data);
                                        $data = array('token'=>sha1($_COOKIE['SNID']));
                                        $mCI->login_tokens->del($data);     

                                        setcookie("SNID", $token, time() + 60 * 60 * 24 * 7, '/', NULL, NULL, TRUE);
                                        setcookie("SNID_", '1', time() + 60 * 60 * 24 * 3, '/', NULL, NULL, TRUE);

                                        return $userid;
                                }
                        }
                }

                return false;
        }
}

?>
