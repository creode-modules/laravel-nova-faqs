<?php

namespace Creode\LaravelNovaFaqs\Nova;

use Laravel\Nova\Resource;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Creode\NovaPublishable\Published;
use Laravel\Nova\Http\Requests\NovaRequest;
use Creode\NovaPublishable\Nova\PublishAction;
use Creode\NovaPublishable\Nova\UnpublishAction;

class Faq extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \Creode\LaravelNovaFaqs\Entities\Faq::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'question';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'question',
    ];

    public static $group = 'FAQs';

    /**
     * Get the displayable label of the resource.
     */
    public static function label()
    {
        return 'FAQs';
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Text::make('Question'),
            Textarea::make('Answer'),
            Published::make('Published', 'published_at'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [
            (new PublishAction)
                ->confirmText('Are you sure you want to publish these items?')
                ->confirmButtonText('Publish')
                ->cancelButtonText("Don't Publish"),

            (new UnpublishAction)
                ->confirmText('Are you sure you want to unpublish these items?')
                ->confirmButtonText('Unpublish')
                ->cancelButtonText("Don't Unpublish"),
        ];
    }
}
