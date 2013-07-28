<?php 

require 'tropo.class.php';

$session = new Session(); 
$to = "+".$session->getParameters("numberToDial"); 
$msg = $session->getParameters("msg"); 
$network = $session->getParameters("network"); 
//var_dump($network);
//var_dump($to);
//var_dump($msg);
    
$tropo = new Tropo(); 
    
$tropo->call($to, array('network'=>$network)); 
$tropo->say($msg); 

return $tropo->RenderJson(); 

?> 

