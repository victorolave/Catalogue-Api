<?php

namespace App\Repositories\Products;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Collection;

class BrandRepository implements \App\Repositories\Interfaces\Products\BrandRepositoryInterface
{
    protected Brand $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    /**
     * @desc Method to return all brands.
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->brand->all();
    }

    /**
     * @desc Method to create a new brand.
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return $this->brand->create($data);
    }

    /**
     * @desc Method to update a brand.
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id): mixed
    {
        return $this->brand->find($id)->update($data);
    }

    /**
     * @desc Method to delete a brand.
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        return $this->brand->find($id)->delete();
    }

    /**
     * @desc Method to return a brand.
     * @param $id
     * @return mixed
     */
    public function find($id): mixed
    {
        return $this->brand->find($id);
    }
}
