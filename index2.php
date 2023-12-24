<?php
$city=$_REQUEST['city'];
$vacationrentalstype=$_REQUEST['vacation rentals type'];
$view=$_REQUEST['view'];
$arrival=$_REQUEST['arrival'];
$departure=$_REQUEST['departure'];
$firstname=$_REQUEST['first name'];
$lastname=$_REQUEST['second name'];
$email=$_REQUEST['email'];
$password=$_REQUEST['paw'];
$phonenumber=$_REQUEST['phone_number'];

if(isset($_post['btntest1']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="vacationstay1";

    $conn =mysqli_connect($host,$user,$password,$db);
    $insert="insert into vacationstay1 values('$city','$vacationrentalstype','$view','$arrival','$departure')";

    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1> your registration is done!</h1>");
    }
        else{
            echo("<h1> your registration is failed!</h1>");
        }
    }
    if(isset($_post['btntest2']))
{
    $host="localhost";
    $user="root";
    $password="";
    $db="vacationstay1";

    $conn =mysqli_connect($host,$user,$password,$db);
    $insert="insert into vacationstay1 values('$firstname','$lastname','$email','$password','$phonenumber')";

    mysqli_query($conn,$insert);

    if($conn){
        echo("<h1> your registration is done!</h1>");
    }
        else{
            echo("<h1> your registration is failed!</h1>");
        }
    }
?>