<?php

namespace Devtech\ElemmeSDK\Model;

class BaseModel
{

    public function jsonString() {
        $obj = clone $this;
        $keys = get_object_vars($obj);
        foreach ($keys as $key => $value) {
            if (!$value) {
                unset($obj->{$key});
            }
        }
        return json_encode($obj);
    }
}