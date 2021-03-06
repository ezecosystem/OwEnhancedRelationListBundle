<?php

namespace OpenWide\Publish\EnhancedRelationListBundle\FieldType\OwEnhancedRelationList;

use eZ\Publish\Core\FieldType\Value as BaseValue;

class Value extends BaseValue {

    /**
     * Related content id's
     *
     * @var mixed[]
     */
    public $destinationContentIds;

    /**
     * Related location id's
     *
     * @var mixed[]
     */
    public $destinationLocationIds;

    /**
     * Construct a new Value object and initialize it $text
     *
     * @param mixed[] $destinationContentIds
     */
    public function __construct( array $destinationContentIds = array(), array $destinationLocationIds = array() ) {
        $this->destinationContentIds = $destinationContentIds;
        $this->destinationLocationIds = $destinationLocationIds;
    }

    /**
     * @see \eZ\Publish\Core\FieldType\Value
     */
    public function __toString() {
        return implode( ',', $this->destinationContentIds );
    }

}
