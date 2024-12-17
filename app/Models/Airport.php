<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    use HasFactory;

    // Вказуємо заповнювані поля
    protected $fillable = ['city_id', 'name', 'code'];

    // Зв'язок з таблицею City
    public function city()
    {
        return $this->belongsTo(City::class); // Один аеропорт належить одному місту
    }
}
