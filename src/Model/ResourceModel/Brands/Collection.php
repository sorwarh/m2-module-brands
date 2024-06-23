<?php

namespace Sorwar\Brands\Model\ResourceModel\Brands;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'sorwar_brands_index_collection';
    protected $_eventObject = 'brands_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Sorwar\Brands\Model\Brands', 'Sorwar\Brands\Model\ResourceModel\Brands');
    }
}
