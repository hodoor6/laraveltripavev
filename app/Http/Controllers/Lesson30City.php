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

//Урок 30. (laravel). Задача 5.  Реализуйте сайт про города и страны. -
//--Модифицируйте предыдущую задачу так, чтобы на сайте появилась админка, в которой можно будет добавлять страны, города этих стран, достопримечательности и их описание.-Реализуйте добавление, редактирование и удаление. --


    public function lesson30_5admin(Request $request)
    {
        $showplace = Lesson30myShowplace::find(1);


        $title = 'Админ панель';
        $showplaces = Lesson30myShowplace::All();



        return view('Lesson30City.elem.admin', ['showplaces' => $showplaces, 'title' => $title]);
    }

    public function lesson30_5adminDelete(Request $request,$id)
    {
        $showplace = Lesson30myShowplace::find($id);
              $showplace-> destroy($id);



        $request->session()->flash('ok', 'Достопримечательность Удаленна');

        return redirect('lesson30-5/admin/') ;

    }

    public function lesson30_5adminEdit(Request $request, $id)
    {

        if ($request->has('submit')) {
            $country = ucfirst(trim($request->input('country')));
            $city = ucfirst(trim($request->input('city')));
            $title = ucfirst(trim($request->input('title')));
            $address = ucfirst(trim($request->input('address')));
            $description = ucfirst(trim($request->input('description')));

            if ($country != '' and $city != '' and $title != '' and $address != '' and $description != '') {



                $saveEditShowplace = Lesson30myShowplace::find($id);
                $saveEditCountry = Lesson30myCountry::find($saveEditShowplace->country_id);


                if ($saveEditCountry->country == $country ){

                    $newIdCountry = Lesson30myCountry::where('country',$country)->value('id');


                }else{

                    $checkCityInCountry = Lesson30myCity::where('country_id',$saveEditCountry->id)->first();
                    $countryCheck = Lesson30myCountry::where('country',$country)->first();

if($checkCityInCountry !== null) {


    if ($saveEditCountry->id == $checkCityInCountry->country_id and $countryCheck !== null) {

        $checkCountryInCity = Lesson30myCity::where('city', $city)->first();

        if ($countryCheck->id == $checkCountryInCity->country_id) {
            $newIdCountry = Lesson30myCountry::where('country', $country)->value('id');

        } else {

            $request->session()->flash('checkCityInCountry', 'Город ' . $city . ' уже существует в ' . $saveEditCountry->country . ' Ведите город который существует в ' . $country);
            return redirect()->back()->withInput();
        }


    } else {
        $saveCountry = new Lesson30myCountry;
        $saveCountry->country = $country;
        $saveCountry->save();
        $newIdCountry = Lesson30myCountry::where('country', $country)->value('id');
    }

}else{
    $newIdCountry = Lesson30myCountry::where('country', $country)->value('id');

}
                }


                $saveEditCity = Lesson30myCity::find($saveEditShowplace->city_id);


                if ($saveEditCity->city == $city ){

                    $newIdCity = Lesson30myCity::where('city',$city)->value('id');
                }else {
                    $cityCheck = Lesson30myCity::where('city', $city)->first();

                    if ($cityCheck!== null) {

                        if ($saveEditCity->country_id == $cityCheck->country_id) {


                            $newCity = new Lesson30myCity;
                            $newCity->city = $city;
                            $newCity->country_id = $newIdCountry;
                            $newCity->save();
                            $newIdCity = Lesson30myCity::where('city', $city)->value('id');

                        } else {

                            if($cityCheck->city == $city ){
                                $newIdCity = Lesson30myCity::where('city', $city)->value('id');

                            } else{
                                $request->session()->flash('cityCheck', $cityCheck->city . ' не существует в '. $country);
                                return redirect()->back()->withInput();
                            }


                        }

                }else{
                        $newCity = new Lesson30myCity;
                        $newCity->city = $city;
                        $newCity->country_id = $newIdCountry;
                        $newCity->save();
                        $newIdCity = Lesson30myCity::where('city', $city)->value('id');
                    }
                }

                $saveEditShowplace->title = $title;
                $saveEditShowplace->address = $address;
                $saveEditShowplace->description = $description;
                $saveEditShowplace->country_id = $newIdCountry;
                $saveEditShowplace->city_id = $newIdCity;

                $saveEditShowplace->save();
                $request->session()->flash('ok', 'Ваше достопримечательность успешно отредактирована!');
                return redirect('lesson30-5/admin/') ;



            }else{
                $request -> session() -> flash('sms', 'Заполните все поля!');
                return redirect() -> back() -> withInput();
            }

            } else {

                $showplace = Lesson30myShowplace::find($id);
                $title = 'Редактирование записи';
                return view('Lesson30City.elem.adminEdit', ['showplace' => $showplace, 'title' => $title]);

        }


}

