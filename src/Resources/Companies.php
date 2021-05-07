<?php

namespace Flagbit\Hubspot\Resources;

class Companies extends \SevenShores\Hubspot\Resources\Companies
{
    /**
     * Search, filter companies.
     *
     * @param array $filterGroups
     * @param array $properties array of company properties
     * @param int $limit
     *
     * @return \SevenShores\Hubspot\Http\Response
     * @throws \SevenShores\Hubspot\Exceptions\BadRequest
     * @throws \SevenShores\Hubspot\Exceptions\HubspotException
     * @see https://developers.hubspot.com/docs/api/crm/companies
     */
    public function search(
        array $filterGroups,
        array $properties,
        int $limit
    ): \SevenShores\Hubspot\Http\Response {
        $endpoint = 'https://api.hubapi.com/crm/v3/objects/companies/search';

        return $this->client->request(
            'post',
            $endpoint,
            [
                'json' => [
                    'filterGroups' => [ $filterGroups ],
                    'limit' => $limit,
                    'properties' => $properties
                ]
            ]
        );
    }
}
