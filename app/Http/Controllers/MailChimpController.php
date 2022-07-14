<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailChimpController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $mailchimp = new \MailchimpMarketing\ApiClient();

        $mailchimp->setConfig([
            'apiKey' => '66b2b23eb153908e287d37d8917ef85d-us12',
            'server' => 'us12'
        ]);

        $response = $mailchimp->ping->get();
    }
}