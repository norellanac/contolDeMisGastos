<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




/*
**************test laravel passport cuando el usuario ya está registrado***********
1- realizar las migraciones necesarias e instalar laravelCors
2- php artisan passport:client --password generar un id y secret para una app externa (js, java)
3- peticion desde postman para obtener un token segun el usuario logueado
	POST
	http://localhost:3000/oauth/token
	headers: 
		Content-Type: application/json
	body...	
		{
		    "grant_type": "password",
		    "client_id": 1,
		    "client_secret": "tWDosRepctjOHQ1kSgqyCQtGFZXmgJJbMYl7g9S6",
		    "username": "correo.com",
		    "password": "contraseña",
		    "scope": "*"
		}
4- hacer peticiones a cualquier ruta de api
	http://localhost:3000/api/posts
	headers
		Accept: application/json
		Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjBmNzU0NzczNThlMmNiODAyYmIwNDg3ZThjOGJmMGMzMzAxOGYwNWEyMzJkYjUzNmVlNmNmYTY4MTZkN2ZiYmVkZTI4ODY3YzgzZTgwMjg5In0.eyJhdWQiOiIxIiwianRpIjoiMGY3NTQ3NzM1OGUyY2I4MDJiYjA0ODdlOGM4YmYwYzMzMDE4ZjA1YTIzMmRiNTM2ZWU2Y2ZhNjgxNmQ3ZmJiZWRlMjg4NjdjODNlODAyODkiLCJpYXQiOjE1NjA4OTgxNzEsIm5iZiI6MTU2MDg5ODE3MSwiZXhwIjoxNTkyNTIwNTcxLCJzdWIiOiIxIiwic2NvcGVzIjpbIioiXX0.NDH81KvS0meXTdx3aYYi9rZz6KDyDC-v85339X_p9SurtwyR0iRpzv_3aNLS2suMcqhwVWwV35EqzPE5XYBSggwO-SkHjC4cTEI6QK3ikkT5KQhj1qu66T05b8FnQwkacqaglBYkM3gKtesoYGjgZ_RBIVr8zo7EQxRwIneQCFh0iXrvrJD6lXQLta1o4D3XIpYvtrWK7EPjPFPWZ-QtZ-UxgIvGnGdijLDHTcw3g0xVCyj5mApm7cKF8eLiRJVu_9k2Dgd4AXPJz64rtUAGqoKJdRb7zyISIXHcfUGtKxLYyLwCSA0sLBbG9bLnDlhyhTEOJXVPmR2Mb5J4AKV4nztbgbYuK6YtewinC8Sk61d4SwDYLne7MpESQ_4C80iBZ8_AY-LsU2lIrNiafA1Zrjcb5tjtKXmY_R8e4U-XKiFYtPHW06-Ru8jHsndFaDsunNW8KOhgQXksdAj4TVm2EiSMzsyzyW5UYDcGHRDisNWZiwlkdjU3tpeuUNYAs9_btJVN5zrsZXFpYtNAVPw-FY2SDiSlXaYw7O8SKMD5g3qhVtlHLyRHw49NRzMQ4Av1HlglrZu-6qYA1KyWmQQvQy3D803jg8zyeFxvjgQIjQDJ_Ea_TwAGzpmUFv7UXyUe3pv7Fbt8ed-MzDbVicvXB-GvS1K5WmLo2ShYQ9T4sKw
*/
Route::get('posts', function () {
	return App\City::all();
})->middleware('auth:api');
