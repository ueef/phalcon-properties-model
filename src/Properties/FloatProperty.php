<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class FloatProperty extends NumericProperty
    {
        protected function pack($value)
        {
            $value = parent::pack($value);

            if (null !== $value) {
                $value = (float) $value;
            }

            return $value;
        }

        protected function unpack($value)
        {
            $value = parent::unpack($value);

            if (null !== $value) {
                $value = (float) $value;
            }

            return $value;
        }
    }
}
