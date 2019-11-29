<?php

class Hash
{
    static public function hashage($pass)//beaucoup de statique en bdd
    {
        return md5($pass.Database::SALT);
    }
}