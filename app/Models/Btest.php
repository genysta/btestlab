<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Btest extends Model
{
    use HasFactory;

    protected $table = 'btest_data';

    protected $fillable = [
    	'upload',
    	'download'
    ];
}
