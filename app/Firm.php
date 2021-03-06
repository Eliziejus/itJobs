<?php


namespace JobsApp;
use JobsApp\Information;

class Firm extends Information{
    protected $firmTitle;
    protected $position;
    protected $about;

    public function __construct($firmTitle,$position)
    {
        $this->firmTitle=$firmTitle;
        $this->position=$position;

    }
        public function addAboutUs($about){
        
        $this->about=$about;

    }
    public function showData(){
        return[
            
            $this->firmTitle,
            $this->about,
            $this->position
        ];
    }
    
}
