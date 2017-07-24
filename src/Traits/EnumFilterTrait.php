<?php

namespace Ueef\Phalcon\PropertiesModel\Traits {

    trait EnumFilterTrait
    {
        /**
         * @var array
         */
        protected $values = [];


        protected function enumFilter($value)
        {
            if (!in_array($value, $this->values)) {
                $value = null;
            }

            return $value;
        }
    }
}
