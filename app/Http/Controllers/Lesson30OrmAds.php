<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Model\Lesson30AdsCategory;
use App\Model\Lesson30AdsAdvertisement;
use App\Model\Lesson30AdsUser;
use Illuminate\Http\Request;

class Lesson30OrmAds extends Controller
{
//  -другой Lesson30Ads - ORM
//Урок 30. (laravel). Задача 1.  Реализуйте доску объявлений.
//На главной странице нашего сайта должен быть список рубрик объявлений.
//По заходу на определенную рубрику должен выводится список объявлений из данной рубрики. Пусть объявления сортируются по убыванию даты. //Под списком объявлений сделайте форму, с помощью которой можно будет оставить новое объявление.

    public function lesson30_3(Request $request)
    {
        $title = 'Список Категории';
         $categoriesAds = Lesson30AdsCategory::All();
        return view('Lesson30OrmAds.elem.categoriesAds', ['categoriesAds' => $categoriesAds, 'title' => $title]);
    }

public function lesson30_3Ads(Request $request,$id)
    {
        if($request->has('submit')) {
           $name = $request->input('name');
            $text = $request->input('text');
            $phone = $request->input('phone');
            if ($name != '' and $text != ''and $phone != '') {
                $user =  Lesson30AdsUser::where('name',$name)->first();

                if($user == null) {
                    $addUser = new Lesson30AdsUser(['name'=>$name,'phone'=>$phone]);
                    $addUser-> save();
                    $user =  Lesson30AdsUser::where('name',$name)->first();
                }

                if ($user->phone != $phone){
                    $updatePhone = Lesson30AdsUser::find($user->id);
                    $updatePhone->phone = $phone;
                    $updatePhone-> save();
                    $request->session()->flash('tel', 'Ваш телефон обновлен!');
                }

                $Ads =Lesson30AdsAdvertisement::
                where([
                    ['category_id', $id],
                    ['user_id', $user->id],
                    ['text', $text]
                ])->value('text');

                if($Ads == null) {
                    $addAds = new Lesson30AdsAdvertisement;

                    $addAds->text = $text;

                    $addAds->category_id = $id;
                    $addAds = $user->advertisementUser()->save($addAds);
                    $request->session()->flash('ok', 'Ваше объявление успешно добавленно!');

                    return redirect('lessonorm30-3/ads/' . $id);

                } else {
                    $request->session()->flash('ok', 'Ваше сообщение уже есть на сайте!');
                        return redirect('lessonorm30-3/ads/'.$id);
                    }

            }else{
                $request -> session() -> flash('sms', 'Заполните все поля!');
                return redirect() -> back() -> withInput();
            }
//
        }else {
            $categoryAds = Lesson30AdsCategory::find($id);
    $categoryAdsUsers = Lesson30AdsAdvertisement::with('category', 'user')->where('category_id', $id)->Orderby('date', 'desc')->get();

            return view('Lesson30OrmAds.elem.categoryAds', ['categoryAdsUsers' => $categoryAdsUsers,'categoryAds' => $categoryAds]);
        }

  }
  }


