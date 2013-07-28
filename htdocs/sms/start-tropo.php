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
    'numberToDial'=>urlencode($_GET["numberToDial"]),
    'network'=>urlencode($_GET["network"]),
    'msg'=>urlencode($_GET["msg"])
    );

//url-ify the data for the GET
$fields_string = "";
foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
rtrim($fields_string,'&');

// put the action and create at the end just so easier 
// for human to read the url
$text_msg_url = $tropo_api_url . "?" . $fields_string;
$text_msg_url .= "&action=create";
$text_msg_url .= "&token=$tropo_TEXT_TOK";
//var_dump($text_msg_url);

// send url to Tropo
$html = file_get_contents($text_msg_url);

// go back to member home 
//$key = "HTTP_REFERER";
//if (array_key_exists($key, $_SERVER)) {
    //header("Location: " . $_SERVER[$key]);
//}
//else {
    //header("Location: http://www.quickjobbr.com/profile.html");
//}

// go to profile page that employer sees
header("Location: http://www.quickjobbr.com/profile.html");
?>


