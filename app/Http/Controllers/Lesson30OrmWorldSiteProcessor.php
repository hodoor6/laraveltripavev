<?php



namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Model\Lesson30WorldSiteCountry;
use App\Model\Lesson30WorldSiteCity;
use App\Model\Lesson30WorldSiteShowplace;
use Illuminate\Database\Eloquent\SoftDeletes;


//Другой подход

//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. -
//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. --

class Lesson30OrmWorldSiteProcessor extends Controller
{
    public $title;

    //список стран
    public function allCountry()
    {
        $country = Lesson30WorldSiteCountry::all();
        return $country;
    }

    //список городов по ид страны
    public function allCity($id)
    {
        $country = Lesson30WorldSiteCity::all()->where('country_id', $id);
        return $country;
    }

    //название города
    public function city($city)
    {
        $title = Lesson30WorldSiteCity::findOrFail($city);
        return $title;
    }

    //название страны
    public function country($id)
    {
        $country = Lesson30WorldSiteCountry::findOrFail($id);
        return $country;
    }

    //все достопримечательности по сити_ид
    public function allLandmark($city)
    {
        $country = Lesson30WorldSiteShowplace::all()->where('city_id', $city);
        return $country;
    }

    //достопримечательность
    public function landmark($land)
    {
        $country = Lesson30WorldSiteShowplace::where('id', $land)->first();
        return $country;
    }

    public function title($id, $city, $land, $title, $name, $q = null)
    {
        if (!$id and !$city and !$land) {
            $title = 'Список стран';
        } elseif ($id and !$city and !$land) {
            $title = 'Страна ' . $title->name . ': города ';
            $title .= "<a href=\"/lesson30-5orm/$name\">назад</a>";
        } elseif ($id and $city and !$land) {
            $title = 'Город ' . $title->name . ': список достопримечательностей ';
            $title .= "<a href=\"/lesson30-5orm/$name/$id\">назад</a>";
        } elseif ($id and $city and $land) {
            $title = 'Город ' . $title->name . ': ' . $q . ' ';
            $title .= "<a href=\"/lesson30-5orm/$name/$id/$city\">назад</a>";
        }
        return $title;
    }

    //добавить страну
    public function addCountry($name)
    {
        $country = new Lesson30WorldSiteCountry;
        $country->name = $name;
        $country->save();
    }

    //добавить город
    public function addCity($name, $id)
    {
        $country = new Lesson30WorldSiteCity;
        $country->name = $name;
        $country->country_id = $id;
        $country->save();
    }

    //добавить достопримечательность
    public function addLandmark($title, $text, $city)
    {
        $country = new Lesson30WorldSiteShowplace;
        $country->title = $title;
        $country->text = $text;
        $country->city_id = $city;
        $country->save();
    }

    //куда вернуться
    public function returnSait($sait, $country, $title, $a, $id, $name, $place = null)
    {
        return view($sait, [
            'country' => $country,
            'title' => $title,
            'a' => $a,
            'id' => $id,
            'name' => $name,
            'place' => $place
        ]);
    }




    public function deleteCountry($id)
    {
        $country = Lesson30WorldSiteCountry::findOrFail($id);
        $country->showplace()->delete();
        $country->cities()->delete();
        $country->delete();
    }

    //удалить город (и достопримечательности)
    public function deleteCity($id, $city)
    {
        $city = Lesson30WorldSiteCity::findOrFail($city);
        $city->showplaces()->delete();
        $city->delete();
    }

    //удалить достопримечательность
    public function deleteLandmark($land)
    {
        $landmark = Lesson30WorldSiteShowplace::findOrFail($land);
        $landmark->delete();
    }

    //изменить название страны
    public function updateCountry($id, $name)
    {
        $country = Lesson30WorldSiteCountry::findOrFail($id);
        $country->name = $name;
        $country->save();
    }

    //изменить название города
    public function updateCity($id, $name)
    {
        $city = Lesson30WorldSiteCity::findOrFail($id);
        $city->name = $name;
        $city->save();
    }

    //изменить данные достопримечательности
    public function updateLandmark($id, $name, $text)
    {
        $landmark = Lesson30WorldSiteShowplace::findOrFail($id);
        $landmark->title = $name;
        $landmark->text = $text;
        $landmark->save();
    }
}




