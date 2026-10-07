<?php
class User {

    public string $first_name = 'John';
    public string $last_name = 'Rambo';
    public int $age = 33;
    public string $email_address = 'john@rambo.com';

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

    private function old_enough(int $age) :bool {
        if ($age > 17) {
            return true;
        } else {
            return false;
        }
    }

}