<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    public $incrementing = false; // если true то перчиный ключ модели будет автоинкрементным, для неинкрементных и нечисловых ключей нужно ставить false

    // указать каким полям таблицы нельзя присвоить значения т.е. запрет на запись

    protected $fillable = [ // указать каким полям таблицы можно присвоить значения т.е. разрешение на запись
        'id',
        'name',
    ];

}
