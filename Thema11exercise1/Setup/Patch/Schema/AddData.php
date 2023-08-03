<?php
namespace Perspective\Thema11exercise1\Setup\Patch\Schema;

use Magento\Framework\Setup\Patch\DataPatchInterface;

use Magento\Framework\Setup\Patch\PatchVersionInterface;

use Magento\Framework\Setup\ModuleDataSetupInterface;

use Perspective\Thema11exercise1\Model\ConsultationdetailsFactory;

Use Perspective\Thema11exercise1\Model\ResourceModel\Consultationdetails;

class AddData implements DataPatchInterface, PatchVersionInterface
{
        private $consultationDetailsFactory;

        private $consultationDetailsResource;

        private $moduleDataSetup;

        public function __construct(

               ConsultationdetailsFactory $consultationDetailsFactory,

               Consultationdetails $consultationDetailsResource,

               ModuleDataSetupInterface $moduleDataSetup

        )

        {

               $this->consultationDetailsFactory = $consultationDetailsFactory;

               $this->consultationDetailsResource = $consultationDetailsResource;

               $this->moduleDataSetup=$moduleDataSetup;

        }

        public function apply()
        {
               $this->moduleDataSetup->startSetup();

               $consultationDTO=$this->consultationDetailsFactory->create();

               $consultationDTO->setName('consultation5')
               ->setHours(1)
               ->setDate('2023-06-05 10:00:00')
               ->setCustomer(3)
               ->setDiscount(0.27)
               ->setPrice(25);
               $this->consultationDetailsResource->save($consultationDTO);
                $this->moduleDataSetup->endSetup();

               
/*                for($i=1; $i<=5; $i++){
               $consultationDTO->load($i);
               $consultationDTO->setPrice(rand(10,100)); 
               $this->consultationDetailsResource->save($consultationDTO);
                }
               $this->moduleDataSetup->endSetup();
 */
        }

        public static function getDependencies()

        {

               return [];

        }

        public static function getVersion()

        {

               return '1.0.1';

        }

        public function getAliases()


        {

               return [];

        }
}
