@extends('backend.layout.base')
@section('title')
<div class="pagetitle">
<div class="col-6 offset-3"> @if(session('error'))
                        <div class="alert alert-danger alert-dismissible" role="alert">

                            <h5 class="alert-heading">{{session('error')}}</h5>

                        </div>

                        <script>
                            setTimeout(function() {
                                document.querySelector('.alert.alert-danger').style.display = 'none';
                            }, 5000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
                        </script>
                    @endif</div>
    <h1>Liste des demandes : {{ $procedureName }} </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Demandes</a></li>
            <li class="breadcrumb-item active">Liste</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
@endsection

@section('content')
<section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card overflow-auto">
          <div class="card-body">
            <h5 class="card-title">Liste des Demandes <span>| Demandes</span></h5>

            <!-- Bordered Tabs Justified -->
            <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100 active" id="depot-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-depot" type="button" role="tab" aria-controls="depot" aria-selected="true">Nouveaux dossiers <b>({{ $depots }})</b></button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="etude-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-etude" type="button" role="tab" aria-controls="etude" aria-selected="false">Dossiers réceptionnés ({{ $etudes }})</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="traite-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-traite" type="button" role="tab" aria-controls="traite" aria-selected="false">Dossiers traités ({{ $traites }})</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="signe-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-signe" type="button" role="tab" aria-controls="signe" aria-selected="false">Dossiers signés/Archivés ({{ $signes }})</button>
              </li>
            </ul>
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
              <div class="tab-pane fade show active" id="bordered-justified-depot" role="tabpanel" aria-labelledby="depot-tab">
                <div>
                    @include('backend.tabs.tabP00_.tab_1')
                </div>
              </div>
              <div class="tab-pane fade" id="bordered-justified-etude" role="tabpanel" aria-labelledby="etude-tab">
                @include('backend.tabs.tabP00_.tab_2')
              </div>
              <div class="tab-pane fade" id="bordered-justified-traite" role="tabpanel" aria-labelledby="traite-tab">
                @include('backend.tabs.tabP00_.tab_3')
              </div>
              <div class="tab-pane fade" id="bordered-justified-signe" role="tabpanel" aria-labelledby="signe-tab">
                @include('backend.tabs.tabP00_.tab_4')
              </div>
            </div><!-- End Bordered Tabs Justified -->

          </div>
        </div>

      </div>

    </div>
  </section>
@endsection

@section('script')

<script>
    function rejetter() {

        var test = document.getElementById('test')
        test.submit()
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })

        swalWithBootstrapButtons.fire({
            title: 'Etes vous sur de vouloir Rejetter cette Demande?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Je Confirme!',
            cancelButtonText: 'Annuler!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                swalWithBootstrapButtons.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                // swalWithBootstrapButtons.fire(
                //   'Cancelled',
                //   'Your imaginary file is safe :)',
                //   'error'
                // )
            }
        })
    }

    //fonction valider statut
    function valider(me) {
        Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Save',
            denyButtonText: `Don't save`,
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                let url = $(me).attr('data-url');
                window.location = url;



                Swal.fire('Saved!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        })
    }

    function refresh() {
        location.reload(true);
    }
    
</script>

<script>
    function loadDemandeListeByStatus() {
        let url = '/dossiers-by-status?procedure=P001&etat=' + $('#etat').val();
        window.location = url;
    }
</script>


@endsection
