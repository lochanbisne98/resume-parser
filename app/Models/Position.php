<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    use SoftDeletes;

    protected $table = 'positions';

    public static function getPositions(){

        return self::orderByRaw('LEN(name) DESC')->pluck('name')->toArray();
    }
}