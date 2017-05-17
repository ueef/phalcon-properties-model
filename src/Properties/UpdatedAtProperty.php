<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class UpdatedAtProperty extends TimestampProperty
    {
        public function notify($event, &$item)
        {
            if (self::EVENT_BEFORE_UPDATE == $event) {
                $item->{$this->key} = time();
            }

            parent::notify($event, $item);
        }
    }
}
