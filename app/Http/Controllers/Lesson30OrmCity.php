<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Lesson30myCity;
use App\Model\Lesson30myCountry;
use App\Model\Lesson30myShowplace;
use Illuminate\Http\Request;

class Lesson30OrmCity extends Controller
{

//Урок 30. (laravel). Задача 4.   Реализуйте сайт про города и страны.
//На главной странице сайта должен быть список стран. Каждая страна должна представлять собой ссылку. При переходе по этой ссылке должен открыться список городов данной страны.
//Каждый город также должен представлять собой ссылку. При переходе по этой ссылке должен открыться список достопримечательностей данного города, также в виде ссылок. Каждая из этих ссылок должна вести на страницу с описанием достопримечательности.

            public function allCountry($id = null, $city = null, $land = null)
            {
                $country = '';
                if (!$id and !$city and !$land) {
                    $a = 'country';
                    $country = Lesson30myCountry::all();
                    $title = 'Список стран';
                } elseif ($id and !$city and !$land) {
                    $a = 'city';
                    $title = Lesson30myCountry::findOrFail($id);
                    $title = 'Страна '.$title -> country.': города ';
                    $title .= "<a href=\"/country\">назад</a>";
                    $country = Lesson30myCity::all() -> where('country_id', $id);
                } elseif ($id and $city and !$land) {
                    $a = 'landmark';
                    $title = Lesson30myCity::findOrFail($city);
                    $title = 'Город '.$title -> city.': список достопримечательностей ';
                    $title .= "<a href=\"/country/$id\">назад</a>";
                    $country = Lesson30myShowplace::all() -> where('city_id', $city);
                } elseif ($id and $city and $land) {
                    $a = 'text';
                    $title = Lesson30myCity::findOrFail($city);
                    $country = Lesson30myShowplace::where('id', $land) -> first();
                    $title = 'Город '.$title -> city.': '.$country -> title.' ';
                    $title .= "<a href=\"/country/$id/$city\">назад</a>";
                }
                return view('Lesson30OrmCity.layouts.allcountry', [
                    'country' => $country,
                    'title' => $title,
                    'a' => $a,
                    'id' => $id
                ]);
            }
}




