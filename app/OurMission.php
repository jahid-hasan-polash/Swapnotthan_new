<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurMission extends Model
{
    protected $table = 'our_missions';
    protected $fillable=['description'];
}
