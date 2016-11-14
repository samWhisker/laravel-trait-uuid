<?php
namespace Koodoo\laravelTraitUUID;
use function Webpatser\Uuid\Uuid;
trait UUID
{
    /**
     * Boot function from laravel.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Webpatser\Uuid\Uuid::generate()->string;
        });
    }
}
