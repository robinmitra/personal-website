<?php

 class PortfolioControllerTest extends TestCase
 {
	 public function testListWork()
	 {
		 $this->call('GET', 'portfolio');
		 $this->assertResponseOk();
	 }
 }