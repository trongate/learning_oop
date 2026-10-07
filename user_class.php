<?php
class User {

    public $first_name = 'John';
    public $last_name = 'Rambo';
    public $age = 33;
    public $email_address = 'john@rambo.com';

    function greeting($first_name) {
        echo 'Hello '.$first_name;
    }

}