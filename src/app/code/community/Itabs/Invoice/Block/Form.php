<?php
/**
 * This file is part of the Itabs_Invoice extension.
 *
 * PHP version 5
 *
 * @category  Itabs
 * @package   Itabs_Invoice
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2013 ITABS GmbH (http://www.itabs.de/). All rights served.
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version   1.0.0
 * @link      https://github.com/itabs/Itabs_Invoice
 */
/**
 * Payment Method Form
 *
 * @category  Itabs
 * @package   Itabs_Invoice
 * @author    Rouven Alexander Rieker <rouven.rieker@itabs.de>
 * @copyright 2013 ITABS GmbH (http://www.itabs.de/). All rights served.
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @version   1.0.0
 * @link      https://github.com/itabs/Itabs_Invoice
 */
class Itabs_Invoice_Block_Form extends Mage_Payment_Block_Form
{
    /**
     * (non-PHPdoc)
     * @see Mage_Core_Block_Template::_construct()
     */
    protected function _construct()
    {
        parent::_construct();
        $this->setTemplate('invoice/form.phtml');
    }
}
