<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class IntegerProperty extends AbstractProperty
    {
        protected function pack($value)
        {
            if (!is_numeric($value)) {
                $value = null;
            }

            if (null !== $value) {
                $value = (int) $value;
            }

            return $value;
        }

        protected function unpack($value)
        {
            if (!is_numeric($value)) {
                $value = null;
            }

            if (null !== $value) {
                $value = (int) $value;
            }

            return $value;
        }
    }
}
