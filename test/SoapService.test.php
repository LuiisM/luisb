<?php
/*
 * This file is part of placetopay-webservice test.
 *
 * (c) Luis Blanco <luisblanco93@gmail.com>
 *
 */
namespace Luisb\Pse;

use Luisb\Pse\SoapService;

class SoapServiceTest extends \PHPUnit_Framework_TestCase{

	public function testInheritance() {
		$pse = new SoapService();
		$pse->bankList();
		$this->assertInstanceOf( '\Luisb\Pse\SoapService',  $pse  );
	}
	public function testBankList() {
		$pse = new SoapService();
		$pse->bankList();
		$this->assertEquals( 'object', gettype( $pse ) );
	}
	public function testCreateTransaction() {
		$form = array( "bankCode"=>"1022", "bankInterface"=>"0", "returnURL"=>'https://www.google.com.co', "reference"=>"1455", "description"=>"Test", "language"=>"ES", "currency"=>"COP", "totalAmount"=>5000, "taxAmount"=>0, "devolutionBase"=>0, "tipAmount"=>0, 'ipAddress'=>"182.143.213.30", "userAgent"=>"Chrome", "additionalData"=>"", "payer"=>array( "documentType"=>"CC", "document"=>"12345", "emailAddress"=>"luisblanco93@hotmail.com" ) );
		$pse = new SoapService();
		$pse->beginTransaction( $form );
		$this->assertEquals( 'object', gettype( $pse ) );
	}
	public function testCreateTransactionMultiCredit() {
		$form = array("credits"=>array("item"=>array( "entityCode" => "10220102", "serviceCode" => "98765432", "amountValue" => 5000, "taxValue" => 0, "description" => "Test multicredit") ), "bankCode"=>"1022", "bankInterface"=>"0", "returnURL"=>'https://www.google.com.co', "reference"=>"1455", "description"=>"Test", "language"=>"ES", "currency"=>"COP", "totalAmount"=>5000, "taxAmount"=>0, "devolutionBase"=>0, "tipAmount"=>0, 'ipAddress'=>"182.143.213.30", "userAgent"=>"Chrome", "additionalData"=>"","payer"=>array( "documentType"=>"CC", "document"=>"12345", "emailAddress"=>"luisblanco93@hotmail.com" ) );
		$pse = new SoapService();
		$pse->beginTransactionMulticredit( $form );
		$this->assertEquals( 'object', gettype( $pse ) );
	}
	public function testFindTransaction() {
		$pse = new SoapService();
		$pse->findTransaction( "1442809031" );
		$this->assertEquals( 'object', gettype( $pse ) );
	}
}
