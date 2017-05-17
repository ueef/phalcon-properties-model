<?php

namespace Ueef\Phalcon\PropertiesModel\Interfaces {

    interface PropertyInterface
    {
        const EVENT_AFTER_FETCH = 1;
        const EVENT_AFTER_CREATE = 2;
        const EVENT_AFTER_UPDATE = 3;
        const EVENT_AFTER_DELETE = 4;
        const EVENT_AFTER_VALIDATION = 5;
        const EVENT_BEFORE_CREATE = 6;
        const EVENT_BEFORE_UPDATE = 7;
        const EVENT_BEFORE_DELETE = 8;
        const EVENT_BEFORE_VALIDATION = 9;


        public function getKey(): string;
        public function notify($event, &$item);
    }
}
