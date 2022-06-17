<?php

namespace Training\TestOM\Model;

use Magento\Tests\NamingConvention\true\mixed;

class Test
{
    private ManagerInterface $manager;
    private array $arrayList;
    private string $name;
    private int $number;
    private ManagerInterfaceFactory $managerFactory;

    public function __construct(
        \Training\TestOM\Model\ManagerInterface $manager,
        \Training\TestOM\Model\ManagerInterfaceFactory $managerFactory,
        $name,
        int $number,
        array $arrayList
    ) {
        $this->manager = $manager;
        $this->managerFactory = $managerFactory;
        $this->name = $name;
        $this->number = $number;
        $this->arrayList = $arrayList;
    }

    public function log()
    {
        print_r(get_class($this->manager));
        echo '<br>';
        $newManager = $this->managerFactory->create();
        print_r(get_class($newManager));
        echo '<br>';
        print_r($this->name);
        echo '<br>';
        print_r($this->number);
        echo '<br>';
        print_r($this->arrayList);
    }
}
