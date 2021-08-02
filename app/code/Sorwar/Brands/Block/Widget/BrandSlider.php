<?php

namespace Sorwar\Brands\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;


class BrandSlider extends Template implements BlockInterface
{

    protected $_template = "widgets/slider.phtml";

    protected $_brandsFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Sorwar\Brands\Model\BrandsFactory $brandsFactory
    ) {
        $this->_brandsFactory = $brandsFactory;
        parent::__construct($context);
    }



    public function getBrandsCollection()
    {
        $post = $this->_brandsFactory->create();
        return $post->getCollection();
    }
}
