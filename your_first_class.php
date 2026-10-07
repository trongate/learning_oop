<?php
include('user_class.php');
$user_obj = new User;
echo $user_obj->greeting(); // We are outside the class!