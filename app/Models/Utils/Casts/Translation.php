<?php
 
namespace App\Utils\Casts;

use App\Models\Image;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Http\Request;

class Translation implements CastsAttributes
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
    private $language = 'en';
    private $column_ref;
    public function __construct($column_ref)
    {
        if(isset($_GET['language'])){
            if($_GET['language'] == 'ar'){
                $this->language = 'ar';
            }
        }
        $this->column_ref = $column_ref;
    }
    public function get($model, $key, $value, $attributes)
    {
        if($this->language == 'ar'){
            $column_ref = $this->column_ref;
            if(isset($attributes[$column_ref])){
                return $attributes[$column_ref];
            }
            return get_class($model)::find($model->id)[$column_ref] ?? $value;
        }else {
            return $value;
        }
        
    }
    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }
}