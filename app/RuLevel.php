<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuLevel extends Model
{
    public function show_duration(){
        return $this->duration;
    }

    public function show_id(){
        return $this->id;
    }

    public function show_price(){
        return $this->price;
    }
}
