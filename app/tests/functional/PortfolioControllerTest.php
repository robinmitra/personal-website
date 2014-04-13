<?php

 class ProjectsControllerTest extends TestCase
 {
	 public function testListWork()
	 {
		 $this->call('GET', 'projects');
		 $this->assertViewHas('projects');
	 }
 }