<?php
URL::forceScheme('https');
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Wizard
Route::get('install', 'Expert\WizardController@install')->name('install');
Route::post('db-connection', 'Expert\WizardController@dbConnection')->name('dbConnection');
Route::post('wizard-action', 'Expert\WizardController@wizardAction')->name('wizardAction');

//Work-Start
Route::group(['middleware'=>'dbWizard'], function () {

    Route::get('login', 'Expert\HomeController@login')->name('login');
    Route::post('login', 'Expert\HomeController@loginAction')->name('login');
    Route::get('logout', 'Expert\HomeController@logout')->name('logout');

    Route::group(['middleware'=>'userAuth'], function () {
    Route::get('/', 'Expert\HomeController@app')->name('home');

    	//Admin
    	Route::group(['as'=>'Admin.', 'prefix'=>'admin', 'namespace'=>'Admin'], function () {
        	Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
        	Route::resource('userrole', 'UserroleController');
        	Route::resource('usermanage', 'UserController');
        	Route::get('systemlogs', 'HomeController@systemlogs')->name('systemlogs');
        	Route::get('settings', 'HomeController@settings')->name('settings');
        	Route::post('settingsupdate', 'HomeController@settingsupdate')->name('settingsupdate');
        	
        	Route::get('dashboard/0','HomeController@dashboardvaluezero')->name('zero');
            Route::get('dashboard/1','HomeController@dashboardvalueone')->name('one');

             Route::get('profileupdate', 'UpdateUserController@profileupdate')->name('profileupdate');
            Route::post('updateuser', 'UpdateUserController@updateuser')->name('updateuser');

            Route::get('changepassword', 'UpdateUserController@changepassword')->name('changepassword');
            Route::post('updateuserpass', 'UpdateUserController@updateuserpass')->name('updateuserpass');


            //-------------product type----------
            Route::get('producttype','ProducttypeController@producttype');
            Route::get('producttypeadd','ProducttypeController@producttypeadd');
            Route::post('storetypeadd','ProducttypeController@storetypeadd');
            Route::get('typedelete/{id}','ProducttypeController@typedelete');
            Route::get('producttypeEdit/{id}','ProducttypeController@producttypeEdit');
            Route::post('producttypeUpdate/{id}','ProducttypeController@producttypeUpdate');



            Route::get('productdetails','ProducttypeController@productdetails');
            Route::get('productdetailsadd','ProducttypeController@productdetailsadd');
            Route::post('storeproductadd','ProducttypeController@storeproductadd');
            Route::get('productdelete/{id}','ProducttypeController@productdelete');
            Route::get('productEdit/{id}','ProducttypeController@productEdit');
            Route::post('productUpdate/{id}','ProducttypeController@productUpdate');

            Route::get('producttypesize/{product_type}','ProducttypeController@producttypesize');

            //--------company details--------
            Route::get('companydetails','companyController@companydetails');
            Route::get('addcompany','companyController@addcompany');
            Route::post('companystore','companyController@companystore');
            Route::get('companydelete/{id}','companyController@companydelete');

            //-------size -----------
            Route::get('productsize','sizeController@productsize');
            Route::get('addproductsize','sizeController@addproductsize');
            Route::post('storeproductsize','sizeController@storeproductsize');
            Route::get('sizedelete/{id}','sizeController@sizedelete');
            Route::get('sizeEdit/{id}','sizeController@sizeEdit');
            Route::post('sizeUpdate/{id}','sizeController@sizeUpdate');

            //----------customer details-----------
            Route::get('customerdetails','customerController@customerdetails');
            Route::get('addcustomer','customerController@addcustomer');
            Route::post('customerstore','customerController@customerstore');
            Route::get('customerdlt/{id}','customerController@customerdlt');
            Route::get('customerEdit/{id}','customerController@customerEdit');
            Route::post('customerUpdate/{id}','customerController@customerUpdate');
             Route::get('deactive/{id}','customerController@deactive');
            Route::get('active/{id}','customerController@active');
            

            //---------cashmemo -------------//
            //
            Route::get('otpmessage/{id}','cashmemoController@otpMessage');

            Route::get('cashmemo','cashmemoController@cashmemo');
            Route::get('allcashmemo','cashmemoController@allcashmemo');
            Route::get('cashmemoprint/{id}','cashmemoController@cashmemoprint');


            Route::get('editCashmemo/{id}','cashmemoController@editCashmemo');

            Route::post('updatecashmemo','cashmemoController@updatecashmemo');

            Route::get('editcartwith','cashmemoController@editcartwith');
            //Route::get('addcashmemo','cashmemoController@addcashmemo');


            Route::get('productcode/{product_code}','cashmemoController@productcode');
            Route::get('product_code/{product_code}','cashmemoController@product_code');
            Route::get('customercode/{customer_code}','cashmemoController@customercode');
            Route::get('add_item_to_carts','cashmemoController@add_item_to_carts');
            Route::get('med_sales_delete_from_cart','cashmemoController@med_sales_delete_from_cart');
            Route::get('med_sales_delete_from_cart_add_page','cashmemoController@med_sales_delete_from_cart_add_page');
            Route::post('cashmemomanage','cashmemoController@cashmemomanage');
            Route::get('billprint/{nextno}','cashmemoController@invoicecashmemo')->name('billprint');
            Route::get('calculate_total','cashmemoController@calculate_total');
            Route::get('calculate_total_cartoon','cashmemoController@calculate_total_cartoon');
            Route::get('calculate_total_comission','cashmemoController@calculate_total_comission');
            Route::get('calculate_total_quantity','cashmemoController@calculate_total_quantity');
            Route::get('calculate_total_ctn_pcs','cashmemoController@calculate_total_ctn_pcs');
            Route::get('update','cashmemoController@update');
            Route::get('gradewisedata','cashmemoController@gradewisedata');
            Route::get('dltcashmemo/{id}','cashmemoController@dltcashmemo');
            Route::get('checkcustomer','cashmemoController@checkcustomer');


            //-----------dealers-----------//

            Route::get('dealers','dealersController@dealers');
            Route::get('addealer','dealersController@addealer');
            Route::post('dealerstore','dealersController@dealerstore');
            Route::get('dealerdlt/{id}','dealersController@dealerdlt');



        //----------------- report---------------

            Route::get('customerduestatement','reportController@customerduestatement');
            Route::get('truck_count','reportController@truck_count');
            Route::post('tructcountdate','reportController@tructcountdate');
            Route::get('customerdetailsreport','reportController@customerdetails');
            Route::post('monthlycomission','reportController@monthlycomission');
            Route::post('dailysalestatment','reportController@dailysalestatment');
            Route::post('dealerwisesalestatment','reportController@dealerwisesalestatment');
            Route::post('dealerwisestatement','reportController@dealerwisestatement');
            Route::post('monthlysalestatement','reportController@monthlysalestatement');
            Route::post('monthlytargetstatement','reportController@monthlytargetstatement');
            Route::post('quarterlytarget','reportController@quarterlytarget');

            Route::get('monthlycomissionselctmonth','reportController@monthlycomissionselctmonth');
            Route::get('dealerwisesalestatmentdateselect','reportController@dealerwisesalestatmentdateselect');
            Route::get('monthlytargetstatementselectdate','reportController@monthlytargetstatementselectdate');
            Route::get('monthlysalestatementdateselect','reportController@monthlysalestatementdateselect');
            Route::get('quarterlytargetselectdate','reportController@quarterlytargetselectdate');
            
            Route::get('selectyear','reportController@selectyear');
            Route::post('yearlysalesstatement','reportController@yearlysalesstatement');


            Route::get('dealerwisedateselect','reportController@dealerwisedateselect');
            Route::get('dealerstatment','reportController@dealerstatment');

            Route::get('selectdatedailysales','reportController@selectdatedailysales');


    	});


    });

});



           
