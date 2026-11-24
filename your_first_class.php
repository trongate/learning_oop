<?php
include('user_class.php');
include('member_class.php');

// We are OUTSIDE the class.
$member_obj = new Member;
$member_obj->say_hello();