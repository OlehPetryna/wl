<?php
namespace project;

class Animal
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * set name
     *
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

}