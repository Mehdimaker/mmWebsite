<?php

$data = json_decode(file_get_contents('php://input'), true);

$EmailFrom = "New contact from: mehdimaker.com !";
$EmailTo = "contact@mehdimaker.com";
$Subject = "Nouveau message !";

$Name = Trim(stripslashes($data[name])); 
$Number = Trim(stripslashes($data[number])); 
$Email = Trim(stripslashes($data[mail])); 
$Message = Trim(stripslashes($data[message])); 
 
// validation
$validationOK=true;
if (!$validationOK) {
  echo "FALSE";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Number: ";
$Body .= $Number;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = @mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>"); 

if ($success){
  echo "TRUE";
}
else{
 echo "FALSE";
}



/*
// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
*/
?>