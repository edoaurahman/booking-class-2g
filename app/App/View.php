<?php

namespace TugasBesar\BookingClass2g\App;

class View
{
    public static function render(string $view, array $data): void
    {
        extract($data);

        $templateFile =  __DIR__ . '/../Views/' . $view . '.php';

        if (file_exists($templateFile)) {
            require $templateFile;
        } else {
            throw new \Exception('View file not found: ' . $template);
        }
    }
}
