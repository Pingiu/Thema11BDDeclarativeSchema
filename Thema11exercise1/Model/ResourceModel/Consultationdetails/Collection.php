<?php
namespace Perspective\Thema11exercise1\Model\ResourceModel\Consultationdetails;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{


    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Perspective\Thema11exercise1\Model\Consultationdetails', 'Perspective\Thema11exercise1\Model\ResourceModel\Consultationdetails');
    }
}
