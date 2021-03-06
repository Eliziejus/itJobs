<?php

namespace JobsApp;
use JobsApp\Firm;

class Employees extends Firm{

    private $name;
    private $lastName;
    private $idNumber;
    private $salary; 


    public function __construct($firmName,$position,$name,$lastName,$idNumber,$salary)
    {
        parent::__construct($firmName,$position);

        $this->name=$name;
        $this->lastName=$lastName;
        $this->idNumber=$idNumber;
        $this->salary=$salary;


    }


    public function showData()
    {
        return[
            //$this->about,
            $this->firmTitle,
            $this->position,
            $this->name,
            $this->lastName,
            $this->idNumber,
            $this->salary,
        ];
    }


}