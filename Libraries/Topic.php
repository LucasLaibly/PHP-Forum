<?php


class Topic
{
    private $topicArray = array();
    private $title;
    private $dateCreate;
    private $dateUpdate;

     //construct the array
     public function __construct()
     {
         $this->topicArray = array();
     }

    /**
     * Add an array to the topic array list
     * @param array $array - the array that needs to be added
     */
     public function addArray(array $array)
     {
         //get date the topic was created on
         //$retDate = $this->dateCreated();

         //push the array into the topic array
         array_push($this->topicArray, $array);
     }

    /**
     * Add a topic to the
     *
     * @param $user - The user that is being added
     * @param $email - The associated email to that user
     */
     public function addTopic($username, $title, $post)
     {
         //call the create function for the date
         $this->dateCreated();
         $dateC = $this->dateCreate;

         //set a base line for the updated date
         $this->dateCreated();
         $dateU = $this->dateUpdate;

         //compile the array
         $temp = array($username, $title, $post, $dateC, $dateU);

         //push the array into the super array -- not sure about this
         $this->addArray($temp);
     }

     //return all the current topics
    /**
     * Return all the current topics
     */
     public function getAllTopics()
     {
         //get the topics array
         $tempArray = $this->topicArray;

         //send it away
         return $tempArray;
     }

    /**
     * Make a date
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
     * Set the title
     * @param $title set the title of the topic
     */
     public function setTitle($title)
     {
         $this->title = $title;
     }

    /**
     * Get the title of the topic
     */
     public function getTitle()
     {
         return $this->title;
     }
}