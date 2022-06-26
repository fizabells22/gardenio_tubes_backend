<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plant extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'plant';
    protected $fillable = [
        'name_plant',
        'weeks',
        'date_plant',
        'time_plant'
    ];

    protected $hidden =[];
}