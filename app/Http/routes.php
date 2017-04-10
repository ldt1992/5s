<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
|   \Excel::create == use Excel + Excel::create
|
|
|
*/
Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
    ]);
// Trang chủ admin
Route::get('admin', function() {
    return view('admin/pages/index');
});
// Group Entiry
Route::group(['prefix' => 'admin'], function() {

// ------------------ AJAX -------------------------chõ này
    Route::group(['prefix' => 'test'], function() {
        Route::get('ajax', 'AjaxController@getList');
        Route::get('ajax/{idSection}', 'AjaxController@getSubsection');
        // Route::get('ajax/getID', 'AjaxController@getDetail');
    });
// -------------------------FACTORY-------------------------
    Route::group(['prefix' => 'factory'], function() {
    	// admin/factory/list
        Route::get('list','FactoryController@getList');

        Route::get('add','FactoryController@getAdd');
        Route::post('add',['as'=>'postAddFactory','uses'=>'FactoryController@postAdd']);

        Route::get('edit/{id}','FactoryController@getEdit');
        Route::post('edit/{id}',['as'=>'postEditFactory','uses'=>'FactoryController@postEdit']);

        Route::get('delete/{id}', 'FactoryController@getDelete');
    });
// ---------------------END FACTORY-------------------------

// -------------------------DEPARTMENT-----------------------
    Route::group(['prefix' => 'department'], function() {
        // admin/department/list
        Route::get('list','DepartmentController@getList');

        Route::get('add','DepartmentController@getAdd');
        Route::post('add',['as'=>'postAddDept','uses'=>'DepartmentController@postAdd']);

        Route::get('edit/{id}','DepartmentController@getEdit');
        Route::post('edit/{id}',['as'=>'postEditDept','uses'=>'DepartmentController@postEdit']);

        Route::get('delete/{id}', 'DepartmentController@getDelete');
    });
// ------------------END DEPARTMENT-------------------------

// -------------------------SECTION-----------------------
    Route::group(['prefix' => 'section'], function() {
        // admin/section/list
        Route::get('list','SectionController@getList');

        Route::get('add','SectionController@getAdd');
        Route::post('add',['as'=>'postAddSect','uses'=>'SectionController@postAdd']);

        Route::get('edit/{id}','SectionController@getEdit');
        Route::post('edit/{id}',['as'=>'postEditSect','uses'=>'SectionController@postEdit']);

        Route::get('delete/{id}', 'SectionController@getDelete');
    });
// ---------------------END SECTION-------------------------

// -------------------------DETAIL-----------------------
    Route::group(['prefix' => 'detail'], function() {
        // admin/detail/list
        Route::get('list','DetailController@getList');

        Route::get('add','DetailController@getAdd');
        Route::post('add',['as'=>'postAddDetail','uses'=>'DetailController@postAdd']);

        Route::get('edit/{id}','DetailController@getEdit');
        Route::post('edit/{id}',['as'=>'postEditDetail','uses'=>'DetailController@postEdit']);

        Route::get('delete/{id}', 'DetailController@getDelete');
    });
// ---------------------END DETAIL-------------------------

// -----------------------SUBSECTION-----------------------
    Route::group(['prefix' => 'subsection'], function() {
        // admin/subsection/list
        Route::get('list','SubsectionController@getList');

        Route::get('add','SubsectionController@getAdd');
        Route::post('add',['as'=>'postAddSubsect','uses'=>'SubsectionController@postAdd']);

        Route::get('edit/{id}','SubsectionController@getEdit');
        Route::post('edit/{id}',['as'=>'postEdit','uses'=>'SubsectionController@postEdit']);

        Route::get('delete/{id}', 'SubsectionController@getDelete');
    });
// ------------------END SUBSECTION-------------------------

// -----------------------FACT_SECT-----------------------
    Route::group(['prefix' => 'fact_sect'], function() {
        // admin/fact_section/list
        Route::get('list','Fact_SectController@getList');

        Route::get('add','Fact_SectController@getAdd');
        Route::post('add',['as'=>'postAddFactSect','uses'=>'Fact_SectController@postAdd']);

        Route::get('edit/{fact_id}/{sect_id}','Fact_SectController@getEdit');
        Route::post('edit/{fact_id}/{sect_id}',['as'=>'postEditFactSect','uses'=>'Fact_SectController@postEdit']);

        Route::get('delete/{fact_id}/{sect_id}', 'Fact_SectController@getDelete');
    });
// ------------------END FACT_SECT-------------------------

// -----------------------SEWING LINES-----------------------
    Route::group(['prefix' => 'sewingline'], function() {
        // admin/fact_section/list
        Route::get('list','SewingLineController@getList');

        /*Route::get('add','SewingLinesController@getAdd');
        Route::post('add',['as'=>'postAddSewing','uses'=>'SewingLinesController@postAdd']);

        Route::get('edit/{id}','SewingLinesController@getEdit');
        Route::post('edit/{id}',['as'=>'postEditSewing','uses'=>'Sewing_LinesController@postEdit']);

        Route::get('delete/{id}', 'SewingLinesController@getDelete');*/
    });
// ------------------ ./SEWING LINES-------------------------

// -----------------------SubSect_Dept_Detail_week-----------------------
    Route::group(['prefix' => 'subsect_dept_detail'], function() {
        // admin/subsect_dept_detail_week/list
        Route::get('list','SubSect_Dept_DetailController@getList');
        
        Route::get('add', 'SubSect_Dept_DetailController@getAdd');
        Route::post('add', ['as'=>'postAddSubsect_Dept_Detail','uses'=>'SubSect_Dept_DetailController@postAdd']);
        // Import Export file
        Route::get('importExport', 'SubSect_Dept_DetailController@importExport');
        Route::get('exportExcel/{type}', 'SubSect_Dept_DetailController@exportExcel');
        Route::post('importExcel', 'SubSect_Dept_DetailController@importExcel');
    });

// GROUP FACTORY - SECTION - SUBSECTION - DEPARTMENT as GroupA
    Route::group(['prefix' => 'groupA'], function() {
        //  admin/groupA/list
        Route::get('list','Fact_Sect_SubSect_DeptController@getList');
    });
});

// -------------- QUAN HỆ 1 - N -------------------
// 1 Section có nhiều Subsection
Route::get('admin/relation/one-many-1', function(){
    $data=App\Section::find(1)->subsections()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
// 1 Subsection chỉ thuộc duy nhất 1 Section
Route::get('admin/relation/one-many-2', function(){
    $data=App\Subsection::find(1)->sections()->get()->toArray();
    echo "<pre>";
    print_r($data);
    echo "</pre>";
});
// -------------- END QUAN HỆ 1 - N -------------------

// Modifier Table subsect_dept_detail
Route::get('foreign', function() {
    Schema::table('subsect_dept_detail', function($table) {
        // Modify column ->change();
        $table->integer('Subsect_ID')->length(10)->change();
        $table->integer('Dept_ID')->length(10)->change();
        $table->integer('Detail_ID')->length(10)->change();
        // Foreign key, column MUST BE unsigned(), length(10)
        $table->foreign('Dept_ID')->references('id')->on('department')->onDelete('cascade');
        $table->foreign('Detail_ID')->references('id')->on('detail')->onDelete('cascade');
        $table->foreign('Subsect_ID')->references('id')->on('subsection')->onDelete('cascade');
    });
});

// Test Import, Export Excel
Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
