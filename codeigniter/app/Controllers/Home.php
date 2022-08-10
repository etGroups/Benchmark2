<?php

namespace App\Controllers;

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
		return view('welcome_message');
	}
}
