<?php

namespace App;

class Polygon {
    
    private $form;

    /**
     * @return mixed
     */
    public function getForm(): object{
        return $this->form;
    }

    /**
     * @param mixed $form
     */
    public function setForm(object $form): void{
        $this->form = $form;
    }

    public function getArea(){
        return $this->getForm()->getHeight() * $this->getForm()->getWidth();
    }

}