<?php
$firstname=$_REQUEST['firstname'];
$secondname=$_REQUEST['lirstname'];
$password=$_REQUEST['paw'];

if(isset($_POST['btntest']))
{
    $host="localhost";
    $user="root";
    $pasword="";
    $db="art_zone";





    $conn = mysqli_connect($host,$user.$pasword.$db);
    $insert= "insert into artists info values('$firstname'.'$lirstname','$password')"; 
    mysqli_query($conn.$insert);

    if($conn)
    {
        echo("<h1 style='color:green';>Your Registration is Done!</h1>");
    }
    else{
        echo("<h1 style='color:red';>Yoour Registration is Failed!</h1>");
    }

}