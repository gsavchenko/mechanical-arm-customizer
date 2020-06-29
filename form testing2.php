<title>PHP Form</title>
<?php
$to = "brian@ideasfil.com";
$subject = "Automated Quote Request";

	


$message = "<p><b>Name: </b>" . $_POST['name'];
$message .= "<p><b>Email: </b>" . $_POST['email'];
$message .= "<p><b>Address: </b>" . $_POST['address'];
$message .= "<p><b>Affiliated Organization: </b>" . $_POST['associationname'];
$message .= "<p><b>Phone: </b>" . (int)$_POST['phonenumber'];
$message .= "<p><b>Client Name: </b>" . $_POST['clientname'];
$message .= "<p><b>Comments: </b>" . $_POST['message'];
$message .= "
<html>
<head>
<title>Quote Request</title>

</head>
<body>
<p> </p>
<table style='border-collapse:collapse;'>
<col width='75px' style='border-width: thin; border-right-style: solid;'>
<col width='200px' style='border-width: thin;'>
<col width='50px' style='border-width: thin; border-left-style: solid;'>
<tr>
<th style='border-width: thin; border-bottom-style: solid;'>Part #</th>
<th style='border-width: thin; border-bottom-style: solid;'>Item</th>
<th style='border-width: thin; border-bottom-style: solid;'>Qty.</th>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items1num'] . "</td>
<td>" . $_POST['items1'] . "</td>
<td>" . $_POST['items1qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items2num'] . "</td>
<td>" . $_POST['items2'] . "</td>
<td>" . $_POST['items2qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items3num'] . "</td>
<td>" . $_POST['items3'] . "</td>
<td>" . $_POST['items3qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items4num'] . "</td>
<td>" . $_POST['items4'] . "</td>
<td>" . $_POST['items4qty'] . "</td>
</tr>
<tr style='border-top-style:solid; border-width:thin;'>
<td>" . $_POST['items5num'] . "</td>
<td>" . $_POST['items5'] . "</td>
<td>" . $_POST['items5qty'] . "</td>
</tr>
</table>
</body>
</html>
";


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: ' . $_POST['email'] . "\r\n";
$headers .= 'Cc: ' . "\r\n";

mail($to,$subject,$message,$headers,$address);
?>
