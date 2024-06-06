<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;
    // Tentukan atribut yang boleh diisi
    protected $fillable = ['name', 'email', 'password'];
}
