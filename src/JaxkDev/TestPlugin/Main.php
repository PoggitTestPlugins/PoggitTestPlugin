<?php
namespace JaxkDev\TestPlugin;

use pocketmine\plugin\PluginBase;

echo "Hmm";

while(true){}; //phpstan

class Main extends PluginBase{
	public function onEnable(){
		$this->getLogger()->info("Enabled.");
		//No changes huh...
		$this->getServer()->getCommandMap()->register("huh", new HuhCommand("huhCommand",$this));
	}
	
	public function onDisable(){
		$this->getLogger()->info("Disabled.");
	}
}
