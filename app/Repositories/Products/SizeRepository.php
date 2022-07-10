<?php

namespace App\Repositories\Products;

use App\Models\Size;
use Illuminate\Database\Eloquent\Collection;

class SizeRepository implements \App\Repositories\Interfaces\Products\SizeRepositoryInterface
{
    protected Size $size;

    public function __construct(Size $size)
    {
        $this->size = $size;
    }

    /**
     * @desc Method to return all sizes.
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->size->all();
    }

    /**
     * @desc Method to create new size.
     * @param array $data
     * @return mixed
     */
    public function create(array $data): mixed
    {
        return $this->size->create($data);
    }

    /**
     * @desc Method to update a size.
     * @param array $data
     * @param $id
     * @return mixed
     */
    public function update(array $data, $id): mixed
    {
        return $this->size->find($id)->update($data);
    }

    /**
     * @desc Method to delete a size.
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        return $this->size->find($id)->delete();
    }

    /**
     * @desc Method to return a size.
     * @param $id
     * @return mixed
     */
    public function find($id): mixed
    {
        return $this->size->find($id);
    }
}
