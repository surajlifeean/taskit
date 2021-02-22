<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assignee extends Model
{
    public function skills(){

    	return $this->belongsToMany(Skill::class,"assignees_skills");
    }
}

