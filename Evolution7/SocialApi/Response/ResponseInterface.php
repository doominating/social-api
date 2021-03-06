<?php

namespace Evolution7\SocialApi\Response;

interface ResponseInterface
{
    /**
     * Constructor
     *
     * @param string $raw    - unprocessed API response
     * @param string $format - response format (default: json)
     *
     * @throws ResponseFormatNotSupportedException
     * @throws ResponseInvalidException
     */
    public function __construct($raw, $format = 'json');

    /**
     * Get original API response for item
     *
     * @return string
     */
    public function getRaw();

    /**
     * Get original API format for item
     *
     * @return string
     */
    public function getFormat();

    /**
     * Get API response parsed into an array
     *
     * @return array
     */
    public function getArray();
}
