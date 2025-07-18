<?php

class PostApiService
{
    private string $baseUrl;

    public function __construct()
    {
        $this->baseUrl = "https://jsonplaceholder.typicode.com";
    }
    public function getPosts()
    {
        //https://jsonplaceholder.typicode.com/posts para melhores referencias
        $url = $this->baseUrl . '/posts';

        $curl = curl_init($url);
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'User-Agent: PHP-Financeiro-App'
            ]
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        if (!$response) {
            return [];
        }

        return json_decode($response, true);
    }
}
