<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class IntegerArrayProperty extends ArrayProperty
    {
        protected function pack($value)
        {
            if (is_array($value)) {
                $value = array_filter($value, 'is_numeric');
                $value = array_map('intval', $value);
            }

            return parent::pack($value);
        }

        protected function unpack($value)
        {
            return parent::unpack($value);
        }
    }
}
