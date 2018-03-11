<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class FunctionUser
{
    private $id;
    private $functionCourt;
    private $functionLong;
    private $users; //tableau d'objet User

    public function __construct()
    {
        $this -> users = new ArrayCollection();
    }
}
