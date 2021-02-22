<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    public function assignees(){

    	return $this->belongsToMany(Assignee::class,"assignees_skills");
    }
}
