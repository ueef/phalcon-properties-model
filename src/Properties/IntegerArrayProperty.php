<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\ArrayFilterTrait;
    use Ueef\Phalcon\PropertiesModel\Traits\IntegerFilterTrait;

    class IntegerArrayProperty extends AbstractEncodedProperty
    {
        use ArrayFilterTrait;
        use IntegerFilterTrait;

        protected function filter($value)
        {
            $value = $this->arrayFilter($value);

            foreach ($value as &$_value) {
                $_value = $this->integerFilter($_value);
            }

            return $value;
        }
    }
}
