<?php

namespace App\Http\Controllers;

use App\Repositories\Products\BrandRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    private BrandRepository $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    /**
     * @desc Method to return all records.
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->brandRepository->all();
    }

    /**
     * @desc Method to return a record.
     * @param int $id
     * @return mixed
     */
    public function get(int $id): mixed
    {
        return $this->brandRepository->find($id);
    }

    /**
     * @desc Method to create a new record.
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request): mixed
    {
        return $this->brandRepository->create($request->all());
    }

    /**
     * @desc Method to update a record.
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id): mixed
    {
        return $this->brandRepository->update($request->all(), $id);
    }

    /**
     * @desc Method to delete a record.
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        return $this->brandRepository->delete($id);
    }

}
