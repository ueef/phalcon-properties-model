<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class StringProperty extends AbstractProperty
    {
        protected function pack($value)
        {
            return trim($value);
        }

        protected function unpack($value)
        {
            return $value;
        }
    }
}
