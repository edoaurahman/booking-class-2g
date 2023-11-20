<?php

namespace TugasBesar\BookingClass2g\App;

class View
{
    public static function render(string $view, array $data): void
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }
}
