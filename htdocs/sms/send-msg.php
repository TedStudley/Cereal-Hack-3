<?php 

require 'tropo.class.php';

$session = new Session(); 
$to = "+".$session->getParameters("numbertodial"); 
$name = $session->getParameters("customername"); 
$msg = $session->getParameters("msg"); 
    
$tropo = new Tropo(); 
    
$tropo->call($to, array('network'=>'SMS')); 
$tropo->say("OMG ".$name.", ".$msg."!"); 

return $tropo->RenderJson(); 

?> 

