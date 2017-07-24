<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class CreatedTimestampProperty extends TimestampProperty
    {
        protected $update_events = [
            self::EVENT_BEFORE_CREATE,
        ];
    }
}
