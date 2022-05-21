<?php

namespace App\Http\Controllers;

use App\RuLevel;
use App\UkLevel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CalculatorController extends Controller
{
    public function show($language)
    {
        App::setLocale($language);
        session()->put('language', $language);
        session()->put('calculated', 0);

        if ($language == 'ru') {
            $main_levels = RuLevel::where('id', '<', 8)->get();
            $message = "Рассчитайте продолжительность и стоимость своего обучения польскому языку. Просто выберите свой нынешний уровень, а также тот уровень, к которому Вы стремитесь, и укажите дополнительные пожелания.";
        } else {
            $main_levels = UkLevel::where('id', '<', 8)->get();
            $message = "Розрахуйте тривалість та вартість свого навчання польської мови. Просто оберіть свій теперішній рівень, а також той рівень, який Ви хочете осягнути, та вкажіть додаткові побажання.";

        }

        $additional_message = "";

        return view('/calculator', ['message' => $message, 'additional_message' => $additional_message, 'main_levels' => $main_levels, 'language' => $language]);
    }

    public function count(Request $request, $language)
    {
        session()->put('calculated', 1);
        if ($request->method() == 'POST') {
            App::setLocale($language);
            session()->put('language', $language);
            if ($language == 'ru') {
                $main_levels = RuLevel::where('id', '<', 8)->get();
            } else {
                $main_levels = UkLevel::where('id', '<', 8)->get();
            }

            $first_level = RuLevel::where('id', '=', $request->input('first_level_txt'))->first();
            $last_level = RuLevel::where('id', '=', $request->input('last_level_txt'))->first();
            $id_1 = $first_level->show_id();
            $id_2 = $last_level->show_id();
            $additional_message = "";

            if ($id_1 == $id_2) {
                $duration = $first_level->show_duration();
                $price = $first_level->show_price();
            } elseif ($id_1 > $id_2 && $language == 'ru') {
                $duration = 0;
                $price = 0;
                $additional_message = "
            Обратите внимание! Уровень, которого Вы хотите достичь, должен быть выше нынешнего. Пожалуйста, пересчитайте!";
            } elseif ($id_1 > $id_2 && $language == 'uk') {
                $additional_message = "
            Зверніть увагу! Рівень, якого Ви хочете досягти, повинен бути вище теперішнього. Будь ласка, перерахуйте!";
            } else {
                $duration = 0;
                $price = 0;
                for ($i = $id_1; $i <= $id_2; $i++) {
                    $level = RuLevel::where('id', '=', $i)->first();
                    $duration += $level->show_duration();
                    $price += $level->show_price();
                }
            }

            $intensive = $request->input('intensive');
            $kp = $request->input('kp');
            $duration /= 8;

            if ($intensive == true && $id_1 == 1 && $id_2 > 2) {
                $duration -= 6.5;
                $price -= 4600;
            }

            if ($kp == true && $id_2 == 1) {
                $duration += 2.5;
                $price += 2000;
                $additional_message = "
            Обратите внимание! Для записи на курс История и культура Польши необходим уровень А2!";
            }

            if ($kp == true && $id_2 > 1) {
                $duration += 2.5;
                $price += 2000;
            }

            if (floor($duration) == 1 || floor($duration) == 21) {
                if ($language == 'ru') {
                    $month = "месяц";
                } else {
                    $month = "місяць";
                }
            } elseif (floor($duration) < 4 || floor($duration) == 22 || floor($duration) == 23) {
                if ($language == 'ru') {
                    $month = "месяца";
                } else {
                    $month = "місяці";
                }
            } else {
                if ($language == 'ru') {
                    $month = "месяцев";
                } else {
                    $month = "місяців";
                }
            }


            if ($language == 'ru') {
                $message = "
            Продолжительность Вашего обучения: " . $duration . " " . $month . "
            Стоимость Вашего обучения: " . $price . " грн.
            Обратите внимание, что почти к каждому курсу у нас предусмотрены скидки.
            С удовольствием расскажем Вам о них.";
            } else {
                $message = "
            Тривалість Вашого навчання: " . $duration . " " . $month . "
            Вартість Вашого навчання: " . $price . " грн.
            Зверніть увагу, що майже до кожного курсу у нас є знижки.
            З радістю розповімо Вам про них.";
            }

            return view('/calculator', ['price' => $price, 'message' => $message, 'additional_message' => $additional_message, 'duration' => $duration, 'main_levels' => $main_levels]);

        }

    }
}
