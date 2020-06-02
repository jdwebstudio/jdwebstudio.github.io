<?php
$to = "webstudiojd@gmail.com";
$subject = "Response from website";
$message = $_REQUEST[‘comments’];
$headers = "From:www.000webhost.com";


if (mail($to, $subject, $message, $headers)){
  echo "Mail sent successfully";
}
  else{
echo "Cann not send Mail"
  }
