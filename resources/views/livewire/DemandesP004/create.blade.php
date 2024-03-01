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
                   <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
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
                            <form id="msform" method="POST" action="{{route("demandesp004-store")}}" enctype="multipart/form-data" >
                                @csrf

                                <!-- progressbar -->
                                <ul id="progressbar">
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="personal"><strong>Identité de l'animal</strong></li>
                                    <li id="caracteristik"><strong>Pièces jointes</strong></li>
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
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Nom & Prenom</strong> <span
                                                        style="color: red">*</span></label>
                                                <input type="text"   name="beneficiaire"
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

                                                <select name="commune_id"  id="communes" class="form-select border-success" required>
                                                   

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
                                                <input type="text" class="border-success" name="nom_commun"
                                                    placeholder="Nom Commun" required/>
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Nom scientifique<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="nom_scientifique" class="border-success form-control" placeholder="Nom scientifique" required />
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Classe d'age<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="classe_age_animal"
                                                    placeholder="Classe d'age" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Sexe animal<span style="color:red">
                                                        *</span></label>

                                                <select name="sexe_animal" id="" class="border-success form-select" required>
                                                    <option value="">Veuillez choisir le sexe de l'animal</option>
                                                    <option value="M">Mâle</option>
                                                    <option value="F">Femelle</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Lieu de provenance<span
                                                        style="color: red">*</span></label>

                                                    <select name="lieu_provenance" id="selectMultipl" class="border-success form-select" required>
                                                        <option value="">Veuillez choisir un pays</option>
                                                        @foreach ( $pays as  $pay)
                                                         <option value="{{ $pay->uuid }}" >{{ $pay->libelle }}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Conditions d'acquisition<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="condition_acquisition" class="border-success form-control" placeholder="Conditions d'acquisition" required/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Motif de la détention<span
                                                        style="color: red">*</span></label>
                                                <textarea type="text" class="border-success" name="motif_detention"
                                                    placeholder="Motif de la detention" required ></textarea>
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

                                        <div class="row">

                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Fichier certificat d'origine<span style="color:red">
                                                        *</span></label>

                                                        <br/>
                                                <input type="file" name="certificat_origine" class="form-control border-success" required/>
                                            </div>

                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Fichier certificat sanitaire<span style="color:red">
                                                        *</span></label>
                                                        <br/>
                                                <input type="file" name="certificat_sanitaire" class="form-control border-success" required />
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
                                            <input type="checkbox" id="confirmationBox" name="is_certified"
                                                class="required-checkbox   checkbox" value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                    <input id="btnEng" type="button" name="" disabled class="next action-button btn btn-success"
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
                                                <label> La somme à payer est de {{$procedure->tarif}}F Cfa: Taper *144*4*6*{{$procedure->tarif}}# pour obtenir le OTP </label>
                                            </div>
                                            <div id="moyenP2" class="text-center">
                                                <label> La somme à payer est de {{$procedure->tarif}}F Cfa: Taper *555*4*6*{{$procedure->tarif}}# pour obtenir le OTP </label>
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
                                    <input id="btnAllEng" type="button" class="next action-button" value="Valider" />
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
                        'proc': 'P004'
                    },
                    dataType: "json",
                    success: function (data) {
                        console.log(data);
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


        current_fs.find('select[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });


        current_fs.find('textarea[required]').each(function () {
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

});
</script>
<script type='text/javascript'>
    var myLink = document.querySelector('a[href="#"]');
    myLink.addEventListener('click', function(e) {
      e.preventDefault();
  });

</script>
