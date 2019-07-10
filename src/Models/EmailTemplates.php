<?php

namespace Rupalipshinde\TemplateWithLocalization\Models;

use Illuminate\Database\Eloquent\Model;

class EmailTemplates extends Model {

    protected $fillable = ['title','subject', 'description', 'language', 'placeholder','event','status'];

}
