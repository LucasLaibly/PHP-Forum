<?php


class User
{
    private $userArray = array();
    private $dateCreate;

    //construct the array
    public function __construct()
    {
        $this->userArray = array(array());
    }

    /**
     * add a user based on what they input
     *
     * @param $user - The user that is being added
     * @param $email - The associated email to that user
     */
    public function addUser($user, $email)
    {
        //get the date created
        $this->dateCreated();

        //pull the date
        $date = $this->dateCreate;

        //put into unique 1D array
        $tempUserArray = array(0 => $user, 1 => $email, 2 => $date);

        //push into $userArray => 2D array with username and email unique
        array_push($this->userArray, $tempUserArray);
    }

    /**
     * Make the date look nice
     *
     */
    public function dateCreated()
    {
        $date = getdate();
        $day = $date['mday'];
        $month = $date['mon'];
        $year =  $date['year'];

        $totalDate = $day . "/" . $month . "/" . $year;
        $this->dateCreate = $totalDate;
    }

    /**
     * Return all the current users
     *
     */
    public function getAllUsers()
    {
        print_r(array_values($this->userArray));
    }
}