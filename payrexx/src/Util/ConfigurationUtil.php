<?php
/**
 * Payrexx Payment Gateway.
 *
 * @author    Payrexx <integration@payrexx.com>
 * @copyright 2023 Payrexx
 * @license   MIT License
 */
namespace Payrexx\PayrexxPaymentGateway\Util;

class ConfigurationUtil
{
    /**
     * Get payrexx platforms.
     *
     * @return array
     */
    public static function getPlatforms(): array
    {
        return [
            'payrexx.com' => 'Payrexx',
            'shop-and-pay.com' => 'Shop and Pay',
            'ideal-pay.ch' => 'Ideal Pay',
            'payzzter.com' => 'Payzzter',
        ];
    }

    /**
     * Get configuration keys.
     *
     * @return array
     */
    public static function getConfigKeys(): array
    {
        return [
            'PAYREXX_PLATFORM',
            'PAYREXX_API_SECRET',
            'PAYREXX_INSTANCE_NAME',
            'PAYREXX_LOOK_AND_FEEL_ID',
        ];
    }

    /**
     * Get payment methods
     *
     * @return array
     */
    public static function getPaymentMethods(): array
    {
        return [
            'masterpass' => 'Masterpass',
            'mastercard' => 'Mastercard',
            'visa' => 'Visa',
            'apple-pay' => 'Apple Pay',
            'maestro' => 'Maestro',
            'jcb' => 'JCB',
            'american-express' => 'American Express',
            'wirpay' => 'WIRpay',
            'paypal' => 'PayPal',
            'bitcoin' => 'Bitcoin',
            'sofort' => 'Sofort Ueberweisung',
            'airplus' => 'Airplus',
            'billpay' => 'Billpay',
            'bonuscard' => 'Bonus card',
            'cashu' => 'CashU',
            'cb' => 'Carte Bleue',
            'diners-club' => 'Diners Club',
            'sepa-direct-debit' => 'Direct Debit',
            'discover' => 'Discover',
            'elv' => 'ELV',
            'ideal' => 'iDEAL',
            'invoice' => 'Invoice',
            'myone' => 'My One',
            'paysafecard' => 'Paysafe Card',
            'post-finance-card' => 'PostFinance Card',
            'post-finance-e-finance' => 'PostFinance E-Finance',
            'swissbilling' => 'SwissBilling',
            'twint' => 'TWINT',
            'barzahlen' => 'Barzahlen/Viacash',
            'bancontact' => 'Bancontact',
            'giropay' => 'GiroPay',
            'eps' => 'EPS',
            'google-pay' => 'Google Pay',
            'wechat-pay' => 'WeChat Pay',
            'alipay' => 'Alipay',
        ];
    }
}
