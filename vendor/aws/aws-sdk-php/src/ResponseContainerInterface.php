<?php

namespace Advanced_Media_Offloader\Vendor\Aws;

use Advanced_Media_Offloader\Vendor\Psr\Http\Message\ResponseInterface;

interface ResponseContainerInterface
{
    /**
     * Get the received HTTP response if any.
     *
     * @return ResponseInterface|null
     */
    public function getResponse();
}