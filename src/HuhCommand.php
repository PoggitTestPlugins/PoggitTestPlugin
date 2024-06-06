<?php

declare(strict_types=1);

namespace JaxkDev\TestPlugin;

use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\command\PluginIdentifiableCommand;
use pocketmine\plugin\Plugin;

readonly class HuhCommand extends Command implements PluginIdentifiableCommand{

	private $plugin;

	public function __construct(string $name, $plugin){
		parent::__construct($name);
		$this->plugin = $plugin;
		$this->setUsage("/huh <What> !");
		$this->setDescription("Huh whats this.....");
		$this->setPermission("huh.command.huh");
	}

	public function execute(CommandSender $sender, string $commandLabel, array $args){
    $sender->sendMesssage("Huh");
    return true;
  }

	public function getPlugin() : Plugin{
		return $this->plugin;
		echo "hi";
	}
}


?>
