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
                    <h5><strong>Demande de certificat d’homologation des emballages et sachets plastiques biodégradables</strong></h5>
                   <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif</p>
                    <p>Les champs suivis d'etoile rouge sont obligatoires</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                                    <form id="msform" method="POST" action="{{route("demandesp007-update")}}" enctype="multipart/form-data" >
                                        @csrf
                                        <input type="hidden" class="border-success" name="uuid" value='{{$demande->uuid}}'/>
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active bio" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li class="bio" id="personal"><strong>Identité du producteur</strong></li>
                                    <li class="bio" id="caracteristik"><strong>Caractéristiques emballage/sachet</strong></li>
                                    {{-- <li id="stockage"><strong>Information relative au stockage</strong></li> --}}
                                    <li class="bio" id="engagement"><strong>Engagement </strong></li>
                                    <li class="bio" id="confirm"><strong>Validation</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Identité du demandeur <span style="color:red">
                                            *</span></h4>
                                        <div class="row">
                                            <div class="col-4">
                                                <label class="nom_societe fw-bold" >Producteur</label>
                                                <input type="checkbox" {{intval( $demande->is_producteur==1) ? 'checked' : '' }} value="1" class="checkbox"  name="is_producteur" />
                                            </div>
                                            <div class="col-4">
                                                <label class="siege_social fw-bold ">Importateur</label>
                                                <input type="checkbox" value="1" {{intval( $demande->is_importateur==1) ? 'checked' : '' }}  name="is_importateur"/>
                                            </div>
                                            <div class="col-4">
                                                <label class="siege_social fw-bold">Distributeur</label>
                                                <input type="checkbox" value="1"  {{intval( $demande->is_distributeur==1) ? 'checked' : '' }}  name="is_distributeur" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Dénomination Sociale</strong> <span
                                                        style="color: red">*</span></label>
                                                <input class="border-success" type="text" value="{{ $demande->beneficiaire }}"   name="beneficiaire"
                                                    placeholder="Dénomination Sociale" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Lieu de résidence/siège<span style="color:red">
                                                        *</span></label>

                                                <select name="commune_id" id="selectMultiple" class="form-select">
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option value="">Veuillez choisir une ville</option>
                                                    @foreach ( $communes as  $com)
                                                     <option {{ $demande->commune_id == $com->uuid ? 'selected' : '' }} value="{{ $com->uuid }}" >{{ $com->libelle }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse Postale<span style="color: red">*</span></label>
                                                <input type="text" class="border-success" required name="adresse_beneficiaire" value="{{ $demande->adresse_beneficiaire }}" placeholder="Adresse ou numero de telephone" />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" disabled disabled placeholder="Telephone" value="{{ $telephone}}" />
                                            </div>
                                        </div>

                                    </div>
                                    <input type="button" name="next" class="next action-button btn btn-success"
                                        value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Identité du producteur</h2>

                                        <div class="row">

                                            <div class="col-6">
                                                <label class="pays_producteur fw-bold">Pays de production<span style="color:red">
                                                        *</span></label>
                                                        <select name="pays_producteur" id="selectMultiple" required class="form-select">
                                                            {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                            <option value="">Veuillez choisir un Pays</option>
                                                            @foreach ( $pays as  $pay)
                                                             <option {{ $demande->pays_producteur == $pay->uuid ? 'selected' : '' }} value="{{ $pay->uuid }}" >{{ $pay->libelle }}</option>
                                                            @endforeach
                                                        </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_producteur fw-bold">Nom du producteur<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="nom_producteur" value="{{ $demande->nom_producteur }}" placeholder="Nom du producteur" required/>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse_producteur fw-bold">Adresse du producteur<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="adresse_producteur" value="{{ $demande->adresse_producteur }}" placeholder="Adresse du producteur"  required/>
                                            </div>
                                        </div>



                                    </div>
                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"    class="next action-button"
                                        value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Caractéristiques de l'emballage ou du sachet plastique</h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="delai  fw-bold">Délai de biodégradabilité en nombre de mois<span
                                                        style="color: red">*</span></label>
                                                        <select name="delai_traitement"    class="form-select" id="">
                                                            <option {{ $demande->delai == '1 mois' ? 'selected': '' }} value="1 mois">1 mois</option>
                                                            <option {{ $demande->delai == '2 mois' ? 'selected': '' }} value="2 mois">2 mois</option>
                                                            <option  {{ $demande->delai == '3 mois' ? 'selected': '' }} value="3 mois">3 mois</option>
                                                            <option {{ $demande->delai == '4 mois' ? 'selected': '' }} value="4 mois">4 mois</option>
                                                            <option  {{ $demande->delai == '5 mois' ? 'selected': '' }} value="5 mois">5 mois</option>
                                                            <option  {{ $demande->delai == '6 mois' ? 'selected': '' }} value="6 mois">6 mois</option>
                                                        </select>

                                            </div>
                                            <div class="col-6">
                                                <label class="micronage fw-bold">Micronage<span style="color:red">
                                                        *</span></label>
                                                <input type="text" class="border-success form-control" value="{{ $demande->micronage }}" name="micronage" placeholder="Micronage" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="poids fw-bold">Poids unitaire du produit</label>
                                                <input type="text" class="border-success" value="{{ $demande->poids }}" name="poids"
                                                    placeholder="Poids unitaire du produit" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="description_physique fw-bold">Autres Caractéristiques physicochimiques </label>
                                                <input type="text" class="border-success form-control" value="{{ $demande->description_physique }}" name="description_physique" required placeholder="Autres Caractéristiques physicochimiques" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="quantite_annuel fw-bold">Quantité annuelle de production ou d'importation<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success form-control" value="{{ $demande->quantite_annuel }}" name="quantite_annuel"
                                                    placeholder="Quantité annuelle de production ou d'importation" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Certificat de biodégradabilité </label>

                                                        <?php
                                                        $pathCertificat ='';


                                                        foreach ( $documents as $doc){
                                                            if($doc->libelle =="Facture Pro Format")
                                                                $pathCertificat = $doc->chemin;

                                                                      ?>
                                                                    <a  class="text-success" target="_blank" href="{{ Storage::url($doc->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$doc->libelle}}</b></a>
                                                                    <br>
                                                               <?php }?>

                                                <input type="file" class="form-control border-success" value="{{ $demande->certificat_biodegradabilite }}" name="certificat_biodegradabilite" placeholder="Certificat de biodégradabilité" />
                                                <input type="hidden" class="form-control border-success" value="{{ $pathCertificat }}" name="current_certificat_biodegradabilite" placeholder="Certificat de biodégradabilité" />
                                            </div>
                                        </div>
                                    </div>
                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"  class="next action-button"
                                        value="Suivant" />
                                </fieldset>

                                <fieldset>

                                    <div class="form-card">
                                        <h2 class="fs-title"> </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="is_certified"
                                                class="required-checkbox   checkbox" {{ intval($demande->is_certified ==1) ? 'checked' : '' }} value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="submit"   class="next action-button"
                                        value="Valider" />
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




        // Sélection des boutons radio
        const radio1 = document.getElementById("radio1");
        const radio2 = document.getElementById("radio2");

        // Sélection des champs à afficher/masquer
        const moyenP1 = document.getElementById("moyenP1");
        const moyenP2 = document.getElementById("moyenP2");
        moyenP1.style.display="none"
        moyenP2.style.display="none"

        // Ajout d'un gestionnaire d'événement pour les boutons radio
        radio1.addEventListener("change", function() {
            if (radio1.checked) {
                moyenP1.style.display = "block";
                moyenP2.style.display = "none";

            }
        });

        radio2.addEventListener("change", function() {
            if (radio2.checked) {
                moyenP1.style.display = "none";
                moyenP2.style.display = "block";

            }
        });


</script>

