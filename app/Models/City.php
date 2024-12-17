<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    // Вказуємо, що це масив заповнюваних полів
    protected $fillable = ['name', 'country'];

    // Можна додати інші методи чи зв'язки, якщо потрібно
}
