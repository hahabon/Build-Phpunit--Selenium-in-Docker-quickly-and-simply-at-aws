<?php
class webtest_retrieve extends PHPUnit_Extensions_SeleniumTestCase
{
  public static $browsers = array(
      array(
        'name'    => 'Firefox on Linux',
        'browser' => '*firefox',
        'host'    => 'localhost',
        'port'    => 4444,
        'timeout' => 30000,
      ),
      array(
        'name'    => 'chrome on Linux',
        'browser' => '*chrome',
        'host'    => 'localhost',
        'port'    => 4444,
        'timeout' => 30000,
      ),
  );
  protected function setUp()
  {
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
