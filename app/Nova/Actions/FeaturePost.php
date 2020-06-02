<?php

namespace App\Nova\Actions;

use App\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class FeaturePost extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * @var string
     */
    public $name = 'Licht dit bericht uit';

    /**
     * Perform the action on the given models.
     *
     * @param ActionFields $fields
     * @param Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        $model = $models->first();

        if (!$model instanceof Post) {
            return Action::danger('Dit is geen nieuwsbericht.');
        }

        Post::featured()
            ->get()
            ->each(function (Post $post) {
                $post->featured = false;
                $post->save();
            });

        $model->featured = true;
        $model->save();

        return Action::message('Het nieuwsbericht is uitgelicht.');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }
}
