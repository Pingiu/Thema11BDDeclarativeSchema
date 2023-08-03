<?php
namespace Perspective\Thema11exercise1\ViewModel;

class Thema11exercise1 implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @var \Perspective\Thema11exercise1\Model\ConsultationdetailsFactory
     */
    private $_consultationdetailsFactory;

    public function __construct(
        \Perspective\Thema11exercise1\Model\ConsultationdetailsFactory $consultationdetailsFactory
    )
    {
        $this->_consultationdetailsFactory = $consultationdetailsFactory;
        
    }

    public function getConsultationCollection()
    {
        $review = $this->_consultationdetailsFactory->create();
        $collection = $review->getCollection();
        //$collection->addFieldToFilter('Name', ['like' => 'consultation4']);


        return $collection;
    }
}
