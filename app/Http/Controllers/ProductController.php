<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return response("Вывод списка товаров");
    }

    public function show(string $product)
    {
        return response("Вывод товара: " . $product);
    }

    public function create()
    {
        return response("Создание товара(типа форма)");
    }

    public function store(Request $request)
    {
        return response("Товар создан");
    }

    public function edit(string $product)
    {
        return response("Редактирование товара(типа форма): " . $product);
    }

    public function update(string $product)
    {
        return response("Данные товара " . $product . " обновлены");
    }

    public function destroy(string $product)
    {
        return response("Товар " . $product . " удален");
    }
}
