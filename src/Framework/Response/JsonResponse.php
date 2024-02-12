<?php

namespace App\Framework\Response;

class JsonResponse
{
    const STATUS_OK = 200;
    const STATUS_CREATION = 201;
    const STATUS_NOT_FOUND = 404;

    private $data;
    private $status;


    public function __construct($data, int $status = self::STATUS_OK)
    {
        $this->data = $data;
        $this->status = $status;
    }

    public function getData(): string
    {
        return json_encode($this->data);
    }

    public function setData($data): self
    {
        $this->data = $data;

        return $this;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }


}