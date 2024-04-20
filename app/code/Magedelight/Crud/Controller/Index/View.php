<?php

namespace Magedelight\Crud\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magedelight\Crud\Model\View as ViewModel;

class View extends Action{
    protected $resultPageFactory;
    protected $viewModel;

    public function __construct(Context $context,Pagefactory $pagefactory, ViewModel $viewModel){
       $this->$resultPageFactory=$pagefactory;
       $this->$viewModel = $viewModel;
        parent::construct($context);
    }

    public function execute(){
        $articleId= $this->getRequest()->gerParam('id');
        if ($articleId){
            $article = $this->viewModel->create()->load($articleId);
            if($article->getId()){
                $resultPage = $this->resultPageFactory->create();
                $resultPage->getConfig()->getTitle()->set($article->getTitle());
                return $resultPage;
            }else{
            $this->redirect('*/*/');
            }
        }else{
            $this->_redirect('*/*/');
        }
        
    }
}