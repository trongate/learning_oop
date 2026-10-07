<?php
class User {

    public string $first_name = 'John';
    public string $last_name = 'Rambo';
    public int $age = 33;
    public string $email_address = 'john@rambo.com';

    /**
     * Display a greeting message containing the user's first name and the current day,
     * provided the user meets the age restriction requirement.
     *
     * @return void
     */
    public function greeting(): void {
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

    /**
     * Retrieve the current day of the week.
     *
     * @return string Full textual representation of the current day (e.g., Monday through Sunday).
     */
    private function get_today(): string {
        $today = date('l');
        return $today;
    }

    /**
     * Determine whether a person is old enough based on their age.
     *
     * @param int $age The age of the user in years.
     * @return bool True if the age is greater than 17, false otherwise.
     */
    private function old_enough(int $age): bool {
        if ($age > 17) {
            return true;
        } else {
            return false;
        }
    }

}