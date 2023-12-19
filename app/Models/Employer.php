<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employer extends Model
{
    use SoftDeletes;

    protected $table = 'employers';

    public static function getEmployers(){

        // return self::whereRaw('LEN(name) > 4')->orderByRaw('LEN(name) DESC')->pluck('name')->toArray();
        return [];
    }
}