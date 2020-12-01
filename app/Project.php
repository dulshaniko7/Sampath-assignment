<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    protected $guarded = [];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

}
