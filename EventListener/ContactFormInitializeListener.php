<?php

namespace Plugin\OrderInquiry\EventListener;

use Doctrine\ORM\EntityManagerInterface;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class ContactFormInitializeListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            EccubeEvents::FRONT_CONTACT_INDEX_INITIALIZE => 'addOrderNoField',
        ];
    }

    public function addOrderNoField(EventArgs $event)
    {
        $builder = $event->getArgument('builder');
        $request = $event->getRequest();

        $orderNo = $request->query->get('order_no');

        if (!$orderNo) {
            return;
        }

        $data = $builder->getData() ?? [];
        $data['order_no'] = $orderNo;
        $builder->setData($data);
    }
}
