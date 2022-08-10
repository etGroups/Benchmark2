<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Home extends BaseController
{
    public function HelloHTTP(): string
    {
		return 'Hello World';
    }
	public function PongHTTP(): string
	{
		return $this->request->getBody();
	}
	public function SqlHTTP()
	{
		return json_encode((new CustomerModel())->findAll(10));
	}
}
