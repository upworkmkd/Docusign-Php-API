<?php
/**
 * TemplatesApiTest
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

namespace DocuSign\eSign\Api;

use \DocuSign\eSign\Configuration;
use \DocuSign\eSign\ApiClient;
use \DocuSign\eSign\ApiException;
use \DocuSign\eSign\ObjectSerializer;

/**
 * TemplatesApiTest Class Doc Comment
 *
 * @category Class
 * @package  DocuSign\eSign
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TemplatesApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running each test case
     */
    public static function setUpBeforeClass() {

    }

    /**
     * Clean up after running each test case
     */
    public static function tearDownAfterClass() {

    }

    
    /**
     * Test case for listTemplates
     *
     * Gets the definition of a template.
     *
     */
    public function test_listTemplates() {

    }
    
    /**
     * Test case for createTemplate
     *
     * Creates an envelope from a template.
     *
     */
    public function test_createTemplate() {

    }
    
    /**
     * Test case for get
     *
     * Gets a list of templates for a specified account.
     *
     */
    public function test_get() {

    }
    
    /**
     * Test case for update
     *
     * Updates an existing template.
     *
     */
    public function test_update() {

    }
    
    /**
     * Test case for listCustomFields
     *
     * Gets the custom document fields from a template.
     *
     */
    public function test_listCustomFields() {

    }
    
    /**
     * Test case for updateCustomFields
     *
     * Updates envelope custom fields in a template.
     *
     */
    public function test_updateCustomFields() {

    }
    
    /**
     * Test case for createCustomFields
     *
     * Creates custom document fields in an existing template document.
     *
     */
    public function test_createCustomFields() {

    }
    
    /**
     * Test case for deleteCustomFields
     *
     * Deletes envelope custom fields in a template.
     *
     */
    public function test_deleteCustomFields() {

    }
    
    /**
     * Test case for listDocuments
     *
     * Gets a list of documents associated with a template.
     *
     */
    public function test_listDocuments() {

    }
    
    /**
     * Test case for updateDocuments
     *
     * Adds documents to a template document.
     *
     */
    public function test_updateDocuments() {

    }
    
    /**
     * Test case for deleteDocuments
     *
     * Deletes documents from a template.
     *
     */
    public function test_deleteDocuments() {

    }
    
    /**
     * Test case for getDocument
     *
     * Gets PDF documents from a template.
     *
     */
    public function test_getDocument() {

    }
    
    /**
     * Test case for listDocumentFields
     *
     * Gets the custom document fields for a an existing template document.
     *
     */
    public function test_listDocumentFields() {

    }
    
    /**
     * Test case for updateDocumentFields
     *
     * Updates existing custom document fields in an existing template document.
     *
     */
    public function test_updateDocumentFields() {

    }
    
    /**
     * Test case for createDocumentFields
     *
     * Creates custom document fields in an existing template document.
     *
     */
    public function test_createDocumentFields() {

    }
    
    /**
     * Test case for deleteDocumentFields
     *
     * Deletes custom document fields from an existing template document.
     *
     */
    public function test_deleteDocumentFields() {

    }
    
    /**
     * Test case for deleteDocumentPage
     *
     * Deletes a page from a document in an template.
     *
     */
    public function test_deleteDocumentPage() {

    }
    
    /**
     * Test case for getLock
     *
     * Gets template lock information.
     *
     */
    public function test_getLock() {

    }
    
    /**
     * Test case for getNotificationSettings
     *
     * Gets template notification information.
     *
     */
    public function test_getNotificationSettings() {

    }
    
    /**
     * Test case for updateNotificationSettings
     *
     * Updates the notification  structure for an existing template.
     *
     */
    public function test_updateNotificationSettings() {

    }
    
    /**
     * Test case for listRecipients
     *
     * Gets recipient information from a template.
     *
     */
    public function test_listRecipients() {

    }
    
    /**
     * Test case for updateRecipients
     *
     * Updates recipients in a template.
     *
     */
    public function test_updateRecipients() {

    }
    
    /**
     * Test case for createRecipients
     *
     * Adds tabs for a recipient.
     *
     */
    public function test_createRecipients() {

    }
    
    /**
     * Test case for deleteRecipients
     *
     * Deletes recipients from a template.
     *
     */
    public function test_deleteRecipients() {

    }
    
    /**
     * Test case for deleteRecipient
     *
     * Deletes the specified recipient file from a template.
     *
     */
    public function test_deleteRecipient() {

    }
    
    /**
     * Test case for listTabs
     *
     * Gets the tabs information for a signer or sign-in-person recipient in a template.
     *
     */
    public function test_listTabs() {

    }
    
    /**
     * Test case for updateTabs
     *
     * Updates the tabs for a recipient.
     *
     */
    public function test_updateTabs() {

    }
    
    /**
     * Test case for createTabs
     *
     * Adds tabs for a recipient.
     *
     */
    public function test_createTabs() {

    }
    
    /**
     * Test case for deleteTabs
     *
     * Deletes the tabs associated with a recipient in a template.
     *
     */
    public function test_deleteTabs() {

    }
    
    /**
     * Test case for updateGroupShare
     *
     * Shares a template with a group
     *
     */
    public function test_updateGroupShare() {

    }
    
    /**
     * Test case for deleteGroupShare
     *
     * Removes a member group's sharing permissions for a template.
     *
     */
    public function test_deleteGroupShare() {

    }
    
}
