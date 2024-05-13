@extends('backend.layout.base')
@section('css')
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="{{asset('backend/assets/css/sweetalert.min.css')}}" />
@endsection
@section('title')
<div class="pagetitle">
    <div class="col-sm-12 col-lg-12 offset-12"> 
        @if(session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <h5 class="alert-heading">{{session('success')}}</h5>
        </div>
        <script>
            setTimeout(function () {
                document.querySelector('.alert.alert-success').style.display = 'none';
            }, 3000);
        </script>
        @elseif(session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <h5 class="alert-heading">{{session('error')}}</h5>
        </div>
        <script>
            setTimeout(function () {
                document.querySelector('.alert.alert-danger').style.display = 'none';
            }, 5000);
        </script>
        @endif
    </div>
    <h1>Paiements </h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Demande</a></li>
            <li class="breadcrumb-item active">Détails</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
@endsection

@section('content')
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <div class="card-body">

                            <div class="form-card">
                                <div class="row">
                                    <div class="col-6">
                                        <label class="nom_societe fw-bold"> <strong>Type de demandes</strong> </label>
                                        <span class="border-success form-control">{{ $demande->procedure_libelle }}</span>
                                    </div>
                                    <div class="col-6">
                                        <label class="nom_societe fw-bold"> <strong>Référence</strong> </label>
                                        <span class="border-success form-control">{{ $demande->reference }}</span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <label class="siege_social fw-bold">Demandeur</label>
                                        <span class="border-success form-control">{{ $demande->demandeur }}</span>
                                    </div>
                                    <div class="col-6">
                                        <label class="siege_social fw-bold">Résidence</label>
                                        <span class="border-success form-control">{{ $demande->residence}}</span>
                                    </div>
                                </div>

                                <br>
                                <br>
                                <div class="text-center">
                                    <a href="{{ route('paiement.list-demande')}}" class="btn btn-default">Fermer</a>
                                    @if($demande->paiement)
                                    <button  type="button" onclick="conf_annuler_paiement()" class="btn btn-warning">Annuler le paiement</button>
                                    @else
                                    <button data-toggle="modal" data-target="#assigner{{ $demande->uuid }}" type="button" title="Effectuer le paiement" class="btn btn-primary">
                                        Payer
                                    </button>
                                    @endif

                                </div>
                            </div>
                            <!-- Modal pour paiement -->
                            <div class="modal fade" id="assigner{{ $demande->uuid }}" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content bgcustom-gradient-light">
                                        <div class="modal-header">
                                            <h5 class="modal-title m-auto"> Enregistrement de paiement
                                            </h5>
                                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="btn-close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" enctype="multipart/form-data"
                                                  action="{{ route('paiement.save') }}">
                                                @csrf
                                                <input type="hidden" class="form-control " id="demande_id" name="demande_id" value="{{$demande->uuid  }}">
                                                <input type="hidden" class="form-control " id="code_procedure" name="code_procedure" value="{{$demande->procedure  }}">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="ref_paiement" class="form-label">Numéro quittance  <span style="color:red">
                                                                *</span></label>
                                                        <input type="text" required class="form-control  border-success" id="ref_paiement" name="ref_paiement">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="date_paiement" class="form-label">Date Quittance <span style="color:red">
                                                                *</span></label>
                                                        <input type="date" required class="form-control  border-success" id="date_paiement" name="date_paiement">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="montant" class="form-label">Montant</label>
                                                        <input type="text" readonly class="form-control border-success" id="montant" name="montant" value="{{$demande->montant }}">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                                                    <button type="submit" class="btn btn-success">Enregistrer le paiement</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Recent Sales -->

            </div>
        </div><!-- End Left side columns -->



    </div>
</section>
@endsection

@section('script')
<script src="{{asset('backend/assets/js/sweetalert.min.js')}}"></script>
<script>
       function refresh() {
           location.reload(true);
       }

       function conf_annuler_paiement() {

           swal({
               title: "Annulation de paiement",
               text: "Voulez-vous vraiment annuler le paiement ?",
               icon: "warning",
               buttons: [
                   "Non, j'annule",
                   'Oui, je confirme'
               ],
               dangerMode: true,
           }).then(function (isConfirm) {
               if (isConfirm) {
                   annuler_paiement();
               }
           });
       }
       
       function annuler_paiement() {
           var demande_id = $('#demande_id').val();
           var procedure = $('#code_procedure').val();
           try {
               $.ajax({
                   type: "GET",
                   url: "/paiement/demande/annuler",
                   dataType: "json",
                   data: {
                       demande_id: demande_id,
                       procedure: procedure
                   },
                   success: function (data) {
                       if (data.status == 'success') {
                           (async () => {
                               await toast("L'annulation du paiement a été effectuée !", 'success');
                               await sleep(500);
                               fetch(window.location = '/paiement/demande/detail/' + procedure + '/' + demande_id);
                           })();
                       } else {
                           toast("L'annulation du paiement a échouée. Veuillez réessayer", type = 'warning');
                       }
                   }
               });
           } catch (err) {
           }
       }
       
       function toast(message, type = 'info') {
           const Toast = Swal.mixin({
               toast: true,
               position: 'top-end',
               showConfirmButton: false,
               timer: 5000,
               timerProgressBar: true,
               onOpen: (toast) => {
                   toast.addEventListener('mouseenter', Swal.stopTimer)
                   toast.addEventListener('mouseleave', Swal.resumeTimer)
               }
           });

           return Toast.fire({
               icon: type,
               title: message
           });
       }

       function sleep(ms) {
           return new Promise(resolve => setTimeout(resolve, ms));
       }
       
       function showErrors(data) {
           if (data && data.responseJSON && data.responseJSON.errors) {
               let errors = data.responseJSON.errors;
               for (let key in errors) {
                   if (errors[key] && Array.isArray(errors[key])) {
                       let error = errors[key][0];
                       toast(error, 'error');
                       return;
                   }
               }
           } else if (data && data.responseJSON && data.responseJSON.message) {
               if (data.responseJSON.message == "Unauthenticated.") {
                   toast(__("votre_session_est_expiree_veuillez_vous_reconnecter"), 'error');
                   return;
               }
               toast(data.responseJSON.message, 'error');
           } else if (data && data.errors) {
               let errors = data.errors;
               for (let key in errors) {
                   if (errors[key] && Array.isArray(errors[key])) {
                       let error = errors[key][0];
                       toast(error, 'error');
                       return;
                   }
               }

           }
       }
</script>


@endsection
