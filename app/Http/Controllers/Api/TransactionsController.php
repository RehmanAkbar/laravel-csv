<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\StoreTransactions;
use App\Repositories\CsvRepositoryInterface;
use App\Http\Resources\TransactionsResource;

class TransactionsController extends Controller
{
    public $repository;

    public function __construct(CsvRepositoryInterface $csvRepositoryInterface)
    {
        $this->repository = $csvRepositoryInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Http\Resources\TransactionsResourc
     */
    public function index()
    {
        $data = $this->repository->all();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Http\Resources\TransactionsResourc
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Http\Resources\TransactionsResourc
     */
    public function store(StoreTransactions $request)
    {
        $data = $request->all();
        $response = $this->repository->store(data);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Http\Resources\TransactionsResourc
     */
    public function show($id)
    {
        $data = $this->repository->get($id);
        return new TransactionsResource($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Http\Resources\TransactionsResourc
     */
    public function edit($id)
    {
        $data = $this->repository->get($id);
        return new TransactionsResource($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Http\Resources\TransactionsResourc
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Http\Resources\TransactionsResourc
     */
    public function destroy($id)
    {
        //
    }
}
