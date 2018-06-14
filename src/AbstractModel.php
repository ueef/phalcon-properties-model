<?php

namespace Ueef\Phalcon\PropertiesModel {

    use Phalcon\Mvc\Model;
    use Ueef\Phalcon\PropertiesModel\Interfaces\PropertyInterface;

    class AbstractModel extends Model
    {
        /** @var PropertyInterface[][] */
        protected static $models_properties = [];


        public function refresh()
        {
            parent::refresh();
            $this->notifyProperties(PropertyInterface::EVENT_AFTER_FETCH);
        }

        public function afterFetch()
        {
            $this->notifyProperties(PropertyInterface::EVENT_AFTER_FETCH);
        }

        public function beforeValidation()
        {
            $this->notifyProperties(PropertyInterface::EVENT_BEFORE_VALIDATION);
        }

        public function afterValidation()
        {
            $this->notifyProperties(PropertyInterface::EVENT_AFTER_VALIDATION);
        }

        public function beforeCreate()
        {
            $this->notifyProperties(PropertyInterface::EVENT_BEFORE_CREATE);
        }

        public function afterCreate()
        {
            $this->notifyProperties(PropertyInterface::EVENT_AFTER_CREATE);
        }

        public function beforeUpdate()
        {
            $this->notifyProperties(PropertyInterface::EVENT_BEFORE_UPDATE);
        }

        public function afterUpdate()
        {
            $this->notifyProperties(PropertyInterface::EVENT_AFTER_UPDATE);
        }

        public function beforeDelete()
        {
            $this->notifyProperties(PropertyInterface::EVENT_BEFORE_DELETE);
        }

        public function afterDelete()
        {
            $this->notifyProperties(PropertyInterface::EVENT_AFTER_DELETE);
        }

        protected function notifyProperties($event)
        {
            $properties = &static::$models_properties[static::class];
            if (!$properties) {
                $properties = [];
            }

            foreach ($properties as &$property) {
                $property->notify($event, $this);
            }
        }

        protected function addProperty(PropertyInterface $property)
        {
            static::$models_properties[static::class][] = $property;
        }
    }
}
