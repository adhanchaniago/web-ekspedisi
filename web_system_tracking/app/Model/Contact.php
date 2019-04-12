<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    protected $table      = 'contact';
    protected $primaryKey = 'contact_id';

    const OPEN      = 'Open';
    const INPROCESS = 'Inprocess';
    const CLOSED    = 'Closed';
}
