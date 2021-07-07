<?php

namespace TCG\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Translatable;

class AboutU extends Model
{
    use Translatable;

    protected $translatable = ['slug', 'name'];

    protected $table = 'about_us';

    protected $fillable = ['slug', 'name'];
}
