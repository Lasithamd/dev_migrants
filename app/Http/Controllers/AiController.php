<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AiController extends Controller
{
    //

    public function getAIContent(Request $data)
    {
      
        $client = new \GuzzleHttp\Client();
        
        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer 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',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'temperature' => 0.7,
                    'messages' => ['write toyota carads  title and description'],
                ],]);
            //code...

            dd($response);
        } catch (\Throwable $th) {
            //throw $th;
        }

    }
}
