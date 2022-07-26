<?php

namespace App\Components;

use App\Models\Category;

class Recusive
{
    private $data;
    private $htmlSelect = '';
    public function __construct($data)
    {
        $this->data = $data;
    }
    function categoryRecusive()
    {
        foreach ($this->data as $value) {
            $this->htmlSelect .= "<option value='" .$value['id'] ."'>" . $value['name'] . "</option>";
        }

        return $this->htmlSelect;
    }

    function brandRecusive()
    {
        foreach ($this->data as $value) {
            $this->htmlSelect .= "<option value='" .$value['id'] ."'>" . $value['name'] . "</option>";
        }

        return $this->htmlSelect;
    }

    function categoryRecusive1($category)
    {
        foreach ($this->data as $value) {
            if(!empty($category) && $category == $value['id']){
                $this->htmlSelect .= "<option selected value='" .$value['id'] ."'>" . $value['name'] . "</option>";
            }
            else{
                $this->htmlSelect .= "<option value='" .$value['id'] ."'>" . $value['name'] . "</option>";
            }
        }

        return $this->htmlSelect;
    }

    function brandRecusive1($brand)
    {
        foreach ($this->data as $value) {
            if(!empty($brand) && $brand == $value['id']){
                $this->htmlSelect .= "<option selected value='" .$value['id'] ."'>" . $value['name'] . "</option>";
            }
            else{
                $this->htmlSelect .= "<option value='" .$value['id'] ."'>" . $value['name'] . "</option>";
            }
        }

        return $this->htmlSelect;
    }
}
