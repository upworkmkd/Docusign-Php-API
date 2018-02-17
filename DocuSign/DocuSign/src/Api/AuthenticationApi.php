<?php
/**
 * AuthenticationApi
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */


namespace DocuSign\eSign\Api\AuthenticationApi;

class LoginOptions
{
        
    /**
      * $api_password When set to **true**, shows the account API password in the response.
      * @var string
      */
    protected $api_password;

    /**
     * Gets api_password
     * @return string
     */
    public function getApiPassword()
    {
        return $this->api_password;
    }
  
    /**
     * Sets api_password
     * @param string $api_password When set to **true**, shows the account API password in the response.
     * @return $this
     */
    public function setApiPassword($api_password)
    {
        $this->api_password = $api_password;
        return $this;
    }
        
    /**
      * $include_account_id_guid When set to **true**, shows the account ID GUID in the response.
      * @var string
      */
    protected $include_account_id_guid;

    /**
     * Gets include_account_id_guid
     * @return string
     */
    public function getIncludeAccountIdGuid()
    {
        return $this->include_account_id_guid;
    }
  
    /**
     * Sets include_account_id_guid
     * @param string $include_account_id_guid When set to **true**, shows the account ID GUID in the response.
     * @return $this
     */
    public function setIncludeAccountIdGuid($include_account_id_guid)
    {
        $this->include_account_id_guid = $include_account_id_guid;
        return $this;
    }
        
    /**
      * $login_settings Determines whether login settings are returned in the response.\n\nValid Values:\n\n* all -  All the login settings are returned. \n* none - no login settings are returned.
      * @var string
      */
    protected $login_settings;

    /**
     * Gets login_settings
     * @return string
     */
    public function getLoginSettings()
    {
        return $this->login_settings;
    }
  
    /**
     * Sets login_settings
     * @param string $login_settings Determines whether login settings are returned in the response.\n\nValid Values:\n\n* all -  All the login settings are returned. \n* none - no login settings are returned.
     * @return $this
     */
    public function setLoginSettings($login_settings)
    {
        $this->login_settings = $login_settings;
        return $this;
    }
    
}


namespace DocuSign\eSign\Api;

use \DocuSign\eSign\Configuration;
use \DocuSign\eSign\ApiClient;
use \DocuSign\eSign\ApiException;
use \DocuSign\eSign\ObjectSerializer;

/**
 * AuthenticationApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AuthenticationApi
{

    /**
     * API Client
     * @var \DocuSign\eSign\ApiClient instance of the ApiClient
     */
    protected $apiClient;
  
    /**
     * Constructor
     * @param \DocuSign\eSign\ApiClient|null $apiClient The api client to use
     */
    function __construct($apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://www.docusign.net/restapi');
        }
  
        $this->apiClient = $apiClient;
    }
  
    /**
     * Get API client
     * @return \DocuSign\eSign\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }
  
    /**
     * Set the API client
     * @param \DocuSign\eSign\ApiClient $apiClient set the API client
     * @return AuthenticationApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    
    /**
     * login
     *
     * Gets login information for a specified user.
     *
     *
     @param  $options Options for modifying the behavior of the function. (optional)
     * @return \DocuSign\eSign\Model\LoginInformation
     * @throws \DocuSign\eSign\ApiException on non-2xx response
     */
    public function login(AuthenticationApi\LoginOptions $options = null)
    {
        list($response, $statusCode, $httpHeader) = $this->loginWithHttpInfo ($options);
        return $response; 
    }


    /**
     * loginWithHttpInfo
     *
     * Gets login information for a specified user.
     *
     *
     @param  $options Options for modifying the behavior of the function. (optional)
     * @return Array of \DocuSign\eSign\Model\LoginInformation, HTTP status code, HTTP response headers (array of strings)
     * @throws \DocuSign\eSign\ApiException on non-2xx response
     */
    public function loginWithHttpInfo(AuthenticationApi\LoginOptions $options = null)
    {
        
  
        // parse inputs
        $resourcePath = "/v2/login_information";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = ApiClient::selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = ApiClient::selectHeaderContentType(array());
  
        
        if ($options != null)
        {
        // query params
        
        
        if ($options->getApiPassword() !== null) {
            $queryParams['api_password'] = $this->apiClient->getSerializer()->toQueryValue($options->getApiPassword());
        }
        
        if ($options->getIncludeAccountIdGuid() !== null) {
            $queryParams['include_account_id_guid'] = $this->apiClient->getSerializer()->toQueryValue($options->getIncludeAccountIdGuid());
        }
        
        if ($options->getLoginSettings() !== null) {
            $queryParams['login_settings'] = $this->apiClient->getSerializer()->toQueryValue($options->getLoginSettings());
        }
        }
        
        
        
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        
  
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath, 'GET',
                $queryParams, $httpBody,
                $headerParams, '\DocuSign\eSign\Model\LoginInformation'
            );
            
            if (!$response) {
                return array(null, $statusCode, $httpHeader);
            }
            if(isset($response->errorCode))
				return array($response, $statusCode, $httpHeader);
            return array(\DocuSign\eSign\ObjectSerializer::deserialize($response, '\DocuSign\eSign\Model\LoginInformation', $httpHeader), $statusCode, $httpHeader);
            
        } catch (ApiException $e) {
            switch ($e->getCode()) { 
            case 200:
                $data = \DocuSign\eSign\ObjectSerializer::deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\LoginInformation', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            case 400:
                $data = \DocuSign\eSign\ObjectSerializer::deserialize($e->getResponseBody(), '\DocuSign\eSign\Model\ErrorDetails', $e->getResponseHeaders());
                $e->setResponseObject($data);
                break;
            }
  
            throw $e;
        }
    }
    
}
