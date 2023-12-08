<?php

namespace TugasBesar\BookingClass2g\Controller;

class Controller
{
    /**
     * Dump die
     */
    public function ddd($debug): void
    {
        echo "<pre>";
        var_dump($debug);
        die;
    }

    /**
     * Redirect to the given path
     */
    public function redirect(string $path): void
    {
        header("Location: /$path");
    }
}
