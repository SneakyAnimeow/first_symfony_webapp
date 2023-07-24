<?php

namespace App\Controller\Requests;

class TestPostRequest {
    /**
     * @return mixed
     */
    public function getValueName() {
        return $this->valueName;
    }

    /**
     * @param mixed $valueName
     */
    public function setValueName($valueName): void {
        $this->valueName = $valueName;
    }

    /**
     * @return mixed
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void {
        $this->value = $value;
    }
    public $valueName;

    public $value;
}