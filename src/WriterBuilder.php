<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */


declare(strict_types=1);

namespace WriterAi\SDK;

/**
 * WriterBuilder is used to configure and build an instance of the SDK.
 * 
 * @package WriterAi\SDK
 */
class WriterBuilder
{
    private SDKConfiguration $sdkConfig;

    public function __construct() {
        $this->sdkConfig = new SDKConfiguration();
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return WriterBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): WriterBuilder
    {
        $this->sdkConfig->defaultClient = $client;
        return $this;
    }
    
    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param Models\Shared\Security $security
     * @return WriterBuilder
     */
    public function setSecurity(Models\Shared\Security $security): WriterBuilder
    {
        $this->sdkConfig->security = $security;
        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return WriterBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): WriterBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
        return $this;
    }
    
    /**
     * setServer is used to configure the server for the SDK
     *
     * @param int $serverIdx
     * @return WriterBuilder
     */
    public function setServerIndex(int $serverIdx): WriterBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;
        return $this;
    }
    
    
    
    /**
     * setOrganizationId is used to configure the organizationId parameter for the SDK.
     *
     * @param int $organizationId
     * @return WriterBuilder
     */
    public function setOrganizationId(int $organizationId): WriterBuilder
    {
        if (!array_key_exists('pathParam', $this->sdkConfig->globals['parameters']))
        {
            $this->sdkConfig->globals['parameters']['pathParam'] = [];
        }

        $this->sdkConfig->globals['parameters']['pathParam']['organizationId'] = $organizationId;

        return $this;
    }
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return Writer
     */
    public function build(): Writer
    {
		if ($this->sdkConfig->defaultClient === null) {
			$this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}
		if ($this->sdkConfig->security !== null) {
			$this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->security);
		}
		
		if ($this->sdkConfig->securityClient === null) {
			$this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
		}

        return new Writer($this->sdkConfig);
    }
}