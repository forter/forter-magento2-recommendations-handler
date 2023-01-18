<?php

namespace Forter\RecommendationsHandler\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Sales\Model\Order;

/**
 * ID_VERIFICATION_REQUIRED Observer
 */
class IdVerificationRequiredObserver implements ObserverInterface
{
    /**
     * Handle a ID_VERIFICATION_REQUIRED recommendation.
     * @param Observer $observer
     * @return void
     */
    public function execute(Observer $observer)
    {
        try {
            $event = $observer->getEvent();

            /**
             * The original recommendation key from Forter's response
             * @var string
             */
            $recommendation = $event->getRecommendation(); // ID_VERIFICATION_REQUIRED

            /**
             * Forter's full respose.
             * @var object
             */
            $forterResponse = $event->getForterResponse();

            /**
             * Currect order.
             * @var Order
             */
            $order = $event->getOrder();

            /**
             * The timing of the event in relation to the checkout process
             * Useful for conditioning the action. e.g., if ($timing === 'post') { ... }
             * @var string (pre / post / cron)
             */
            $timing = $event->getTiming(); // pre / post / cron

            //=========================================================//
            // TODO: Add your logics for handling the recommendation ==//
            //=========================================================//
        } catch (\Exception $e) {
            // TODO: Deal with exceptions.
        }
    }
}
