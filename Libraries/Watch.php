<?php


class Watch
{
    //private array to hold the username's and who is watching what
    private $watch = array(array());

    /**
     * Function to display who is watching what posts
     *
     * @param $username - This is the username that is being passed in
     * we want to find what they are watching
     */
    public function whoIsWatchingWhat($username)
    {
        if(in_array($username, $this->watch))
        {
            //find the value in the array
            $key = array_search($username, $this->watch);

            //get that array in the array
            $watchList = $this->watch[$key];

            //check to see if the watchlist is empty
            if(!empty($watchList))
            {
                //print out all the values that the user is watching
                print_r(array_values($watchList));
            }

            //array was actually empty
            else{
                echo "User is not watching any posts.";
            }
        }

        //given user is not in the watch array
        else{
            echo "No user found with that username.";
        }
    }

    /**
     * Function to update watchlist
     *
     * @param $username - This is the username that is being passed in
     * @param $postToWatch - The post that said user wants to watch
     */
    public function updateWatchlist($username, $postToWatch)
    {
        //get the name out of the
        $key = array_search($username, array_column($this->watch, '0'));
        //echo ("The key is: " .$key);

        //go to the location of the key, push the post into the list of what is being watched
        $this->watch = array_push($this->watch[$key], $postToWatch);

    }

    /**
     * Function to add a new user to the watch list
     *
     * @param $username - This is the username for a new person watching on the list
     */
    public function addUserToWatchList($username)
    {
        if(!in_array($username, $this->watch))
        {
            $temp = array();
            //put the user into the watchlist array
            array_push($temp, $username);

            //put the new user array into the watchlist array
            array_push($this->watch, $temp);
        }

        //given user is in the watch array
        else{
            //do nothing because the person is already there
            echo "User is in watch list";
        }
    }
}