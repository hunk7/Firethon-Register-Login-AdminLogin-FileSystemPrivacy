<?php
// Check for empty fields
if(empty($_POST['fname'])  		||
   empty($_POST['lname'])  		||
   empty($_POST['city'])  		||
   empty($_POST['sign_up_as'])  ||
   empty($_POST['email']) 		||
   empty($_POST['phone'])  	    ||
   empty($_POST['comp_coll'])  	||
   empty($_POST['gender'])  	||
   empty($_POST['subject'])	    ||
   empty($_POST['get_to_know']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo 'No arguments Provided!';
	header("Location: ./index.html?Form=Incomplete");
   }
	
$fname = ($_POST['fname']);
$lname = ($_POST['lname']);
$fname1 = ($_POST['fname1']);
$lname1 = ($_POST['lname1']);
$fname2 = ($_POST['fname2']);
$lname2 = ($_POST['lname2']);
$city = ($_POST['city']);
$sign_up_as = ($_POST['sign_up_as']);
$email_address = ($_POST['email']);
$phone = ($_POST['phone']);
$comp_coll = ($_POST['comp_coll']);
$gender = ($_POST['gender']);
$linkedin = ($_POST['linkedin']);
$github = ($_POST['github']);
$subject = ($_POST['subject']);
$get_to_know = ($_POST['get_to_know']);

if(isset($_POST['gender'])) {
    if($_POST['gender'] == 'male') {
        $gender = "Male";
    } elseif($_POST['gender'] == 'female') {
        $gender = "Female";
    }
} else {
    echo "Invalid";
}

if(isset($_POST['sign_up_as'])) {
    if($_POST['sign_up_as'] == '1') {
        $sign_up_as = "I am a Student";
    } elseif($_POST['sign_up_as'] == '2') {
        $sign_up_as = "I am a Working Professional";
    }
} else {
    echo "Invalid";
}
	
// Create the email and send the message chetna@fireblazeaischoo.in
$to = 'shubham.fireblaze@gmail.com'; // shubham.fireblaze@gmail.com Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Participation of $fname $lname | $subject";
$email_body = "New Participation has arrived form Firethon Registeration form.\n\n"."Here are the details:\n\nName: $fname $lname \n\n Team Members - \n\nName: $fname1 $lname1 \n\nName: $fname2 $lname2 \n\nEmail: $email_address \n\nPhone Number: $phone \n\n city: $city \n\n Signed Up As :$sign_up_as \n\n Company / College: $comp_coll \n\n Gender: $gender \n\n linkedin: $linkedin \n\n github: $github \n\n Will Attend Firethon: $subject  \n\n I Get To Know About The Firethon from : $get_to_know";
$headers = "From: $email_address \n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com. 
$headers .= "Reply-To: $email_address";	
// for checking if $variable is working or not!!!
mail($to,$email_subject,$email_body,$headers);
header("Location: ./index.html?Form=Submitted:Thankyou");
?>