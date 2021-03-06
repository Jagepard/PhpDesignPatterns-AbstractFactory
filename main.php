<?php

namespace Creational\AbstractFactory;

require_once "vendor/autoload.php";

$content = "Message";

echo (new XMLFactory())->createMessage($content)->getContent() . "\n";
echo (new JsonFactory())->createMessage($content)->getContent() . "\n";
