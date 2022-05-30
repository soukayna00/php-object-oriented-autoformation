<?php

class BankAccount
{
	private $balance;

	public function __construct($balance)
	{
		$this->balance = $balance;
	}

	public function getBalance()
	{
		return $this->balance;
	}

	public function deposit($amount)
	{
		if ($amount > 0) {
			$this->balance += $amount;
		}

		return $this;
	}
}

class SavingAccount extends BankAccount
{
	private $interestRate;

	public function setInterestRate($interestRate)
	{
		$this->interestRate = $interestRate;
	}

	public function addInterest()
	{
		// calculate interest
		$interest = $this->interestRate * $this->getBalance();
		// deposit interest to the balance
		$this->deposit($interest);
	}
}