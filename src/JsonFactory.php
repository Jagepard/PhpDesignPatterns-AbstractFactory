<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createMessage(string $content): AbstractMessage
    {
        return new JsonMessage($content);
    }
}
