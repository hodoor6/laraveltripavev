<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Lesson30myCity;
use App\Model\Lesson30myCountry;
use App\Model\Lesson30myShowplace;
use Illuminate\Http\Request;

class Lesson30City extends Controller
{

//Урок 30. (laravel). Задача 4.   Реализуйте сайт про города и страны.
//На главной странице сайта должен быть список стран. Каждая страна должна представлять собой ссылку. При переходе по этой ссылке должен открыться список городов данной страны.
//Каждый город также должен представлять собой ссылку. При переходе по этой ссылке должен открыться список достопримечательностей данного города, также в виде ссылок. Каждая из этих ссылок должна вести на страницу с описанием достопримечательности.

    public function lesson30_4(Request $request)
    {
        $title = 'Список всех стран';
        $countriesAll = Lesson30myCountry::All()->sortBy('country');
        return view('Lesson30City.elem.countries', ['countriesAll' => $countriesAll, 'title' => $title]);
    }

    public function lesson30_4city(Request $request, $contryId)
    {
        $title = 'Список городов';
        $countryCities = Lesson30myCountry::findorFaiL($contryId);

        $countryCities->load(['cities' => function($query)
        {
            $query->orderBy('city', 'asc');
        }]);

        return view('Lesson30City.elem.cities', ['countryCities' => $countryCities, 'title' => $title]);
    }

    public function lesson30_4showplaces(Request $request, $cityid)
    {
        $title = 'Список достопримечательностей';
        $cityShowplacesAll = Lesson30myCity::find($cityid);

        $cityShowplacesAll->load(['showplaces' => function($query)
        {
            $query->orderBy('title', 'asc');
        }]);



        return view('Lesson30City.elem.listShowplaces', ['cityShowplacesAll' => $cityShowplacesAll, 'title' => $title]);
    }

    public function lesson30_4showplace(Request $request, $id)
    {
        $title = 'Достопримечательность';
        $showplace = Lesson30myShowplace::find($id);

        return view('Lesson30City.elem.showplace', ['showplace' => $showplace, 'title' => $title]);
    }




}








