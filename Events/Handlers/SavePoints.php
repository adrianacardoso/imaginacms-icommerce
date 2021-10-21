<?php

namespace Modules\Icommerce\Events\Handlers;


class SavePoints
{

   
    public function handle($event = null)
    {
       
      //\Log::info('Icommerce: Handler - Save Points =======');
      if(is_module_enabled('Ipoint')){

        $order = $event->order;

        // Get Products to Order
        foreach($order->orderItems as $item){
          
          if($item->product->points>0){

            $data = [
              'user_id' => $order->customer_id,
              'pointable_id' => $item->product->id,
              'pointable_type' => get_class($item->product),
              'description' => 'Puntos por comprar Producto: '.$item->product->name,
              'points' => $item->product->points
            ];

            // Create Point
            $pointCreated = app("Modules\Ipoint\Services\PointService")->create($data);

          }

        }

      }// Validation If Module

    }

    
}
