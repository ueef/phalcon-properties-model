<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Packable\Interfaces\PackableInterface;
    use Ueef\Typer\Interfaces\TypeInterface;

    class PackableProperty extends EncodedProperty
    {
        /**
         * @var PackableInterface
         */
        private $proto;


        public function __construct($key, TypeInterface $type, PackableInterface $proto)
        {
            parent::__construct($key, $type);

            $this->proto = $proto;
        }

        protected function pack($value)
        {
            if ($value) {
                $value = $value->pack();
            }

            return parent::pack($value);
        }

        protected function unpack($value)
        {
            $value = parent::unpack($value);

            if ($value) {
                $value = $this->proto::unpack($value);
            }

            return $value;
        }
    }
}
