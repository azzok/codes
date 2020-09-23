<?php

extract($_POST);
//var_dump($_POST);

$megContent='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<!--[if gte mso 9]><xml>
<o:OfficeDocumentSettings>
<o:AllowPNG/>
<o:PixelsPerInch>96</o:PixelsPerInch>
</o:OfficeDocumentSettings>
</xml><![endif]-->
<title>Enquiry Mail</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 ">
<meta name="format-detection" content="telephone=no">
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<!--<![endif]-->
<style type="text/css">
body {
	margin: 0 !important;
	padding: 0 !important;
	-webkit-text-size-adjust: 100% !important;
	-ms-text-size-adjust: 100% !important;
	-webkit-font-smoothing: antialiased !important;
}
img {
	border: 0 !important;
	outline: none !important;
}
p {
	Margin: 0px !important;
	Padding: 0px !important;
}
table {
	border-collapse: collapse;
	mso-table-lspace: 0px;
	mso-table-rspace: 0px;
}
td, a, span {
	border-collapse: collapse;
	mso-line-height-rule: exactly;
}
.ExternalClass * {
	line-height: 100%;
}
.em_defaultlink a {
	color: inherit !important;
	text-decoration: none !important;
}
span.MsoHyperlink {
	mso-style-priority: 99;
	color: inherit;
}
span.MsoHyperlinkFollowed {
	mso-style-priority: 99;
	color: inherit;
}
 @media only screen and (min-width:481px) and (max-width:699px) {
.em_main_table {
	width: 100% !important;
}
.em_wrapper {
	width: 100% !important;
}
.em_hide {
	display: none !important;
}
.em_img {
	width: 100% !important;
	height: auto !important;
}
.em_h20 {
	height: 20px !important;
}
.em_padd {
	padding: 20px 10px !important;
}
}
@media screen and (max-width: 480px) {
.em_main_table {
	width: 100% !important;
}
.em_wrapper {
	width: 100% !important;
}
.em_hide {
	display: none !important;
}
.em_img {
	width: 100% !important;
	height: auto !important;
}
.em_h20 {
	height: 20px !important;
}
.em_padd {
	padding: 20px 10px !important;
}
.em_text1 {
	font-size: 16px !important;
	line-height: 24px !important;
}
u + .em_body .em_full_wrap {
	width: 100% !important;
	width: 100vw !important;
}
}
</style>
</head>

<body class="em_body" style="margin:0px; padding:0px;" bgcolor="#efefef">
<table class="em_full_wrap" valign="top" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef" align="center">
  <tbody>
  
  <tr>
    <td valign="top" align="center"><table class="em_main_table" style="width:700px;" width="700" cellspacing="0" cellpadding="0" border="0" align="center">
        <!--Header section-->
        <tbody><tr>
          <td style="padding:15px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody><tr>
                <td style="font-family: Arial, sans-serif; font-size:12px; line-height:15px; color:#0d1121;" valign="top" align="center"><b> Enquiry Mail </b></td>
              </tr>
            </tbody></table></td>
        </tr>

        <tr>
          <td style="padding: 10px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="left"><table width="50%" style="padding:10px;" cellspacing="0" cellpadding="0" border="1" align="center">
              <tbody>
              
            
              <tr>
                <td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">Name</td><td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px" valign="top" align="left">'.$name.'</td>
              </tr>
 
               <tr>
                <td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">Email</td><td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">'.$email.'</td>
              </tr>
              
              <tr>
                <td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px" valign="top" align="left">Phone</td><td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">'.$phone.'</td>
              </tr>
             <tr>
                <td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px" valign="top" align="left">Plan</td><td style="font-family:Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">'.$plan.'</td>
              </tr>
              <tr>
                <td style="font-family:Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">Message</td><td style="font-family: Arial, sans-serif; font-size:14px; line-height:18px; color:#999999;padding:10px;" valign="top" align="left">'.$message.'</td>
              </tr>
              
            </tbody></table>
            </td>
        </tr>



        <!--//Content Text Section--> 
        <!--Footer Section-->
        <tr>
          <td style="padding:38px 30px;" class="em_padd" valign="top" bgcolor="#f6f7f8" align="center"><table width="100%" cellspacing="0" cellpadding="0" border="0" align="center">
              <tbody>
              
            
              
            </tbody></table>
            </td>
        </tr>

      </tbody></table></td>
  </tr>
</tbody></table>
<div class="em_hide" style="white-space: nowrap; display: none; font-size:0px; line-height:0px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
</body></html>';

/////////////Sent Mail Code////////////////////////


// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
$mail = new PHPMailer(); 


$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mail.manimegalaienterprises.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;  

$mail->IsHTML(true);
$mail->Username = 'admin@manimegalaienterprises.com';                 // SMTP username
$mail->Password = 'l?gB}L6nOsS_';

$mail->setFrom('admin@manimegalaienterprises.com', 'Hathway Chennai');
$mail->Subject = "Hathway Enquiry Mail";
$mail->MsgHTML($megContent);
// $mail->addAddress('azzok17@gmail.com');
$mail->addAddress('mmtataphotonplus@gmail.com'); // Name is optional
$mail->AddCC('balaalgammal@gmail.com');

// if($mail->Send()) {
//     echo "Message sent!";
// }else {
//     echo "Mailer Error: " . $mail->ErrorInfo;
// }

if($mail->Send()) //output success or failure messages
    {       
        echo ("<script> alert('Thank you for Mailling')</script>");
		echo ("<script>window.location.href='../index.html'</script>");

    }else{
		die('Could not send mail! Please check your PHP mail configuration.');  
        echo ("<script> alert('Could not send mail! Please check your PHP mail configuration.')</script>");
		echo ("<script>window.location.href='../index.html'</script>");
    }