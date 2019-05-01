<?php
$addresses = [
	'https://www.tatsumi-crew.net/2019/05/facebook-videos-downloader.html',
	'https://www.tatsumi-crew.net/2019/05/jenis-jenis-php-framework-yang-paling.html',
	'https://www.tatsumi-crew.net/2019/04/apa-itu-bitninja-dan-mengapa_29.html',
	'https://www.tatsumi-crew.net/2019/04/apa-itu-artificial-intelligence-ai.html',
	'https://www.tatsumi-crew.net/2019/04/instagram-photos-downloader-bash.html',
	'https://www.tatsumi-crew.net/2019/04/delete-friend-facebook-no-aktive.html',
	'https://www.tatsumi-crew.net/2019/04/deface-dengan-jquery-file-upload-jfu.html',
	'https://www.tatsumi-crew.net/2019/04/exploit-halfi-to-rce-via-procselffd8.html'
];
$size = count($addresses);
$randomIndex = rand(0, $size - 1);
$randomUrl = $addresses[$randomIndex];
header('Refresh: 8; URL=' . $randomUrl, true, 303);
?>