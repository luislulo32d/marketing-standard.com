<?php

$files = array(
	'recaptcha.js' => 'https://www.google.com/recaptcha/api.js?render=6LfaLLwUAAAAAGX1f7yaSL76uu-mLMK9CxdP59d5',
	'gtag.js' => 'https://www.googletagmanager.com/gtag/js?id=UA-115160831-1',
  'font.css' => 'https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700',
  'analytics.js' => 'https://www.google-analytics.com/analytics.js',
  'runtime.js' => 'https://www.gstatic.com/swiffy/v7.1/runtime.js'
);

if(isset($files[$_GET['file']])) {
	if ($files[$_GET['file']] == 'recaptcha.js' || $files[$_GET['file']] == 'gtag.js' || $files[$_GET['file']] == 'font.css' || $files[$_GET['file']] == 'analytics.js' || $files[$_GET['file']] == 'runtime.js'){
		header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + ((60 * 60) * 48))); // 2 days for GA
	} else {
		header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60 * 60)*48)); // Default set to 2 days
	}

	echo file_get_contents($files[$_GET['file']]);
}



?>