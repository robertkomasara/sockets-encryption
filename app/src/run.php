<?php

require '/home/vagrant/src/vendor/autoload.php';

use App\Messenger\Handler\SocketHandler;

try { 
  
  $srv = new SocketHandler();
  $srv->createSock()->bindAddress()->startListen();

} catch (\Exception $e){
    printf("Run SocketInstance problem: %s",$e->getMessage());
}
