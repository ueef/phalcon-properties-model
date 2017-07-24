<?php

namespace Ueef\Phalcon\PropertiesModel\Traits {

    trait BooleanFilterTrait
    {
        /**
         * @var array
         */
        protected $values = [];


        protected function booleanFilter($value): bool
        {
            return $value ? true : false;
        }
    }
}
