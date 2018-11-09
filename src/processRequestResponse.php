<?php

namespace eskandari\IrancellErefill;

class processRequestResponse
{

    /**
     * @var clientResponse $ClientResponse
     */
    protected $ClientResponse = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return clientResponse
     */
    public function getClientResponse()
    {
      return $this->ClientResponse;
    }

    /**
     * @param clientResponse $ClientResponse
     * @return \eskandari\IrancellErefill\processRequestResponse
     */
    public function setClientResponse($ClientResponse)
    {
      $this->ClientResponse = $ClientResponse;
      return $this;
    }

}
