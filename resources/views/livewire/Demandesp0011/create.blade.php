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
                    <h5><strong>Procédure de délivrance du permis de coupe de bois et de charbon de bois</strong></h5>
                   <p> @if(session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="alert-heading">{{session('success')}}</h4>

                    </div>

                    <script>
                        setTimeout(function() {
                            document.querySelector('.alert.alert-success').style.display = 'none';
                        }, 3000); // Le message flash disparaîtra après 5 secondes (5000 millisecondes)
                    </script>
                @endif</p>

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
                    <p>Les champs suivis d'etoile rouge sont obligatoires</p>



                    <div class="row">
                        <div class="col-md-12 mx-0">
                                    <form id="msform" method="POST" action="{{route("demandesp0011-store")}}" enctype="multipart/form-data" >
                                        @csrf

                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li   id="personal"><strong>Information sur le site</strong></li>

                                    <li id="caracteristik"><strong>Pieces Jointes</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    <li id="paiement"><strong>Paiement </strong></li>
                                    <li id="confirm"><strong>Validation</strong></li>
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>

                                    <div class="form-card">
                                        <h4 class="fs-title">Identité du demandeur <span style="color:red">
                                            *</span></h4>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="nom_societe fw-bold" >Exploitant Forestier</label>
                                                    <input id='radio1Forestier' type="radio" class="border-success" value="1" name="exploitant"/>
                                                </div>
                                                <div class="col-3">
                                                    <label class="siege_social fw-bold ">Exploitant Commercial</label>
                                                    <input  id='radio2Commercial' type="radio" class="border-success" value="2"  name="exploitant"/>
                                                </div>
                                                <div class="col-6">
                                                    <span id="errorRadio" style="display:none; color:red">Svp! Choississez un type d'exploitant</span>
                                                </div>
                                            </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Identité</strong> <span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="form-control border-success" value="{{ $name }}"
                                                    placeholder="Nom et prenom" name="beneficiaire"  required/>
                                            </div>

                                            <div class="col">
                                                <label class="siege_social fw-bold">Province de résidence<span style="color:red">
                                                        *</span></label>

                                                <select name="province_id" id="provinces" class="form-select border-success" required>
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option value="">Veuillez choisir une Province</option>
                                                    @foreach ( $provinces as  $prov)
                                                     <option value="{{ $prov->uuid }}" >{{ $prov->libelle }}</option>

                                                    @endforeach


                                                </select>


                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Commune de résidence/siège<span style="color:red">
                                                        *</span></label>

                                                <select name="commune_id" id="communes" class="form-select" required>
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                   


                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse Postale<span style="color: red"></span></label>
                                                <input type="text"class="form-control border-success"  name="adresse_beneficiaire"
                                                    placeholder="Adresse ou numero de telephone" />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" value="{{ $telephone }}" class="form-control border-success" placeholder="Telephone" value="{{ $telephone}}" required/>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="button"   class="next action-button btn btn-success"
                                        value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Information sur le site <span style="color:red">
                                            *</span></h4>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Statut de la zone</strong> <span
                                                        style="color: red">*</span></label>
                                                <input id='statut' type="text"  class="form-control border-success"   name="statut"
                                                    placeholder="statut"  required/>
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Espèce Concerné</strong> <span
                                                        style="color: red">*</span></label>
                                                <input id='espece' type="text" class="form-control border-success"    name="espece_coupe"
                                                    placeholder="espèce" required/>
                                            </div>

                                            <div id='superficie' class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Superficie</strong> <span
                                                        style="color: red">*</span></label>
                                                <input  type="number" class="form-control border-success"    name="superficie"
                                                    placeholder="superficie"  required/>
                                            </div>

                                            <div id='depot' class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Depot</strong> <span
                                                        style="color: red">*</span></label>
                                                <input  type="text" class="form-control border-success" name="depot"
                                                    placeholder="depot"  required />
                                            </div>

                                            <div id='nature' class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Nature du produit</strong> <span
                                                        style="color: red">*</span></label>
                                                <input  type="text" class="form-control border-success" name="nature_produit"
                                                    placeholder="superficie" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Quota/Quantite</strong> <span
                                                        style="color: red">*</span></label>
                                                <input id='quota' type="number" class="form-control border-success"    name="quantite"
                                                    placeholder="Quota/Quantite" required />
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="siege_social fw-bold">Espece Concernés<span style="color:red">
                                                        *</span></label>

                                                <select name="commune_id" id="selectMultiple" class="form-select">

                                                    <option value="">Veuillez choisir une ville</option>
                                                    @foreach ( $communes as  $com)
                                                     <option value="{{ $com->uuid }}" >{{ $com->libelle }}</option>
                                                    @endforeach


                                                </select>
                                            </div> --}}
                                        </div>



                                    </div>
                                    <input type="button"  class="previous action-button-previous"
                                    value="Retour" />
                                <input type="button"   class="next action-button"
                                    value="Suivant" />

                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Pièce à Fournir</h2>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">CNIB/Passeport<span style="color: red">*</span></label>
                                                <input type="file" class="form-control border-success" name="cnib" required />
                                            </div>
                                            <div  id='rccm' class="col-6">
                                                <label for="demande timbre" class="fw-bold">RCCM <span style="color: red">*</span></label>
                                                <input type="file" class="form-control border-success" name="rccm"  required />
                                            </div>
                                        </div><br>
                                        <div class="row">

                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">Protocole d’accord<span style="color: red">*</span></label>
                                                <input type="file" class="form-control border-success" name="protocole_daccord" required />
                                            </div>
                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">Agrement<span style="color: red">*</span></label>
                                                <input id='agrement' type="file" class="form-control border-success" name="agrement" required />
                                            </div>

                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label for="demande timbre" class="fw-bold">Quittance </label>
                                                <input type="file" class="form-control border-success" name="quitance" required />
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
                                        <h2 class="fs-title"> </h2>

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
                                    <input type="button" disabled id="btnEng"  class="next action-button btn btn-success"
                                        value="Suivant" />
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h4 class="fs-title">Paiement <span style="color:red">
                                            *</span></h4>
                                            <label for="demande timbre" class="fw-bold">Moyens de Paiement<span style="color:red">
                                                    *</span></label>
                                                    <div class="row">
                                                        <div class="col-3"></div>
                                                        <div class="col-3" class="text-center">
                                                            {{-- <label class="nom_societe fw-bold" >ORANGE</label> --}}
                                                            <img src="{{ asset('img/paiement/orange.png') }}" width="80" height="80" class="d-inline-block align-top" alt="">
                                                            <input id="radio1" type="radio" value="1" class="checkbox"  name="moyen" />
                                                        </div>
                                                        <div class="col-3" class="text-center">
                                                            {{-- <label class="siege_social fw-bold ">MOOV</label> --}}
                                                            <img src="{{ asset('img/paiement/moov.png') }}" width="80" height="80" class="d-inline-block align-top" alt="">
                                                            <input id="radio2" type="radio" value="2"  name="moyen"/>
                                                        </div>
                                                        <div class="col-3"></div>
                                                    </div>
                                        <br>

                                        <div class="row">
                                            <input type="hidden" id="payResponse" name="payResponse" required />
                                            <input type="hidden" id="telephone" name="telephone" required />
                                            <input type="hidden" id="code_otp" name="code_otp" required />
                                            <div id="moyenP1" class="text-center">
                                                <label> La somme à payer est de {{$procedure->tarif}}F Cfa: Taper *144*4*6{{$procedure->tarif}} pour obtenir le OTP </label>
                                            </div>
                                            <div id="moyenP2" class="text-center">
                                                <label> La somme à payer est de {{$procedure->tarif}}F Cfa: Taper *555*4*6{{$procedure->tarif}} pour obtenir le OTP </label>
                                            </div>
                                            
                                            <div id="frmPay">
                                                <div id="payField">
                                                    <div class="row">
                                                        <div class="col-4"></div>                            
                                                        <div class="col-4" >
                                                            <label class="boite_postale fw-bold">Téléphone<span style="color:red">
                                                                        *</span></label>
                                                            <input type="number" min="0" id="numero" name="numero" class="border-success form-control"   placeholder="Telephone" required />
                                                        </div>
                                                        <div class="col-4"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4"></div>
                                                        <div class="col-4">
                                                            <label class="boite_postale fw-bold">OTP<span style="color:red">
                                                                    *</span></label>
                                                            <input type="number" min="0" id="otp" name="otp" class="border-success form-control" placeholder="Code OTP" required />
                                                            <div id="errorMessage" style="display:none; color:red;">Numéro et code OTP obligatoires</div>
                                                        </div>
                                                        <div class="col-4"></div>
                                                    </div>
                                                    <div id="loader" class="row" style="display:none; text-align: center;">
                                                        <div class="col-5"></div>
                                                        <div class="col-2">
                                                            <div class="loader"></div>
                                                        </div>
                                                        <div class="col-5"></div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5"></div>
                                                        <div class="col-2" style="text-align: center;">
                                                            <div id="payNotOK" style="display:none;">
                                                                <span style="color:red">Paiement échoué</span>                        
                                                            </div>
                                                            {{-- <input id="pay" type="button" class="action-button" value="Payer"/> --}}
                                                            <div id="payOkImg" style="display:none;">
                                                                <img  src="{{asset('img/loader/okPay.png')}}" width="40%"/>
                                                                <br>
                                                                <span>Paiement réussi</span>                        
                                                            </div>
                                                        </div>
                                                        <div class="col-5"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>

                                    </div>

                                    <input type="button"  class="previous action-button-previous"
                                        value="Retour" />
                                    <input id="btnAllEng" type="submit" class="next action-button" value="Valider" />
                                    <div class="error-message" style="color: red;"></div>
                                    
                                </fieldset>

                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title text-center">Validation !</h2>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-3">
                                                <img src="{{asset('img/loader/processing.gif')}}"
                                                    class="fit-image"/>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row justify-content-center">
                                            <div class="col-7 text-center">
                                                <h5>Votre demande est en cour d'enregistrement! </h5>
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

