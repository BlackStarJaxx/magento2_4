<?php


namespace Training\AdditionalTestOM\Model;


class ManagerCustom implements \Training\TestOM\Model\ManagerInterface
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
