<?php

namespace Ueef\Phalcon\PropertiesModel\Traits {

    trait ArrayFilterTrait
    {
        protected function arrayFilter($value): array
        {
            if (!is_array($value)) {
                $value = [];
            }

            return $value;
        }
    }
}
