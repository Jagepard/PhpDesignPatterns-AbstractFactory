<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Creational\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    /**
     * @param  string  $content
     * @return string
     */
    public function createMessage(string $content): string
    {
        return \json_encode(['content' => $content]);
    }
}
