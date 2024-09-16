<?php // Check if form was submitted:

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

	if(isset($_POST['recaptcha_response'])){
		$recaptcha_response = $_POST['recaptcha_response'];
	}else if(isset($_POST['recaptcha_response_tel'])){
		$recaptcha_response = $_POST['recaptcha_response_tel'];
	}else{
		header("Location: index.html");
	}

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LfaLLwUAAAAAKncRF4MuoCXM4NRS6ZXUAuIBU8T';

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    // Take action based on the score returned:
    if ($recaptcha->score >= 0.3) {
        // Verified - send email
        echo "Aceptado";
        include_once("mail.php");
    } else {
        // Not verified - show form error
        echo "Rechazado";
        header("Location: ../forms-non-active.html");
    }

} ?>