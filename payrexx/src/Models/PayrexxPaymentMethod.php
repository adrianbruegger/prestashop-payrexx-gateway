<?php
/**
 * Payrexx Payment Methods
 *
 * @author    Payrexx <integration@payrexx.com>
 * @copyright 2023 Payrexx
 * @license   MIT License
 */
class PayrexxPaymentMethod extends ObjectModel
{
    public $id;

    public $active;

    public $pm;

    public $position;

    public $country;

    public $currency;

    public $customer_group;

    public static $definition = [
        'table' => 'payrexx_payment_methods',
        'primary' => 'id',
        'fields' => [
            'active' => [
                'type' => self::TYPE_BOOL,
                'validate' => 'isAnything',
                'required' => true,
            ],
            'position' => [
                'type' => self::TYPE_INT,
                'validate' => 'isUnsignedInt',
            ],
            'country' => [
                'type' => self::TYPE_STRING,
                'validate' => 'isAnything',
            ],
            'currency' => [
                'type' => self::TYPE_STRING,
                'validate' => 'isAnything',
            ],
            'customer_group' => [
                'type' => self::TYPE_STRING,
                'validate' => 'isAnything',
            ],
        ],
    ];
}
