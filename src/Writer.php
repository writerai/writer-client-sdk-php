<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace WriterAi\SDK;

class Writer
{
	public const SERVERS = [
		'https://enterprise-api.writer.com',
	];
  	
    /**
     * Methods related to AI Content Detector
     * 
     * @var AIContentDetector $$aiContentDetector
     */
	public AIContentDetector $aiContentDetector;
	
    /**
     * Methods related to Billing
     * 
     * @var Billing $$billing
     */
	public Billing $billing;
	
    /**
     * Methods related to CoWrite
     * 
     * @var CoWrite $$coWrite
     */
	public CoWrite $coWrite;
	
    /**
     * Methods related to Completions
     * 
     * @var Completions $$completions
     */
	public Completions $completions;
	
    /**
     * Methods related to Content
     * 
     * @var Content $$content
     */
	public Content $content;
	
    /**
     * Methods related to Download the customized model
     * 
     * @var DownloadTheCustomizedModel $$downloadTheCustomizedModel
     */
	public DownloadTheCustomizedModel $downloadTheCustomizedModel;
	
    /**
     * Methods related to Files
     * 
     * @var Files $$files
     */
	public Files $files;
	
    /**
     * Methods related to Model Customization
     * 
     * @var ModelCustomization $$modelCustomization
     */
	public ModelCustomization $modelCustomization;
	
    /**
     * Methods related to Model
     * 
     * @var Models $$models
     */
	public Models $models;
	
    /**
     * Methods related to Snippets
     * 
     * @var Snippet $$snippet
     */
	public Snippet $snippet;
	
    /**
     * Methods related to Styleguide
     * 
     * @var Styleguide $$styleguide
     */
	public Styleguide $styleguide;
	
    /**
     * Methods related to Terminology
     * 
     * @var Terminology $$terminology
     */
	public Terminology $terminology;
	
    /**
     * Methods related to User
     * 
     * @var User $$user
     */
	public User $user;
		
	// SDK private variables namespaced with _ to avoid conflicts with API models
	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	private ?Models\Shared\Security $_security;
	private string $_serverUrl;
	private string $_language = 'php';
	private string $_sdkVersion = '1.0.0';
	private string $_genVersion = '2.18.0';
	/** @var array<string, array<string, array<string, string>>> */
	private ?array $_globals;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return WriterBuilder
	 */
	public static function builder(): WriterBuilder
	{
		return new WriterBuilder();
	}

	/**
	 * @param \GuzzleHttp\ClientInterface|null $client	 
	 * @param Models\Shared\Security|null $security
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 * @param array<string, array<string, array<string, string>>> $globals
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, ?Models\Shared\Security $security, string $serverUrl, ?array $params, ?array $globals)
	{
		$this->_defaultClient = $client;
		
		if ($this->_defaultClient === null) {
			$this->_defaultClient = new \GuzzleHttp\Client([
				'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if ($security !== null) {
			$this->_security = $security;
			$this->_securityClient = Utils\Utils::configureSecurityClient($this->_defaultClient, $this->_security);
		}
		
		if ($this->_securityClient === null) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[0];
		}
		$this->_globals = $globals;
		
		$this->aiContentDetector = new AIContentDetector(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->billing = new Billing(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->coWrite = new CoWrite(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->completions = new Completions(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->content = new Content(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->downloadTheCustomizedModel = new DownloadTheCustomizedModel(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->files = new Files(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->modelCustomization = new ModelCustomization(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->models = new Models(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->snippet = new Snippet(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->styleguide = new Styleguide(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->terminology = new Terminology(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
		
		$this->user = new User(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion,
			$this->_globals
		);
	}
}