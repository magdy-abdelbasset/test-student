<?php
namespace App\Utils;

use App\Models\Image;
use App\Models\Video;
use Exception;

trait SettingAppTrait{
   public function getVideos(string $app)
   {
      if($app !== 'user' &&  $app !=='seller')
      {
         return new Exception("app must be user or seller");
         
      }
      $videos = config('app-videos')['user'];
      $data = $videos;
      foreach ($videos as $k=>$v){
            $description = config('app-videos')["description_starter"].$app."::" .$v["name"];
            $video = Video::where('model_id','App\\Models\\Setting')->where("description",$description)->first();
            $data[$k]["link"] =  !empty($video) ?  asset($video->url) : null;
      }
      return $data;
   }
   public function getVideo(string $app)
   {
      if($app !== 'user' &&  $app !=='seller')
      {
         return new Exception("app must be user or seller");
         
      }
      $description = config('app-videos')["description_starter"].$app."::" ."who_is_us";
      $data = Video::where('model_id','App\\Models\\Setting')->where("description",$description)->first();
      return $data;
   }
   public function getPdf(string $app)
   {
      if($app !== 'user' &&  $app !=='seller')
      {
         return new Exception("app must be user or seller");
         
      }
      $description = config('app-videos')["description_starter"].$app."::" ."pdf";
      $data = Video::where('model_id','App\\Models\\Setting')->where("description",$description)->first();
      return $data;
   }


   public function getBanners(string $app){
      if($app !== 'user' &&  $app !=='seller')
      {
         return new Exception("app must be user or seller");
         
      }
      $description = config('app-videos')["description_starter_banners"].$app."::" ;
      $data = Image::where('model_id','App\\Models\\Setting')->where("description",'LIKE',$description."%")->orderBy('description')->get();
      return $data;
   }
}