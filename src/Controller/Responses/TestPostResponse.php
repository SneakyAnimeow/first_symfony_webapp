<?php

namespace App\Controller\Responses;

class TestPostResponse {
    /**
     * @return mixed
     */
    public function getResponseValueName() {
        return $this->responseValueName;
    }

    /**
     * @param mixed $responseValueName
     */
    public function setResponseValueName($responseValueName): void {
        $this->responseValueName = $responseValueName;
    }

    /**
     * @return mixed
     */
    public function getResponseValue() {
        return $this->responseValue;
    }

    /**
     * @param mixed $responseValue
     */
    public function setResponseValue($responseValue): void {
        $this->responseValue = $responseValue;
    }
    public $responseValueName;

    public $responseValue;
}