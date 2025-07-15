<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

route::get('/',[Homecontroller::class,'index']);

route::get('/add-user',[Homecontroller::class,'create']);

route::post('/form-submit',[Homecontroller::class,'store']);

