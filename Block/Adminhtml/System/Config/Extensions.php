<?php
/**
 * @author <PPWD/> - Pro Products Web Development
 * @copyright 2024 - Pro Products Web Development. All rights reserved.
 * @package ppwd/module-base
 */

namespace Ppwd\Base\Block\Adminhtml\System\Config;

use Magento\Config\Block\System\Config\Form\Fieldset;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Extensions extends Fieldset
{
    public function render(AbstractElement $element)
    {
        $html = '<a id="ppwd-link" href="https://www.ppwd.com" target="_blank">Visit Pro Products Web Development (PPWD) Website</a>';
        $html .= '<br /><br /><strong>Copyright &copy; '. date("Y") .'</strong> Pro Products Web Development | <a href="https://www.ppwd.com" target="_blank">www.ppwd.com</a>';
        $html .= '<br /><br />Need help? Contact us at <a href="mailto:contact@ppwd.com" target="_blank">contact@ppwd.com</a>.';

        return $html;
    }
}
