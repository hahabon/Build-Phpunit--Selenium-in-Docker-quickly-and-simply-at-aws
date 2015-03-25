<?php
class webtest_retrieve extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://www.google.com.tw");
  }

  public function testMyTestCase()
  {
    $this->open("https://tw.buy.yahoo.com/gdsale/gdsale.asp?gdid=5575370&act=fprecmfind");
    $retrieve = $this->getEval("window.document.getElementById(\"cl-gdintro\").innerHTML");
    echo $retrieve;
    #$this->echo ("${retrieve}");
  }
}
?>
