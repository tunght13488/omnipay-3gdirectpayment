<?php

namespace Omnipay\ThreeGDirectPayment;

use Omnipay\Common\AbstractGateway;

class Gateway extends AbstractGateway
{

    /**
     * Get gateway display name
     *
     * This can be used by carts to get the display name for each gateway.
     */
    public function getName()
    {
        return '3GDirectPayment';
    }
}
