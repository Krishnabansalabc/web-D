<?php
$subject = "CONTACT US";
$name=$_REQUEST['name'];
$mobn=$_REQUEST['mobn'];
$branch=$_REQUEST['branch'];
$year=$_REQUEST['year'];
$subject=$_REQUEST['subject'];







$message = "<BR/>"."Name :".$name."<BR/>"."Phone no. :".$phone."<BR/>"."Branch: ".$branch."<BR/>"."Year: ".$year."<BR/>"."Subject :".$subject;
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail("2asmeglau@gmail.com",$subject,$message,$headers);
echo "<title>Thank you</title>";
header("Location: thanks3.html");
?>
