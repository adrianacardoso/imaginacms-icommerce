@extends('layouts.master')

@section('title')
  {{trans('icommerce::lists.title.myLists')}}  | @parent
@stop

@section('content')
<div id="list_icommerce"
       class="page icommerce show-icommerce-list">

  <h1 class="list-title">{{ trans('icommerce::lists.title.myLists') }}</h1>

  <div class="container">
      <div class="row">
        <div class="col-12">

          <div class="list-card">

            <div class="list-card-body">

              <div class="list-card-list list-light">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <p class="list-card-title">{{ trans('icommerce::lists.messages.myProductLists') }}</p>
                    <p class="list-card-subtitle">{{ trans('icommerce::lists.messages.myProductListsSummary') }} </p>
                  </div>
                  <div class="col-lg-6 text-right">
                    <x-isite::button buttonClasses="button-base button-secondary button-normal rounded"
                                     withIcon="false"
                                     withLabel="true"
                                     :label="trans('icommerce::lists.button.createNewList')"
                                     sizeLabel="16"
                                     color="primary"
                                     :onclick="'createList()'"
                    />
                  </div>
                </div>
              </div>

              <!-- Cuando no hay elementos en la lista -->
              <div class="list-card-step ">
                <div>
                  <div class="list-card-num-title align-items-center">
                    <div class="icon-num">1</div>
                    <div>{{ trans('icommerce::lists.list steps.step1') }}</div>
                  </div>
                  <div class="card-step card shadow">
                    <x-media::single-image title="paso 1" :isMedia="true" src="{{url('/modules/icommerce/img/list/step1.jpg')}}" alt="Step 1"/>
                  </div>
                </div>
                <div>
                  <div class="list-card-num-title align-items-center">
                    <div class="icon-num">2</div>
                    <div>{{ trans('icommerce::lists.list steps.step2') }}</div>
                  </div>
                  <div class="card-step card shadow">
                    <x-media::single-image title="paso 1" :isMedia="true" src="{{url('/modules/icommerce/img/list/step2.jpg')}}" alt="Step 2"/>
                  </div>
                </div>
                <div>
                  <div class="list-card-num-title">
                    <div class="icon-num">3</div>
                    <div>{!! trans('icommerce::lists.list steps.step3') !!}</div>
                  </div>
                  <div class="card-step card shadow">
                    <x-media::single-image title="paso 1" :isMedia="true" src="{{url('/modules/icommerce/img/list/step3.jpg')}}" alt="Step 3"/>
                  </div>
                </div>
                <div>
                  <div class="list-card-num-title">
                    <div class="icon-num">4</div>
                    <div>{{ trans('icommerce::lists.list steps.step4') }}</div>
                  </div>
                  <div class="card-step card shadow">
                    <x-media::single-image title="paso 1" :isMedia="true" src="{{url('/modules/icommerce/img/list/step3.jpg')}}" alt="Step 4"/>
                  </div>
                </div>
              </div>
              <!-- end Cuando no hay elementos en la lista -->

              <!-- Como se ven las listas -->
              <div class="list-card-list d-none">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <p class="list-card-title">{{ trans('icommerce::lists.title.list') }} 01
                      <a class="cursor-pointer">
                        <i class="fa fa-pencil-square-o ml-2"></i></a>
                    </p>

                    <p class="list-card-subtitle">(cantidad de productos) </p>

                    <a class="list-card-delete mb-4 mb-lg-0">{{ trans('icommerce::lists.title.deleteList') }}</a>
                  </div>
                  <div class="col-lg-6 text-right">
                    <x-isite::button buttonClasses="button-base button-normal rounded"
                                     withIcon="false"
                                     withLabel="true"
                                     :label="trans('icommerce::products.see resource')"
                                     sizeLabel="16"
                                     color="primary"
                    />
                    <x-isite::button buttonClasses="button-base button-primary button-normal rounded"
                                     withIcon="false"
                                     withLabel="true"
                                     :label="trans('icommerce::products.add resource')"
                                     sizeLabel="16"
                                     color="white"

                    />
                  </div>
                </div>
              </div>
              <!-- end como se ven las listas -->

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
  <script type="text/javascript" defer>
    function createList(){
      Swal.fire({
        title: `<i class="fa-solid fa-list-check mr-2"></i> Crea tu nueva lista `,
        background: "#f5f5f5",
        html: `
            <div class="text-center mb-3"><i class="fa-solid fa-list-check d-block"></i>
            Nombra y crea tu lista
            </div>
          `,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: false,
        inputPlaceholder: 'Escribe aquí el nombre',
        confirmButtonText: ` Crear Lista `,
        input: "text",
        customClass: {
          container: 'swal2-icommerce-modal-list',
        },
        showClass: {
          popup: `
              animate__animated
              animate__fadeInUp
              animate__faster
            `
        },
        hideClass: {
          popup: `
              animate__animated
              animate__fadeOutDown
              animate__faster
            `
        },
      }).then((result) => {
        if (result.isConfirmed) {
          console.log('Crear Lista');
        }
      });
    }

  </script>
@stop