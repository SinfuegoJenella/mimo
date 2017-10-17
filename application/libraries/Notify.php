<?php
class Notify {
        public static function createNotify($text = "", $postid = 0,$type) {
                $mCI =& get_instance();
                $text = explode(" ", $text);
                $notify = array();

                foreach ($text as $word) {
                        if (substr($word, 0, 1) == "@") {
                                $notify[substr($word, 1)] = array("type"=>$type);
                        }
                }

                if (count($text) == 1 && $postid != 0 && $type==2) {
                        $temp = $mCI->notif->notif($postid);
                        $r = $temp[0]["receiver"];
                        $s = $mCI->login->isLoggedIn();
                        if($r!=$s){
                                $data = array('id'=>null,
                                                'type'=>$type,
                                                'receiver'=>$r,
                                                'sender'=>$s,
                                                'post_id'=>$postid,
                                                'notifurl'=>'http://localhost/mimo/notification?pid='.$postid.''
                                                );
                                $mCI->notif->create($data);
                        }
                }
                if (count($text) == 1 && $postid != 0 && $type==3) {
                        $temp = $mCI->notif->cnotif($postid);
                        $r = $temp[0]["receiver"];
                        $s = $mCI->login->isLoggedIn();
                        if($r!=$s){
                                $data = array('id'=>null,
                                                'type'=>$type,
                                                'receiver'=>$r,
                                                'sender'=>$s,
                                                'post_id'=>$postid,
                                                'notifurl'=>'http://localhost/mimo/notification?pid='.$postid.''
                                                );
                                $mCI->notif->create($data);
                        }
                }

                return $notify;
        }
}
?>
