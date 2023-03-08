<?php
class Fund {
    //public $fund;
    private $fund;
    private $purpose;
    function __construct( $initialFund = 0 ) {
        $this->fund = $initialFund;
    }
    public function addFund( $money, $purpose=null ) {
        $this->fund += $money;
        $this->purpose= $purpose;
    }
    public function deductFund( $money, $purpose=null ) {
        $this->fund -= $money;
        $this->purpose= $purpose;

    }
    public function getTotal() {
        echo "{$this->purpose} Total fund is {$this->fund}\n";
    }

}
$outFund = new Fund( 100 );
//$outFund->fund=75;
$outFund->getTotal();
$outFund->addFund( 10 , "After adding money");
$outFund->getTotal();
$outFund->deductFund( 5 );
$outFund->getTotal();