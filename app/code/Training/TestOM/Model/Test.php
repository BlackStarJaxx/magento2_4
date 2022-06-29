<?php

namespace Training\TestOM\Model;

class Test
{
    private ManagerInterface $manager;
    private ManagerInterfaceFactory $managerFactory;
    private array $arrayList;
    private string $name;
    private int $number;

    public function __construct(
        \Training\TestOM\Model\ManagerInterface $manager,
        \Training\TestOM\Model\ManagerInterfaceFactory $managerFactory,
        string $name,
        int $number,
        array $arrayList
    ) {
        $this->manager = $manager;
        $this->managerFactory = $managerFactory;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
    }

    public function create()
    {
        echo 'works';
    }

    public function get()
    {
        echo 'works';
    }

    public function log()
    {
        print_r(get_class($this->manager));
        echo '<br>';
        $newManager = $this->managerFactory->create();
        print_r(get_class($newManager) . ' task 1.5, instance depends on sequence =_=');
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
    }
}
