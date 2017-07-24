<?php

namespace Ueef\Phalcon\PropertiesModel\Traits {

    trait IntegerFilterTrait
    {
        protected function integerFilter($value)
        {
            if (!is_numeric($value)) {
                $value = null;
            }

            if (null !== $value) {
                $value = (int) $value;
            }

            return $value;
        }
    }
}
