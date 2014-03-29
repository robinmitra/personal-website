<?php

class ContactControllerTest extends TestCase
{
	public function tearDown()
	{
		Mockery::close();
	}

	public function testSubmitsContactForm()
	{
		$postData = [
			'email' => 'test@test.com',
			'body' => 'This is a test email'
		];

		Mail::shouldReceive('queue')
			->once()
			->with(
				'contact.emails.contact',
				$postData,
				Mockery::on(
					function ($closure) {
						$message = Mockery::mock('Illuminate\Mail\Message');

						$message->shouldReceive('to')
							->once()
							->with('tickets@robinmitra.uservoice.com')
							->andReturn(Mockery::self());

						$message->shouldReceive('subject')
							->once()
							->with('Contact');

						$closure($message);

						return true;
					}
				)
			);

		$this->call('POST', 'contact', $postData);

		$this->assertRedirectedToRoute('contact.thanks');
	}
} 