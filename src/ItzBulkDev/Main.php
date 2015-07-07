<?php

namespace ;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class Main extends PluginBase implements Listener{

public function onEnable(){
  $this->getLogger()->info(TextFormat::GREEN." Enabled!");
  $p = $event->getPlayer()->getName();
}



}
