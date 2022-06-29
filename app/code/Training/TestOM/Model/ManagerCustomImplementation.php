<?php


namespace Training\TestOM\Model;


class ManagerCustomImplementation implements ManagerInterface
{

    public function create()
    {
        echo 'works here';
    }

    public function get()
    {
        echo 'works here';
    }
}
