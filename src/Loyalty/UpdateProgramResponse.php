<?php

namespace Y2\Loyalty;

class UpdateProgramResponse
{

    protected $UpdateProgramResult = null;

    public function __construct($UpdateProgramResult){
        $this->UpdateProgramResult = $UpdateProgramResult;
    }

    public function getUpdateProgramResult(){
        return $this->UpdateProgramResult;
    }

}