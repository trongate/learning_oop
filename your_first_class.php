<?php
include('user_class.php');
$user = new User;
echo $user->first_name;
echo '<br>';
echo $user->email_address;
echo '<br>';
$user->greeting($user->first_name);