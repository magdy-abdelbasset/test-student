<?php
 
namespace App\Utils;
trait InvoiceCalc 
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
    private $tax;
    private $products;
    private $discount;
    private $total;
    private $total_after;
    // calculate total price of products
    public function total($column)
    {

        return  [];
    }
    // calculate total after discount and after add taxes 
    private function total_after() 
    {
        return [];
    }
    // calculate taxes for single product and taxes for invoice  
    private function all_taxes($number) 
    {
        // query the database and return a boolean
        // for instance, it might look like this in Laravel
        return $this->where($this->column_id,'like',$number)->exists();
    }

    // calculate discount for single product and taxes for invoice  
    private function all_discount() 
    {
        return [];
    }
    
}