<?php
//prevent direct access (sort of)
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header("Location: http://www.pinebluffretreat.com");
  exit;
};

// setup email params
$to = "barry-pbhandler@nesbit.net";
$subject = "Pine Bluff " . $_POST['formName'] . " - " . $_POST['last'];
$message = "
<html>
<head>
<title>Contact Us</title>
</head>
<body>
<table>";
foreach ($_POST as $key => $value) {
    $message .= "<tr>";
    $message .= "<td>";
    $message .= $key;
    $message .= "</td>";
    $message .= "<td>";
    $message .= $value;
    $message .= "</td>";
    $message .= "</tr>";
};
$message .= "
</table>
</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <barry-pb@nesbit.net>' . "\r\n";

// send email
mail($to,$subject,$message,$headers);
http_response_code(200);
echo "Thank You! Your message has been sent.";

// debug output
/*
echo "Subject: ".$subject."<br>";
echo "To: ".$to."<br>";
echo "Message: ".$message."<br>";
*/
?>
<script>
alert("hit form");
</script>