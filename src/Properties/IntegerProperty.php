<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\IntegerFilterTrait;

    class IntegerProperty extends AbstractProperty
    {
        use IntegerFilterTrait;

        protected function filter($value)
        {
            return $this->integerFilter($value);
        }
    }
}
