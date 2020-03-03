<?php

namespace BoolXY\Trendyol;

use GuzzleHttp\RequestOptions;
use phpDocumentor\Reflection\Types\Mixed_;

class RequestManager
{
    private Client $client;

    /**
     * RequestManager constructor.
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * Process the request
     * @param IRequest $request
     * @return mixed
     */
    public function process(IRequest $request)
    {
        $method = $request->getMethod();
        $path = $request->getPath();
        $data = $request->getData();

        $response = $this->client->$method($path, [
            RequestOptions::SYNCHRONOUS => false,
            RequestOptions::HEADERS => [
                "Accept" => "application/json",
                "Content-Type" => "application/json",
            ],
            RequestOptions::JSON => [
                "data" => $data,
            ],
        ]);

        return json_decode((string) $response->getBody());
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}