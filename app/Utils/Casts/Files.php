<?php

namespace App\Utils\Casts;

use Exception;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Support\Facades\Storage;

class Files implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return array
     */
    private $class;
    private $get;

    public function __construct($get = "get",$class = "App/Models/File")
    {
        $this->class = $class;
        $this->get   = $get;
    }
    public function get($model, $key, $value, $attributes)
    {
        try {
            $get = $this->get;
            $files = $this->class::where('model_id', $model->id)->where("model_type", get_class($model))->$get();
            return $files;
        } catch (Exception $e) {
            return null;
        }
    }

    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }
}
