playground
==========

everything that's on my mind atm ;)

Doctrine 2 Events with Zend Framework 2 Entity Listener

GET
{"file":"EquipmentEntityListener.php","line":67,"data":"postLoad"}

POST
{"file":"EquipmentEntityListener.php","line":26,"data":"prePersist"}
{"file":"EquipmentEntityListener.php","line":56,"data":"preFlush"}
{"file":"EquipmentEntityListener.php","line":31,"data":"postPersist"}
{"file":"EquipmentEntityListener.php","line":56,"data":"preFlush"}

PUT
{"file":"EquipmentEntityListener.php","line":66,"data":"postLoad"}
// in my case I call the preFlush is called 3 times
{"file":"EquipmentEntityListener.php","line":56,"data":"preFlush"}
{"file":"EquipmentEntityListener.php","line":56,"data":"preFlush"} 
{"file":"EquipmentEntityListener.php","line":56,"data":"preFlush"}
{"file":"EquipmentEntityListener.php","line":36,"data":"preUpdate"}
{"file":"EquipmentEntityListener.php","line":41,"data":"postUpdate"}

DELETE
{"file":"EquipmentEntityListener.php","line":67,"data":"postLoad"}
{"file":"EquipmentEntityListener.php","line":17,"data":"preRemove"}
{"file":"EquipmentEntityListener.php","line":22,"data":"postRemove"}
