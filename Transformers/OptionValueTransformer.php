<?php

namespace Modules\Icommerce\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class OptionValueTransformer extends Resource
{
  public function toArray($request)
  {
    $data = [
      'id' => $this->id,
      'option_id' => $this->option_id,
      'sort_order' => $this->sort_order,
      'description' => $this->description,
      'options' => $this->options,
      'created_at' => $this->created_at,
      'updated_at' => $this->updated_at,
    ];
  
    $filter = json_decode($request->filter);
  
    // Return data with available translations
    if (isset($filter->allTranslations) && $filter->allTranslations){
    
      // Get langs avaliables
      $languages = \LaravelLocalization::getSupportedLocales();
    
      foreach ($languages as  $key => $value){
        if ($this->hasTranslation($key)) {
          $data['translates'][$key]['description'] = $this->translate("$key")['description'];
        }
      }
    }
    return $data;
  }
}