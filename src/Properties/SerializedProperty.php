<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Serializable;

    class SerializedProperty extends AbstractProperty
    {
        /**
         * @var string
         */
        private $classname;


        protected function pack($value)
        {
            if ($value) {
                return $value->serialize();
            }

            return null;
        }

        protected function unpack($value)
        {
            if (!$value) {
                return null;
            }

            $item = new $this->classname;
            $item->unserialize($value);

            return $item;
        }
    }
}
