<?php

use App\Article;
use App\Baner;
use App\Contact;
use App\Icon;
use App\Logo;
use App\Map;
use App\Navigator;
use App\Presentation;
use App\Prime;
use App\Ready;
use App\Service;
use App\Tag;
use App\Team;
use App\TeamTitle;
use App\Testimonial;
use App\TestimonialTitle;
use App\Video;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

//main Routes
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    $navigator = Navigator::all();
    $logo=Logo::all();
    $baner=Baner::all();
    $service=Service::all();
    $icon=Icon::all();
    $presentation=Presentation::all();
    $video=Video::all();
    $testimonialTitle=TestimonialTitle::all();
    $testimonial=Testimonial::all();
    $services=Service::paginate(9)->fragment('serv');
    $teamTitle=TeamTitle::all();
    $team=Team::all();
    $ready=Ready::all();
    $contact=Contact::all();
    return view('index',compact("contact","ready","team","teamTitle","services","testimonial","testimonialTitle",'video','navigator','logo','baner','service','icon','presentation'));
})->name('main');;
Route::get('/services', function () {
    $navigator = Navigator::all();
    $logo=Logo::all();
    $baner=Baner::all();
    $service=Service::all();
    $icon=Icon::all();
    $presentation=Presentation::all();
    $video=Video::all();
    $testimonialTitle=TestimonialTitle::all();
    $testimonial=Testimonial::all();
    $services=Service::paginate(9)->fragment('serv');
    $teamTitle=TeamTitle::all();
    $team=Team::all();
    $ready=Ready::all();
    $contact=Contact::all();
    $prime=Prime::all();
    $article=Article::all();
    return view('service',compact("article","prime","contact","ready","team","teamTitle","services","testimonial","testimonialTitle",'video','navigator','logo','baner','service','icon','presentation'));
});
Route::get('/blogs', function () {
    $navigator = Navigator::all();
    $logo=Logo::all();
    $baner=Baner::all();
    $service=Service::all();
    $icon=Icon::all();
    $presentation=Presentation::all();
    $video=Video::all();
    $testimonialTitle=TestimonialTitle::all();
    $testimonial=Testimonial::all();
    $services=Service::paginate(9)->fragment('serv');
    $teamTitle=TeamTitle::all();
    $team=Team::all();
    $ready=Ready::all();
    $contact=Contact::all();
    $article=Article::all();
    $articles=Article::paginate(3)->fragment('arti');
    $tag=Tag::all();
    return view('blog',compact("articles","tag","article","contact","ready","team","teamTitle","services","testimonial","testimonialTitle",'video','navigator','logo','baner','service','icon','presentation'));
});
Route::get('/contacts', function () {
    $navigator = Navigator::all();
    $logo=Logo::all();
    $baner=Baner::all();
    $service=Service::all();
    $icon=Icon::all();
    $presentation=Presentation::all();
    $video=Video::all();
    $testimonialTitle=TestimonialTitle::all();
    $testimonial=Testimonial::all();
    $services=Service::paginate(9)->fragment('serv');
    $teamTitle=TeamTitle::all();
    $team=Team::all();
    $ready=Ready::all();
    $contact=Contact::all();
    $map=Map::all();
    return view('contact',compact("map","contact","ready","team","teamTitle","services","testimonial","testimonialTitle",'video','navigator','logo','baner','service','icon','presentation'));
});
//backoffice routes
Route::get('/blogPost',function(){
    $logo=Logo::all();
    $navigator=Navigator::all();
return view('/blogPost',compact('logo','navigator'));
});

Route::resource('/link','NavigatorController');
Route::resource('/logo','LogoController');
Route::resource('/baner', 'BanerController');
Route::resource('/presentation','presentationController');
Route::resource('/video', 'VideoController');
Route::resource('/testimonialTitle', 'TestimonialTitleController');
Route::resource('/testimonial', 'TestimonialController');
Route::resource('/service', 'ServiceController');
Route::resource('/teamTitle', 'TeamTitleController');
Route::resource('/team', 'TeamController');
Route::resource('/ready', 'ReadyController');
Route::resource('/contact', 'ContactController');
Route::resource('/prime', 'PrimeController');
Route::resource('/article', 'ArticleController');
Route::resource('/map', 'MapController');
Route::resource('/news', 'NewsLetterController');
Route::resource('/reaction', 'ReactionController');
Route::resource('/question', 'QuestionController');
Route::resource('/user', 'UserController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::post('/search','ArticleController@show');
// Route::post('/search',function(){

// });