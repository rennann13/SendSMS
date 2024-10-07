<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnviarSmsController;

Route::get('/', [EnviarSmsController::class, 'enviarSms'])->name("enviar-sms.index");
