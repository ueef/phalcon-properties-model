<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\EnumFilterTrait;
    use Ueef\Phalcon\PropertiesModel\Traits\IntegerFilterTrait;

    class IntegerEnumProperty extends AbstractProperty
    {
        use EnumFilterTrait;
        use IntegerFilterTrait;

        protected function filter($value)
        {
            $value = $this->integerFilter($value);
            $value = $this->enumFilter($value);

            return $value;
        }
    }
}
