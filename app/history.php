<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $table = 'search_history';
    public $timestamps = false;
    public function videos()
    {
        return $this->hasMany('App\Video','query_id');
    }
}