<script>
    $(document).ready(function () {
        $('#btnAllEng').click(function () {
            $.ajaxSetup({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
         });
        
            
            var numero = document.getElementById('numero').value;
            var otp = document.getElementById('otp').value;

            var formData = {numero: numero,otp: otp};
            if (numero != '' && otp != '') {
                $("#loader").show();
                $('#payNotOK').hide();
                $('#numero').prop('disabled', true);
                $('#otp').prop('disabled', true);
                $("#errorMessage").hide();
                $.ajax({
                    url: '/payOM',
                    type: "POST",
                    data: {
                        'numero': numero,
                        'otp': otp,
                        'proc': 'P0011'
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data.status);
                        console.log(data.data);
                        console.log(data.data.infos);

                        if (data.data.status == true) {
                            $('#telephone').val(numero);
                            $('#code_otp').val(otp);
                            $('#payResponse').val(data.data.infos);
                            $("#loader").hide();
                            $("#payOkImg").show();                            
                            $("#errorMessage").hide();
                            $("#msform").submit();
                        } else {
                            $('#numero').prop('disabled', false);
                            $('#otp').prop('disabled', false);
                            $("#loader").hide();
                            $('#payNotOK').show();
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown){
                        console.log(jqXHR);
                    }
                });
            } else {
                $("#errorMessage").show();
            }
        });
    });
