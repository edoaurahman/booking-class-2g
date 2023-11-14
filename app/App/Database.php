<?php

namespace TugasBesar\BookingClass2g\App;

use mysqli;

class Database
{
    protected $table;
    protected $db;
    public function __construct()
    {
        $env = parse_ini_file(__DIR__ . '/../../.env');
        $this->db = new mysqli(
            $env['DB_HOST'],
            $env['DB_USERNAME'],
            $env['DB_PASSWORD'],
            $env['DB_NAME'],
            $env['DB_PORT']
        );

        if ($this->db->connect_errno) {
            die("Failed to connect to MySQL: " . $this->db->connect_error);
        }
    }
}
