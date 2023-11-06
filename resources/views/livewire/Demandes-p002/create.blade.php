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
                    <h5><strong>Octroie d'agrement techniques en Eau et Assainissement</strong></h5>
                   <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif</p>
                    <p>Les champs suivis d'etoile rouge sont obligatoires</p>
                    <div class="row">
                        <div class="col-md-12 mx-0">
                                    <form id="msform" method="POST" action="{{route("demandesp001-store")}}" enctype="multipart/form-data" >
                                        @csrf
                                  <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="folder"><strong>Pieces Administratives</strong></li>
                                    <li id="personal"><strong>Domaine et catégorie</strong></li>
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
                                                    <label class="nom_societe fw-bold">Identité <span
                                                            style="color: red">*</span></label>
                                                    <input type="text" class="border-success" name="libelle_court"
                                                        placeholder="identité" /><br /><br />
                                                </div>
                                                <div class="col-6">
                                                    <label class="pays_residence fw-bold">Pays de résidence<span style="color:red">
                                                            *</span></label>
                                                    <input type="text" name="libelle_long" placeholder="Pays de résidence" /><br /><br />
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
                                    <input type="button" name="next" class="next action-button btn btn-success"
                                        value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>
                                <fieldset>
                                    <div class="form-card mb-3">
                                        <h2 class="fs-title">Pièces Administratives à fournir </h2>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Reçu d’achat du dossier de demande <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="denomination_sociale_fournisseur"
                                                    placeholder="Dénomination Sociale" />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold ">Demande Timbré<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="pays_fournisseur" class="form-control"  />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Certificat IFU<span style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="adresse_fournisseur"
                                                    placeholder="Adresse ou numero de telephone" />
                                            </div>
                                             <div class="col-6">
                                                <label class="boite_postale">Attestation RCCM<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="rccm"  class="form-control" />
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Attestation employeur CNSS<span style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="adresse_fournisseur"
                                                    placeholder="Adresse ou numero de telephone" />
                                            </div>
                                             <div class="col-6">
                                                <label class="boite_postale">Fiche Renseignement<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="renseignement"  class="form-control" />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <label class="adresse fw-bold">Déclaration sur l’honneur de l’exactitude des informationsr<span style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" name="adresse_fournisseur"
                                                      />
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
                                        <h2 class="fs-title">Domaine et Catégorie</h2>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="domaine" class="siege_social">Domaine
                                                    <span style="color:red">*</span></label>
                                                <select name="domaine" id="domaine" class="form-select boerder-success">
                                                    <option value="">Veuillez choisir le domaine</option>
                                                    <option value="Eau">Eau</option>
                                                    <option value="Assainissement">Assainissement</option>
                                                    <option value="Barrage">Barrage</option>

                                                </select>

                                            </div>
                                            <div class="col-4">
                                               <label for="categorie" class="siege_social">Catégorie
                                                    <span style="color:red">*</span></label>
                                                <select name="categorie" id="categorie" class="form-select boerder-success">
                                                    <option value="">Veuillez choisir la catégorie</option>
                                                    <option value="Etud">Etude et contrôle</option>
                                                    <option value="Traveax">Travaux</option>
                                                </select>
                                            </div>
                                            <div class="col-4">
                                               <label for="sousdomaine" class="nom_societe">Sous domaine
                                                    <span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="sous_domaine" id="sousdomaine"
                                                    placeholder=" " required id="" id="" />
                                            </div>
                                        </div>

                                         <hr>
                                        <h2 class="fs-title">Autres documents</h2>
                                        <div class="row">
                                            <div class="col-12">
                                                <table class="table datatable table-bordered table-striped datatable-table" id="dt_autre_documents">
                                                    <thead class="dst-form-thead">
                                                        <tr>
                                                            <th>Nom du document <span style="color:red">*</span></th>
                                                            <th>Fichier <span style="color:red">*</span></th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <td colspan="3" style="text-align: right;">
                                                                <a class="btn btn-default" onclick="addRowAutreDocument()">
                                                                    <i class="fa fa-plus-circle text-success"></i>
                                                                    <span>Ajouter un document </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>

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
                                        <h2 class="fs-title">Certification et engagement  </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="confirmed"
                                                class="required-checkbox   checkbox" value="confirmed">
                                            <label for="confirmationBox" class="checkbox-label ">
                                                Je soussigné ...…certifie être l’importateur-distributeur / importateur-utilisateur du/des produit(s) chimique(s) ci-dessus mentionné(s). Je certifie exactes et complètes les informations consignées dans le présent formulaire.
Je m’engage à importer et à distribuer /utiliser les produits chimiques ci-dessus mentionnés conformément aux exigences législatives et règlementaires en vigueur au Burkina Faso.

                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="submit" name="make_payment" class="next action-button"
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
                                                <h5>Votre demnde est enregistré avec succès et en cour de traitement!
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
    //intitialisation du tableau des autres documents
    $(function () {
        for (var i = 0; i < 3; i++) {
            addRowAutreDocument();
        }
     })
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

    function addRowAutreDocument() {
        $("#dt_autre_documents").append([
            '<tr class="">',
            '<td class="rs"><input type="text" class="border-success form-control requis" name="libelle_document[]"></td>',
            '<td class="rs"><input type="file" class="border-success form-control requis" name="fichier_document"> </td>',
            '<td><a class="btn btn-xs" data-id="0" onclick="deleteRowAutreDocument(this)" title="Supprimer la ligne"> <i class="fa fa-trash text-danger"></i></a></td>',
            '</tr>',
                ].join()
                );
    }

    function deleteRowAutreDocument(me) {
         $(me).closest('tr').remove();

    }
</script>
