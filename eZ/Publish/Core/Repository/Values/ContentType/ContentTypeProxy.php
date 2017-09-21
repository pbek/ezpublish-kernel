<?php

/**
 * File containing the eZ\Publish\Core\Repository\Values\ContentType\ContentType class.
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace eZ\Publish\Core\Repository\Values\ContentType;

use eZ\Publish\API\Repository\Values\ContentType\ContentType as APIContentType;
use eZ\Publish\Core\Repository\Values\GeneratorProxyTrait;

/**
 * This class represents a proxy for a content type value.
 *
 * @internal Meant for internal use by Repository, type hint against API object instead.
 */
class ContentTypeProxy extends APIContentType
{
    use GeneratorProxyTrait;

    /**
     * @var \eZ\Publish\API\Repository\Values\ContentType\ContentType
     */
    protected $object;

    public function getContentTypeGroups()
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getContentTypeGroups();
    }

    public function getFieldDefinitions()
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getFieldDefinitions();
    }

    public function getFieldDefinition($fieldDefinitionIdentifier)
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getFieldDefinition($fieldDefinitionIdentifier);
    }

    public function getNames()
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getNames();
    }

    public function getName($languageCode = null)
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getName($languageCode);
    }

    public function getDescriptions()
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getDescriptions();
    }

    public function getDescription($languageCode = null)
    {
        if ($this->object === null) {
            $this->loadObject();
        }

        return $this->object->getDescription($languageCode);
    }
}
