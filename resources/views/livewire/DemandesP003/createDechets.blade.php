<section id="about" class="about">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <style>

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="cardd px-0 pt-4 pb-0 mt-3 mb-3">
                    <h5><strong>Demandes d'autorisation de gestion des déchets solides</strong></h5>
                    {{-- <p>Veuillez remplir tous les champs avant de passer une Etape</p> --}}
                    <div class="row">
                        <div class="col-md-12 mx-0">
                            <form id="msform">
                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Infos entreprise</strong></li>
                                    <li id="entreprise"><strong>Documents joints</strong></li>
                                    <li id="folder"><strong>Récapitulatif</strong></li>
                                    <li id="confirm"><strong>Validation</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Information sur l'entreprise</h2>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe">Denomination de la société<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="nom_societe"
                                                    placeholder="Denomination de la société" />
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social">Siège social<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="siege_social" placeholder="Siège social" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse">Adresse<span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="adresse"
                                                    placeholder="Adresse ou numero de telephone" />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale">Boite postale<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="boite_postale" placeholder="Boite postale" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="activite">Activités ménées<span
                                                        style="color: red">*</span></label>
                                                <textarea class="border-success" name="activite"
                                                    placeholder="Activités ménées"></textarea>
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
                                        <h2 class="fs-title">Documents à fournir</h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="">Arrete de faisabilité<span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="arrete_faisabilite"
                                                    placeholder="arrete de faisabilite" />
                                            </div>
                                            <div class="col-6">
                                                <label class="">Avis favorable de mairie*</label>
                                                <input type="file" class="border-success" name="avis_mairie"
                                                    placeholder="Avis_mairie" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="">Document technique descriptif<span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="document_technique"
                                                    placeholder="document_technique" />
                                            </div>
                                            <div class="col-6">
                                                <label class="">RCCM<span style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="rccm"
                                                    placeholder="RCCM" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-6">
                                                <label class="">Registre de traçabilité<span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="registre_tracable"
                                                    placeholder="Registre de traçabilité" />
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button" name="make_payment" class="next action-button"
                                        value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Information sur l'entreprise</h2>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe">Denomination de la société<span
                                                        style="color: red">*</span></label>
                                                <h6 class="recapInputBorder">Denomination de la société</h6>
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social">Siège social<span style="color:red">
                                                        *</span></label>
                                                <h6 class="recapInputBorder">Siège social</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse">Adresse<span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="adresse"
                                                    placeholder="Adresse ou numero de telephone" />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale">Boite postale<span style="color:red">
                                                        *</span></label>
                                                <h6 class="input">Boite postale</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                                <label class="activite">Activités ménées<span
                                                        style="color: red">*</span></label>
                                                <h6>Activités ménées</h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-card">
                                        <h2 class="fs-title">Document à fournir</h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="">Arrete de faisabilité<span
                                                        style="color: red">*</span></label>
                                                <h6>Arréte de faisabilite</h6>
                                            </div>
                                            <div class="col-6">
                                                <label class="">Avis favorable de mairie*</label>
                                                <input type="file" class="border-success" name="avis_mairie"
                                                    placeholder="Avis_mairie" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="">Document technique descriptif<span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="document_technique"
                                                    placeholder="document_technique" />
                                            </div>
                                            <div class="col-6">
                                                <label class="">RCCM<span style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="rccm"
                                                    placeholder="RCCM" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-6">
                                                <label class="">Registre de traçabilité<span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success" name="registre_tracable"
                                                    placeholder="Registre de traçabilité" />
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>

                                    <div class="form-card">
                                        <h2 class="fs-title">Confirmation</h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox"
                                                class="required-checkbox checkbox">
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="button" name="make_payment" class="next action-button"
                                        value="Confirmation" />
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
                                                <h5>Votre demnde est enregistré avec succes et en cour de traitement!
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
