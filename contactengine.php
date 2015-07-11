<?php

$EmailFrom = "New contact from: mehdimaker.com !";
$EmailTo = "contact@mehdimaker.com";
$Subject = "Nouveau message !";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['mail'])); 
$Message = Trim(stripslashes($_POST['message'])); 
print_r($_POST['name']);

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email 
 if(mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>")) {
        echo 'yes';
    }else{

 echo 'no';
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