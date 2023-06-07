<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;


//  php artisan make:model Flight // создание модели Flight

//  php artisan make:model Flight --migration // создание модели Flight вместе с миграцией

    protected $table = 'my_flights'; // явно указать имя таблицы в бд, а по умолчанию используется имя модели в "snake case", во мн. числе т.е. flights

    protected $primaryKey = 'flight_id'; // указать перчиный ключ в таблице(назначить другой столбец)

    public $incrementing = false; // если true то перчиный ключ модели будет автоинкрементным, для неинкрементных и нечисловых ключей нужно ставить false

    protected $connection = 'second'; // указать какое соединение с бд использовать, по умолчанию используеться соединение настроенное в проекте(.env)

    protected $guarded = []; // указать каким полям таблицы нельзя присвоить значения т.е. запрет на запись

    protected $fillable = [ // указать каким полям таблицы можно присвоить значения т.е. разрешение на запись
        'id',
        'name',
        'price',
        'active',
        'sort',
    ];

protected $hidden = [ // исключить поля при получении записей из таблицы(toArray и toJson)
    'price'
];

protected $casts = [ // преобразование полей полученных из бд в определенные типы данных
    'price' => 'float',
    'active' => 'boolean',
    'sort' => 'integer'
];

protected $dates = [ // преобразовать поле в объект класса Carbon
    'active_at',
];

}
