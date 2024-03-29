<?php

return [
    /*
    |--------------------------------------------------------------------------
    | FAQs Model
    |--------------------------------------------------------------------------
    |
    | The model which will be used to handle FAQs.
    |
    */

    'faqs_model' => \Creode\LaravelNovaFaqs\Entities\Faq::class,

    /*
    |--------------------------------------------------------------------------
    | Traffic Cop
    |--------------------------------------------------------------------------
    |
    | Indicates whether Nova should check for modifications between viewing
    | and updating a resource.
    |
    */

    'trafficCop' => true,

    /*
    |--------------------------------------------------------------------------
    | Allowed WYSIWYG Buttons
    |--------------------------------------------------------------------------
    |
    | The model which will be used to handle FAQs.
    |
    */

    'allowed_wysiwyg_buttons' => [
        'bold',
        'italic',
        '|',
        'link',
        'strike',
        'underline',
        'highlight',
        '|',
        'bulletList',
        'orderedList',
        'blockquote',
    ],
];
