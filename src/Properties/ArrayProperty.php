<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\ArrayFilterTrait;

    class ArrayProperty extends AbstractEncodedProperty
    {
        use ArrayFilterTrait;

        protected function filter($value)
        {
            return $this->arrayFilter($value);
        }
    }
}
