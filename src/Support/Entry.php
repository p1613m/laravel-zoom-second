<?php

namespace p1613m\Zoom\Support;

use MacsiDigital\API\Support\Authentication\JWT;
use MacsiDigital\API\Support\Entry as ApiEntry;
use p1613m\Zoom\Facades\Client;

class Entry extends ApiEntry
{
    protected $modelNamespace = '\p1613m\Zoom\\';

    protected $pageField = 'page_number';

    protected $maxQueries = '5';

    protected $apiKey = null;

    protected $apiSecret = null;

    protected $tokenLife = null;

    protected $baseUrl = null;

    // Amount of pagination results per page by default, leave blank if should not paginate
    // Without pagination rate limits could be hit
    protected $defaultPaginationRecords = '30';

    // Max and Min pagination records per page, will vary by API server
    protected $maxPaginationRecords = '300';

    protected $resultsPageField = 'page_number';
    protected $resultsTotalPagesField = 'page_count';
    protected $resultsPageSizeField = 'page_size';
    protected $resultsTotalRecordsField = 'total_records';

    protected $allowedOperands = ['='];

    /**
     * Entry constructor.
     * @param $apiKey
     * @param $apiSecret
     * @param $tokenLife
     * @param $maxQueries
     * @param $baseUrl
     */
    public function __construct($apiKey = null, $apiSecret = null, $tokenLife = null, $maxQueries = null, $baseUrl = null)
    {
        $this->apiKey = $apiKey ? $apiKey : config('zoom-second.api_key');
        $this->apiSecret = $apiSecret ? $apiSecret : config('zoom-second.api_secret');
        $this->tokenLife = $tokenLife ? $tokenLife : config('zoom-second.token_life');
        $this->maxQueries = $maxQueries ? $maxQueries : (config('zoom-second.max_api_calls_per_request') ? config('zoom-second.max_api_calls_per_request') : $this->maxQueries);
        $this->baseUrl = $baseUrl ? $baseUrl : config('zoom-second.base_url');
    }

    public function newRequest()
    {
        if (config('zoom-second.authentication_method') == 'jwt') {
            return $this->jwtRequest();
        } elseif (config('zoom-second.authentication_method') == 'oauth2') {
        }
    }

    public function jwtRequest()
    {
        $jwtToken = JWT::generateToken(['iss' => $this->apiKey, 'exp' => time() + $this->tokenLife], $this->apiSecret);

        return Client::baseUrl($this->baseUrl)->withToken($jwtToken);
    }

    public function oauth2Request()
    {
    }
}
