<?php
$name=$_POST['NAME'];
$usn=$_POST['USN'];
$wip=$_POST['WIP'];
$cn=$_POST['CN'];
$dwdm=$_POST['DWDM'];
$Total_Marks=$wip+$cn+$dwdm;
$Avg_Marks = ($Total_Marks)/3;
if($wip>=40 && $cn>=40 && $dwdm>=40){
if($Avg_Marks >=90){
Print "<html><i>Student $name With USN $usn has scored A Grade</i>";}
else if($Avg_Marks >=80 && $Avg_Marks <90){
Print "<html><i>Student $name With USN $usn has scored B Grade</i>";}
else if($Avg_Marks >=60 && $Avg_Marks <80){
Print "<html><i>Student $name With USN $usn has scored C Grade</i>";}
else if($Avg_Marks >=40 && $Avg_Marks <60){
Print "<html><i>Student $name With USN $usn has scored D Grade</i>";}
}
else{
Print "<html><i>Student $name With USN $usn has scored F Grade</i>";}
Print "</html>";
?>