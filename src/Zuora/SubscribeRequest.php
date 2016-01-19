<?php namespace Zuora;

class SubscribeRequest extends Object
{
    protected $zType = 'SubscribeRequest';

    public function __construct(
        Account $zAccount,
        Contact $zBillTo,
        PaymentMethod $zPaymentMethod,
        SubscriptionData $zSubscriptionData,
        SubscribeOptions $zOptions = null,
        Contact $zSoldTo = null
    ) {
        $this->_data = array(
            'Account' => $zAccount,
            'BillTo' => $zBillTo,
            'PaymentMethod' => $zPaymentMethod,
            'SubscriptionData' => $zSubscriptionData,
        );
        if (isset($zSoldTo)) {
            $this->_data['SoldToContact'] = $zSoldTo;
        }
        if (isset($zOptions)) {
            $this->_data['SubscribeOptions'] = $zOptions;
        }
    }
}
