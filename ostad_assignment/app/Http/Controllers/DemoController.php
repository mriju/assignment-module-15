<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class DemoController extends Controller
{
    function DemoAction():string{
        return "Hello";
    }

    function DemoAction1():string{
        return "Action One";
    }

    function DemoAction2():string{
        return "Dashboard Part";
    }
}