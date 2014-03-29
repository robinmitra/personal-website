<?php
 
class HomeControllerTest extends TestCase
{
	public function testDisplaysHomePage()
	{
		$this->call('GET', '/');
		$this->assertResponseOk();
	}
}