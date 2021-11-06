<?php

use App\Decorator\Classes\Knight;
use App\Decorator\Classes\Wizard;
use App\Decorator\Items\GoblinRing;
use App\Decorator\Items\HermesBoots;
use App\Decorator\Items\Mjolnir;
use App\Decorator\Items\TridentOfPoseidon;

require_once 'autoloader.php';

// Knight Decorator example:

$knightDecorator = new Knight();
$knightDecorator = new GoblinRing($knightDecorator);
$knightDecorator = new Mjolnir($knightDecorator);
$knightDecorator = new HermesBoots($knightDecorator);

lns();
ln();
echo sprintf('Class name `%s`', $knightDecorator->getName());
ln();
echo sprintf('Total Strength: `%s`', $knightDecorator->getTotalStrength());
ln();
echo sprintf('Total Agility: `%s`', $knightDecorator->getTotalAgility());
ln();
echo sprintf('Total Dexterity: `%s`', $knightDecorator->getTotalDexterity());
ln();
echo sprintf('Total Intelligence: `%s`', $knightDecorator->getTotalIntelligence());
ln();
echo sprintf('Total Luck: `%s`', $knightDecorator->getTotalLuck());
ln();

// Wizard Decorator example:

$wizardDecorator = new Wizard();
$wizardDecorator = new GoblinRing($wizardDecorator);
$wizardDecorator = new GoblinRing($wizardDecorator);
$wizardDecorator = new HermesBoots($wizardDecorator);
$wizardDecorator = new TridentOfPoseidon($wizardDecorator);

lns();
ln();
echo sprintf('Class name `%s`', $wizardDecorator->getName());
ln();
echo sprintf('Total Strength: `%s`', $wizardDecorator->getTotalStrength());
ln();
echo sprintf('Total Agility: `%s`', $wizardDecorator->getTotalAgility());
ln();
echo sprintf('Total Dexterity: `%s`', $wizardDecorator->getTotalDexterity());
ln();
echo sprintf('Total Intelligence: `%s`', $wizardDecorator->getTotalIntelligence());
ln();
echo sprintf('Total Luck: `%s`', $wizardDecorator->getTotalLuck());