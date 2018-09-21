<?php

require_once ("Conectare.php");

$actiune=$_GET['actiune'];

if(isset($_GET['timestamp'])){
    $time=$_GET['timestamp'];
}else{
    $time=0;
}
if(isset($_GET['numeprenume'])){
    $numeprenume=$_GET['numeprenume'];
}else{
    $numeprenume="";
}
if(isset($_GET['email'])){
    $email=$_GET['email'];
}else{
    $email="";
}
if(isset($_GET['tel'])){
    $tel=$_GET['tel'];
}else{
    $tel="";
}
if(isset($_GET['studii'])){
    $studii=$_GET['studii'];
}else{
    $studii="";
}
if(isset($_GET['reclama'])){
    $reclama=$_GET['reclama'];
}else{
    $reclama="";
}
if(isset($_GET['nivEng'])){
    $nivEng=$_GET['nivEng'];
}else{
    $nivEng="";
}
if(isset($_GET['prelDate'])){
    $prelDate=$_GET['prelDate'];
}else{
    $prelDate="";
}

if($actiune == 'inregistrare'){
    $queryAdaugareRand = "INSERT INTO [dbo].[Cursanti](timestamp,numeprenume,email,tel,studii,reclama,nivEng,prelDate)
                                 VALUES('$time','$numeprenume','$email',$tel,'$studii','$reclama','$nivEng','$prelDate')";
    echo $queryAdaugareRand;
    sqlsrv_query($conn, $queryAdaugareRand);
}

header("location:http://localhost/IT-Labs-project/Inscriere/php/Formular.php");

?>