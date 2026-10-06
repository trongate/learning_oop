<?php
$user['first_name'] = 'John'; // String
$user['last_name'] = 'Rambo'; // String
$user['age'] = 33; // Integer

// Creating an object.
$user_obj = (object) $user;
echo $user_obj->last_name;