<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    function index()
    {
        $car = [
            'id' => 1,
            'brand' => 'BMW',
            'model' => 'X5',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];


        $cars = array_fill(0, 10, $car);

        return view('cars.index', ['cars' => $cars]);
    }

    function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {

        $validated = validate($request->all(), [
            'brand' => ['required', 'string', 'max:100'],
            'model' => ['required', 'string', 'max:100'],
            'description' => ['nullable', 'string'],
        ]);

        alert(__('Created'));
        return redirect()->route('cars.show', 123);
    }

    public function show($car)
    {

        $car = [
            'id' => 1,
            'brand' => 'BMW',
            'model' => 'X5',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, ratione.',
        ];

        return view('cars.show', ['car' => $car]);
    }
}
