<?php
if ($_SESSION["email"] == "" || empty($_POST['button'])) {
	header('Location:acco-travel-form.php');
}

include 'connection.php';

$email=$_SESSION['email'];
$arrDate=$_POST['arrDate'];
$arrTime=$_POST['arrTime'];
$arrSt=$_POST['arrSt'];
$trainName=$_POST['trainName'];
$trainNo=$_POST['trainNo'];
$accNo=$_POST['accNo'];
$iscab=$_POST['iscab'];
$cabWhere=$_POST['cabWhere'];
$cabWhen=$_POST['cabWhen'];
$cabDate=$_POST['cabDate'];
$depDate=$_POST['depDate'];
$depTime=$_POST['depTime'];
$depSt=$_POST['depSt'];
$dtrainName=$_POST['dtrainName'];
$dtrainNo=$_POST['dtrainNo'];
$iscab2=$_POST['iscab2'];
$acabPref=$_POST['acabPref'];
$dcabPref=$_POST['dcabPref'];

$accNo2=$_POST['accNo2'];
$accName1=$_POST['accName1'];
$accRel1=$_POST['accRel1'];
$accAge1=$_POST['accAge1'];
$accName2=$_POST['accName2'];
$accRel2=$_POST['accRel2'];
$accAge2=$_POST['accAge2'];
$accName3=$_POST['accName3'];
$accRel3=$_POST['accRel3'];
$accAge3=$_POST['accAge3'];
$prefName=$_POST['prefName'];
$prefYear=$_POST['prefYear'];
$prefDep=$_POST['prefDep'];
$prefHall=$_POST['prefHall'];

$query1="INSERT INTO travel set email='$email', arrivaldate='$arrDate', arrivalstation='$arrSt', trainname='$trainName', trainno='$trainNo', accompanyno='$accNo', 
cabreq='$iscab', cabfrom='$cabWhere', cabat='$cabWhen',arrivaltime='$arrTime' , cabdate='$cabDate' , arrivalcabpref='$acabPref' , departdate='$depDate' ,
 departtime='$depTime' , departtrain='$dtrainName' , departtrainno='$dtrainNo' , departstation='$depSt' , depcabreq='$iscab2' , depcabpref='$dcabPref' ";

$result1=$connection->query($query1);

$query2="INSERT INTO accommodation SET email='$email', accompanyno='$accNo2', accname1='$accName1', accrel1='$accRel1', accage1='$accAge1', accname2='$accName2', 
accrel2='$accRel2', accage2='$accAge2', accname3='$accName3', accrel3='$accRel3', accage3='$accAge3', prefname='$prefName', prefyear='$prefYear', prefdep='$prefDep', 
prefhall='$prefHall' ";

$result2=$connection->query($query2);

?>