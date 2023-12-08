<section id="about" class="about">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="cardd px-0 pt-4 pb-0 mt-3 mb-3">
                    <h5><strong>Demande de permis de détention d'un animal sauvage</strong></h5>
                   <!-- <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}-->
                    </div>
                @endif</p>
                    <p>Les champs suivis d'etoile rouge sont obligatoires</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                                    <form id="msform" method="POST" action="{{route("demandesp004-update")}}" enctype="multipart/form-data" >
                                        @csrf
                                <input type="hidden" class="border-success" name="uuid" value='{{$demande->uuid}}'/>


                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="personal"><strong>Identité de l'animal</strong></li>
                                    <li id="caracteristik"><strong>Pièces jointes</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    <li id="confirm"><strong>Validation</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Identité du demandeur <span style="color:red">
                                            *</span></h4>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Nom & Prenom</strong> <span
                                                        style="color: red">*</span></label>
                                                <input type="text"   name="nom"
                                                    placeholder="Votre nom" class="border-success form-control" value="{{ $name}}" />
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Téléphone</strong> <span
                                                        style="color: red">*</span></label>
                                                <input type="text"   name="telephone"
                                                    placeholder="telephone" class="border-success form-control" value="{{ $telephone}}" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Lieu de résidence<span style="color:red">
                                                        *</span></label>
                                                <select name="commune_id" id="selectMultiple" class="form-select" required>
                                                    <option value="">Veuillez choisir une ville</option>
                                                    @foreach ( $communes as  $com)
                                                     <option {{ $demande->commune_id == $com->uuid ? 'selected' : '' }} value="{{ $com->uuid }}" >{{ $com->libelle }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="siege_social fw-bold">Nationalite<span style="color:red">
                                                        *</span></label>
                                                 <input type="text" class="form-control border-success" placeholder="pays">
                                            </div> --}}

                                        </div>

                                    </div>
                                    <input type="button" name="next" class="next action-button btn btn-success"
                                        value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Identité Animal Detenu</h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Nom commun<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" value="{{ $demande->nom_commun }}" name="nom_commun"
                                                    placeholder="Nom Commun" required/>
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Nom scientifique<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="nom_scientifique" value="{{ $demande->nom_scientifique }}" class="border-success form-control" placeholder="Nom scientifique" required />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Classe d'age<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" value="{{ $demande->classe_age_animal }}" name="classe_age_animal"
                                                    placeholder="Classe d'age" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Sexe animal<span style="color:red">
                                                        *</span></label>

                                                <select name="sexe_animal" id="" class="border-success form-select" required>
                                                    <option value="{{ $demande->sexe_animal == 'Mâle' ? 'Femelle' : '' }}"  >Veuillez choisir le sexe de l'animal</option>
                                                    <option value="">Mâle</option>
                                                    <option value="">Femelle</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Lieu de provenance<span
                                                        style="color: red">*</span></label>

                                                    <select name="lieu_provenance" id="selectMultiple" class="form-select" required>
                                                        <option value="">Veuillez choisir un pays</option>
                                                        @foreach ( $pays as  $pay)
                                                         <option {{ $demande->lieu_provenance == $pay->uuid ? 'selected' : ''}} value="{{ $pay->uuid }}" >{{ $pay->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Conditions d'acquisition<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="condition_acquisition" value="{{ $demande->condition_acquisition }}" class="border-success form-control" placeholder="Conditions d'acquisition" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Motif de la détention<span
                                                        style="color: red">*</span></label>
                                                <textarea type="text"  class="border-success" name="motif_detention"
                                                    placeholder="Motif de la detention" required >{{ $demande->motif_detention }}</textarea>
                                            </div>

                                        </div>


                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"   name="make_payment" class="next action-button"
                                        value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Pièces jointes</h2>

                                        <?php
                                                    $pathCertificatOrigine ='';
                                                    $pathCertificatSanitaire ='';
                                                    foreach ( $documents as $doc){
                                                        if($doc->libelle =="Certificat Origine")
                                                            $pathCertificatOrigine = $doc->chemin;
                                                        elseif($doc->libelle == "Certificat Sanitaire")
                                                            $pathCertificatSanitaire = $doc->chemin;

                                                       ?>
                                                        <a  class="text-success" target="_blank" href="{{ Storage::url($doc->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$doc->libelle}}</b></a>
                                                         <br>
                                                       <?php }?>

                                        <div class="row">

                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Fichier certificat d'origine </label>

                                                        <br/>
                                                <input type="file" name="certificat_origine" class="form-control border-success"  />
                                                <input type="hidden" name="current_certificat_origine" value="{{ $pathCertificatOrigine }}" class="form-control border-success"  />
                                            </div>

                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Fichier certificat sanitaire </label>
                                                        <br/>
                                                <input type="file" name="certificat_sanitaire" class="form-control border-success"   />
                                                <input type="hidden" name="current_certificat_sanitaire" value="{{ $pathCertificatSanitaire }}" class="form-control border-success"   />
                                            </div>
                                        </div>


                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button" name="make_payment" class="next action-button"
                                        value="Suivant" />
                                </fieldset>

                                <fieldset>

                                    <div class="form-card">
                                        <h2 class="fs-title"> </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" {{ intval($demande->is_certified==1) ? 'checked' : '' }} name="is_certified"
                                                class="required-checkbox   checkbox" value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="submit" name="" class="next action-button"
                                        value="Valider" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Validation !</h2>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="https://img.icons8.com/color/96/000000/ok--v2.png"
                                                    class="fit-image">
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>Votre demnde est Modifiée avec success et en cour de traitement!
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
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
