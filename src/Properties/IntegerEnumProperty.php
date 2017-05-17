<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class IntegerEnumProperty extends IntegerProperty
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

            return parent::pack($value);
        }
    }
}
