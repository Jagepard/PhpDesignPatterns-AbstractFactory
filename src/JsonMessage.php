<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class JsonMessage extends MessageFactory
{
    /**
     * Creates a message
     * -----------------
     * Создает сообщение
     *
     * @param  string $content
     * @return string
     */
    public function createMessage(string $content): string
    {
        return \json_encode(["content" => $content]);
    }
}
