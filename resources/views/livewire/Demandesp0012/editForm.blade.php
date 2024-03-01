

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="cardd px-0 pt-4 pb-0 mt-3 mb-3">
                    <h5><strong>Demande de permis d'écotourisme ou tourisme écologique</strong></h5>
                    <div class="col-6 offset-3"> @if(session('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">

                            <h5 class="alert-heading">{{session('success')}}</h5>

                        </div>

                        <script>
                            setTimeout(function() {
                                document.querySelector('.alert.alert-success').style.display = 'none';
                            }, 3000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
                        </script>
                    @endif</div>
                    <p>Les champs suivis d'étoile rouge sont obligatoires</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform"  method="POST" action="{{route('demandesp0012-update')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="border-success" name="uuid" value='{{$demande->uuid}}'/>

                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>

                                    <li id="caracteristik"><strong>Pièces Jointes</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    {{--<li id="confirm"><strong>Validation</strong></li>--}}
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Type de permis <span style="color:red">
                                            *</span></h4>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="nom_societe fw-bold" >Touristique</label>
                                                <input type="checkbox" value="1" class="checkbox"  {{ intval($demande->is_touristique ==1) ? 'checked' : '' }} name="is_touristique" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold ">Photographique</label>
                                                <input type="checkbox" value="1" {{ intval($demande->is_photographique ==1) ? 'checked' : '' }}  name="is_photographique"/>
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Cinématographique</label>
                                                <input type="checkbox" value="1" {{ intval($demande->is_cinematographique ==1) ? 'checked' : '' }}  name="is_cinematographique" />
                                            </div>

                                        </div><br>
                                        {{-- <h4 class="fs-title">Identité du demandeur <span style="color:red">
                                            *</span></h4> --}}

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>identité</strong> <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" value="{{ $demande->identite }}"
                                                    placeholder="Nom et prenom" />
                                            </div>
                                            <div class="col">
                                                <label class="siege_social fw-bold">Province de résidence<span style="color:red">
                                                        *</span></label>

                                                <select name="province_id" id="provinces" class="form-select border-success" required >
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option value="">Veuillez choisir une Province</option>
                                                    @foreach ( $provinces as  $prov)
                                                     <option value="{{ $prov->uuid }}" >{{ $prov->libelle }}</option>

                                                    @endforeach


                                                </select>


                                            </div>

                                            <div class="col">
                                                <label class="siege_social fw-bold">Commune de résidence/siège<span style="color:red">
                                                        *</span></label>

                                                <select name="commune_id"  id="communes" class="form-select border-success" required>
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse Postale<span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="beneficiaire" value="{{ $demande->beneficiaire }}"
                                                    placeholder="Adresse postal" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">Téléphone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" class="border-success"   placeholder="Telephone" value="{{ $telephone}}" />
                                            </div>
                                          

                                           
                                        </div>

                                    </div>
                                    <input type="button"  class="next action-button btn btn-success"
                                        value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Pièces à Fournir</h2>
                                        <?php
                                        $pathCnib ='';
                                        $pathPhoto ='';
                                        $pathPa ='';
                                        $pathAgrement ='';
                                        $pathQuitance ='';

                                        foreach ( $documents as $doc){
                                            if($doc->libelle =="CNIB")
                                                $pathCnib = $doc->chemin;
                                            if($doc->libelle =="Photo d'Identite")
                                                $pathPhoto = $doc->chemin;
                                            if($doc->libelle =="Liste des Personnes concernées")
                                                $pathList = $doc->chemin;

                                                      ?>
                                                    <a  class="text-success" target="_blank" href="{{ Storage::url($doc->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$doc->libelle}}</b></a>
                                                    <br>
                                               <?php }?>
                                        <div class="row">

                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">CNIB ou Passport </label>
                                                <input type="file" name="cnib" class="form-control border-success"  >
                                                <input type="hidden" name="current_cnib" value="{{ $pathCnib }}" class="form-control border-success"  >
                                            </div>
                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">Photo d'identité </label>
                                                <input type="file" name="photo" class="form-control border-success"  >
                                                <input type="hidden" name="current_photo" value="{{ $pathPhoto }}" class="form-control border-success"  >
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">Liste des personnes concernées </label>
                                                <input type="file" name="list_personne" class="form-control border-success"  >
                                                <input type="hidden" name="current_list_personne" value="{{ $pathList }}" class="form-control border-success"  >
                                            </div>
                                        </div>

                                    </div>
                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"   class="next action-button"
                                        value="Suivant" />
                                </fieldset>

                                <fieldset>

                                    <div class="form-card">
                                        <h2 class="fs-title">  </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" {{ intval( $demande->confirmed==1) ? 'checked' : '' }} name="confirmed"
                                                class="required-checkbox   checkbox" value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button"  class="previous action-button-previous"
                                    value="Retour" />
                                <input type="submit"   class="next action-button"
                                    value="Valider" />
                                <!-- Ajoutez ceci dans la première étape du formulaire -->
                                <div class="error-message" style="color: red;"></div>
                                </fieldset>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" ;></script>

<script type="text/javascript">
    $('#selectMultiple').select2();
</script>


<script>
    $(document).ready(function () {
        $('#provinces').change(function () {
            var provinceId = $(this).val();
            if (provinceId) {
                $.ajax({
                    url: '/get-communes/' + provinceId,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#communes').empty();
                        $.each(data, function (key, value) {
                            $('#communes').append('<option value="' + value.uuid + '">' + value.libelle + '</option>');
                        });
                    }
                });
            } else {
                $('#communes').empty();
            }
        });
    });
</script>
<script type='text/javascript'>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function () {
        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        // Vérifiez si tous les champs obligatoires dans le formulaire actuel sont remplis
        var isValid = true;
        current_fs.find('input[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });

        // Vérifiez si la case de confirmation est cochée
        current_fs.find('checkbox[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).is(":checked")) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });

        if (isValid) {
            // Ajoutez la classe Active
            $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

            // Affichez le champ suivant
            next_fs.show();
            // Masquez le champ actuel avec un style
            current_fs.animate({ opacity: 0 }, {
                step: function (now) {
                    // pour faire apparaître l'animation du champ
                    opacity = 1 - now;
                    current_fs.css({
                        'display': 'none',
                        'position': 'relative'
                    });
                    next_fs.css({ 'opacity': opacity });
                },
                duration: 600
            });
        }
    });


$(".previous").click(function(){

    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();

    //Remove class active
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

    //show the previous fieldset
    previous_fs.show();

    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now) {
            // for making fielset appear animation
            opacity = 1 - now;

            current_fs.css({
                'display': 'none',
                'position': 'relative'
            });
            previous_fs.css({'opacity': opacity});
        },
        duration: 600
    });
});

$('.radio-group .radio').click(function(){
    $(this).parent().find('.radio').removeClass('selected');
    $(this).addClass('selected');
});

$(".submit").click(function(){
    return false;
})

        $("div#moyenP1").hide();
		$("div#moyenP2").hide();

jQuery('input[name=moyen]:radio').click(function(){
		$("div#moyenP1").hide();
		$("div#moyenP2").hide();
		var divId = jQuery(this).val();
        if(divId * 1 == 1){
            $("div#moyenP1").show()
        }else{
            $("div#moyenP2").show()
        }
		});

});
</script>
<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
  });

</script>

<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
  });




</script>
