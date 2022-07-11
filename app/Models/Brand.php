<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    use HasFactory;

    /**
     * @desc Fillable fields of the model.
     * @var string[]
     */
    protected $fillable = [
        'name',
        'code'
    ];

    /**
     * @desc Relation to get the products of the brand.
     * @return HasMany
     */
    public function products (): HasMany
    {
        return $this->hasMany(Product::class)->with('size');
    }
}
