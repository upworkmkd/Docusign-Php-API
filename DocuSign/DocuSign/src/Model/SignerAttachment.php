<?php
/**
 * SignerAttachment
 *
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

namespace DocuSign\eSign\Model;

use \ArrayAccess;
/**
 * SignerAttachment Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocuSign\eSign
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SignerAttachment implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'tab_label' => 'string',
        'scale_value' => 'object',
        'optional' => 'string',
        'document_id' => 'string',
        'recipient_id' => 'string',
        'page_number' => 'string',
        'x_position' => 'string',
        'y_position' => 'string',
        'anchor_string' => 'string',
        'anchor_x_offset' => 'string',
        'anchor_y_offset' => 'string',
        'anchor_units' => 'string',
        'anchor_ignore_if_not_present' => 'string',
        'anchor_case_sensitive' => 'string',
        'anchor_match_whole_word' => 'string',
        'anchor_horizontal_alignment' => 'string',
        'tab_id' => 'string',
        'template_locked' => 'string',
        'template_required' => 'string',
        'conditional_parent_label' => 'string',
        'conditional_parent_value' => 'string',
        'custom_tab_id' => 'string',
        'merge_field' => '\DocuSign\eSign\Model\MergeField',
        'status' => 'string',
        'error_details' => '\DocuSign\eSign\Model\ErrorDetails'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'tab_label' => 'tabLabel',
        'scale_value' => 'scaleValue',
        'optional' => 'optional',
        'document_id' => 'documentId',
        'recipient_id' => 'recipientId',
        'page_number' => 'pageNumber',
        'x_position' => 'xPosition',
        'y_position' => 'yPosition',
        'anchor_string' => 'anchorString',
        'anchor_x_offset' => 'anchorXOffset',
        'anchor_y_offset' => 'anchorYOffset',
        'anchor_units' => 'anchorUnits',
        'anchor_ignore_if_not_present' => 'anchorIgnoreIfNotPresent',
        'anchor_case_sensitive' => 'anchorCaseSensitive',
        'anchor_match_whole_word' => 'anchorMatchWholeWord',
        'anchor_horizontal_alignment' => 'anchorHorizontalAlignment',
        'tab_id' => 'tabId',
        'template_locked' => 'templateLocked',
        'template_required' => 'templateRequired',
        'conditional_parent_label' => 'conditionalParentLabel',
        'conditional_parent_value' => 'conditionalParentValue',
        'custom_tab_id' => 'customTabId',
        'merge_field' => 'mergeField',
        'status' => 'status',
        'error_details' => 'errorDetails'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'tab_label' => 'setTabLabel',
        'scale_value' => 'setScaleValue',
        'optional' => 'setOptional',
        'document_id' => 'setDocumentId',
        'recipient_id' => 'setRecipientId',
        'page_number' => 'setPageNumber',
        'x_position' => 'setXPosition',
        'y_position' => 'setYPosition',
        'anchor_string' => 'setAnchorString',
        'anchor_x_offset' => 'setAnchorXOffset',
        'anchor_y_offset' => 'setAnchorYOffset',
        'anchor_units' => 'setAnchorUnits',
        'anchor_ignore_if_not_present' => 'setAnchorIgnoreIfNotPresent',
        'anchor_case_sensitive' => 'setAnchorCaseSensitive',
        'anchor_match_whole_word' => 'setAnchorMatchWholeWord',
        'anchor_horizontal_alignment' => 'setAnchorHorizontalAlignment',
        'tab_id' => 'setTabId',
        'template_locked' => 'setTemplateLocked',
        'template_required' => 'setTemplateRequired',
        'conditional_parent_label' => 'setConditionalParentLabel',
        'conditional_parent_value' => 'setConditionalParentValue',
        'custom_tab_id' => 'setCustomTabId',
        'merge_field' => 'setMergeField',
        'status' => 'setStatus',
        'error_details' => 'setErrorDetails'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'tab_label' => 'getTabLabel',
        'scale_value' => 'getScaleValue',
        'optional' => 'getOptional',
        'document_id' => 'getDocumentId',
        'recipient_id' => 'getRecipientId',
        'page_number' => 'getPageNumber',
        'x_position' => 'getXPosition',
        'y_position' => 'getYPosition',
        'anchor_string' => 'getAnchorString',
        'anchor_x_offset' => 'getAnchorXOffset',
        'anchor_y_offset' => 'getAnchorYOffset',
        'anchor_units' => 'getAnchorUnits',
        'anchor_ignore_if_not_present' => 'getAnchorIgnoreIfNotPresent',
        'anchor_case_sensitive' => 'getAnchorCaseSensitive',
        'anchor_match_whole_word' => 'getAnchorMatchWholeWord',
        'anchor_horizontal_alignment' => 'getAnchorHorizontalAlignment',
        'tab_id' => 'getTabId',
        'template_locked' => 'getTemplateLocked',
        'template_required' => 'getTemplateRequired',
        'conditional_parent_label' => 'getConditionalParentLabel',
        'conditional_parent_value' => 'getConditionalParentValue',
        'custom_tab_id' => 'getCustomTabId',
        'merge_field' => 'getMergeField',
        'status' => 'getStatus',
        'error_details' => 'getErrorDetails'
    );
  
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $tab_label The label string associated with the tab.
      * @var string
      */
    protected $tab_label;
    
    /**
      * $scale_value 
      * @var object
      */
    protected $scale_value;
    
    /**
      * $optional 
      * @var string
      */
    protected $optional;
    
    /**
      * $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
      * @var string
      */
    protected $document_id;
    
    /**
      * $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
      * @var string
      */
    protected $recipient_id;
    
    /**
      * $page_number Specifies the page number on which the tab is located.
      * @var string
      */
    protected $page_number;
    
    /**
      * $x_position This indicates the horizontal offset of the object on the page. DocuSign uses 72 DPI when determining position.
      * @var string
      */
    protected $x_position;
    
    /**
      * $y_position This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
      * @var string
      */
    protected $y_position;
    
    /**
      * $anchor_string Anchor text information for a radio button.
      * @var string
      */
    protected $anchor_string;
    
    /**
      * $anchor_x_offset Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
      * @var string
      */
    protected $anchor_x_offset;
    
    /**
      * $anchor_y_offset Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
      * @var string
      */
    protected $anchor_y_offset;
    
    /**
      * $anchor_units Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
      * @var string
      */
    protected $anchor_units;
    
    /**
      * $anchor_ignore_if_not_present When set to **true**, this tab is ignored if anchorString is not found in the document.
      * @var string
      */
    protected $anchor_ignore_if_not_present;
    
    /**
      * $anchor_case_sensitive When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
      * @var string
      */
    protected $anchor_case_sensitive;
    
    /**
      * $anchor_match_whole_word When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
      * @var string
      */
    protected $anchor_match_whole_word;
    
    /**
      * $anchor_horizontal_alignment Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
      * @var string
      */
    protected $anchor_horizontal_alignment;
    
    /**
      * $tab_id The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
      * @var string
      */
    protected $tab_id;
    
    /**
      * $template_locked When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
      * @var string
      */
    protected $template_locked;
    
    /**
      * $template_required When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
      * @var string
      */
    protected $template_required;
    
    /**
      * $conditional_parent_label For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
      * @var string
      */
    protected $conditional_parent_label;
    
    /**
      * $conditional_parent_value For conditional fields, this is the value of the parent tab that controls the tab's visibility.\n\nIf the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use \"on\" as the value to show that the parent tab is active.
      * @var string
      */
    protected $conditional_parent_value;
    
    /**
      * $custom_tab_id The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
      * @var string
      */
    protected $custom_tab_id;
    
    /**
      * $merge_field 
      * @var \DocuSign\eSign\Model\MergeField
      */
    protected $merge_field;
    
    /**
      * $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
      * @var string
      */
    protected $status;
    
    /**
      * $error_details 
      * @var \DocuSign\eSign\Model\ErrorDetails
      */
    protected $error_details;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->name = $data["name"];
            $this->tab_label = $data["tab_label"];
            $this->scale_value = $data["scale_value"];
            $this->optional = $data["optional"];
            $this->document_id = $data["document_id"];
            $this->recipient_id = $data["recipient_id"];
            $this->page_number = $data["page_number"];
            $this->x_position = $data["x_position"];
            $this->y_position = $data["y_position"];
            $this->anchor_string = $data["anchor_string"];
            $this->anchor_x_offset = $data["anchor_x_offset"];
            $this->anchor_y_offset = $data["anchor_y_offset"];
            $this->anchor_units = $data["anchor_units"];
            $this->anchor_ignore_if_not_present = $data["anchor_ignore_if_not_present"];
            $this->anchor_case_sensitive = $data["anchor_case_sensitive"];
            $this->anchor_match_whole_word = $data["anchor_match_whole_word"];
            $this->anchor_horizontal_alignment = $data["anchor_horizontal_alignment"];
            $this->tab_id = $data["tab_id"];
            $this->template_locked = $data["template_locked"];
            $this->template_required = $data["template_required"];
            $this->conditional_parent_label = $data["conditional_parent_label"];
            $this->conditional_parent_value = $data["conditional_parent_value"];
            $this->custom_tab_id = $data["custom_tab_id"];
            $this->merge_field = $data["merge_field"];
            $this->status = $data["status"];
            $this->error_details = $data["error_details"];
        }
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets tab_label
     * @return string
     */
    public function getTabLabel()
    {
        return $this->tab_label;
    }
  
    /**
     * Sets tab_label
     * @param string $tab_label The label string associated with the tab.
     * @return $this
     */
    public function setTabLabel($tab_label)
    {
        
        $this->tab_label = $tab_label;
        return $this;
    }
    
    /**
     * Gets scale_value
     * @return object
     */
    public function getScaleValue()
    {
        return $this->scale_value;
    }
  
    /**
     * Sets scale_value
     * @param object $scale_value 
     * @return $this
     */
    public function setScaleValue($scale_value)
    {
        
        $this->scale_value = $scale_value;
        return $this;
    }
    
    /**
     * Gets optional
     * @return string
     */
    public function getOptional()
    {
        return $this->optional;
    }
  
    /**
     * Sets optional
     * @param string $optional 
     * @return $this
     */
    public function setOptional($optional)
    {
        
        $this->optional = $optional;
        return $this;
    }
    
    /**
     * Gets document_id
     * @return string
     */
    public function getDocumentId()
    {
        return $this->document_id;
    }
  
    /**
     * Sets document_id
     * @param string $document_id Specifies the document ID number that the tab is placed on. This must refer to an existing Document's ID attribute.
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        
        $this->document_id = $document_id;
        return $this;
    }
    
    /**
     * Gets recipient_id
     * @return string
     */
    public function getRecipientId()
    {
        return $this->recipient_id;
    }
  
    /**
     * Sets recipient_id
     * @param string $recipient_id Unique for the recipient. It is used by the tab element to indicate which recipient is to sign the Document.
     * @return $this
     */
    public function setRecipientId($recipient_id)
    {
        
        $this->recipient_id = $recipient_id;
        return $this;
    }
    
    /**
     * Gets page_number
     * @return string
     */
    public function getPageNumber()
    {
        return $this->page_number;
    }
  
    /**
     * Sets page_number
     * @param string $page_number Specifies the page number on which the tab is located.
     * @return $this
     */
    public function setPageNumber($page_number)
    {
        
        $this->page_number = $page_number;
        return $this;
    }
    
    /**
     * Gets x_position
     * @return string
     */
    public function getXPosition()
    {
        return $this->x_position;
    }
  
    /**
     * Sets x_position
     * @param string $x_position This indicates the horizontal offset of the object on the page. DocuSign uses 72 DPI when determining position.
     * @return $this
     */
    public function setXPosition($x_position)
    {
        
        $this->x_position = $x_position;
        return $this;
    }
    
    /**
     * Gets y_position
     * @return string
     */
    public function getYPosition()
    {
        return $this->y_position;
    }
  
    /**
     * Sets y_position
     * @param string $y_position This indicates the vertical offset of the object on the page. DocuSign uses 72 DPI when determining position.
     * @return $this
     */
    public function setYPosition($y_position)
    {
        
        $this->y_position = $y_position;
        return $this;
    }
    
    /**
     * Gets anchor_string
     * @return string
     */
    public function getAnchorString()
    {
        return $this->anchor_string;
    }
  
    /**
     * Sets anchor_string
     * @param string $anchor_string Anchor text information for a radio button.
     * @return $this
     */
    public function setAnchorString($anchor_string)
    {
        
        $this->anchor_string = $anchor_string;
        return $this;
    }
    
    /**
     * Gets anchor_x_offset
     * @return string
     */
    public function getAnchorXOffset()
    {
        return $this->anchor_x_offset;
    }
  
    /**
     * Sets anchor_x_offset
     * @param string $anchor_x_offset Specifies the X axis location of the tab, in achorUnits, relative to the anchorString.
     * @return $this
     */
    public function setAnchorXOffset($anchor_x_offset)
    {
        
        $this->anchor_x_offset = $anchor_x_offset;
        return $this;
    }
    
    /**
     * Gets anchor_y_offset
     * @return string
     */
    public function getAnchorYOffset()
    {
        return $this->anchor_y_offset;
    }
  
    /**
     * Sets anchor_y_offset
     * @param string $anchor_y_offset Specifies the Y axis location of the tab, in achorUnits, relative to the anchorString.
     * @return $this
     */
    public function setAnchorYOffset($anchor_y_offset)
    {
        
        $this->anchor_y_offset = $anchor_y_offset;
        return $this;
    }
    
    /**
     * Gets anchor_units
     * @return string
     */
    public function getAnchorUnits()
    {
        return $this->anchor_units;
    }
  
    /**
     * Sets anchor_units
     * @param string $anchor_units Specifies units of the X and Y offset. Units could be pixels, millimeters, centimeters, or inches.
     * @return $this
     */
    public function setAnchorUnits($anchor_units)
    {
        
        $this->anchor_units = $anchor_units;
        return $this;
    }
    
    /**
     * Gets anchor_ignore_if_not_present
     * @return string
     */
    public function getAnchorIgnoreIfNotPresent()
    {
        return $this->anchor_ignore_if_not_present;
    }
  
    /**
     * Sets anchor_ignore_if_not_present
     * @param string $anchor_ignore_if_not_present When set to **true**, this tab is ignored if anchorString is not found in the document.
     * @return $this
     */
    public function setAnchorIgnoreIfNotPresent($anchor_ignore_if_not_present)
    {
        
        $this->anchor_ignore_if_not_present = $anchor_ignore_if_not_present;
        return $this;
    }
    
    /**
     * Gets anchor_case_sensitive
     * @return string
     */
    public function getAnchorCaseSensitive()
    {
        return $this->anchor_case_sensitive;
    }
  
    /**
     * Sets anchor_case_sensitive
     * @param string $anchor_case_sensitive When set to **true**, the anchor string does not consider case when matching strings in the document. The default value is **true**.
     * @return $this
     */
    public function setAnchorCaseSensitive($anchor_case_sensitive)
    {
        
        $this->anchor_case_sensitive = $anchor_case_sensitive;
        return $this;
    }
    
    /**
     * Gets anchor_match_whole_word
     * @return string
     */
    public function getAnchorMatchWholeWord()
    {
        return $this->anchor_match_whole_word;
    }
  
    /**
     * Sets anchor_match_whole_word
     * @param string $anchor_match_whole_word When set to **true**, the anchor string in this tab matches whole words only (strings embedded in other strings are ignored.) The default value is **true**.
     * @return $this
     */
    public function setAnchorMatchWholeWord($anchor_match_whole_word)
    {
        
        $this->anchor_match_whole_word = $anchor_match_whole_word;
        return $this;
    }
    
    /**
     * Gets anchor_horizontal_alignment
     * @return string
     */
    public function getAnchorHorizontalAlignment()
    {
        return $this->anchor_horizontal_alignment;
    }
  
    /**
     * Sets anchor_horizontal_alignment
     * @param string $anchor_horizontal_alignment Specifies the alignment of anchor tabs with anchor strings. Possible values are **left** or **right**. The default value is **left**.
     * @return $this
     */
    public function setAnchorHorizontalAlignment($anchor_horizontal_alignment)
    {
        
        $this->anchor_horizontal_alignment = $anchor_horizontal_alignment;
        return $this;
    }
    
    /**
     * Gets tab_id
     * @return string
     */
    public function getTabId()
    {
        return $this->tab_id;
    }
  
    /**
     * Sets tab_id
     * @param string $tab_id The unique identifier for the tab. The tabid can be retrieved with the [ML:GET call].
     * @return $this
     */
    public function setTabId($tab_id)
    {
        
        $this->tab_id = $tab_id;
        return $this;
    }
    
    /**
     * Gets template_locked
     * @return string
     */
    public function getTemplateLocked()
    {
        return $this->template_locked;
    }
  
    /**
     * Sets template_locked
     * @param string $template_locked When set to **true**, the sender cannot change any attributes of the recipient. Used only when working with template recipients.
     * @return $this
     */
    public function setTemplateLocked($template_locked)
    {
        
        $this->template_locked = $template_locked;
        return $this;
    }
    
    /**
     * Gets template_required
     * @return string
     */
    public function getTemplateRequired()
    {
        return $this->template_required;
    }
  
    /**
     * Sets template_required
     * @param string $template_required When set to **true**, the sender may not remove the recipient. Used only when working with template recipients.
     * @return $this
     */
    public function setTemplateRequired($template_required)
    {
        
        $this->template_required = $template_required;
        return $this;
    }
    
    /**
     * Gets conditional_parent_label
     * @return string
     */
    public function getConditionalParentLabel()
    {
        return $this->conditional_parent_label;
    }
  
    /**
     * Sets conditional_parent_label
     * @param string $conditional_parent_label For conditional fields this is the TabLabel of the parent tab that controls this tab's visibility.
     * @return $this
     */
    public function setConditionalParentLabel($conditional_parent_label)
    {
        
        $this->conditional_parent_label = $conditional_parent_label;
        return $this;
    }
    
    /**
     * Gets conditional_parent_value
     * @return string
     */
    public function getConditionalParentValue()
    {
        return $this->conditional_parent_value;
    }
  
    /**
     * Sets conditional_parent_value
     * @param string $conditional_parent_value For conditional fields, this is the value of the parent tab that controls the tab's visibility.\n\nIf the parent tab is a Checkbox, Radio button, Optional Signature, or Optional Initial use \"on\" as the value to show that the parent tab is active.
     * @return $this
     */
    public function setConditionalParentValue($conditional_parent_value)
    {
        
        $this->conditional_parent_value = $conditional_parent_value;
        return $this;
    }
    
    /**
     * Gets custom_tab_id
     * @return string
     */
    public function getCustomTabId()
    {
        return $this->custom_tab_id;
    }
  
    /**
     * Sets custom_tab_id
     * @param string $custom_tab_id The DocuSign generated custom tab ID for the custom tab to be applied. This can only be used when adding new tabs for a recipient. When used, the new tab inherits all the custom tab properties.
     * @return $this
     */
    public function setCustomTabId($custom_tab_id)
    {
        
        $this->custom_tab_id = $custom_tab_id;
        return $this;
    }
    
    /**
     * Gets merge_field
     * @return \DocuSign\eSign\Model\MergeField
     */
    public function getMergeField()
    {
        return $this->merge_field;
    }
  
    /**
     * Sets merge_field
     * @param \DocuSign\eSign\Model\MergeField $merge_field 
     * @return $this
     */
    public function setMergeField($merge_field)
    {
        
        $this->merge_field = $merge_field;
        return $this;
    }
    
    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
  
    /**
     * Sets status
     * @param string $status Indicates the envelope status. Valid values are:\n\n* sent - The envelope is sent to the recipients. \n* created - The envelope is saved as a draft and can be modified and sent later.
     * @return $this
     */
    public function setStatus($status)
    {
        
        $this->status = $status;
        return $this;
    }
    
    /**
     * Gets error_details
     * @return \DocuSign\eSign\Model\ErrorDetails
     */
    public function getErrorDetails()
    {
        return $this->error_details;
    }
  
    /**
     * Sets error_details
     * @param \DocuSign\eSign\Model\ErrorDetails $error_details 
     * @return $this
     */
    public function setErrorDetails($error_details)
    {
        
        $this->error_details = $error_details;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocuSign\eSign\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
