<?php

class SPCService
{
    protected $client;
    protected $url;
    protected $headers;

    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->url = config('spc.url');
        $this->headers = [
            //'Authorization' => 'Basic ' . $this->token,
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ];
    }

    public static function exec($url, $data = [], array $headers =[], $method = null) : GuzzleResponse
    {
        try {
            $client = new \GuzzleHttp\Client();
    
            $request = [
                'headers' => $headers
            ];

            if (! empty($data) ) {
                $request['json'] = $data;
            }

            $response = $client->request($method, $url, $request);

            return ($response);

        } catch (\GuzzleHttp\Exception\ServerException $e) {
            \Log::error('Server Exception: ' . $e->getResponse()->getBody()->getContents(), ['user' => auth()->user()]);
            return $e->getResponse();
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            \Log::error('Client Exception: ' . $e->getResponse()->getBody()->getContents(), ['user' => auth()->user()]);
            return $e->getResponse();
        } catch (\Exception $e) {
            \Log::error($e->getMessage(), ['user' => auth()->user()]);
            return $e->getResponse();
        }
    }

}
