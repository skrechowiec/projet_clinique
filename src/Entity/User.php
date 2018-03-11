<?php

namespace App\Entity;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

class User {
    private $id;
    private $username;
    private $isActivatedUser;
    private $reinitialisedMdpUser;
    private $email;
    private $createdAt;
    private $password;
    private $roles;
    private $functionUsers; //instance de Fonction
    private $observationUser;
    private $updateAt;

    public function setCreatedAtValue(LifecycleEventArgs $event)
    {
        $this -> createdAt = new \DateTime('now');
    }

    public function setUpdateAtValue(LifecycleEventArgs $event)
    {
        $this -> updatedAt = new \DateTime('now');
    }
}
