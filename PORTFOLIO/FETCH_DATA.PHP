<?php
$host="localhost";
$password='';
$username="root";
$database="portfolio";


$conn=new PDO("mysql:host=$host;dbname=$database",$username,$password);

$check=$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
if(!$check){
    echo "UNSUCCESSFUL CONNECTION !";
    ECHO "<BR/>";
}

if(ISSET($_POST['SUBMIT'])){

    $u_name=$_POST['UserName'];
    $u_email=$_POST['UserEmail'];
    $u_massage=$_POST['UserMassage'];
    $u_subject=$_POST['UserSubject'];

$getdata=$conn->prepare("INSERT INTO contact_us (USER_NAME,USER_EMAIL,USER_SUBJECT,USER_MASSAGE) VALUES ('$u_name','$u_email','$u_subject','$u_massage')");
$check=$getdata->execute();
if(!$check){

    echo "SOMETHING WENT WRONG!";
    echo "</br>";
}else{
    echo "THANK YOU FOR YOUR VALUABLE FEEDBACK";
    ECHO "<BR/>";
}

}

?>