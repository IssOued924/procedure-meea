 <style>
	 h1, p{
	   text-align:center;
	   margin-top: 20px;
	  }
	  .box{
	   text-align:center;
	   margin: 20px;

	   }

	 </style>
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
                                    <form id="msform" role="form" method="POST" action="{{route("demandesp002-store")}}"  enctype="multipart/form-data" >
                                        @csrf
                                  <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="folder"><strong>Pieces Administratives</strong></li>
                                    <li id="personal"><strong>Domaine et catégorie</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    <li id="paiement"><strong>Paiement </strong></li>

                                    {{-- <li id="confirm"><strong>Validation</strong></li> --}}
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
                                                    <input type="text" class="border-success" name="identite" required placeholder="identité" value="{{ $identite }}" /><br /><br />
                                                    @if($errors->has('identite'))
                                                        <p class="alert alert-danger">{{ $errors->first('identite') }}</p>
                                                    @endif

                                                </div>
                                                <div class="col-6">
                                                    <label class="pays_residence fw-bold">Lieu de Residence<span style="color:red">
                                                            *</span></label>
                                                    <select name="pays" id="pays" class="form-select border-success">
                                                    <option >Veuillez choisir le lieu</option>
                                                    @foreach($communes as $pay)
                                                        <option {{ ($pay->libelle == $default_pays ? 'selected' : '' )}} value="{{$pay->libelle}}">{{utf8_decode($pay->libelle)}}</option>
                                                    @endforeach
                                                    </select> <br /><br />
                                                    @if($errors->has('pays'))
                                                        <p class="alert alert-danger">{{ $errors->first('pays') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <h4 class="fs-title">Beneficiaire <span style="color:red">
                                                *</span></h4>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="nom_societe fw-bold" >Moi Même</label>
                                                    <input type="radio" value="Moi même" class="checkbox"  name="beneficiaire" />
                                                </div>
                                                <div class="col-3">
                                                    <label class="siege_social fw-bold ">Autre Personne</label>
                                                    <input type="radio" value="Autre personne" name="beneficiaire"/>
                                                </div>
                                                  @if($errors->has('beneficiaire'))
                                                      <p class="alert alert-danger">{{ $errors->first('beneficiaire') }}</p>
                                                  @endif
                                            </div>

                                    </div>
                                    <button type="button" name="next" class="next action-button btn btn-success"
                                         id="next_idetnite" >Suivant</button>
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
                                                <input type="file" class="border-success form-control" required name="recu_achat_dossier" />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Certificat IFU<span style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" required name="ifu" />
                                            </div>
                                        </div>

                                        <div class="row">
                                             <div class="col-6">
                                                <label class="boite_postale">Attestation RCCM<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="rccm"  class="border-success form-control" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Attestation employeur CNSS<span style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" required name="cnss"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-6">
                                                <label class="boite_postale">Fiche Renseignement<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="fiche_renseignement" required class="border-success form-control" />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Déclaration sur l’honneur de l’exactitude des informationsr<span style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control" required name="declaration_honneur"
                                                      />
                                            </div>
                                        </div>

                                    </div>
                                    <button type="button" name="previous" class="previous action-button-previous"
                                        >Retour</button>
                                    <button type="button"   name="make_payment" id="next_piece" class="next action-button"
                                        >Suivant</button>
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Domaine et Catégorie</h2>
                                        <div class="row">
                                            <div class="col-4">
                                                <label for="domaine" class="siege_social">Domaine
                                                    <span style="color:red">*</span></label>
                                                <select name="domaine" id="domaine" class="form-select border-success">
                                                    <option value="">Veuillez choisir le domaine</option>
                                                    <option value="Eau potable">Approvisionnement en Eau Potable (AEP)</option>
                                                    <option value="Assainissement">Assainissement des
                                                        Eaux Usées et Excréta (AEUE)
                                                        </option>
                                                    <option value="Barrage">Barrage et Aménagement Hydro-Agricole (BAHA)</option>
                                                </select>
                                                 @if($errors->has('domaine'))
                                                        <p class="alert alert-danger">{{ $errors->first('domaine') }}</p>
                                                 @endif

                                            </div>
                                            <div class="col-4">
                                               <label for="categorie" class="siege_social">Catégorie
                                                    <span style="color:red">*</span></label>
                                                <select name="categorie" id="categorie" class="form-select border-success">
                                                    <option value="">Veuillez choisir la catégorie</option>
                                                    <option value="Etude et contrôle">Etude et contrôle</option>
                                                    <option value="Travaux">Travaux</option>
                                                </select>
                                                 @if($errors->has('categorie'))
                                                        <p class="alert alert-danger">{{ $errors->first('categorie') }}</p>
                                                 @endif
                                            </div>
                                            <div class="col-4">
                                               <label for="sousdomaine" class="nom_societe">Sous domaine
                                                    <span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="sous_domaine" id="sousdomaine" required />
                                                 @if($errors->has('sous_domaine'))
                                                        <p class="alert alert-danger">{{ $errors->first('sous_domaine') }}</p>
                                                    @endif
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
                                    <button type="button" name="previous" class="previous action-button-previous">Retour</button>
                                    <Button type="button" name="make_payment" id="next_domaine" class="next action-button"
                                        >Suivant</button>
                                </fieldset>


                                <fieldset>

                                    <div class="form-card">
                                        <h2 class="fs-title">Certification et engagement  </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="confirmed"
                                                class="required-checkbox   checkbox" value="Valider">
                                            @if($errors->has('confirmed'))
                                                        <p class="alert alert-danger">{{ $errors->first('confirmed') }}</p>
                                                    @endif
                                            <label for="confirmationBox" class="checkbox-label ">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    {{-- <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />

                                     <button type="submit" class="action-button" id="btn_send">Valider</button> --}}
                                     <button type="button" name="previous" class="previous action-button-previous"
                                     >Retour</button>
                                 <button type="button"   name="make_payment" id="next_piece" class="next action-button"
                                     >Suivant</button>
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
                                    {{-- <input type="button"  class="previous action-button-previous"
                                        value="Retour" />
                                    <input type="submit"   class="next action-button"
                                        value="Valider" /> --}}

                                        <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />

                                     <button type="submit" class="action-button" id="btn_send">Valider</button>

                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>
                                    </form>
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
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <!--<script src="{{ asset('js/jToast.min.js') }}"></script>-->
<script src="{{asset('js/sweetalert2.js') }}"></script>
<script type="text/javascript">
    //intitialisation du tableau des autres documents
    $(function () {
        for (var i = 0; i < 2; i++) {
            addRowAutreDocument();
        }
     })
   /*  $(function () {
        $('#msform').submit(function (e) {
            e.preventDefault();
        });
     })*/

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

//conrol paiement
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

    function addRowAutreDocument() {
        $("#dt_autre_documents").append([
            '<tr class="">',
            '<td class="rs"><input type="text" class="border-success form-control requis" required name="libelle_document[]"></td>',
            '<td class="rs"><input type="file" class="border-success form-control requis" required name="fichier_document[]"> </td>',
            '<td><a class="btn btn-xs" data-id="0" onclick="deleteRowAutreDocument(this)" title="Supprimer la ligne"> <i class="fa fa-trash text-danger"></i></a></td>',
            '</tr>',
                ].join()
                );
    }

    function deleteRowAutreDocument(me) {
         $(me).closest('tr').remove();
    }
/*
$("#msform").validate({
        rules: {
            identite: "required",
            beneficiaire: "required",
            pays: "required",
            domaine: "required",
            categorie: "required",
            sous_domaine: "required",
            confirmed: "required",
        },
        messages: {
            identite: "Identité : est obligatoire.",
            beneficiaire: "Bénéficiaire : est obligatoire",
            pays: "Pays : est obligatoire.",
            domaine: "Domaine : est obligatoireeeee",
            categorie:"Catégorie : est obligatoireeee.",
            sous_domaine: "Sous domaine : est obligatoire",
            confirmed: "Votre confirmation : est requise.",

        },
        submitHandler: function( event, validator ) {
            var btn_id = validator.originalEvent.submitter.id
                save(btn_id)
        }
    });*/
   function save(btn_id) {
        var myform = $("#msform");

       // window.location=url;
        var id = $('#id').val() * 1;
                    if (id > 0) {
                $.ajax({
                    url: '/demandesp002-storen/'+id,
                    type: "post",
                    async: false,
                    data: new FormData(myform[0]),
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function (data) {
                        if (data.status == 'success') {
                            (async () => {
                                alert("reclamation_modifiee_avec_succes", 'success');
                                fetch(window.location = '/demandes-lists');
                            })();

                        } else {
                            alert("La modification de la réclamation a échoué. Réessayer", 'warning');
                        }
                    },
                    error: function (data) {
                    }
                });
            } else {
               // let url='/demandes-lists?procedure='+$('#procedure').val();
                $.ajax({
                    url: '/demandesp002-store',
                    type: "post",
                    async: false,
                    data: new FormData(myform[0]),
                    processData: false,
                    contentType: false,
                    dataType: "json",
                    success: function (data) {
                        if (data.status == 'success') {
                            alert("cest ok")
                            console.log(data.status);
                            (async () => {
                                await toast("Votre Demande à bien été Soumise et en cours de traitement !", 'success');
                                await sleep(1000);
                               //  window.location.replace("/demandes-lists");
                                fetch(window.location = '/demandes-lists');
                            })();
                           // window.location = '/demandes-lists';
                        }else {
                            toast("L'envoie de votre demande a échoué. Veuillez réessayer", type = 'warning')
                        }
                    },
                    error: function (data) {
                        showErrors(data);
                    }

                });
            }
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

    function toast(message, type = 'info') {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 15000,
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
</script>
