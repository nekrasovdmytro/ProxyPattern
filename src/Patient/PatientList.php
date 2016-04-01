<?php

namespace Patient;


class PatientList
{
    protected $list;

    public function add(Patient $patient)
    {
        $this->list[$patient->getId()] = $patient;
    }

    public function remove($id)
    {
        if ($this->hasId($id)) {
            unset($this->list[$id]);
        }
    }

    public function get($id)
    {
        try {
            if (!$this->hasId($id)) {
                throw new \Exception("'$id' not found in list");
            }

            return $this->list[$id];

        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public function hasId($id)
    {
        return array_key_exists($id, $this->list);
    }
}