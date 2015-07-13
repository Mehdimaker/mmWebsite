<?php
    //Récupération des données
    $name = Trim(stripslashes($_POST['name'])); 
    $email = Trim(stripslashes($_POST['email'])); 
    $sujet = Trim(stripslashes($_POST['sujet']));
    $message = Trim(stripslashes($_POST['message'])); 
    // prepare email body text
    $EmailFrom = "Mehdi.maizate.free.fr";
    $EmailTo = "mehdi.maizate@gmail.com";
    $Subject = "Nouveau message !";
    $Body = "";
    $Body .= "Name: ";
    $Body .= $name;
    $Body .= "\n";
    $Body .= "Email: ";
    $Body .= $email;
    $Body .= "\n";
    $Body .= "Sujet: ";
    $Body .= $sujet;
    $Body .= "\n";
    $Body .= "Message: ";
    $Body .= $message;
    $Body .= "\n";
    // send email 
    $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
    // afficher réponse
    $reponse = 'Le message à bien été envoyé';
    echo $reponse;
?>
