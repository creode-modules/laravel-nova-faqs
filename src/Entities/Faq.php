<?php

namespace Creode\LaravelNovaFaqs\Entities;

use Illuminate\Database\Eloquent\Model;
use PawelMysior\Publishable\Publishable;

class Faq extends Model
{
    use Publishable;

    protected $fillable = [];
}
