<?php
namespace JaxkDev\TestPlugin;

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("Enabled.");
		//No changes huh...
	}
	
	public function onDisable(){
		$this->getLogger()->info("Disabled.");
	}
}
