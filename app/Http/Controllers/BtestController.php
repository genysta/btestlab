<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Btest;
use RouterOS\Client;
use RouterOS\Query;

class BtestController extends Controller
{
    public function show()
    {
    	return view("layouts.master");
    }

    public function btest()
    {
    	$client = new Client([
    		'host' => '10.10.10.1',
    		'user' => 'admin',
    		'pass' => ''
    	]);

    	$query = (new Query('/tool/bandwidth-test'))
    		->equal('address', '192.168.0.1')
    		->equal('direction', 'both')
    		->equal('duration', '5')
    		->equal('protocol', 'udp')
    		->equal('user', 'admin')
    		->equal('password', '');

    	$response = $client->query($query)->read();

    	Btest::create([
    		'upload' => $response[6]['tx-10-second-average'],
    		'download' => $response[6]['rx-10-second-average']
    	]);

    	
    }
}
