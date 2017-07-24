<?php

namespace Ueef\Phalcon\PropertiesModel\Traits {

    trait FloatFilterTrait
    {
        protected function floatFilter($value)
        {
            if (!is_numeric($value)) {
                $value = null;
            }

            if (null !== $value) {
                $value = (float) $value;
            }

            return $value;
        }
    }
}
