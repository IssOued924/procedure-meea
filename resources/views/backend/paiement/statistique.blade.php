@extends('backend.layout.base')
@section('css')
<link href="{{asset('backend/assets/css/select2.min.css') }}" rel="stylesheet" />
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script-->
<!--script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script-->
@endsection
@section('title')
<div class="pagetitle">
    <div class="col-6 offset-3"> @if(session('error'))
        <div class="alert alert-danger alert-dismissible" role="alert">
            <h5 class="alert-heading">{{session('error')}}</h5>
        </div>
        <script>
setTimeout(function () {
    document.querySelector('.alert.alert-danger').style.display = 'none';
}, 5000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
        </script>
        @endif</div>
    <h1>Statistiques </h1>
    
</div>
@endsection
@section('content')
<section class="section dashboard">
    <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-12">
            <div class="row">
                <!-- Recent Sales -->
                <div class="col-12">
                    <div class="card recent-sales overflow-auto">
                        <h5 class="card-title"> <span>Situation des Paiements</span></h5>
                        <div class="card-body">
                            <br>
                           <div class="row">
                               <div class="col-md-5">
                                    <label for="date_paiement" class="form-label">Date Début</label>
                                    <input type="date" required class="form-control  border-success" id="from" name="from" value="{{ $from }}">
                                </div>
                               <div class="col-md-5">
                                    <label for="date_paiement" class="form-label">Date Fin</label>
                                    <input type="date" required class="form-control  border-success" id="to" name="to" value="{{ $to }}">
                                </div>
                                <div class="col-md-2">
                                    <button type="button" onclick="loadSituationPaiement()" class="btn btn-info" style="margin-top: 30px;
}">Affiher</button>
                                </div>
                           </div>
                            <hr style="height: 10px!important" class="border-success">
                           
                           <div class="row">
                                <div class="col-12">
                                  @if(sizeof($situations) > 0)
                                   <table  class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="width: 80%!important">Procédures</th>
                                                    <th style="text-align: right">Montant</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $totalMontant =0;
                                                @endphp
                                                @foreach ($situations as $sit)
                                                    @php
                                                        $totalMontant +=$sit->montant;
                                                    @endphp
                                                    <tr>
                                                        <td class="bold"> {{ $sit->procedure_libelle }}</td>
                                                        <td style="text-align: right"> <strong>{{ $sit->montant }}</strong></td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th style="text-align: right">TOTAL</th>
                                                    <th style="text-align: right">{{$totalMontant }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                  @else
                                  <p style="color:red">Aucune donnée pour la période choisie </p>
                                  @endif
                                </div>
                            </div>
                        </div>
                    </div>            

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
@endsection

@section('script')
<script src="{{asset('backend/assets/js/select2.min.js') }}"></script>
<script>
$('#procedure').select2();
    function refresh() {
        location.reload(true);
    }

   function loadSituationPaiement() {
       var from = $('#from').val();
       var to = $('#to').val();
       if(to.length == 0 || from.length ==0){
           toast("Veuillez renseigner les champs dates !", type = 'warning');
           return ;
       }else{
           var dateeFin = new Date( $('#to').val());
           var datedebut=  new Date($('#from').val());
           if(datedebut.getTime() > dateeFin.getTime()){
              toast("La date début de doit être anterieure à la date fin !", type = 'warning');
              return;
           }else{
               let url = '/paiement/statistique/?from=' + from+'&to=' + to;
               window.location = url;
           } 
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
        }
        else if(data && data.responseJSON && data.responseJSON.message){
            if(data.responseJSON.message =="Unauthenticated."){
			toast(__("votre_session_est_expiree_veuillez_vous_reconnecter"), 'error');
				return;
            }
            toast(data.responseJSON.message, 'error');
        }
        else if(data && data.errors){
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
