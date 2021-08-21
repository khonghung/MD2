<?php
class ArrayList
{
    public $arrayList;


    public function __construct($arr = "")
    {

        if (is_array($arr) == true) {
            $this->arrayList = $arr;
        } else {
            $this->arrayList = array();
        }
    }

    public function add($hungVk)
    {
        array_push($this->arrayList, $hungVk);
    }



    public function clear()
    {
        $this->arrayList = array();
    }


    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arrayList[$index];
        } else {
            die("Error in Array.get");
        }
    }


    public function isEmpty()
    {
        if (count($this->arrayList) == 0) {
            return true;
        } else {
            return false;
        }
    }


    public function remove($index)
    {
        if ($this->isInteger($index)) {

            $newArrayList = array();
            for ($i = 0; $i < $this->size(); $i++)
                if ($index != $i) $newArrayList[] = $this->get($i);
            $this->arrayList = new ArrayList;
        } else {
            die("Error in ArrayList.remove <br/> Integer value require");
        }
    }


    public function size()
    {
        return count($this->arrayList);
    }


    public function sort()
    {
        sort($this->arrayList);
    }


    public function toArray()
    {
        return $this->arrayList;
    }


    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }
}
?>
