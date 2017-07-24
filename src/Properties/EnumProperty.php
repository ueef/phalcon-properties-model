<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\EnumFilterTrait;

    class EnumProperty extends AbstractProperty
    {
        use EnumFilterTrait;

        protected function filter($value)
        {
            return $this->enumFilter($value);
        }
    }
}