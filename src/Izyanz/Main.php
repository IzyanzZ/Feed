<?php

namespace Izyanz;

use Izyanz\Commands\Feed;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase
{
    public function onEnable(): void
    {
        $this->getLogger()->info("Feed Plugin Enabled!");
        $this->getServer()->getCommandMap()->register("", new Feed());
    }
}