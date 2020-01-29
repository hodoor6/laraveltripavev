<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Lesson30CategoriesAds;
use App\Model\Lesson30Advertisement;
use Illuminate\Http\Request;

class Lesson30Ads extends Controller
{

//Урок 30. (laravel). Задача 1.  Реализуйте доску объявлений.
//На главной странице нашего сайта должен быть список рубрик объявлений.
//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.


    public function lesson30_3(Request $request)
    {
        $title = 'Главная страница. Список Категории';
         $categoriesAds = Lesson30CategoriesAds::All();
        return view('Lesson30Ads.elem.categoriesAds', ['categoriesAds' => $categoriesAds, 'title' => $title]);
    }

public function lesson30_3Ads(Request $request,$id)
    {
        if($request->has('submit')) {
           $name = $request->input('name');
            $text = $request->input('text');
            if ($name != '' and $text != '') {
                $addAds = new Lesson30Advertisement;

                $addAds->name = $name;
                $addAds->text = $text;

                $adsid = Lesson30CategoriesAds::find($id);
                $addAds = $adsid->advertisement()->save($addAds);
                $request -> session() -> flash('sms', 'Ваше объявление успешно добавленно!');
            return redirect('lesson30-3/ads/'.$id);
            }else{
                $request -> session() -> flash('sms', 'Заполните все поля!');
                return redirect() -> back() -> withInput();
            }

        }else {
            $categoryAds = Lesson30CategoriesAds::find($id);
                       $categoryAds->load(['advertisement' => function($query)
            {
                $query->orderBy('date', 'desc');
            }]);
            return view('Lesson30Ads.elem.categoryAds', ['categoryAds' => $categoryAds]);
        }


    }
    }


