<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/services', 'ServiceController@index')->name('services');

Route::get('/blog', 'BlogController@index')->name('blog');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/home/content/edit/{id}','HomeController@edit')->name('editContent');

Route::put('home/content/update/{id}','HomeController@update')->name('updateContent');

Route::put('home/logo/update/{id}','HomeController@updateLogo')->name('updateLogo');

Route::put('home/carousel/update/{id}','MainImageController@update')->name('updateMainImage');

Route::get('/home/logo/edit','HomeController@editLogo')->name('editLogo');



Route::get('/home/carousel', 'MainImageController@index')->name('mainImage');

Route::get('/home/carousel/create', 'MainImageController@create')->name('createMainImage');

Route::get('/home/carousel/edit/{id}','MainImageController@edit')->name('editMainImage');

Route::get('/home/carousel/show/{id}', 'MainImageController@show')->name('showMainImage');

Route::delete('/home/carousel/delete/{id}','MainImageController@destroy')->name('deleteMainImage');

Route::post('/home/carousel/store', 'MainImageController@store')->name('storeMainImage');



Route::get('/home/testimonials', 'TestimonialController@index')->name('testimonials');

Route::get('/home/testimonial/show/{id}', 'TestimonialController@show')->name('showTestimonial');

Route::delete('/home/testimonial/delete/{id}','TestimonialController@destroy')->name('deleteTestimonial');

Route::get('/home/testimonial/create', 'TestimonialController@create')->name('createTestimonial');

Route::post('/home/testimonial/store', 'TestimonialController@store')->name('storeTestimonial');

Route::get('/home/testimonial/edit/{id}','TestimonialController@edit')->name('editTestimonial');

Route::put('home/testimonial/update/{id}','TestimonialController@update')->name('updateTestimonial');

Route::get('/home/mail', 'HomeController@mail')->name('sendMail');

Route::get('/home/change/service', 'ServiceController@home')->name('changeServices');



Route::get('/home/change/service/show/{id}', 'ServiceController@show')->name('showService');

Route::delete('/home/change/service/delete/{id}','ServiceController@destroy')->name('deleteService');

Route::get('/home/change/service/create', 'ServiceController@create')->name('createService');

Route::get('/home/change/service/edit/{id}','ServiceController@edit')->name('editService');

Route::put('home/change/service/update/{id}','ServiceController@update')->name('updateService');

Route::post('/home/change/service/store', 'ServiceController@store')->name('storeService');

Route::get('/home/change/service/edit/icon/{id}','ServiceController@editIcon')->name('editServiceicon');

Route::put('home/change/service/update/icon/{id}','ServiceController@updateIcon')->name('updateServiceicon');

Route::post('/home/newsletter/store', 'HomeController@news')->name('newsMail');



Route::get('/home/projects', 'ProjectController@index')->name('projets');

Route::get('/home/projects/create', 'ProjectController@create')->name('createProjet');

Route::get('/home/projects/show/{id}', 'ProjectController@show')->name('showProjet');

Route::post('/home/projects/store', 'ProjectController@store')->name('storeProjet');

Route::get('/home/projects/edit/{id}','ProjectController@edit')->name('editProjet');

Route::put('home/projects/update/{id}','ProjectController@update')->name('updateProjet');

Route::delete('/home/project/delete/{id}','ProjectController@destroy')->name('deleteProjet');



Route::get('/home/article', 'ArticleController@index')->name('article');

Route::get('/home/article/list', 'ArticleController@indexlist')->name('articlelist');

Route::get('/home/article/create', 'ArticleController@create')->name('createArticle');

Route::get('/home/article/show/{id}', 'ArticleController@show')->name('showArticle');

Route::post('/home/article/store', 'ArticleController@store')->name('storeArticle');

Route::get('/home/article/edit/{id}','ArticleController@edit')->name('editArticle');

Route::put('home/article/update/{id}','ArticleController@update')->name('updateArticle');

Route::put('home/article/valid/{id}','ArticleController@valid')->name('validArticle');

Route::delete('/home/article/delete/{id}','ArticleController@destroy')->name('deleteArticle');


Route::get('/home/categorie', 'CategorieController@index')->name('categorie');

Route::get('/home/categorie/create', 'CategorieController@create')->name('createCategorie');

Route::get('/home/categorie/show/{id}', 'CategorieController@show')->name('showCategorie');

Route::post('/home/categorie/store', 'CategorieController@store')->name('storeCategorie');

Route::get('/home/categorie/edit/{id}','CategorieController@edit')->name('editCategorie');

Route::put('home/categorie/update/{id}','CategorieController@update')->name('updateCategorie');

Route::delete('/home/categorie/delete/{id}','CategorieController@destroy')->name('deleteCategorie');


Route::get('/home/tag', 'TagController@index')->name('tag');

Route::get('/home/tag/create', 'TagController@create')->name('createTag');

Route::get('/home/tag/show/{id}', 'TagController@show')->name('showTag');

Route::post('/home/tag/store', 'TagController@store')->name('storeTag');

Route::get('/home/tag/edit/{id}','TagController@edit')->name('editTag');

Route::put('home/tag/update/{id}','TagController@update')->name('updateTag');

Route::delete('/home/tag/delete/{id}','TagController@destroy')->name('deleteTag');


Route::get('/comment/tag', 'CommentController@index')->name('comment');

Route::get('/comment/tag/create', 'CommentController@create')->name('createComment');

Route::get('/comment/tag/show/{id}', 'CommentController@show')->name('showComment');

Route::post('/comment/tag/store', 'CommentController@store')->name('storeComment');

Route::get('/comment/tag/edit/{id}','CommentController@edit')->name('editComment');

Route::put('comment/tag/update/{id}','CommentController@update')->name('updateComment');

Route::delete('/comment/tag/delete/{id}','CommentController@destroy')->name('deleteComment');


Route::get('/blog/search', 'BlogController@filter')->name('searchArticle');

Route::get('/blog/search/categorie', 'BlogController@filterCate')->name('searchCategorie');

Route::get('/blog/search/tag', 'BlogController@filterTag')->name('searchTag');

Route::get('/blog/show/{id}', 'BlogController@show')->name('showBlog');

Route::get('/add_content', 'PivotController@index')->name('change');

Route::get('/content', 'PivotController@content')->name('contenu');

Route::get('/validate', 'PivotController@valid')->name('validate');

Route::get('/users', 'PivotController@utili')->name('users');

Route::get('/home/user/show/{id}', 'UserController@show')->name('showUser');

Route::delete('/user/delete/{id}','UserController@destroy')->name('deleteUser');

Route::get('/user/create', 'UserController@create')->name('createUser');

Route::post('/user/store', 'UserController@store')->name('storeUser');

