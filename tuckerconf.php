<?php

// Main Configuration file for TuckerTalk

define("server_name", "http://chat.example.com"); // Website you will be using (ie. chat.example.com). Does not need to use HTTPS, but it should.

define("pusher_app_id", ""); // ID of your pusher app

define("pusher_key", ""); // Key of your pusher app

define("pusher_secret", ""); // Secret of your pusher app

define("pusher_cluster", ""); // Cluster/Region of your pusher app

// DO NOT EDIT UNDER THIS LINE, UNLESS YOU KNOW WHAT YOU ARE DOING...

$ver = phpversion();
if($ver =< 7){
  die("Please use PHP 7 or higher to run TuckerTalk.");
}
