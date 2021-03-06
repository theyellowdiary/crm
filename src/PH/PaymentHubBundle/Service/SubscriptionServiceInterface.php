<?php

/*
 * Copyright 2017 Sourcefabric z.ú. and contributors.
 */

namespace PH\PaymentHubBundle\Service;

use Oro\Bundle\OrganizationBundle\Entity\BusinessUnit;
use PH\PaymentHubBundle\Entity\SubscriptionInterface;

/**
 * Interface SubscriptionServiceInterface.
 */
interface SubscriptionServiceInterface
{
    /**
     * @param SubscriptionInterface $subscription
     * @param mixed                 $data
     */
    public function processIncomingData(SubscriptionInterface $subscription, $data);

    /**
     * @param SubscriptionInterface $subscription
     */
    public function sendTransactionCompletedEmail(SubscriptionInterface $subscription);

    /**
     * @return null|object|BusinessUnit
     */
    public function getBusinessUnit();
}
