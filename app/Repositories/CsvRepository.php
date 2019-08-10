<?php


namespace App\Repositories;

use App\Sercices\CsvReader;

class CsvRepository implements CsvRepositoryInterface
{
    /**
     * @var CsvReader
     */
    protected $model;

    public function __construct(CsvReader $csvReader) {
        $this->model = $csvReader;
    }

    /**
     * Get's a Transactions by it's ID
     *
     * @param int
     * @return array
     */
    public function get($id)
    {
        $data = $this->model->all();
        return data_get($data, $id, []);
    }

    /**
     * Get's all Transactions.
     *
     * @return mixed
     */
    public function all()
    {
        return $this->model->all();
    }

    /**
     * Deletes a Transactions.
     *
     * @param int
     */
    public function delete($id)
    {

    }

    /**
     * Updates a Transactions.
     *
     * @param int
     * @param array
     */
    public function update($id, array $data)
    {

    }

    /**
     * Store a Transactions.
     *
     * @param int
     * @param array
     */
    public function store($data)
    {

    }
}
