<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Assignable\Traits\AssignableTrait;
    use Ueef\Assignable\Interfaces\AssignableInterface;
    use Ueef\Phalcon\PropertiesModel\Interfaces\PropertyInterface;

    abstract class AbstractProperty implements PropertyInterface, AssignableInterface
    {
        use AssignableTrait;

        /**
         * @var string
         */
        protected $key;


        public function __construct(string $key, array $parameters = [])
        {
            $this->key = $key;
            $this->assign($parameters);
        }

        public function getKey(): string
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

        abstract protected function pack($value);
        abstract protected function unpack($value);
    }
}
