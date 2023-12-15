<?php

namespace Creode\LaravelNovaFaqs\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class PublishedAt implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  array<string, mixed>  $attributes
     * @return Carbon
     */
    public function get(Model $model, string $key, mixed $value, array $attributes)
    {
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  array<string, mixed>  $attributes
     */
    public function set(Model $model, string $key, mixed $value, array $attributes)
    {

        // TODO: Check if current published_at value is null or in the future, then unpublished.

        if ($model->isPublished()) {
            return $model->unpublish();
        }

        return $model->publish();
    }
}
