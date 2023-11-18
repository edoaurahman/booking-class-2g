<?php

namespace TugasBesar\BookingClass2g\App;

class Request
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data + $_POST;
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
}
