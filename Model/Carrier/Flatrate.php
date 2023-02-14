<?php
namespace Binstellar\FlatrateShipping\Model\Carrier;

class Flatrate
{

    /**
     * @var \Magento\Checkout\Model\Session
     */
    protected $_checkoutSession;

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;

    public function __construct(
        \Magento\Checkout\Model\Session $checkoutSession,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
        $this->_checkoutSession = $checkoutSession;
        $this->_scopeConfig = $scopeConfig;
    }

    public function afterCollectRates(\Magento\OfflineShipping\Model\Carrier\Flatrate $flatRate, $result)
    {


        // Get cart subtotal from checkout session.
        $baseSubTotal = $this->_checkoutSession->getQuote()->getBaseSubtotal();

        if($baseSubTotal >= 200 ) {
                return false;
            }

        return $result;
    }
}