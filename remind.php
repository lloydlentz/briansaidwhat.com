<?php 
///  TWILIO PART
// Required if your environment does not handle autoloading
require __DIR__ . '/vendor/autoload.php';
require 'settings.php';

// Use the REST API Client to make requests to the Twilio REST API
use Twilio\Rest\Client;

//Dont run this page accidentally
 exit();

	$sql = "SELECT * FROM smoresfolks WHERE status = 'SUBSCRIBED'"; // and number='6513212347'";
	echo $sql."\n<br/>";

	$result = $db->query($sql);

	$twilioclient = new Client($twiliosid, $twiliotoken);

	while ($row = $result->fetch_assoc()){
		echo "send to ".$row['number']." - ".$row['name']."<br>\n";
		// Use the client to do fun stuff like send text messages!
		try{
			$twilioclient->messages->create(
				// the number you'd like to send the message to
				'+1' . $row['number'],
				array(
					// A Twilio phone number you purchased at twilio.com/console
					'from' => '+13213334488 ',
					// 'from' => '+16513212347',
					// the body of the text message you'd like to send
				    // 'body' => "The weather had been predicting rain, so no smores night planned for tonight.   \n\n -Sam and Lloyd",
					 'body' => "Looks like we will get a break in the rain for Friday.  Let's call it the last smores night of the year, and also our 1 year anniversary! 🤩   \nOct 4. - https://isitsmoresnight.com \nStandard Smores Night rules apply. Low key as always.  Misc smoked meats on the menu plus whatever you or others bring.  But dont stress about it.  \n6PM fires lit.  \n692 Summit Ave, Saint Paul, around back.  \nCome for 5 min or 5 hours.  Super low key... as always.  See you soon.\n\n -Sam & Lloyd",
					// 'body' => "ALSO!   We've moved to Minneapolis.  Cats, and smores sticks and all.  Join us at 4101 Wentworth Ave.   Send a text to 651-321-2347 if you have questions.  ",
					// 'mediaUrl' => "https://c1.staticflickr.com/3/2899/14341091933_1e92e62d12_b.jpg",
					// 'mediaUrl' => 'https://static.boredpanda.com/blog/wp-content/uploads/2014/02/funny-wet-cats-4.jpg',
					'mediaUrl' => 'https://lloydl.com/img/LLB1yr.gif',
					// 'mediaUrl' => "http://isitsmoresnight.com/favicon.png",
					//'mediaUrl' => "http://isitsmoresnight.com/cat.jpg",
					//'mediaUrl' => "https://isitsmoresnight.com/img/fireworks.jpg",
					// 'mediaUrl' => "https://isitsmoresnight.com/img/img.gif",
				) 
			);
		}catch(Exception $e){
			echo $e->getCode() . ' : ' . $e->getMessage()."<br>";
		}


	}
	// Free result set
	$result->close();
	$db->next_result();


			
