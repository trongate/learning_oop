<?php
class User {

    public $first_name = 'John';
    public $last_name = 'Rambo';
    public $age = 33;
    public $email_address = 'john@rambo.com';

    public function greeting() {
        echo 'Hello '.$this->first_name.'. ';
        $today = $this->get_today();
        echo 'Today is '.$today;
    }

    private function get_today() {
        $today = date('l');
        return $today;
    }

}