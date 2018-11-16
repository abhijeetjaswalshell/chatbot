<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);


// set local timezone
date_default_timezone_set('America/New_York');

// General
$projectName="Abhijeet";
$projectEmail="Abhijeet.jaswal@icloud.com";
$projectPhoneNumber="9886783763";


// Twilio API credentials
$accountSid = "AC52f1ebb1c1e08d557a93ae8f8f8fb533";
$authToken = "bd7cefce006f2b1d784eae801a99a6c9"; //
$twilioPhoneNumber = "+441749200193";
$siteURL="https://demo.twilio.com/welcome/sms/reply/";


// Slack Webhook integration
$slackWebHookURL="https://hooks.slack.com/services/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";
$slackRoom = "	#general";
$slackBotName = "Stanley"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "us-cdbr-iron-east-01.cleardb.net";
$dbName = "heroku_afcdf5eb95ce901";
$dbUserName = "b4f4a6d965530c";
$dbPassword = "1ec32a5a";
$dbTable = "demo";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n 
$automatedResponseTeamSleeping ="n"; // options: y | n 
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>