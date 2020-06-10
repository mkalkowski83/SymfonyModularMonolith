<?php


namespace App\Core\Message\Command;


use App\Core\Message\MessageHandlerService;

abstract class CommandHandlerService extends MessageHandlerService implements CommandHandler
{
    private const TYPE_SUFFIX_LENGTH = 7;
    protected static function getHandleMethodName(string $typeClass): string
    {
        return "handle" . substr(basename($typeClass), 0, -self::TYPE_SUFFIX_LENGTH);
    }
}
