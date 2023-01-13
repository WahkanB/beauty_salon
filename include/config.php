<?php
define('SITE', true);
// Site Root
define('SITE_ROOT', 'C:\\XAMPP\\htdocs\\beauty_salon\\' );

$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_database = 'salon_db';
$conn = mysqli_connect($db_server,$db_user,$db_pass,$db_database) or die('connection failed');



if (isset($_POST['submit'])) {

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = $_POST['number'];
    $date = $_POST['date'];
    $comment = $_POST['comment'];

    $insert = mysqli_query($conn, "INSERT INTO `appointments`( `name`, `email`, `number`, `date`, `comment`) VALUES ('$name','$email','$number','$date','$comment')") or die('query failed');

    if ($insert) {
        $message[] = 'Изпратено!';
    } else {
        $message[] = 'Грешка при изпращане!';
    }
}

?>