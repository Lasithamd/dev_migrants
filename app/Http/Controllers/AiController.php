<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AiController extends Controller
{
    //

//     public function sendAIRequest(Request $request)
//     {
       
//         $data=$request->all();
//         $message='Generate ad title and description for : '.$data['message'];

      

//         $client = new \GuzzleHttp\Client();
        
//         try {
//             $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
//                 'headers' => [
//                     'Authorization' => 'Bearer ',
//                     'Content-Type' => 'application/json',
//                 ],
//                 'json' => [
//                     'model' => 'gpt-3.5-turbo',
//                     'temperature' => 0.7,
//                     'messages' => [['role' => 'user', 'content' => $message]],
//                 ],]);
         
//                 $result = $response->getBody()->getContents();

//                 print_r( $result);
//         } catch (\Throwable $th) {

//                 //code...
//                 print_r($th->getMessage());die();   
//             //throw $th;
// //   // Log the exception
// //   \Log::error('Exception occurred: ' . $e->getMessage());

// //   // Display an error message to the user
// //   return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());

//         }

//     }

    public function getAIContent(Request $request)
    {
       
        $data=$request->all();
        $message='Generate ad title and description for : '.$data['message'];

        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', 'https://api.openai.com/v1/chat/completions', [
                'headers' => [
                    'Authorization' => 'Bearer sk-None-WDx37g4hhJwL0FbQ5pTLT3BlbkFJiPiRGbeHW2wiTLIxEggV',
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
