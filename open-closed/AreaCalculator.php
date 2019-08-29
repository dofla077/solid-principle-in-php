<?php


namespace Acme;


class AreaCalculator
{

    public function calculate($shapes)
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}

/**interface PaymentMethodeInterface {
    public function acceptPayment($receipt);
}

class CashPaymentMethode implements PaymentMethodeInterface {

    public function acceptPayment($receipt)
    {
        // TODO: Implement acceptPayment() method.
    }
}

class Checkout {
    public function begin(Receipt $receipt, PaymentMethodeInterface $payment)
    {
        $this->acceptPayment($receipt);
    }
}**/