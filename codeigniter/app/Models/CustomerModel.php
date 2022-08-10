<?php

namespace App\Models;
use CodeIgniter\Model;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Validation\ValidationInterface;

class CustomerModel extends Model
{
	protected $table = 'CUSTOMER';
	protected $primaryKey = 'CUST_CODE';
	protected $allowedFields = [
		'CUST_CODE',
		'CUST_NAME',
		'CUST_CITY',
		'WORKING_AREA',
		'CUST_COUNTRY',
		'GRADE',
		'OPENING_AMT',
		'RECEIVE_AMT',
		'PAYMENT_AMT',
		'OUTSTANDING_AMT',
		'PHONE_NO',
		'AGENT_CODE'
	];

	public function __construct(ConnectionInterface &$db = null, ValidationInterface $validation = null)
	{
		parent::__construct($db, $validation);
	}
}