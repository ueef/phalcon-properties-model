<?php

namespace Ueef\Phalcon\PropertiesModel\Traits {

    trait StringFilterTrait
    {
        protected function stringFilter($value): string
        {
            return trim($value);
        }
    }
}
