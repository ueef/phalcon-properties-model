<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class BooleanProperty extends AbstractProperty
    {
        protected function pack($value)
        {
            return $value ? 1 : 0;
        }

        protected function unpack($value)
        {
            return $value ? true : false;
        }
    }
}
