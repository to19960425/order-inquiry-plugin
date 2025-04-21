<?php

namespace Plugin\OrderInquiry\EventListener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Eccube\Event\EccubeEvents;
use Eccube\Event\EventArgs;

class ContactMailListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents(): array
    {
        return [
            EccubeEvents::FRONT_CONTACT_INDEX_COMPLETE => 'onContactMail',
        ];
    }

    public function onContactMail(EventArgs $event): void
    {
        // $data = $event->getArgument('data');
        // $orderNo = $data['order_no'] ?? null;
        // if ($orderNo) {
        //     $data['contents'] = $orderNo . "\n" . $data['contents'];
        //     $event->setArgument('data', $data);
        // }
    }
}
