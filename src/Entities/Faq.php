<?php

namespace Creode\LaravelNovaFaqs\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PawelMysior\Publishable\Publishable;

class Faq extends Model
{
    use Publishable, HasFactory;

    protected $fillable = [];

    /**
     * Create a new factory instance for the model.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory<static>
     */
    protected static function newFactory()
    {
        return \Creode\LaravelNovaFaqs\Database\Factories\FaqFactory::new();
    }
}
