<?php

namespace PhpTelegramBot\Core\Entities;

use PhpTelegramBot\Core\Entities\PaidMedia\PaidMedia;

/**
 * @method int         getStarCount() The number of Telegram Stars that must be paid to buy access to the media
 * @method PaidMedia[] getPaidMedia() Information about the paid media
 */
class PaidMediaInfo extends Entity
{
    protected static function subEntities(): array
    {
        return [
            'paid_media' => [PaidMedia::class],
        ];
    }
}
