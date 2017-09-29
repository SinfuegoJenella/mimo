<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics {
	public function getTopics($text) {

                $text = explode(" ", $text);

                $topics = "";

                foreach ($text as $word) {
                        if (substr($word, 0, 1) == "#") {
                                $topics .= substr($word, 1).",";
                        }
                }

                return $topics;
        }
    }