<?php

namespace App\Http\Controllers;

use App\Helpers\MathHelper;
use Illuminate\Http\Request;

class MathController extends Controller
{
    // Метод для відображення головної сторінки калькулятора
    public function index()
    {
        return view('welcome');  // Повертає сторінку калькулятора
    }

    // Метод для обчислення виразу
    public function calculate(Request $request)
    {
        // Валідація введених даних
        $validated = $request->validate([
            'expression' => 'required|string'  // Вираз повинен бути рядком
        ]);

        $expression = $validated['expression'];  // Отримуємо вираз з форми

        try {
            // Викликаємо клас MathHelper для обчислення виразу
            $result = MathHelper::calculate($expression);
        } catch (\Exception $e) {
            // Якщо сталася помилка, відображаємо повідомлення
            return view('welcome')->withErrors(['expression' => 'Invalid expression.']);
        }

        // Повертаємо результат на ту ж саму сторінку
        return view('welcome', compact('result', 'expression'));
    }
}
