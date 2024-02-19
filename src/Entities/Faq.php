<?php

namespace Creode\LaravelNovaFaqs\Entities;

use Spatie\EloquentSortable\Sortable;
use Illuminate\Database\Eloquent\Model;
use PawelMysior\Publishable\Publishable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\EloquentSortable\SortableTrait;

class Faq extends Model implements Sortable
{
    use Publishable, HasFactory, SortableTrait;

    public $sortable = [
        'order_column_name' => 'sort_order',
        'sort_when_creating' => true,
    ];

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
