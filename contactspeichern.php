<?php
//Variable
$vname = "";
$nname = "";
$email = "";
$msg = "";

//If variable is declared and isn't null, set variable to Value from Element where name='wanted element';
if(isset($_POST['Vname'])) $vname = $_POST['Vname'];
if(isset($_POST['Nname'])) $nname = $_POST['Nname'];
if(isset($_POST['Email'])) $email = $_POST['Email'];
if(isset($_POST['Msg'])) $msg = $_POST['Msg'];

if($vname and $nname and $email and $msg) {
   //SQL Syntax
    $sql = "
        INSERT INTO contact
        ( vorname, nachname, email, message)
        VALUES
        (
            '$vname',
            '$nname',
            '$email',
            '$msg'
        )
    ";
    //Send Query to DB
    $dbConn->query($sql);
}

include "contact.php";
?>