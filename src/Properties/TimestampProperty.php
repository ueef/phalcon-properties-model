<?php

namespace Ueef\Phalcon\PropertiesModel\Properties {

    use Ueef\Phalcon\PropertiesModel\Traits\IntegerFilterTrait;

    class TimestampProperty extends AbstractProperty
    {
        use IntegerFilterTrait;

        /**
         * @var array
         */
        protected $update_events = [];


        public function notify($event, &$item)
        {
            if (in_array($event, $this->update_events)) {
                $this->setValue($item, time());
            }

            parent::notify($event, $item);
        }

        protected function filter($value)
        {
            return $this->integerFilter($value);
        }
    }
}
