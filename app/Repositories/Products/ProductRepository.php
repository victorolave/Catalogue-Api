<?php

namespace App\Repositories\Products;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements \App\Repositories\Interfaces\Products\ProductRepositoryInterface
{
    private Product $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @desc Method to return all products.
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->product->with('size', 'brand')->get();
    }

    /**
     * @desc Method to create a new product.
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return $this->product->create($data);
    }

    /**
     * @desc Method to update a product.
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id): mixed
    {
        return $this->product->find($id)->update($data);
    }

    /**
     * @desc Method to delete a product.
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        return $this->product->find($id)->delete();
    }

    /**
     * @desc Method to return a product.
     * @param $id
     * @return mixed
     */
    public function find($id): mixed
    {
        return $this->product->find($id);
    }
}
