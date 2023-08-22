<?php

// Define some constants
define( "RECIPIENT_NAME", "Valorwide Ltd" );
define( "RECIPIENT_EMAIL", "valorwide@gmail.com" );


// Read the form values
$success = false;
$senderEmail = isset( $_POST['email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";

// If all values exist, send the email
if ( $senderEmail ) {
    $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
    $headers = "From: " . "Valorwide Ltd". "";
    $msgBody = " Email: ". $senderEmail . "";
    $success = mail( $recipient, $headers, $msgBody );

  //Set Location After Successsfull Submission
  header('Location: index-2.html?message=Successfull');
}

else{
	//Set Location After Unsuccesssfull Submission
  	header('Location: index-2.html?message=Failed');	
}

?>