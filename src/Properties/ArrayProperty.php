<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class ArrayProperty extends AbstractProperty
    {
        protected function pack($value)
        {
            if (!is_array($value)) {
                $value = null;
            }

            if (null !== $value) {
                $value = json_encode($value);
            }

            return $value;
        }

        protected function unpack($value)
        {
            if (null !== $value) {
                $value = json_decode($value);
            }

            return $value;
        }
    }
}
