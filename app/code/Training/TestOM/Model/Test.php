<?php

namespace Training\TestOM\Model;

class Test
{
    private ManagerInterface $manager;
    private array $arrayList;
    private string $name;
    private int $number;

    public function __construct(
        \Training\TestOM\Model\ManagerInterface $manager,
        $name,
        int $number,
        array $arrayList
    ) {
        $this->manager = $manager;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
    }

    public function log()
    {
        print_r(get_class($this->manager));
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
    }
}
