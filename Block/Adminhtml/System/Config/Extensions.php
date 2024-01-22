<?php

namespace Ppwd\Base\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Fieldset;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Extensions extends Fieldset
{
    public function render(AbstractElement $element)
    {
        $html = '<a id="ppwd-link" href="https://www.ppwd.com" target="_blank">Visit PPWD (ProProducts Web Development) Website</a>';
        $html .= '<br /><br /><strong>Copyright &copy; '. date("Y") .'</strong> ProProducts Web Development | <a href="https://www.ppwd.com" target="_blank">www.ppwd.com</a>';
        $html .= '<br /><br />Need help? Contact us at <a href="mailto:marketplace-support@ppwd.com" target="_blank">marketplace-support@ppwd.com</a>.';

        return $html;
    }
}
