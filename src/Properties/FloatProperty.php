<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\FloatFilterTrait;

    class FloatProperty extends AbstractProperty
    {
        use FloatFilterTrait;

        protected function filter($value)
        {
            return $this->floatFilter($value);
        }
    }
}