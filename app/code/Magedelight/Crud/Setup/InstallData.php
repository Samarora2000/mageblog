<?php

namespace MageDelight\Crud\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;


/**
 * Class InstallData 
 *
 * @package Magedelight\Crud\Setup
 */     

 class InstallData implements InstallDataInterface{
     /**
     * Creates sample articles
     *
     * @param ModuleDataSetupInterface $setup
     * @param ModuleContextInterface $context
     * @return void
     */
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context){
        $setup->$startSetup();
        $conn= $setup->getConnection();
        $tableName=$setup->getTable('magedelight_article');

        $data=[
            [
                'title'=>'WW1',
                'content'=>'World War I or the First World War (28 July 1914 - 11 November 1918) was a global conflict between two coalitions: the Allies and the Central Powers.'
            ],
            [
                'title'=>'WW2',
                'content'=>'World War II or the Second World War was a global conflict that lasted from 1939 to 1945.'
            ],
            [
                'title'=>'Indo-Pakistani war of 1971',
                'content'=>'The Indo-Pakistani war of 1971, also known as the third India-Pakistan war, was a military confrontation between India and Pakistan that occurred during the Bangladesh Liberation'
            ],
            [
                'title'=>'French Revolution',
                'content'=>'The French Revolution took place between 1789 and 1799, leading to the rise of Napoleon Bonaparte.'
            ], 
            [
                'title'=>'Sino-Vietnamese War',
                'content'=>'The Sino-Vietnamese War (also known by other names) was a brief conflict that occurred in early 1979 between China and Vietnam.'
            ],
            [
                'title'=>'Russo-Ukrainian War',
                'content'=>'The Russo-Ukrainian War is an ongoing war between Russia and Ukraine, which began in February 2014'
            ]
            ];
            $conn->insertMultiple($tableName, $data);
            $setup->endSetup();
    }
}