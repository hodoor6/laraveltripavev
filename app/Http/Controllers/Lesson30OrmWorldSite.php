<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lesson30OrmWorldSite extends Controller
{

//Другой подход

//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. -
//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. --



public function allCountry(Lesson30OrmWorldSiteProcessor $test, $id = null, $city = null, $land = null)
{
    if (!$id and !$city and !$land) {
        $a = 'country';
        $title = 'Список стран';
        $country = $test -> allCountry();
    } elseif ($id and !$city and !$land) {
        $a = 'city';
        $title =  $test -> country($id);
        $title = $test -> title($id, $city, $land, $title, 'country');
        $country = $test -> allCity($id);
    } elseif ($id and $city and !$land) {
        $a = 'landmark';
        $title =  $test -> city($city);
        $title = $test -> title($id, $city, $land, $title, 'country');
        $country = $test -> allLandmark($city);
    } elseif ($id and $city and $land) {
        $a = 'text';
        $title =  $test -> city($city);
        $country = $test -> landmark($land);
        $title = $test -> title($id, $city, $land, $title, 'country', $country -> title);
    }
    $name = 'country';
    return $test -> returnSait('Lesson30OrmWorldSite.layouts.allcountry', $country, $title, $a, $id, $name);
}
//админка
public function admin(Lesson30OrmWorldSiteProcessor $test, Request $request, $id = null, $city = null, $land = null)
{
    $name = 'admin';
    if (!$id and !$city and !$land) {
        if ($request -> has('name')) {
            $result = $request -> input('name');
            if ($result != '') {
                $test -> addCountry($result);
                $this -> messageSms($request, 'Добавлена новая страна!');
                return redirect() -> back();
            } else {
                return $this -> sessionBack($request);
            }
        }
        $title = 'Список стран';
        $a = 'country';
        $place = 'Добавить страну';
        $country = $test -> allCountry();
    }
    if ($id and !$city and !$land) {
        if ($request -> has('name')) {
            $result = $request -> input('name');
            if ($result != '') {
                $test -> addCity($result, $id);
                $this -> messageSms($request, 'Добавлен новый город!');
                return redirect() -> back();
            } else {
                return $this -> sessionBack($request);
            }
        }
        $a = 'city';
        $place = 'Добавить город';
        $title =  $test -> country($id);
        $title = $test -> title($id, $city, $land, $title, 'admin');
        $country = $test -> allCity($id);
    }
    if ($id and $city and !$land) {
        if ($request -> has('start')) {
            $title = $request -> input('name');
            $text = $request -> input('text');
            if ($title != '' and $text != '') {
                $test -> addLandmark($title, $text, $city);
                $this -> messageSms($request, 'Добавлена новая достопримечательность города!');
                return redirect() -> back();
            } else {
                return $this -> sessionBack($request);
            }
        }
        $a = 'landmark';
        $place = 'Заголовок';
        $title =  $test -> city($city);
        $title = $test -> title($id, $city, $land, $title, 'admin');
        $country = $test -> allLandmark($city);
    }
    if ($id and $city and $land) {
        $a = 'text';
        $place = '1010';
        $title =  $test -> city($city);
        $country = $test -> landmark($land);
        $title = $test -> title($id, $city, $land, $title, 'admin', $country -> title);
    }
    return $test -> returnSait('Lesson30OrmWorldSite.admin.update', $country, $title, $a, $id, $name, $place);
}
//для удаления
public function delete(Lesson30OrmWorldSiteProcessor $test, Request $request, $id = null, $city = null, $land = null)
{
    if ($id and !$city and !$land) {
        $test -> deleteCountry($id);
        $str = "admin";
        $this -> messageSms($request, 'Страна удалена!');
    }
    if ($id and $city and !$land) {
        $test -> deleteCity($id, $city);
        $str = "admin/$id";
        $this -> messageSms($request, 'Город удален!');
    }
    if ($id and $city and $land) {
        $test -> deleteLandmark($land);
        $str = "admin/$id/$city";
        $this -> messageSms($request, 'Достопримечательность города удалена!');
    }

    $uri = 'lesson30-5orm/';
    $uri.=$str;
    return redirect($uri);
}
//для редактирования
public function update(Lesson30OrmWorldSiteProcessor $test, Request $request, $id = null, $city = null, $land = null)
{
    $a = ''; $title = ''; $name = ''; $place = ''; $country = '';
    if ($id and !$city and !$land) {
        if ($request -> has('start')) {
            $name = $request -> input('name');
            if ($name != '' ) {
                $test -> updateCountry($id, $name);
                $str = "admin";
                $this -> messageSms($request, 'Данные изменены!');

                $uri = 'lesson30-5orm/';
                $uri.=$str;
                return redirect($uri);

            } else {
                return $this -> sessionBack($request);
            }
        }
        $country = $test -> country($id);
        $name = $country -> name;
    }
    if ($id and $city and !$land) {
        if ($request -> has('start')) {
            $name = $request -> input('name');
            if ($name != '' ) {
                $test -> updateCity($city, $name);
                $str = "admin/$id";
                $this -> messageSms($request, 'Данные изменены!');

                $uri = 'lesson30-5orm/';
                $uri.=$str;
                return redirect($uri);

            } else {
                return $this -> sessionBack($request);
            }
        }
        $city = $test -> city($city);
        $name = $city -> name;
    }
    if ($id and $city and $land) {
        if ($request -> has('start')) {
            $name = $request -> input('name');
            $text = $request -> input('text');
            if ($name != '' and $text != '') {
                $test -> updateLandmark($land, $name, $text);
                $str = "admin/$id/$city";
                $this -> messageSms($request, 'Данные изменены!');

                $uri = 'lesson30-5orm/';
                $uri.=$str;

                $str = $uri;
                return redirect($uri);

            } else {
                return $this -> sessionBack($request);
            }
        }
        $land = $test -> landmark($land);
        $name = $land -> title;
        $place = $land -> text;
        $a = 'landmark';
        $str = "admin/$id/$city";
    }
    return $test -> returnSait('Lesson30OrmWorldSite.layouts.update', $country, $title, $a, $id, $name, $place);
}
private function messageSms($request, $str)
{
    return $request -> session() -> flash('message', $str);
}
private function sessionBack($request)
{
    $request -> session() -> flash('sms', 'Поле не должно быть пустым!');
    return redirect() -> back() -> withInput();
}
}














