<?php
 
namespace App\Utils;
trait GenerateId 
{
 
    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return string
     */
    private $column_id;
    
    public function customId($column)
    {

        $this->column_id = $column;
        $id = $this->generateBarcodeNumber();
        return  $id;
    }

    private function generateBarcodeNumber() {
        $number = mt_rand(100000, 999999); // better than rand()

        // call the same function if the barcode exists already
        if ($this->barcodeNumberExists($number)) {
            return $this->generateBarcodeNumber();
        }

        // otherwise, it's valid and can be used
        return $number;
    }

    private function barcodeNumberExists($number) {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return $this->where($this->column_id,'like',$number)->exists();
    }

}