<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class UpdatedTimestampProperty extends TimestampProperty
    {
        protected $update_events = [
            self::EVENT_BEFORE_UPDATE,
        ];
    }
}
