<?php

class ContactController extends BaseController
{
	public function index()
	{

	}

	public function store()
	{
		// Get post data

		// Send email
		Mail::queue(
			'contact.emails.contact',
			Input::all(),
			function ($message) {
				$message->to('tickets@robinmitra.uservoice.com')->subject('Contact');
			}
		);

		return Redirect::route('contact.thanks');
	}

	public function thanks()
	{

	}
} 