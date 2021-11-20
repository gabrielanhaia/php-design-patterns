<?php

use \App\Memento;

require_once 'autoloader.php';

$textEditor = new Memento\TextEditor;
$textEditor->setText('VERSION 1');

$caretaker = new Memento\Caretaker($textEditor);
$caretaker->backup();

sleep(1);
$textEditor->setText('VERSION 2');
$caretaker->backup();

sleep(1);
$textEditor->setText('VERSION 3');

dump([
    'LAST TEXT SNAPSHOT' => $textEditor->getText(),
    'LAST SNAPSHOT CREATED AT' => $caretaker->getLastSnapshotDate() ? $caretaker->getLastSnapshotDate()->format('Y-m-d H:i:s') : null
]);

$lastSnapshotDate = $caretaker->getLastSnapshotDate() ? $caretaker->getLastSnapshotDate()->format('Y-m-d H:i:s') : null;
$caretaker->undo();
dump([
    'LAST TEXT SNAPSHOT' => $textEditor->getText(),
    'LAST SNAPSHOT CREATED AT' => $lastSnapshotDate
]);

$lastSnapshotDate = $caretaker->getLastSnapshotDate() ? $caretaker->getLastSnapshotDate()->format('Y-m-d H:i:s') : null;
$caretaker->undo();
dump([
    'LAST TEXT SNAPSHOT' => $textEditor->getText(),
    'LAST SNAPSHOT CREATED AT' => $lastSnapshotDate
]);
