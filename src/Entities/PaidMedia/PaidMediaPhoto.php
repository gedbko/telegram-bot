<?php

namespace PhpTelegramBot\Core\Entities\PaidMedia;

use PhpTelegramBot\Core\Entities\PhotoSize;

/**
 * @method PhotoSize[] getPhoto() The photo
 */
class PaidMediaPhoto extends PaidMedia
{
    protected static function subEntities(): array
    {
        return [
            'photo' => [PhotoSize::class],
        ];
    }

    protected static function presetData(): array
    {
        return [
            'type' => self::TYPE_PHOTO,
        ];
    }
}
