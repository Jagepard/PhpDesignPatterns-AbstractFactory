<?php

namespace Creational\AbstractFactory;

require_once "vendor/autoload.php";

$content = "Message";

$factory = new XMLMessage();
echo $factory->createMessage($content). "\n";

$factory = new JsonMessage();
echo $factory->createMessage($content) . "\n";
