<?php
namespace PluginCore\Plugins\FriendsPE;

use pocketmine\scheduler\PluginTask;
use pocketmine\plugin\Plugin;
use pocketmine\Player;
use pocketmine\utils\TextFormat;

class cancelrequest extends PluginTask{
	private $target;
	private $requestp;
	public function __construct(Plugin $owner, Player $target, Player $requestp){
		parent::__construct($owner);
		$this->target = $target;
		$this->requestp = $requestp;
	}
	
	public function onRun(int $currentTick){
		$plugin->getLogger()->info("ran cancelrequest!");
         $this->getOwner()->removeRequest($this->target,$this->requestp, 0);
	}
}
