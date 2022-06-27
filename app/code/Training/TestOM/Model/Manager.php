<?php


namespace Training\TestOM\Model;


class Manager implements ManagerInterface
{

    public function create()
    {
        echo 'works';
    }

    public function get()
    {
        echo 'works';
    }
}
