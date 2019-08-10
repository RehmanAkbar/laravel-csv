<?php
namespace App\Sercices;

class CsvReader
{
	/**
	 * File path will be used.
	 *
	 * @var string
	 */
	protected $file;

	/**
	 * Results data.
	 *
	 * @var array
	 */
	protected $data = array();

	/**
	 * @var mixed
	 */
    protected $handle;

    /**
	 * @var array
	 */
    protected $header;

    /**
	 * @var mixed
	 */
	protected $csv;

	/**
	 * The constructor.
	 *
	 *
	 */
	public function __construct()
	{
        $this->file = asset('transactions.csv');

	}

    /**
	 * Get all data in file.
	 *
	 * @return array
	 */
	public function all()
	{
        $this->open()->read();
		return $this->data;
	}

	/**
	 * Open the file.
	 *
	 * @return self
	 */
	public function open()
	{
		$this->csv = array_map('str_getcsv', file($this->file));

		return $this;
	}

	/**
	 * Fetch the csv data and save that to array data.
	 *
	 * @return self
	 */
	public function read()
	{
        $csv = $this->csv;
        array_walk($csv, function(&$a) use ($csv) {
          $a = array_combine($csv[0], $a);
        });
        array_shift($csv); # remove column header

        $this->data = $csv;
		return $this;
    }

    /**
	 * Fetch the csv header columns.
	 *
	 * @return self
	 */
	public function getHeader()
	{
        $csv = $this->csv;
        $this->header = $csv[0];
		return $this;
    }
    /**
	 * Put data in csv file.
	 *
	 * @return self
	 */
    public function write($data)
    {

    }

}
