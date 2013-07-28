<?php

// ** tropo info ***
// acct = diletaunt
// pw = fr33d0m!
// app name = qj-web-2
// voice URL = http://www.quickjobbr.com/sms/send-msg.php
// text URL = http://www.quickjobbr.com/sms/send-msg.php
// 
$tropo_TEXT_TOK = "238554fd162c9244bfdaaf1f8f3a5f307d3941d9523a27312576f87f88367d525314e15b667dd47145ce0f4a";

$tropo_api_url = "http://api.tropo.com/1.0/sessions";

$fields = array(
    'numberToDial'=>urlencode("+" . $_POST["numberToDial"),
    'customerName'=>urlencode($_POST["customerName")
);

//url-ify the data for the GET
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string,'&');

// put the action and create at the end just so easier 
// for human to read the url
$text_msg_url $tropo_api_url . "?" . $fields_string;
$text_msg_url .= "&action=create";
$text_msg_url .= "&token=$tropo_TEXT_TOK";

$html = file_get_contents($text_msg_url);

?>