public function lesson30_5adminAdd(Request $request)
{

    if ($request->has('submit')) {
        $country = ucfirst(trim($request->input('country')));
        $city = ucfirst(trim($request->input('city')));
        $title = ucfirst(trim($request->input('title')));
        $address = ucfirst(trim($request->input('address')));
        $description = ucfirst(trim($request->input('description')));

        if ($country != '' and $city != '' and $title != '' and $address != '' and $description != '') {

            $checkAddCountry = Lesson30myCountry::where('country',$country)->first();

           if( $checkAddCountry !==null) {
               if ($checkAddCountry->country == $country) {

                   $newIdCountry = Lesson30myCountry::where('country', $country)->value('id');

               } else {

                   $countryCheck = Lesson30myCity::where('country_id', $checkAddCountry->id)->first();



                   if ($checkAddCountry->id != $countryCheck->country_id or $countryCheck) {

//Сохранение города
                       $saveCountry = new Lesson30myCountry;
                       $saveCountry->country = $country;
                       $saveCountry->save();
                       $newIdCountry = Lesson30myCountry::where('country', $country)->value('id');

                   } else {
                       $request->session()->flash('countryCheck', 'Город ' . $city . ' уже существует в ' . $checkAddCountry->country . ' Ведите город который существует в ' . $country);
                       return redirect()->back()->withInput();
                   }

               }
           } else{

               $checkCity = Lesson30myCity::where('city',$city)->first();

               if($checkCity == null){
               $saveCountry = new Lesson30myCountry;
               $saveCountry->country = $country;
               $saveCountry->save();
               $newIdCountry = Lesson30myCountry::where('country', $country)->value('id');

           } else {
                   $checkCountryISexist = Lesson30myCountry::where('id',$checkCity->country_id )->first();
                $request->session()->flash('countryCheck', 'Город ' . $city . ' уже существует в ' . $checkCountryISexist->country . ' Ведите город который существует в ' . $country);
                return redirect()->back()->withInput();
            }
            }

            $checkCity = Lesson30myCity::where('city',$city)->first();
             if($checkCity !==null) {


                 if ($checkCity->city == $city) {

                     if ($checkAddCountry->id == $checkCity->country_id) {
                         $newIdCity = Lesson30myCity::where('city', $city)->value('id');

                     } else {
                         $request->session()->flash('cityCheck', $checkCity->city . ' не существует в ' . $country);
                         return redirect()->back()->withInput();
                     }

                 } else {
                     $cityCheck = Lesson30myCity::where('city', $city)->first();

                     if ($checkAddCountry->id != $cityCheck->country_id) {


                         $addNewCity = new Lesson30myCity;
                         $addNewCity->city = $city;
                         $addNewCity->country_id = $newIdCountry;
                         $addNewCity->save();
                         $newIdCity = Lesson30myCity::where('city', $city)->value('id');
                     } else {
                         $request->session()->flash('cityCheck', $cityCheck->city . ' не существует в этой стране! ' . $country);
                         return redirect()->back()->withInput();
                     }
                 }
             }else{
                 $addNewCity = new Lesson30myCity;
                 $addNewCity->city = $city;
                 $addNewCity->country_id = $newIdCountry;
                 $addNewCity->save();
                 $newIdCity = Lesson30myCity::where('city', $city)->value('id');
             }

            $AddShowplace  = New Lesson30myShowplace;

            $AddShowplace->title = $title;
            $AddShowplace->address = $address;
            $AddShowplace->description = $description;
            $AddShowplace->country_id = $newIdCountry;
            $AddShowplace->city_id = $newIdCity;

            $AddShowplace->save();
            $request->session()->flash('ok', 'Ваше достопримечательность успешно добавлена!');
            return redirect('lesson30-5/admin/') ;


        }else{
            $request -> session() -> flash('sms', 'Заполните все поля!');
            return redirect() -> back() -> withInput();
        }

    } else {


        $title = 'Добавление мероприятия';
        return view('Lesson30City.elem.adminAdd', ['title' => $title]);


    }



}




}








