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
	#[ORM\Column(length: 6, name: 'CUST_CODE')]
	private ?string $custCode = null;

	#[ORM\Column(length: 40, name: 'CUST_NAME')]
	private ?string $custNAme = null;

	#[ORM\Column(length: 35, name: 'CUST_CITY')]
	private ?string $custCity = null;

	#[ORM\Column(length: 35, name: 'WORKING_AREA')]
	private ?string $workingArea = null;

	#[ORM\Column(length: 20, name: 'CUST_COUNTRY')]
	private ?string $custCountry = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 10, scale: 2, name: 'GRADE')]
	private ?string $grade = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, name: 'OPENING_AMT')]
	private ?string $openingAMT = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, name: 'RECEIVE_AMT')]
	private ?string $receiveAMT = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, name: 'PAYMENT_AMT')]
	private ?string $paymentAMT = null;

	#[ORM\Column(type: Types::DECIMAL, precision: 12, scale: 2, name: 'OUTSTANDING_AMT')]
	private ?string $outstandingAMT = null;

	#[ORM\Column(length: 17, name: 'PHONE_NO')]
	private ?string $phoneNo = null;

	#[ORM\Column(length: 6, name: 'AGENT_CODE')]
	private ?string $agentCode = null;

	/**
	 * @return string|null
	 */
	public function getCustCode(): ?string
	{
		return $this->custCode;
	}

	/**
	 * @param string|null $custCode
	 */
	public function setCustCode(?string $custCode): void
	{
		$this->custCode = $custCode;
	}

	/**
	 * @return string|null
	 */
	public function getCustNAme(): ?string
	{
		return $this->custNAme;
	}

	/**
	 * @param string|null $custNAme
	 */
	public function setCustNAme(?string $custNAme): void
	{
		$this->custNAme = $custNAme;
	}

	/**
	 * @return string|null
	 */
	public function getCustCity(): ?string
	{
		return $this->custCity;
	}

	/**
	 * @param string|null $custCity
	 */
	public function setCustCity(?string $custCity): void
	{
		$this->custCity = $custCity;
	}

	/**
	 * @return string|null
	 */
	public function getWorkingArea(): ?string
	{
		return $this->workingArea;
	}

	/**
	 * @param string|null $workingArea
	 */
	public function setWorkingArea(?string $workingArea): void
	{
		$this->workingArea = $workingArea;
	}

	/**
	 * @return string|null
	 */
	public function getCustCountry(): ?string
	{
		return $this->custCountry;
	}

	/**
	 * @param string|null $custCountry
	 */
	public function setCustCountry(?string $custCountry): void
	{
		$this->custCountry = $custCountry;
	}

	/**
	 * @return string|null
	 */
	public function getGrade(): ?string
	{
		return $this->grade;
	}

	/**
	 * @param string|null $grade
	 */
	public function setGrade(?string $grade): void
	{
		$this->grade = $grade;
	}

	/**
	 * @return string|null
	 */
	public function getOpeningAMT(): ?string
	{
		return $this->openingAMT;
	}

	/**
	 * @param string|null $openingAMT
	 */
	public function setOpeningAMT(?string $openingAMT): void
	{
		$this->openingAMT = $openingAMT;
	}

	/**
	 * @return string|null
	 */
	public function getReceiveAMT(): ?string
	{
		return $this->receiveAMT;
	}

	/**
	 * @param string|null $receiveAMT
	 */
	public function setReceiveAMT(?string $receiveAMT): void
	{
		$this->receiveAMT = $receiveAMT;
	}

	/**
	 * @return string|null
	 */
	public function getPaymentAMT(): ?string
	{
		return $this->paymentAMT;
	}

	/**
	 * @param string|null $paymentAMT
	 */
	public function setPaymentAMT(?string $paymentAMT): void
	{
		$this->paymentAMT = $paymentAMT;
	}

	/**
	 * @return string|null
	 */
	public function getOutstandingAMT(): ?string
	{
		return $this->outstandingAMT;
	}

	/**
	 * @param string|null $outstandingAMT
	 */
	public function setOutstandingAMT(?string $outstandingAMT): void
	{
		$this->outstandingAMT = $outstandingAMT;
	}

	/**
	 * @return string|null
	 */
	public function getPhoneNo(): ?string
	{
		return $this->phoneNo;
	}

	/**
	 * @param string|null $phoneNo
	 */
	public function setPhoneNo(?string $phoneNo): void
	{
		$this->phoneNo = $phoneNo;
	}

	/**
	 * @return string|null
	 */
	public function getAgentCode(): ?string
	{
		return $this->agentCode;
	}

	/**
	 * @param string|null $agentCode
	 */
	public function setAgentCode(?string $agentCode): void
	{
		$this->agentCode = $agentCode;
	}
}
