<?php

/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\Repository\Values\Content;

use eZ\Publish\API\Repository\Values\Content\ContentInfo as APIContentInfo;
use eZ\Publish\API\Repository\Values\ContentType\ContentType as APIContentType;
use eZ\Publish\Core\Repository\Values\GeneratorProxyTrait;

/**
 * This class represents a (lazy loaded) proxy for a content info value.
 *
 * @internal Meant for internal use by Repository, type hint against API object instead.
 */
class ContentInfoProxy extends APIContentInfo
{
    use GeneratorProxyTrait;

    /**
     * @var \eZ\Publish\API\Repository\Values\Content\ContentInfo|null
     */
    protected $object;

    public function getContentType() : APIContentType
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getContentType();
    }
}
