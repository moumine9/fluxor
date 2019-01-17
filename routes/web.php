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

DEFINE('USER_ID', 1);

Route::get('/', function () {
    
    $user_id = USER_ID;

    //SELECT t1.list_id,t1.list_name,t1.list_owner, t2.campaign_id, SUM(t3.nbr_texts_sent) AS nbr_sms FROM lists t1 INNER JOIN assoc_campaigns_lists t2 ON t1.list_id = t2.list_id INNER JOIN campaigns t3 on t2.campaign_id = t3.campaign_id  WHERE t1.list_owner = 1 AND deleted = 0
    $lists = DB::select("SELECT t1.list_id,t1.list_name, COUNT(t2.list_id) AS nbr FROM lists t1 INNER JOIN assoc_users_lists t2 ON t1.list_id = t2.list_id WHERE t1.list_owner = $user_id GROUP BY t2.list_id");

    $campaigns = DB::select("SELECT campaign_id, campaign_name, DATE_FORMAT(date_created,'%b %d %Y %k:%i') as date_created FROM campaigns WHERE campaign_owner = $user_id");

    return View::make('welcome', array('title' => "Welcome", 'lists' => $lists, 'campaigns' => $campaigns));
});

Route::get('/lists', function () {
    $user_id = USER_ID;
    $results = DB::select("SELECT t1.list_id,t1.list_name,t1.list_description,t1.list_owner,DATE_FORMAT(t1.date_created,'%b, %d %Y at %k:%i') as date_created, COUNT(t2.list_id) AS nbr FROM lists t1 INNER JOIN assoc_users_lists t2 ON t1.list_id = t2.list_id WHERE t1.list_owner = $user_id GROUP BY t2.list_id");
    
    return View::make('pages.lists', array('title' => "Contact lists", 'results' => $results));
});

Route::get('/list/{id}', function ($id) {

    $list_id = (int)$id;
    $user_id = USER_ID;

    $res = DB::select("SELECT list_name,list_description from lists where list_id = $list_id");

    $results = DB::select("SELECT t1.list_id, t2.list_owner, t1.user_id, t3.first_name, t3.last_name, t3.phone_number, t3.country FROM assoc_users_lists t1 INNER JOIN lists t2 on t2.list_id = t1.list_id INNER JOIN contact_users t3 on t1.user_id = t3.user_id WHERE t2.list_owner = $user_id AND t1.list_id = $list_id");
    
    return View::make('pages.list', array('title' => "Welcome",'list_name' => $res[0]->list_name,'list_description' => $res[0]->list_description, 'results' => $results));
});

Route::get('/campaigns', function () {
    return View::make('pages.campaigns');
});

/*********************  Posts requests  *********************/

