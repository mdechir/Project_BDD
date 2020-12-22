<?php

class user
{

    // attribut privé : 



    public function __construct()
    {
        // TODO connexion à la bdd et selectiond de tout les chmaps
    }

    /* GET METHOD */


    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
    }

    public function getLogin()
    {
    }

    // etc ..

    /* SET METHOD */


    public function setId($newId)
    {
        $this->_id = $newId;
    }

    public function setName($newName)
    {
    }

    public function setLogin($newLogin)
    {
    }

    // etc ..

}
