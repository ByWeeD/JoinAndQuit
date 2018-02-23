<?php
//Plugin By @ByWeeD
namespace Quit;

use pocketmine\Server;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class Main extends PluginBase implements Listener{
	
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getServer()->getLogger()->info("§a[§a+§a] §aJoin §e& §4[§4-§4] §4Quit §5by: §f@ByWeeD");
		}
		
		public function onJoin(PlayerJoinEvent $event){
			$player = $event->getPlayer();
			$name = $player->getName();
			$event->setJoinMessage("");
			$this->getServer()->broadcastMessage("§a[§a+§a] §a" . $name);
			}
			
			public function onQuit(PlayerQuitEvent $event){
				$player = $event->getPlayer();
			$name = $player->getName();
			$event->setQuitMessage("");
			$this->getServer()->broadcastMessage("§4[§4-§4] §4" . $name);
				}
	}