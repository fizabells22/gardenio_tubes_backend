<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengguna extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = 'pengguna';
    protected $fillable = [
        'username',
        'email',
        'password'
    ];
    
    protected $hidden =[];
}
