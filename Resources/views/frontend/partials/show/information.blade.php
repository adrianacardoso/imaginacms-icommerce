<div class="information">
  
  <!-- CATEGORY -->
  <div class="category text-uppercase" >
    {{$product->category->title}}
  </div>
  <!-- END CATEGORIES -->
  <!-- TITLE -->
  <h1 class="name">{{$product->name}}</h1>
  <!-- END TITLE -->

  <!-- REFERENCE -->
  @if($product->reference)
  <div class="reference my-2"><span
      class="ref-label">{{trans("icommerce::products.table.reference")}}</span>: {{$product->reference}}
  </div>
  @endif

  <!-- SUMMARY -->
  <div class="options">{{$product->summary}}</div>
  
  <!-- RATING -->
  @if(is_module_enabled('Rateable') && setting('icommerce::showRatingProduct'))
    @include('icommerce::frontend.partials.show.rating')
  @endif


<!-- END PRICE -->

  @if($product->pdf)
  <div class=" align-items-center mb-4" >
    <a href="{{$product->pdf}}"
       class="btn btn-outline-light text-dark">
      <i class=""> </i>
      {{trans('icommerce::products.messages.product_brochure')}}
    </a>
  </div>
  @endif

  <!-- OPCIONES DE PRODUCTO -->
  @if((!$product->is_call || setting("icommerce::canAddIsCallProductsIntoCart")) && $product->stock_status)
  <livewire:icommerce::options :product="$product" />

  @elseif($product->is_call)
  <!-- BUTTON CONSULT -->
  <div class="add-cart">
    <hr>
    <div class="row">
      <div class="col my-2 my-md-0">
        <div>
          <a onClick="window.livewire.emit('makeQuote',{{$product->id}})"
             class=" btn-comprar btn btn-secondary text-white">
            {{trans('icommerce::products.form.contactUs')}}</a>
          <!-- BUTTON WISHLIST -->
          <a
            onClick="window.livewire.emit('addToWishList',{{json_encode(["entityName" => "Modules\\Icommerce\\Entities\\Product", "entityId" => $product->id])}})"
            class="btn btn-wishlist">
            <span id="addToTheListSpan">{{trans("wishlistable::wishlistables.button.addToList")}}</span>
            <i class="fa fa-heart-o ml-1"></i>
          </a>
        </div>
      
      </div>
    </div>
    <hr>
  </div>
  @else
  <div>
    <p class="label d-inline-block px-3 py-2 mb-0">{{trans("icommerce::products.form.outOfStock")}} </p>

    @php
      $productAvailableForm = setting('icommerce::letMeKnowProductIsAvailableForm',null,null);
    @endphp
    @if($productAvailableForm)
      <br>
      <br>
      <span class="text-primary">{{trans("icommerce::forms.letMeKnowWhenProductIsAvailable.title")}}</span>
      <x-iforms::form :id="$productAvailableForm" :fieldsParams="['productName' => ['readonly' => 'readonly', 'value' => $product->name]]" />
    @endif
    <hr>
  </div>
  @endif

  <!-- Points Product -->
  @include('icommerce::frontend.partials.show.points')

  @if(isset($organization->id))
  {{trans("icommerce::products.form.soldByOrganization")}} <a href="{{$organization->url}}">{{$organization->title}}</a>
    @endif
</div>
