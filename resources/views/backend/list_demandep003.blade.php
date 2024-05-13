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
        <h1>Liste des Demandes d'autorisation à Mener la chasse</h1>
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
                <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true">Nouveaux dossiers</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Dossiers réceptionnés</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Dossiers traités</button>
              </li>
              <li class="nav-item flex-fill" role="presentation">
                <button class="nav-link w-100" id="signe-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-signe" type="button" role="tab" aria-controls="signe" aria-selected="false">Dossiers signés/Archivés</button>
              </li>
            </ul>
            <div class="tab-content pt-2" id="borderedTabJustifiedContent">
              <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                @include('backend.tabs.tabP00_.tab_1')
              </div>
              <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                @include('backend.tabs.tabP00_.tab_2')
              </div>
              <div class="tab-pane fade" id="bordered-justified-contact" role="tabpanel" aria-labelledby="contact-tab">
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
        function refresh() {
            location.reload(true);
        }

</script>
<script>
    function loadDemandeListeByStatus() {
        let url = '/dossiers-by-status?procedure=P003&etat=' + $('#etat').val();
        window.location = url;
    }
</script>
@endsection
