<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    abstract class AbstractEncodedProperty extends AbstractProperty
    {
        protected function pack($value)
        {
            if (null !== $value) {
                $value = json_encode($value, JSON_UNESCAPED_UNICODE);
            }

            return $value;
        }

        protected function unpack($value)
        {
            if (null !== $value) {
                $value = json_decode($value, true);
            }

            return $value;
        }
    }
}
