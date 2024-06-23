<?php

namespace Sorwar\Brands\Model;

use \Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Brands extends AbstractModel implements IdentityInterface
{
    const CACHE_TAG = 'sorwar_brands_index';

    protected $_cacheTag = 'sorwar_brands_index';

    protected $_eventPrefix = 'sorwar_brands_index';

    protected function _construct()
    {
        $this->_init('Sorwar\Brands\Model\ResourceModel\Brands');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
