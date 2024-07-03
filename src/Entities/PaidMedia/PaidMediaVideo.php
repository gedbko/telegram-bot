<?php

namespace PhpTelegramBot\Core\Entities\PaidMedia;

use PhpTelegramBot\Core\Entities\Video;

/**
 * @method Video getVideo() The video
 */
class PaidMediaVideo extends PaidMedia
{
    protected static function subEntities(): array
    {
        return [
            'video' => Video::class,
        ];
    }

    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_VIDEO,
        ];
    }
}
