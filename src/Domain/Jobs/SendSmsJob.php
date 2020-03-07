<?php

namespace PhpBundle\Notify\Domain\Jobs;

use PhpBundle\Notify\Domain\Entities\SmsEntity;
use PhpBundle\Queue\Domain\Interfaces\JobInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class SendSmsJob implements JobInterface
{

    use ContainerAwareTrait;

    /** @var SmsEntity */
    public $entity;

    public function run()
    {
        $this->smsRepository->send($this->entity);
    }

}