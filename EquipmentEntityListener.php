<?php
namespace Mcm\V1\Common\Listener;

use Doctrine\Common\EventArgs;
use Doctrine\ORM\Event\OnFlushEventArgs;
use Doctrine\ORM\Event\PreFlushEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Mcm\V1\Rest\Users\Entity;

//putenv('APP_DEBUG=0');

/**
 * Class ZF2 Doctrine 2 Event Listener
 * @package Mcm\V1\Common\Listener
 */
class EquipmentEntityListener
{
    public function preRemove($entity, EventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function postRemove($entity, EventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function prePersist($entity, EventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function postPersist($entity, LifecycleEventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function preUpdate($entity, PreUpdateEventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function postUpdate($entity, LifecycleEventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function loadClassMetadata($entity, EventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function onFlush($entity, OnFlushEventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function preFlush($entity, PreFlushEventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function postFlush($entity, PostFlushEventArgs $event)
    {
        vd(__FUNCTION__);
    }

    public function postLoad($entity, EventArgs $event)
    {
        vd(__FUNCTION__);
//        $event->getEntity()->create_date->format = new \DateTime();
//        vde(get_class_methods($event->getEntity()));
        // get enabled filters!
//        $lang = $event->getEntityManager()->getFilters()->getFilter('lang')->getParameter('lang');
//        vde($lang);
//        vd(get_class($event->getEntity()));
//        vde(get_class_methods($event));
//        vd(get_class($user));
    }
}
