<!-- Lorsqu’un paramètre constructeur inclut un modificateur d’accès (, , ou ),
 PHP le traite à la fois comme un argument de constructeur et comme une propriété d’un objet.
 Et il affecte l’argument constructeur à la propriété -->

 <?php

class BankAccount
{
	function __construct( private $accountNumber, private $balance)
	{	
    
	}
}
