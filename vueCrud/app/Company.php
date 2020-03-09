<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Fillable features for companies
     *
     * @var array
     */
    protected $fillable = ['name', 'address', 'website', 'email', 'description'];
}
