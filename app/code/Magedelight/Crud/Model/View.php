<?php
namespace Magedelight\Crud\Model;

use \Magento\Framework\Model\AbstractModel;
use \Magento\Framework\DataObject\IdentityInterface;
use \Magedelight\Crud\Api\Data\ViewInterface;

class View extends AbstractModel implements ViewInterface,IdentityInterface {
        /**
     * Cache tag
     */
    const CACHE_TAG = 'magedelight_crud_view';

    /**
     * Post Initialization
     * @return void
     */
    public function _construct(){
        $this->_init('Magedelight\Crud\Model\ResourceModel\View');
    }


    /**
     * Get Title
     *
     * @return string|null
     */
    public function getTitle(){
        return $this->getData(self::TITLE);
    }


    /**
     * Get Content
     *
     * @return string|null
     */
    public function getContent(){
        return $this->getData(self::CONTENT);
    }


    /**
     * Get Created At
     * 
     * @return string|null
     */
    public function getCreatedAt(){
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Get Id
     * 
     * @return int|null
     */
    public function getId(){
        return $this->getData(self::ARTICLE_ID);
    }

     /**
     * Return identities
     * @return string[]
     */
    public function getIdentities(){
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /** Setter methods */

     /**
     * Set Title
     *
     * @return $this
     */
    public function setTitle($title){
        $this->setData(self::TITLE,$title);
        return $this;
    }


    /**
     * Set Content
     *@param string $content
     * @return $this
     */
    public function setContent($content){
        $this->setData(self::CONTENT,$content);
        return $this;
    }


    /**
     * Set Created At
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt){
        $this->setData(self::CREATED_AT,$createdAt);
        return $this;
    }

    /**
     * Set Id
     * @param int $id
     * @return $this
     */
    public function setId($id){
        $this->setData(self::ARTICLE_ID,$id);
        return $this;
    }

}