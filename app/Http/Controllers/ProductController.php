<?php

namespace App\Http\Controllers;

use App\Repositories\Products\ProductRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private ProductRepository $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @desc Method to return all records.
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->productRepository->all();
    }

    /**
     * @desc Method to return a record.
     * @param int $id
     * @return mixed
     */
    public function get(int $id): mixed
    {
        return $this->productRepository->find($id);
    }

    /**
     * @desc Method to create a new record.
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request): mixed
    {
        return $this->productRepository->create($request->all());
    }

    /**
     * @desc Method to update a record.
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id): mixed
    {
        return $this->productRepository->update($request->all(), $id);
    }

    /**
     * @desc Method to delete a record.
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        return $this->productRepository->delete($id);
    }
}
