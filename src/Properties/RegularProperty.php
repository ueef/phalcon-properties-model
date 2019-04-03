<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Interfaces\PropertyInterface;
    use Ueef\Typer\Interfaces\TypeInterface;

    class RegularProperty implements PropertyInterface
    {
        /** @var string */
        protected $key;

        /** @var TypeInterface */
        protected $type;

        /** @var bool */
        protected $nullable;


        public function __construct($key, TypeInterface $type = null, $nullable = false)
        {
            $this->key = $key;
            $this->type = $type;
            $this->nullable = $nullable;
        }

        public function getKey()
        {
            return $this->key;
        }

        public function getValue(&$item)
        {
            return $item->{$this->key};
        }

        public function setValue(&$item, $value)
        {
            $item->{$this->key} = $value;
        }

        public function notify($event, &$item)
        {
            $value = $item->{$this->key};

            switch ($event) {
                case self::EVENT_BEFORE_CREATE:
                case self::EVENT_BEFORE_UPDATE:
                    $value = $this->pack($value);
                    break;
                case self::EVENT_AFTER_FETCH:
                case self::EVENT_AFTER_CREATE:
                case self::EVENT_AFTER_UPDATE:
                    $value = $this->unpack($value);
                    break;
            }

            $item->{$this->key} = $value;
        }

        protected function pack($value)
        {
            if ($this->nullable && null === $value) {
                return $value;
            }

            if (null === $this->type) {
                return $value;
            }

            return $this->type->convert($value);
        }

        protected function unpack($value)
        {
            if ($this->nullable && null === $value) {
                return $value;
            }

            if (null === $this->type) {
                return $value;
            }

            return $this->type->convert($value);
        }
    }
}
