<?php

namespace Ppwd\Base\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Fieldset;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Documentation extends Fieldset
{
    public function render(AbstractElement $element)
    {
        return '<iframe id="ppwd_documentation" src="https://www.proproductswebdevelopment.com/services/adobe-commerce.htm" width="100%" height="1000px"></iframe>';
    }
}
