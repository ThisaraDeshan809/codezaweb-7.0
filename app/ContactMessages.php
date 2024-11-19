<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactMessages extends Model
{
    protected $table = 'contact_messages';
    protected $primaryKey = 'id';
    protected $guarded = [];
}
