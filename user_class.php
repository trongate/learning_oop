<?php
class User {

    public $first_name = 'John';
    public $last_name = 'Rambo';
    public $age = 33;
    public $email_address = 'john@rambo.com';

    public function greeting() :void {
        // Are you old enough to be here?
        $allowed = $this->old_enough($this->age);

        if ($allowed === false) {
            echo 'Not allowed';
            die();
        }

        echo 'Hello '.$this->first_name.'. ';
        $today = $this->get_today();
        echo 'Today is '.$today;
    }

    private function get_today() :string {
        $today = date('l');
        return $today;
    }

    private function old_enough($age) :bool {
        if ($age > 17) {
            return true;
        } else {
            return false;
        }
    }

}