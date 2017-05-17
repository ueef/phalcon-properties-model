<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class EnumProperty extends AbstractProperty
    {
        /**
         * @var array
         */
        protected $values = [];


        protected function pack($value)
        {
            if (!in_array($value, $this->values)) {
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
