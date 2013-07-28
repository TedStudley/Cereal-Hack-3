<?php 

require 'tropo.class.php';

$session = new Session(); 
$to = "+".$session->getParameters("numberToDial"); 
$msg = $session->getParameters("msg"); 
$network = $session->getParameters("network"); 
    
$tropo = new Tropo(); 
    
$tropo->call($to, array('network'=>'SMS')); 
$tropo->say("Hi ".$name.", ". $msg ); 

return $tropo->RenderJson(); 

?> 

