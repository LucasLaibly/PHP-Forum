<?php
include('E:\PHP_Forum\Libraries\Topic.php');

// Lets test if the form has been submitted
if(isset($_POST['SubmitCheck']))
{
    $newTopic = new Topic();

    // We want the username and the title as well as "post"
    if( $_POST ['Username'] and $_POST['Title'] and $_POST['Post'])
    {
        //separate variables for each one, kind of anal about this
        $username = $_POST ['Username'];
        $title = $_POST['Title'];
        $post = $_POST['Post'];

        //set the title?
        $newTopic->setTitle($title);

        //add the topic to the topic array(array())
        $newTopic->addTopic($username, $title, $post);

        //you made it here, phew
        echo "New topic submitted.";

    }

    //user has not put in valid input (i.e. nothing)
    else {
        echo "You did not enter any information, please try again.";
    }
}
else {
    // The form has not been posted
    // Show the form
    ?>
    <form id="NewTopicForm" action="newtopic.php" method="post">
        Title:<br>
        <input type="text" name="Title"><br>
        Username:<br>
        <input type="text" name="Username"><br>
        <input type="hidden" name="SubmitCheck" value="sent">
        Post:<br>
        <textarea cols="50" rows="4" name="Post"></textarea><br>
        <input type="Submit" name="NewTopicForm_Submit" value="Submit">
    </form>
    <?php
}
?>
