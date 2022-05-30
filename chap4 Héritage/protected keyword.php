<?php

class Customer
{
	protected $name;

	public function __construct($name)
	{
		$this->name = $name;
	}

	protected function format()
	{
		return ucwords($this->name);
	}

	public function getName()
	{
		return $this->format($this->name);
	}
}