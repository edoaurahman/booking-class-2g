<?php

namespace TugasBesar\BookingClass2g\Models;

class User extends Model
{
    protected $table = 'users';
    public $id = 'id';
    public $username = 'username';
    public $password;
}
