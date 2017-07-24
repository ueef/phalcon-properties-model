<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\StringFilterTrait;

    class StringProperty extends AbstractProperty
    {
        use StringFilterTrait;

        protected function filter($value)
        {
            return $this->stringFilter($value);
        }
    }
}
