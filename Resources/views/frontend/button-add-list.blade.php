<div class="text-right">
  <div id="listCheck"
       class="mb-2 d-inline-block"
       data-toggle="tooltip"
       data-placement="top"
       title="Agregar a la lista">
    <x-isite::button
            style="outline"
            buttonClasses="button-small rounded-pill"
            :withIcon="true"
            iconClass="fa-solid fa-list-check"
            sizeLabel="16"
            color="dark"
            :onclick="'addList()'"
    />
  </div>
</div>

@section('scripts')
  @parent

  @include('icommerce::frontend.partials.style')
  <script defer type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5fd9384eb64d610011fa8357&product=inline-share-buttons" async="async"></script>
  <script type="text/javascript" defer>(function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
  <script type="text/javascript" defer>
    $('#listCheck').tooltip('show');
    function addList(){
      Swal.fire({
        title: `<i class="fa-solid fa-list-check mr-2"></i> Mis listas de productos `,
        html: `
            <div class="text-center mb-3">
              <x-media::single-image :mediaFiles="$product->mediaFiles()" :isMedia="true"
                                     :alt="$product->title" zone="mainimage" imgClasses="image-product"/>
              <div class="d-block my-2 font-weight-bold">{{$product->name}}</div>
            </div>
          `,
        showCloseButton: true,
        showCancelButton: true,
        focusConfirm: false,
        reverseButtons: true,
        cancelButtonText: ` Crear nueva lista `,
        confirmButtonText: ` Guardar `,
        input: "select",
        inputOptions: {
          Fruits: {
            apples: "Apples",
            bananas: "Bananas",
            grapes: "Grapes",
            oranges: "Oranges"
          },
          Vegetables: {
            potato: "Potato",
            broccoli: "Broccoli",
            carrot: "Carrot"
          },
          icecream: "Ice cream"
        },
        inputPlaceholder: "Selecciona una lista",
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
          console.log('Guardar');
        }
        if (result.isDismissed) {
          console.log('crear nueva lista')
        }
      });
    }
  </script>
@stop
