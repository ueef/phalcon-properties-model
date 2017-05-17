<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class CreatedAtProperty extends TimestampProperty
    {
        public function notify($event, &$item)
        {
            if (self::EVENT_BEFORE_CREATE == $event) {
                $item->{$this->key} = time();
            }

            parent::notify($event, $item);
        }
    }
}