<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    /**
     * @desc Fillable fields of the model.
     * @var string[]
     */
    protected $fillable = [
        'name',
        'size_id',
        'remarks',
        'brand_id',
        'stock',
        'shipment_date'
    ];

    /**
     * @desc Relation to get the size of product.
     * @return BelongsTo
     */
    public function size(): BelongsTo
    {
        return $this->belongsTo(Size::class);
    }

    /**
     * @desc Relation to get the brand of product.
     * @return BelongsTo
     */
    public function brand (): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}
