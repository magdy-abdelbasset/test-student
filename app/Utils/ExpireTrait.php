<?php
namespace App\Utils;

use App\Models\Company;
use App\Models\Image;
use Carbon\Carbon;

trait ExpireTrait{
    public function defaultPlan($old_plan=null)
    {
        $end_at = $this->plan_end_at;
        $start_at = $this->plan_start_at;
        $plan = $this->plan;
        //  first active plan
        
        if(($this->plan_id != $old_plan && !empty($this->plan_id)) ||(!empty($plan) && empty($start_at) && empty($end_at)))
        {
            $this->update([
                "expiration_date"   => $this->dateDays($plan->duration)
            ]);
        }
        return $this;

    }
    public function hasActivePlan(){
        $plan = $this->plan();
        if(empty($plan) || $this->plan_start_at || $this->plan_end_at){
            return null;
        }
        
        if($this->checkActivePlan($this)){
            return $this;
        }
        return null;
    }
    public function whereActivePlan(){
        $companies  = Company::whereDate('expiration_date','=>',Carbon::now());

    }
    // add or Decrease
    private function dateDays($days){
        $date = Carbon::now();
        $date->addDays($days);
        return "$date";
    }

    private function checkActivePlan($company_model){
        $active = $company_model->expiration_date->gte(Carbon::now());
        if(!empty($company_model->from_date) && !empty($company_model->to_date)){
            $active = $company_model->to_date->gte(Carbon::now()) && $company_model->from_date->lte(Carbon::now());
        }
        return $active;
    }
}