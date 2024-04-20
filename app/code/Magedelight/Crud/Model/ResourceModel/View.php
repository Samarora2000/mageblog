<?php

namespace Magedelight\Crud\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class View extends AbstractDb{
     /**
     * Post Abstract Resource Constructor
     * @return void
     */
    public function _construct(){
        $this->_init('magedelight_article','article_id');   
    }
}