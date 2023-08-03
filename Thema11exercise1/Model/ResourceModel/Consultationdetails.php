<?php
namespace Perspective\Thema11exercise1\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Consultationdetails extends AbstractDb
{
    public function _construct()
    {
        $this->_init("consultation", 'ID');
    }
}
