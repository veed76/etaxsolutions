<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Talukas extends Model
{
    protected $fillable = ['name', 'district_id'];

    public static function getList(){
    	return DB::table('talukas as t')
				->select('t.*', 'd.name as district_name', 's.id as state_id','s.name as state_name')
				->join('districts as d', 't.district_id', '=', 'd.id')
				->leftJoin('states as s', 's.id', '=', 'd.state_id');
    }
}
