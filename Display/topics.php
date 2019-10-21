<?php

//direct to make a new topic
if(isset($_POST['newtopic']))
{
    header('Location: newtopic.php');
    exit;
}

//direct to see all topics
if(isset($_POST['topics']))
{
    header('Location: topicslist.php');
    exit;
}

else {
    // The form has not been posted
    // Show the form
    ?>
    <form id="LandingForm" action="topics.php" method="post">
        <button name = "newtopic">New Topic</button>
        <button name= "topics">Topics</button>
    </form>
    <?php
}
?>