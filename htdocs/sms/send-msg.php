<?php

require 'tropo.class.php';

$tropo = new Tropo();

$tropo->call("+19168421231", array('network'=>'SMS'));
$tropo->say("Tag, you're it!");

$tropo->RenderJson();
?>


