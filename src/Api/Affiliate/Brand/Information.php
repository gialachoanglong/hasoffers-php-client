<?php

namespace DraperStudio\HasOffers\Api\Affiliate\Brand;

use DraperStudio\HasOffers\Base;

class Information extends Base
{
    /**
     * API Endpoint Type.
     *
     * @var string
     */
    protected $endpointType = 'Affiliate';

    /**
     * API Endpoint Name.
     *
     * @var string
     */
    protected $endpointName = 'BrandInformation';
    /**
     * Retrieves the Brand Information.
     *
     * @param object $parameters
     *
     * @return object
     */
    public function getBrandInformation($parameters = [])
    {
        return $this->get('getBrandInformation', $parameters);
    }
}
