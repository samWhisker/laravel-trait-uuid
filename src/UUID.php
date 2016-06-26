<?php
namespace Koodoo\laravelTraitUUID;
use Webpatser\Uuid\Uuid;
trait UUID
{
    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