</script>



<script>
$(document).ready(function() {
  $('#confirmationBox').change(function() {
    if (this.checked) {
      $('#btnEng').prop('disabled', false);
    } else {
      $('#btnEng').prop('disabled', true);
    }
  });
});
</script>

<script>
  function testSize() {
    var isValid = true;
    $("input[type=file]").each(function () {
        if (this.files.length > 0 && this.files[0].size > 5 * 1024 * 1024) {
            isValid = false;
            // Mettre en surbrillance le champ de fichier si la taille est trop grande
            $(this).addClass("error");
        } else {
            $(this).removeClass("error");
        }
    });
    return isValid;
}

</script>

<script type='text/javascript'>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;

$(".next").click(function () {
    if (!testSize()) {
        // Si la taille du fichier est supérieure à 5 Mo, afficher un message d'erreur
        alert("Le fichier est trop volumineux. Veuillez sélectionner un fichier de taille inférieure à 5 Mo.");
        return;
    }
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

        //Vérifiez les chmps select
        current_fs.find('select[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });


        //Vérifiez les chmps select
        //$("input[name=Fruit]").is(":checked");
        current_fs.find('input[name=exploitant]').each(function () {
            //if ($(this).val() === "") {
            if (!$("input[name=exploitant]").is(":checked")) {
                isValid = false;
                $("#errorRadio").show();
            } else {
                $("#errorRadio").hide();
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
$("div#payField").hide();


jQuery('input[name=moyen]:radio').click(function(){
		$("div#moyenP1").hide();
		$("div#moyenP2").hide();
        $("div#payField").show();
		var divId = jQuery(this).val();
        if(divId * 1 == 1){
            $("div#moyenP1").show()
        }else{
            $("div#moyenP2").show()
        }
});


        // partie control de exploitant forestier et commerciale
           $("#superficie").hide()
            $("#nature").hide()
            $("#depot").hide()
            $("#rccm").hide()

        jQuery('input[name=exploitant]:radio').click(function(){

		var divId = jQuery(this).val();

        if(divId == 'Forestier'){
            $("#superficie").show();
            $('input[name=superficie]').attr('required', true);
            $("#nature").hide();
            $("#depot").hide();
            $("#rccm").hide();

            $('input[name=nature]').attr('required', false); 
            $('input[name=depot]').attr('required', false); 
            $('input[name=rccm]').attr('required', false); 

        }else if(divId == 'Commercial'){
            $("#superficie").hide();
            $('input[name=superficie]').attr('required', false);
            $("#nature").show();
            $("#depot").show();
            $("#rccm").show();
            $('input[name=nature]').attr('required', true); 
            $('input[name=depot]').attr('required', true); 
            $('input[name=rccm]').attr('required', true); 
        }
		});

});
</script>
<script type='text/javascript'>
//     var myLink = document.querySelector('a[href="#"]');
//     myLink.addEventListener('click', function(e) {
//       e.preventDefault();
//   });


        // Sélection des boutons radio de exploitant
        // const radio1Forestier = document.getElementById("radio1Exp");
        // const radio2Commercial = document.getElementById("radio2Forest");

        // Sélection des champs à afficher/masquer
        // const superficie = document.getElementById("superficie");
        // const rccm = document.getElementById("rccm");
        // const depot = document.getElementById("depot");
        // const nature = document.getElementById("nature");
        // const agrement = document.getElementById("agrement");

        // Ajout d'un gestionnaire d'événement pour les boutons radio
        // radio1Exp.addEventListener("change", function() {
        //     if (radio1Exp.checked) {
        //         superficie.style.display = "block";
        //         rccm.style.display = "none";
        //         nature.style.display = "none"
        //         depot.style.display = "none"
        //     }
        // });

        // radio2Forest.addEventListener("change", function() {
        //     if (radio2.checked) {
        //         superficie.style.display = "none";
        //         rccm.style.display = "block";
        //         nature.style.display = "block"
        //         depot.style.display = "block"
        //     }
        // });


        // Sélection des boutons radio
        // const radio3 = document.getElementById("radio3");
        // const radio4 = document.getElementById("radio4");

        // Sélection des champs à afficher/masquer
        // const moyenP1 = document.getElementById("moyenP1");
        // const moyenP2 = document.getElementById("moyenP2");
        // moyenP1.style.display="none"
        // moyenP2.style.display="none"

        // Ajout d'un gestionnaire d'événement pour les boutons radio
        // radio3.addEventListener("change", function() {
        //     if (radio1.checked) {
        //         moyenP1.style.display = "block";
        //         moyenP2.style.display = "none";
        //     }
        // });

        // radio4.addEventListener("change", function() {
        //     if (radio2.checked) {
        //         moyenP1.style.display = "none";
        //         moyenP2.style.display = "block";

        //     }
        // });



</script>
