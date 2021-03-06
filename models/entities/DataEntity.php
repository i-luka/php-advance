<?php

namespace app\models\entities;


use app\models\Models;

abstract class DataEntity extends Models
{

    protected $changes=[];
//
//    public function __set($property, $value)
//    {
//        var_dump('+++++++++++++++++++++++++');
//        if (property_exists($this, $property)) {
//
//            $this->$property = $value;
//
//            if(!in_array($property, $this->changes)){
//
//                array_push($this->changes,$property);
//            }
//        }
//    }

    /**
     * @return array
     */
    public function getChanges(): array
    {
        return $this->changes;
    }

    /**
     * @param array $changes
     */
//    public function setChanges(array $changes): void
//    {
//        $this->changes = $changes;
//    }

    public function __get($name)
    {
        return $this->$name;
    }
    abstract public function getId();
    abstract public function getIdName();
}