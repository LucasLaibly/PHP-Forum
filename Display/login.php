<?php
include('E:\PHP_Forum\Libraries\User.php');

// Lets test if the form has been submitted
if(isset($_POST['SubmitCheck']))
{
    $newUser = new User();

    // The form has been submitted with actual input
    if($_POST['Username'] and $_POST ['Email'])
    {
        //pass username to object
        $newUser->addUser($_POST['Username'], $_POST ['Email']);

        //direct to Topic form builder
        header('Location: topics.php');
        exit;

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
    <form id="NewUserForm" action="login.php" method="post">
        Username: <input type="text" name="Username"><br>
        Email: <input type="email" name="Email"><br>
        Remember me: <input type="checkbox" name="Remember" checked="checked">
        <input type="hidden" name="SubmitCheck" value="sent">
        <input type="Submit" name="NewUserForm_Submit" value="Login">
    </form>
    <?php
}
?>