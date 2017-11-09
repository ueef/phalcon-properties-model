<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Typer\Interfaces\TypeInterface;

    class TimestampProperty extends RegularProperty
    {
        const SET_ON_CREATE = 1;
        const SET_ON_UPDATE = 2;

        /** @var integer */
        protected $flags = 0;


        public function __construct($key, TypeInterface $type, $flags = 0)
        {
            parent::__construct($key, $type);

            $this->flags = $flags;
        }

        public function notify($event, &$item)
        {
            if (
                (self::EVENT_BEFORE_CREATE == $event && self::SET_ON_CREATE & $this->flags) &&
                (self::EVENT_BEFORE_UPDATE == $event && self::SET_ON_UPDATE & $this->flags)
            ) {
                $this->setValue($item, time());
            }

            parent::notify($event, $item);
        }
    }
}
