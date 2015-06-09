<?php

namespace exPlugin;

use pocketmine\Player;
use pocketmine\event\player\PlayerJoinEvent
use pocketmine\utils\TextFormat
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{

public function onEnable(){
  $this->getLogger()->info(TextFormat::GREEN."[exPlugin] Enabled!");
  $p = $event->getPlayer()->getName();
}
public function onPlayerJoin(PlayerJoinEvent $event){
  $p->sendPopup("§4Welcome §5To §6The §7Server §8" . $p . "!");
}
}
