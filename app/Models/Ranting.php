<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ranting extends Model
{
    use HasFactory;


    public $table = "nolep.ranting";

    protected $fillable = [
        "id",
        "ranting",
        "keterangan",
    ];
}
