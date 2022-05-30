<!-- Ajouter des propriétés et des méthodes à la classe enfant -->
<?php

class SavingAccount extends BankAccount
{
    private $interestRate;

    public function setInterestRate($interestRate)
    {
        $this->interestRate = $interestRate;
    }
}