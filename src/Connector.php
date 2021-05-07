<?php

namespace Flagbit\Hubspot;

class Connector
{
    public function getNewConnection(): \Flagbit\Hubspot\Factory
    {
        return new \Flagbit\Hubspot\Factory([
            'key'      => HUBSPOT_KEY
        ]);
    }
}
