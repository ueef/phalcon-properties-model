<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class IntegerProperty extends NumericProperty
    {
        protected function pack($value)
        {
            $value = parent::pack($value);

            if (null !== $value) {
                $value = (int) $value;
            }

            return $value;
        }

        protected function unpack($value)
        {
            $value = parent::unpack($value);

            if (null !== $value) {
                $value = (int) $value;
            }

            return $value;
        }
    }
}
