<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Weather extends Model
{
    use HasTranslations;
    public $timestamps = true;
    protected $table = "weather";
    protected $locales = ['en','ka'];
    protected $guarded = [];
}
