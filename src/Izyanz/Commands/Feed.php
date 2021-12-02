<?php

namespace Izyanz\Commands;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;

class Feed extends Command
{
    public function __construct()
    {
        parent::__construct("feed", "Feed Command", "/feed", ["food"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player) {
            $sender->getHungerManager()->setFood($sender->getHungerManager()->getMaxFood());
            $sender->getHungerManager()->setSaturation(20);
            $sender->sendMessage("Your has been feeded!");
        } else $sender->sendMessage("Use command in game!");
    }

}