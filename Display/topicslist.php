<?php
include('E:\PHP_Forum\Libraries\Topic.php');

//create new Topic object
$topicObj = new Topic();

//create new Topic array
$topicArray = $topicObj->getAllTopics();

?>

<?php foreach($topicArray as $topic)
//pull each of the topics from the array, format in a list
{?>
<h2><?= $topic[0]?></h2>
    <ol>
        <li><? echo $topic[1]." " .$topic[3]?></li>
    </ol>
<?php
}