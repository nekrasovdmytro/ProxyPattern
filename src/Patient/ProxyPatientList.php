<?php

namespace Patient;


class ProxyPatientList
{
    /*
     * @var PatientList $list
     * */
    protected $list = null;

    public function add(Patient $patient)
    {
        $this->checkListInstance();

        $this->list->add($patient);
    }

    public function remove($id)
    {
        $this->checkListInstance();

        $this->list->remove($id);
    }

    public function show($id)
    {
        $this->checkListInstance();

        return $this->list->show($id);
    }

    protected function checkListInstance()
    {
        if (is_null($this->list)) {
            $this->createList();
        }
    }

    protected function createList()
    {
        $this->list = new PatientList();
    }
}