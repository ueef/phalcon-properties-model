<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class NumericProperty extends AbstractProperty
    {
        protected function pack($value)
        {
            if (!is_numeric($value)) {
                $value = null;
            }

            return $value;
        }

        protected function unpack($value)
        {
            return $value;
        }
    }
}
