<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    class PackableProperty extends AbstractEncodedProperty
    {
        /**
         * @var string
         */
        private $classname;


        protected function pack($value)
        {
            $value = $this->filter($value);

            if ($value) {
                $value = $value->pack();
            }

            return parent::pack($value);
        }

        protected function unpack($value)
        {
            $value = parent::unpack($value);

            if ($value) {
                $value = $this->classname::unpack($value);
            }

            return $value;
        }
    }
}
