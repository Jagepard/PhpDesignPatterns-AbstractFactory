<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

abstract class AbstractFactory
{
    abstract public function createMessage(string $content): AbstractMessage;
}
