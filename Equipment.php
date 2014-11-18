<?php
namespace Mcm\V1\Rest\Equipment\Entity;

use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks
 * @ORM\EntityListeners({"Mcm\V1\Common\Listener\EquipmentEntityListener"})
 * @ORM\Table(name="equipment")
 */
class Equipment
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer", length=10, options={"unsigned":true})
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;
    
    /**
    * ...some more stuff...
    */

}
