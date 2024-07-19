<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class AiController extends Controller
{
    //

    public function getAIContent(Request $request)
    {
       
        $data=$request->all();
        $message='Generate ad title and description for : '.$data['message'];

      

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
                ],]);
         
                $result = $response->getBody()->getContents();

                print_r( $result);
        } catch (\Throwable $th) {

                //code...
                print_r($th->getMessage());die();   
            //throw $th;
//   // Log the exception
//   \Log::error('Exception occurred: ' . $e->getMessage());

//   // Display an error message to the user
//   return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());

        }

    }
}
