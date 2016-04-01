<?php

namespace Patient;


class Patient
{
    /*
     * @var int $id
     * */
    protected $id;
    /*
     * @var string $name
     * */
    protected $name;


    /*
     * @param string name
     * */
    public function setName($name)
    {
        $this->name = $name;
    }

    /*
     * @return string
     * */
    public function getName()
    {
        return $this->name;
    }

    /*
     * @param int $id
     * */
    public function setId($id)
    {
        $this->id = $id;
    }

    /*
     * @return int
     * */
    public function getId()
    {
        return $this->id;
    }
}