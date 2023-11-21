<?php

namespace TugasBesar\BookingClass2g\App;

class View
{
    public static function render(string $view, array $data): void
    {
        extract($data);
        require __DIR__ . '/../Views/' . $view . '.php';
    }

    public static function includeTemplate(string $template): void
    {
        $templateFile = __DIR__ . '/../Views/templates/' . $template . '.php';

        if (file_exists($templateFile)) {
            require $templateFile;
        } else {
            throw new \Exception('Template file not found: ' . $template);
        }
    }
}
