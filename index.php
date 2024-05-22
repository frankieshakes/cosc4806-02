<?php

require_once('user.php');

$user_list = User::get_all_users();
print_r($user_list);