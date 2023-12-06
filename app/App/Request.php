<?php

namespace TugasBesar\BookingClass2g\App;

class Request
{
    private array $_data;

    public function __construct(array $data = [])
    {
        $this->_data = $data + $_POST;
        // handle file upload
        if (isset($_FILES)) {
            foreach ($_FILES as $key => $value) {
                $this->_data[$key] = $value;
            }
        }
    }

    public function __get($name)
    {
        return $this->_data[$name] ?? null;
    }
}
