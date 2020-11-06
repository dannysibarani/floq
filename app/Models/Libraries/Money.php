<?php 


namespace App\Models\Libraries; 

use Money\Money As BaseMoney; 
use Money\Currency; 
use NumberFormatter; 
use Money\Formatter\IntlMoneyFormatter; 
use Money\Currencies\ISOCurrencies; 

/**
	GBP => en_GB
	IDR => id_ID
*/

class Money 
{
	protected $money; 

	public function __construct($amount, $symbol = 'IDR') {
		$this->money = new BaseMoney($amount, new Currency($symbol)); 
	}

	public function formatted() {
		$formatter = new IntlMoneyFormatter(
			new NumberFormatter('id_ID', NumberFormatter::CURRENCY), 
			new IsoCurrencies()
		); 

		return $formatter->format($this->money); 
	}

	public function amount() {
		return $this->money->getAmount(); 
	}
}