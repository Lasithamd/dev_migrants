<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AiController extends Controller
{
  
    public function getAIContent(Request $request)
    {
       
        $data=$request->all();
        $message='Generate title and description json data format for this ad '.$data['message'];

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer ',
                    'Content-Type' => 'application/json',
                ],
                'json' => [
                    'model' => 'gpt-3.5-turbo',
                    'temperature' => 0.7,
                    'messages' => [['role' => 'user', 'content' => $message]],
                ],
            ]);

            $result = json_decode($response->getBody()->getContents());

            if ($result && $result->choices && $result->choices[0] && $result->choices[0]->message && $result->choices[0]->message->content) {

                $resultText = $result->choices[0]->message->content;
                return json_encode($resultText);
            } else {
                return 'Error in OpenAi response format.';
            }



        } catch (\GuzzleHttp\Exception\RequestException $e) {
            return response()->json(['error' => 'Request exception: ' . $e->getMessage()], 500);
        }
    }
}
