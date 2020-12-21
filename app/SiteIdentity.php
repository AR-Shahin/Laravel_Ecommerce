<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteIdentity extends Model
{
    protected $fillable = ['logo','currency','top_text','footer_text','address'];
}
