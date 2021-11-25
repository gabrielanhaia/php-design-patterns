<?php

use App\Composite;

require_once 'autoloader.php';

$generalGroupWithAllSubGroups = new Composite\GroupComposite('General');
$organization1 = new Composite\GroupComposite('Organization1');
$phpDevelopersGroup = new Composite\GroupComposite('PHPDevs');

$gabriel = new Composite\Contact('Gabriel');
$lucy = new Composite\Contact('Lucy');
$john = new Composite\Contact('John');

$phpDevelopersGroup->add($gabriel);
$phpDevelopersGroup->add($lucy);
$phpDevelopersGroup->add($john);
$organization1->add($phpDevelopersGroup);
$generalGroupWithAllSubGroups->add($organization1);

dump($generalGroupWithAllSubGroups->operation());
