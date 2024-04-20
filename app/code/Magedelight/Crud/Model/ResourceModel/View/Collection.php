<?php

namespace Magedelight\Crud\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use \Magedelight\Crud\Model\View;
use \Magedelight\Crud\Model\ResourceModel\View as ViewResourceModel;

class Collection extends AbstractCollection{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct(){
        $this->_init(View::class, ViewResourceModel::class);
    }
}