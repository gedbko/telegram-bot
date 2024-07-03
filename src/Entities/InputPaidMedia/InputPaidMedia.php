<?php

namespace PhpTelegramBot\Core\Entities\InputPaidMedia;

use PhpTelegramBot\Core\Entities\Entity;

/**
 * @method string getType() Type of the media
 */
abstract class InputPaidMedia extends Entity
{
    public const TYPE_PHOTO = 'photo';

    public const TYPE_VIDEO = 'video';
}
