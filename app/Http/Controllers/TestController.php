<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Btest;

class TestController extends Controller
{
    public function test()
    {
    	Btest::create([
    		'upload' => 'test',
    		'download' => 'test'
    	]);
    }
}
