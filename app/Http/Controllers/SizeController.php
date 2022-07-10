<?php

namespace App\Http\Controllers;

use App\Repositories\Products\SizeRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private SizeRepository $sizeRepository;

    public function __construct(SizeRepository $sizeRepository)
    {
        $this->sizeRepository = $sizeRepository;
    }

    /**
     * @desc Method to return all records.
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->sizeRepository->all();
    }

    /**
     * @desc Method to return a record.
     * @param int $id
     * @return mixed
     */
    public function get(int $id): mixed
    {
        return $this->sizeRepository->find($id);
    }

    /**
     * @desc Method to create a new record.
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request):mixed
    {
        return $this->sizeRepository->create($request->all());
    }

    /**
     * @desc Method to update a record.
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function update(Request $request, $id):mixed
    {
        return $this->sizeRepository->update($request->all(), $id);
    }

    /**
     * @desc Method to delete a record.
     * @param $id
     * @return mixed
     */
    public function delete($id): mixed
    {
        return $this->sizeRepository->delete($id);
    }
}
