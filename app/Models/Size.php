<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    /**
     * @desc Fillable fields of the model.
     * @var string[]
     */
    protected $fillable = [
        'size'
    ];
}
