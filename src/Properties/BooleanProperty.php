<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\BooleanFilterTrait;

    class BooleanProperty extends AbstractProperty
    {
        use BooleanFilterTrait;

        protected function filter($value)
        {
            return $this->booleanFilter($value);
        }
    }
}
