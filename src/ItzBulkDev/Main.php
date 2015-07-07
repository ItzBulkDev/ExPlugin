<?php

namespace ;

use pocketmine\;

class Main extends PluginBase implements Listener{

public function onEnable(){
  $this->getLogger()->info(TextFormat::GREEN." Enabled!");
  $p = $event->getPlayer()->getName();
}



}
