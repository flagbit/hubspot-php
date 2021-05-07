<?php

namespace Flagbit\Hubspot;

class Connector
{
    public function getNewConnection(): \Flagbit\Hubspot\Factory
    {
        return new \Flagbit\Hubspot\Factory([
            'key'      => defined('HUBSPOT_KEY') ? HUBSPOT_KEY : ''
        ]);
    }
}
