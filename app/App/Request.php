<?php

namespace TugasBesar\BookingClass2g\App;

class Request
{
    private array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data + $_POST;
        // handle file upload
        if (isset($_FILES)) {
            foreach ($_FILES as $key => $value) {
                $this->data[$key] = $value;
            }
        }
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
}
