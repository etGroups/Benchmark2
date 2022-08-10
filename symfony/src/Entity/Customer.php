<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
#[ORM\Table(name: 'CUSTOMER')]
class Customer
{
	#[ORM\Id]
	#[ORM\Column(length: 6)]
	private ?string $CUST_CODE = null;

	#[ORM\Column(length: 40)]
	private ?string $CUST_NAME = null;

	#[ORM\Column(length: 35)]
	private ?string $CUST_CITY = null;

	#[ORM\Column(length: 35)]
	private ?string $WORKING_AREA = null;

	#[ORM\Column(length: 20)]
	private ?string $CUST_COUNTRY = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2)]
	private ?string $GRADE = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
	private ?string $OPENING_AMT = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
	private ?string $RECEIVE_AMT = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
	private ?string $PAYMENT_AMT = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2)]
	private ?string $OUTSTANDING_AMT = null;

	#[ORM\Column(length: 17)]
	private ?string $PHONE_NO = null;

	#[ORM\Column(length: 6)]
	private ?string $AGENT_CODE = null;
}
