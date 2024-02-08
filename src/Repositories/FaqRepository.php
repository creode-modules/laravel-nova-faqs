<?php

namespace Creode\LaravelNovaFaqs\Repositories;

use Creode\LaravelRepository\BaseRepository;

class FaqRepository extends BaseRepository
{
    /**
     * {@inheritdoc}
     */
    protected function getModel(): string
    {
        return config('nova-faqs.faq_model', \Creode\LaravelNovaFaqs\Entities\Faq::class);
    }
}
