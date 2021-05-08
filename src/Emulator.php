<?php 

namespace wowcms\libcms;

class Emulator
{
    protected $tables = 
    [
        // AUTH DATABASE
        "account" => "account",
        "account_access" => "account_access",
        "account_banned" => "account_banned",
        "battlenet_accounts" => "battlenet_accounts",
        "realmlist" => "realmlist",

    ];


    public function getTableArray($name)
    {
        if (array_key_exists($name, $this->tables)): 
            return $this->tables[$name];
        endif;
    }
}

