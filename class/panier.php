<?php
class Panier
{
    private $selectArt = [];

    public function add ($id)
    {
        if(isset($this ->selectArt[$id]))
        {
            $this ->selectArt[$id] +=1;
        }else
        {
            $this ->selectArt[$id] =1;
        }
    }

    public function update ($id, $quantity)
    {
        $this ->selectArt[$id] +=$quantity;
    }

    public function delete($id)
    {
        unset ($this->selectArt[$id]);
    }

    public function getSelectArt()
    {
       return $this -> selectArt; 
    }

}