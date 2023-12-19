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
                    <h5><strong>Certificat d'exemption des emballages et sachets plastiques non biodégradables</strong></h5>
                   <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif</p>
                    <p>Les champs suivis d'etoile rouge sont obligatoires</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                         <form id="msform" method="POST" action="{{route('demandesp006-store')}}" enctype="multipart/form-data" >
                                        @csrf

                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="engagement"><strong>Piece Jointes </strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    <li id="paiement"><strong>Paiement </strong></li>
                                    <li id="confirm"><strong>Validation</strong></li>
                                </ul>


                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Identité<span style="color:red">*</span></h4>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Identité</strong> <span style="color: red">*</span></label> <br />
                                                <input type="text" class="border-success form-control" value="{{ $name }}"   name="libelle_court"  placeholder="nom prenom"  /> <br />
                                            </div>

                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Téléphone</strong> <span style="color: red">*</span></label> <br />
                                                <input type="text" class="border-success form-control" value="{{ $telephone }}"    name="libelle_long"  placeholder="Prenom"  /> <br />
                                            </div>

                                            <div class="row">
                                                <div class="col-6">
                                                    <label class="nom_societe fw-bold" >Addresse Postale</label>
                                                    <input type="text" class="form-control border-success" name="adresse_beneficiaire">
                                                </div>
                                                <div class="col-6">
                                                    <label class="nom_societe fw-bold" >Choisir Localite</label>
                                                    <select name="commune_id" id="" class="form-select border-success" required>
                                                        <option value="">Veuillez Choisir la localite</option>
                                                        @foreach ($communes as  $com)
                                                        <option value="{{ $com->uuid }}">{{ $com->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <h4 class="fs-title">Beneficiaire <span style="color:red">
                                                *</span></h4>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="nom_societe fw-bold" >Moi Meme</label>
                                                    <input type="radio" value="1" class="checkbox"  name="beneficiaire" />
                                                </div>
                                                <div class="col-3">
                                                    <label class="siege_social fw-bold ">Autre Personne</label>
                                                    <input type="radio" value="1"  name="beneficiaire"/>
                                                </div>
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
                                        <div class="row">
                                            <h2 class="fs-title">Pièces à fournir</h2>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Facture pro-format</strong> <span style="color: red">*</span></label> <br />
                                                <input type="file" name="facture_pro"  class="form-control border-success "/> <br />
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Importez le formulaire de demande d’exemption <span style="color:red">*</span></label> <br />
                                                    <input type="file" name="demande_form"    class="form-control border-success " /> <br />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                            <label class="siege_social fw-bold">Importez le Registre de commerce (RCCM) <span style="color:red">*</span></label> <br />
                                                    <input type="file" name="rccm"  class="form-control border-success"/>
                                            </div>
                                            <div class="col-6">
                                                        <label class="siege_social fw-bold">Document technique justifiant l’utilisation <span style="color:red">*</span></label> <br />
                                                        <input type="file" name="document_technique" class="form-control border-success" /> <br />

                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Registre de traçabilité </label> <br />
                                                <input type="file"  name="registre_tracabilite" class="form-control  border-success"/>

                                            </div>
                                        </div>
                                    </div>

                                  <input type="button"   class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button"     class="next action-button"
                                        value="Suivant" />

                                </fieldset>




                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">  </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="is_certified"
                                                class="required-checkbox   checkbox" value="1">
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


                                <fieldset>
                                    <form action="">
                                    <div class="form-card">
                                        <h4 class="fs-title">Paiement <span style="color:red">
                                            *</span></h4>
                                            <label for="demande timbre" class="fw-bold">Moyens de Paiement<span style="color:red">
                                                    *</span></label>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="nom_societe fw-bold" >ORANGE</label>
                                                <input id="radio1" type="radio" value="1" class="checkbox"  name="moyen" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold ">MOOV</label>
                                                <input id="radio2" type="radio" value="0"  name="moyen"/>
                                            </div>


                                        </div>
                                        <br>


                                        <div class="row">
                                            <div id="moyenP1">
                                                <label >  La somme à payer est de 1500Frs: Taper *144*4*6*1500# pour obtenir le OTP </label>

                                            </div>
                                            <div id="moyenP2">
                                                <label >  La somme à payer est de 1500Frs: Taper *555*4*6*1500# pour obtenir le OTP </label>

                                            </div>
                                        <div class="col-6">
                                                <label class="boite_postale fw-bold">Téléphone<span style="color:red">
                                                        *</span></label>
                                                <input type="number" name="numero" style="width: 50%;" class="border-success form-control"   placeholder="Telephone" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">OTP<span style="color:red">
                                                        *</span></label>
                                                <input type="number" name="otp"   style="width: 50%;" class="border-success form-control"   placeholder="otp" required />
                                            </div>
                                        </div>

                                    </div>

                                    <input type="button"  class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="submit"   class="next action-button"
                                        value="Valider" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>
                                    </form>
                                </fieldset>
                                {{-- <fieldset>
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
                                                <h5>Votre demnde est enregistré avec succes et en cour de traitement!
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset> --}}
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
