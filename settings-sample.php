<?php 
$servername = "mysql.YOURSEERVER.com";
$username = "YOURUSERNAME";
$password = "YOURPASSWORD";
$dbname = "YOURDBNAME";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

 
//TWILIO SETTINGS

// Your Account SID and Auth Token from twilio.com/console
$twiliosid = 'YOURTWILIOSID';
$twiliotoken = 'YOURTWILIOTOKEN';
