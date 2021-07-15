<?php

namespace App\Services;

class SPCService
{
    use GuzzleTrait;

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

    public function getDepartments()
    {
        try {
            $response = self::exec(
                $this->url . '/departamento',
                null,
                $this->headers,
                'GET'
            );

            return [
                'code' => $response->getStatusCode(),
                'data' => $response->getBody()->getContents(),
            ];
        } catch (\Exception $e) {
            return [
                'code' => 500,
                'data' => 'Error en el servidor',
            ];

        }
    }

}
