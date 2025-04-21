<?php

namespace Plugin\OrderInquiry;

use Eccube\Event\TemplateEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Contracts\Translation\TranslatorInterface;

class Event implements EventSubscriberInterface
{

    /**
     * @var TranslatorInterface
     */
    private $translator;

    /**
     * Event constructor.
     *
     * @param TranslatorInterface $translator
     */
    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            'Mypage/history.twig' => 'onHistoryDetail',
            'Contact/index.twig' => 'onContactIndex',
            'Contact/confirm.twig' => 'onContactConfirm',
            'Mail/contact_mail.twig' => 'onContactMail',
            'Mail/contact_mail.html.twig' => 'onContactMail',
        ];
    }

    public function onHistoryDetail(TemplateEvent $event): void
    {
        $twig = '@OrderInquiry/default/Mypage/history.twig';
        $event->addSnippet($twig);
    }

    public function onContactIndex(TemplateEvent $event): void
    {
        $twig = '@OrderInquiry/default/Contact/index.twig';
        $event->addSnippet($twig);
    }

    public function onContactConfirm(TemplateEvent $event): void
    {
        $twig = '@OrderInquiry/default/Contact/confirm.twig';
        $event->addSnippet($twig);
    }

    public function onContactMail(TemplateEvent $event): void
    {
        $data = $event->getParameter('data');
        $orderNo = $data['order_no'] ?? null;
        if ($orderNo) {
            $label = $this->translator->trans('order_inquiry.common.order_number');
            $data['contents'] = $label . "【" . $orderNo . "】" . "\n" . $data['contents'];
            $event->setParameter('data', $data);
        }
    }
}
