<?php
namespace Perspective\Thema11exercise1\Setup\Patch\Schema;

use Magento\Framework\DB\Ddl\Table;

use Magento\Framework\Setup\Patch\SchemaPatchInterface;

use Magento\Framework\Setup\ModuleDataSetupInterface;



class AddColumn implements SchemaPatchInterface
{
   private $moduleDataSetup;


   public function __construct(ModuleDataSetupInterface $moduleDataSetup) 
   {
       $this->moduleDataSetup = $moduleDataSetup;
   }



   public static function getDependencies()
   {
       return [];
   }



   public function getAliases()

   {
       return [];
   }



   public function apply()
   {
       $this->moduleDataSetup->startSetup();
       $this->moduleDataSetup->getConnection()->addColumn(
       $this->moduleDataSetup->getTable('consultation'),

           'price',
           [
               'type' => Table::TYPE_INTEGER,
               'nullable' => true,
               'comment'  => 'Price per hours',
           ]
       );
       $this->moduleDataSetup->getConnection()->addColumn(
        $this->moduleDataSetup->getTable('consultation'),
 
            'gold',
            [
                'type' => Table::TYPE_TEXT,
                'nullable' => true,
                'comment'  => 'Gold',
            ]
        );
       

       $this->moduleDataSetup->endSetup();

   }

}
