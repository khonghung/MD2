<?php

include "Node.php";

class Patient
{
    public $font;
    public $back;
    public $count;
    public $next;

    public function isEmpty()
    {
        return $this->font == null;
    }


    public function enQueue($name, $code)
    {
        $oldBack = $this->back;
        $this->back = new Node();
        $this->back->name = $name;
        $this->back->code = $code;
        if ($this->isEmpty()) {
            $this->font = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }


    public function deQueue()
    {
        if ($this->isEmpty()) {
            return null;
        }

        $removeValue = $this->back->name;
        $this->back = $this->back->next;
        return $removeValue;
    }
  
    public function __toString()
    {
        if ($this->isEmpty())
        {
            return "Không có bệnh nhân nào!<br>";
        } else {
            $currentPatient = $this->font;
            $str = "";
            while ($currentPatient !== null)
            {
                $str .= $currentPatient->name. ", ";
                $currentPatient = $currentPatient->next;
            }
            
            $str .= "<br>";
            
            return $str;
        }
    }
}
