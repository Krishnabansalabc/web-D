<?php
$subject = "UPCOMING WORKSHOP 1";
$fname=$_REQUEST['fname'];
$lname=$_REQUEST['lname'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$univrolno=$_REQUEST['univrolno'];
$branch=$_REQUEST['branch'];
$year=$_REQUEST['year'];
$asmemember=$_REQUEST['asmemember'];
$transacid=$_REQUEST['transacid'];

$message = "<BR/>"."Name :".$fname.$lname."<BR/>"."Email ID  :".$email."<BR/>"."Phone no. :".$phone."<BR/>"."University no. :".$univrolno."<BR/>"."Branch: ".$branch."<BR/>"."Year: ".$year."<BR/>"."ASME member :".$asmemember."<BR/>"."Transcation ID : ".$transacid; 
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

mail("2asmeglau@gmail.com",$subject,$message,$headers);
echo "<title>Thank you</title>";
header("Location: thanks2.html");
?>
