@extends('layouts.master')

@section('title')
  {{trans('icommerce::lists.title.myLists')}}  | @parent
@stop

@section('content')
<div id="list_icommerce"
     class="page icommerce index-icommerce-list">

  <h1 class="list-title">{{ trans('icommerce::lists.title.myLists') }}</h1>

  <div class="container">
    <div class="row">
      <div class="col-12">

        <a href="" class="list-link-return">
          <i class="fa fa-angle-left mr-2"></i> Volver
        </a>
        <div class="list-card">
          <div class="list-card-header">
            {{ trans('icommerce::lists.title.list') }} 01
          </div>
          <div class="list-card-body bottom">
            <div class="table-responsive">
              <table class="table table-borderless table-sm ">
                <thead>
                <tr>
                  <th scope="col" class="col-auto col">Producto</th>
                  <th scope="col" class="col-auto">Precio</th>
                  <th scope="col" class="w-140px">Cantidad</th>
                  <th scope="col" class="w-100px"></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <th scope="row">
                    <div class="list-card-img">
                      <x-media::single-image title="nombre producto" :isMedia="true" src="https://components.ozonohosting.com/assets/media/servicios/colegio-interna_extraLargeThumb.webp" alt="nombre producto"/>
                      <div class="title-product mt-2 mb-3 my-md-0 pl-md-3"> Nombre de producto  </div>
                    </div>
                  </th>
                  <td>$00.232.3423.00</td>
                  <td>

                    <div class="input-group list-card-input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-dark" type="button">-</button>
                      </div>
                      <input type="text" class="form-control" placeholder="" aria-label="button amount">
                      <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="button">+</button>
                      </div>
                    </div>

                  </td>
                  <td class="text-center">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
                <tr>
                  <th scope="row">
                    <div class="list-card-img">
                      <x-media::single-image title="nombre producto" :isMedia="true" src="https://components.ozonohosting.com/assets/media/servicios/colegio-interna_extraLargeThumb.webp" alt="nombre producto"/>
                      <div class="title-product mt-2 mb-3 my-md-0 pl-md-3"> Nombre de producto  </div>
                    </div>
                  </th>
                  <td>$00.232.3423.00</td>
                  <td>

                    <div class="input-group list-card-input-group">
                      <div class="input-group-prepend">
                        <button class="btn btn-outline-dark" type="button">-</button>
                      </div>
                      <input type="text" class="form-control" placeholder="" aria-label="button amount">
                      <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="button">+</button>
                      </div>
                    </div>

                  </td>
                  <td class="text-center">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                  </td>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="list-card-footer">
            <x-isite::button buttonClasses="button-base button-primary button-normal rounded mb-4"
                             withIcon="false"
                             withLabel="true"
                             label="Añadir al Carrito"
                             sizeLabel="16"
                             color="white"
            />
            <x-isite::button  style="outline"
                              buttonClasses="button-base button-normal rounded mb-4 ml-md-3"
                              withIcon="false"
                              withLabel="true"
                              label="Seguir Comprando"
                              sizeLabel="16"
                              color="primary"
            />
          </div>
        </div>

      </div>
    </div>
  </div>

</div>
@stop

@section('scripts')
  @parent

  @include('icommerce::frontend.partials.style')
@stop
