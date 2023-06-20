<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HandleWebhookController extends Controller
{
    public function __invoke(Request $request): Response
    {
        // Connect to Trello
        $client = new \Stevenmaguire\Services\Trello\Client([
            'key' => config('services.trello.key'),
            'token' => config('services.trello.token'),
        ]);

        // Decode the payload from TestMonitor
        $payload = json_decode(json: $request->getContent(), associative: true);

        // Add a Trello card when a new issue is created
        if ($payload['event'] === 'issue-created') {
            $client->addCard([
                'name' => $payload['issue']['name'],
                'desc' => strip_tags($payload['issue']['description']),
                'idList' => config('services.trello.list'),
            ]);
        }

        // Return success response
        return response()->noContent();
    }
}
