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
                                    <form id="msform" role="form" method="POST" action="{{ route('demandesp002-update') }}"  enctype="multipart/form-data" >
                                        @csrf
                                         <input type="hidden" class="border-success" name="uuid" value='{{$demande->uuid}}'/>
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
                                                    <input type="text" class="border-success" name="identite" required placeholder="identité" value="{{ $identite }}" /><br /><br />
                                                    @if($errors->has('identite'))
                                                        <p class="alert alert-danger">{{ $errors->first('identite') }}</p>
                                                    @endif
                                                    
                                                </div>
                                                <div class="col-6">
                                                    <label class="pays_residence fw-bold">Commune de résidence<span style="color:red">
                                                            *</span></label>
                                                    <select name="commune_id" id="commune_id" class="form-select boerder-success">
                                                    <option >Veuillez choisir la commune</option>
                                                    @foreach($communes as $com)
                                                        <option {{ ($com->uuid == $demande->commune_id ? 'selected' : '' )}} value="{{$com->uuid}}">{{ $com->libelle }}</option>
                                                    @endforeach
                                                    </select> <br /><br />
                                                    @if($errors->has('commune_id'))
                                                        <p class="alert alert-danger">{{ $errors->first('commune_id') }}</p>
                                                    @endif
                                                </div>
                                            </div>

                                            <h4 class="fs-title">Beneficiaire <span style="color:red">
                                                *</span></h4>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label class="nom_societe fw-bold" >Moi Meme</label>
                                                    <input type="radio" value="Moi même" {{ ($demande->beneficiaire == 'Moi même' ? 'checked' : '' )}} class="checkbox"  name="beneficiaire" />
                                                </div>
                                                <div class="col-3">
                                                    <label class="siege_social fw-bold ">Autre Personne</label>
                                                    <input type="radio" value="Autre personne"  {{ ($demande->beneficiaire == 'Autre personne' ? 'checked' : '' )}} name="beneficiaire"/>
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
                                             <div class="col-12">
                                                <?php
                                                    $pathRecu ='';
                                                    $pathIfu ='';
                                                    $pathRccm='';
                                                    $pathCnss='';
                                                    $pathFicheRens ='';
                                                    $pathDeclaration='';
                                                    foreach ( $documents as $doc){
                                                        if($doc->libelle =="Rccm")
                                                            $pathRccm = $doc->chemin;
                                                        elseif($doc->libelle == "Récu achat dossier")
                                                            $pathRecu = $doc->chemin;
                                                        elseif($doc->libelle == "Attestation employeur CNSS")
                                                            $pathCnss = $doc->chemin;
                                                        elseif($doc->libelle == "Fiche Renseignement")
                                                            $pathFicheRens = $doc->chemin;
                                                        elseif($doc->libelle == "Certificat Ifu")
                                                            $pathIfu = $doc->chemin;
                                                        elseif($doc->libelle == "Déclaration sur l’honneur de l’exactitude des informations")
                                                            $pathDeclaration = $doc->chemin;
                                                       ?>
                                                        <a  class="text-success" target="_blank" href="{{ Storage::url($doc->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$doc->libelle}}</b></a>
                                                         <br>
                                                       <?php }?>
                                                
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Reçu d’achat du dossier de demande</label>
                                                <input type="file" class="border-success form-control" name="recu_achat_dossier" />
                                                <input type="hidden" class="border-success form-control" name="current_recu" value="{{$pathRecu}}" />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Certificat IFU</label>
                                                <input type="file" class="border-success form-control" name="ifu" />
                                                <input type="hidden" class="border-success form-control" name="current_ifu" value="{{$pathIfu}}" />
                                            </div>
                                        </div>

                                        <div class="row">
                                             <div class="col-6">
                                                <label class="boite_postale">Attestation RCCM</label>
                                                <input type="file" name="rccm"  class="form-control" />
                                                <input type="hidden" class="border-success form-control" name="current_rccm" value="{{$pathRccm}}" />
                                                
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Attestation employeur CNSS</label>
                                                <input type="file" class="border-success form-control" name="cnss"/>
                                                <input type="hidden" class="border-success form-control" name="current_cnss" value="{{$pathCnss}}" />
                                            </div>
                                        </div>
                                        <div class="row">
                                             <div class="col-6">
                                                <label class="boite_postale">Fiche Renseignement</label>
                                                <input type="file" name="fiche_renseignement" class="form-control" />
                                                <input type="hidden" class="border-success form-control" name="current_rens" value="{{$pathFicheRens}}" />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Déclaration sur l’honneur de l’exactitude des informationsr</label>
                                                <input type="file" class="border-success form-control" name="declaration_honneur" />
                                                <input type="hidden" class="border-success form-control" name="current_declaration" value="{{$pathDeclaration}}" />
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
                                                <select name="domaine" id="domaine" onchange="getSousDomaine()" class="form-select border-success">
                                                    <option value="">Veuillez choisir le domaine</option>
                                                    @foreach($domaines as $dom)
                                                    <option {{ ($dom->libelle_long == $demande->domaine ? 'selected' : '' )}} value="{{ $dom->uuid}}">{{  $dom->libelle_long }}</option>
                                                    @endforeach
                                                </select>
                                                 @if($errors->has('domaine'))
                                                        <p class="alert alert-danger">{{ $errors->first('domaine') }}</p>
                                                 @endif

                                            </div>
                                            <div class="col-4">
                                               <label for="categorie" class="siege_social">Catégorie
                                                    <span style="color:red">*</span></label>
                                                <select name="categorie" id="categorie" onchange="getSousDomaine()" class="form-select border-success">
                                                    <option value="">Veuillez choisir la catégorie</option>
                                                     @foreach($categories as $cat)
                                                        <option {{ ($cat->libelle_long == $demande->categorie ? 'selected' : '' )}} value="{{  $cat->uuid}}">{{  $cat->libelle_long }}</option>
                                                     @endforeach
                                                </select>
                                                 @if($errors->has('categorie'))
                                                        <p class="alert alert-danger">{{ $errors->first('categorie') }}</p>
                                                 @endif
                                            </div>
                                            <div class="col-4">
                                               <label for="sousdomaine" class="nom_societe">Sous domaine
                                                    <span style="color: red">*</span></label>
                                                    <input type="text" class="border-success" readonly name="sous_domaine_old" value='{{$demande->sous_domaine}}' id="sousdomaine_old" required />
                                                 <select name="sous_domaine[]" id="sousdomaine" class="form-select border-success"></select>
                                                 @if($errors->has('sous_domaine'))
                                                        <p class="alert alert-danger">{{ $errors->first('sous_domaine') }}</p>
                                                    @endif
                                            </div>
                                        </div>

                                         <hr>
                                        <h2 class="fs-title">Autres documents</h2>
                                        <div class="row">
                                            
                                            <div class="col-12">
                                                <table class="table datatable table-bordered table-striped datatable-table">
                                                    <thead class="dst-form-thead">
                                                        <tr>
                                                            <th colspan="3" style="text-align: center">Liste moyens humains et matériels</th>
                                                        </tr>
                                                        <tr>
                                                            <th>Nom du document <span style="color:red">*</span></th>
                                                            <th>Fichier</th>
                                                            <th>-</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                            $docObligatoire = ["Récu achat dossier","Certificat Ifu",
                                                            "Rccm","Attestation employeur CNSS","Fiche Renseignement",
                                                            "Déclaration sur l’honneur de l’exactitude des informations"];
                                                            @endphp
                                                        @foreach($documents as $autre)
                                                           @if (!in_array($autre->libelle, $docObligatoire))
                                                                <tr>
                                                                    
                                                                    <td colspan="2">
                                                                         <a  class="text-success" target="_blank" href="{{ Storage::url($autre->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$autre->libelle}}</b></a>
                                                                    </td>
                                                                    <td class="text-center">
                                                                        <a  class="text-danger" href="javascript:;'" onclick="deleteDocument(this,'{{$autre->uuid}}', '{{$autre->chemin}}')"><b><i class="bi bi-trash"></i>  Retirer ce fichier</b></a>
                                                                    </td>
                                                                </tr>
                                                           @endif
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <hr>
                                            <div class="col-12">
                                                <table class="table datatable table-bordered table-striped datatable-table" id="dt_autre_documents">
                                                    <thead class="dst-form-thead">
                                                        <tr>
                                                            <th colspan="3" style="text-align: center">Liste Personnel</th>
                                                        </tr>
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
                                            
                                            <hr>
                                             
                                              <div class="col-12">
                                                <table class="table datatable table-bordered table-striped datatable-table" id="dt_materiel_roulant">
                                                    <thead class="dst-form-thead">
                                                        <tr>
                                                            <th colspan="3" style="text-align: center">Materiels roulants</th>
                                                        </tr>
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
                                                                <a class="btn btn-default" onclick="addRowMaterielRoulant()">
                                                                    <i class="fa fa-plus-circle text-success"></i>
                                                                    <span>Ajouter matériels roulants </span>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>

                                            </div>
                                               <hr>
                                               
                                                <div class="col-12">
                                                <table class="table datatable table-bordered table-striped datatable-table" id="dt_materiel_non_roulant">
                                                    <thead class="dst-form-thead">
                                                        <tr>
                                                            <th colspan="3" style="text-align: center">Materiels non roualants</th>
                                                        </tr>
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
                                                                <a class="btn btn-default" onclick="addRowMaterielNonRoulant()">
                                                                    <i class="fa fa-plus-circle text-success"></i>
                                                                    <span>Ajouter matériel non document </span>
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
                                        <h2 class="fs-title"></h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="confirmed"
                                                class="required-checkbox   checkbox" value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" name="previous" class="previous action-button-previous"
                                        value="Retour" />
                                   
                                     <button type="submit" class="action-button" id="btn_update_send">Confirmation</button>
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
   var listePersonnel = ["Contrôleur génie civil (Niveau CAP)",
            "Technicien supérieur génie civil ou génie rural ou génie sanitaire (BAC+2)", 
            "Animateur spécialisé ",
            "Spécialiste en sciences humaines et sociales",
            "Technicien supérieur en génie sanitaire",
            "Ingénieur Génie Civil ou Génie Rural ou Assimilé",
            "Technicien Supérieur Génie Rural ou Génie Civil ou assimilé",
            "Comptable Gestionnaire",
            "Agent de liaison",
            "Ingénieur Topographe",
            "Géotechnicien",
            "Ingénieur hydrologue",
            "Agro pédologue environnementaliste",
            "Sociologue ou économiste",
            "Ingénieur hydraulicien ou GR",
            "T.S HER",
            "Surveillant de chantier maçon ( CAP ou 5 ans d’expérience)",
            "Technicien pompe",
            "Technicien supérieur en génie civil",
            "Technicien supérieur du Génie Rural ou forages",
            "Ingénieur hydrogéologue ou GR",
            "Opérateur BEPC ou CEPE + 5ans d’expérience",
            "Technicien Supérieur en Génie Rural ou en Science de la terre",
            "Sociologue ou géographe ou économiste",
            "Opérateur géophysicien",
            "Ingénieur GR",
            "Sondeur, 5 ans d’expérience",
            "Aide sondeur",
            "Mécanicien 5 ans d’expérience ou CAP",
            "Mécanicien BTS",
            "Maçon",
            "CAP Génie civil",
            "DECISION DE LA CAAT",
            "Surveillant de chantier CAP maçonnerie",
            "Plombier",
            "Technicien en maçonnerie (CAP minimum)",
            "Chef d’équipe terrassement",
            "Opérateur topographe (niveau CAP minimum)",
            "Technicien de laboratoire géotechnique",
            "Gestionnaire des Ressources Humaines",
            "Opérateur topographe (niveau CAP minimum)",
            "Electromécanicien",
            "Chef mécanicien (diesel ou diéséliste)"];
    var options = '<option value=""></option>';
    for(var i = 0; i < listePersonnel.length; i++) {
        var opt = listePersonnel[i];
        options += '<option value="' + opt + '">' + opt + '</option>';
    } 
        $("#dt_autre_documents").append([
            '<tr class="">',
            '<td class="rs">'+
               ' <select name="libelle_document[]" class="form-select border-success requis">' + options+
                  
               + '</select>'+
             '</td>',
            '<td class="rs"><input type="file" class="border-success form-control requis" required name="fichier_document[]"> </td>',
            '<td><a class="btn btn-xs" data-id="0" onclick="deleteRowAutreDocument(this)" title="Supprimer la ligne"> <i class="fa fa-trash text-danger"></i></a></td>',
            '</tr>',
                ].join()
                );
    }
   /* function addRowAutreDocument() {
        $("#dt_autre_documents").append([
            '<tr class="">',
            '<td class="rs"><input type="text" class="border-success form-control requis" required name="libelle_document[]"></td>',
            '<td class="rs"><input type="file" class="border-success form-control requis" required name="fichier_document[]"> </td>',
            '<td><a class="btn btn-xs" data-id="0" onclick="deleteRowAutreDocument(this)" title="Supprimer la ligne"> <i class="fa fa-trash text-danger"></i></a></td>',
            '</tr>',
                ].join()
                );
    }*/

    function deleteRowAutreDocument(me) {
         $(me).closest('tr').remove();
    }
    
  function addRowMaterielRoulant() {
   var listeMaterielRoulant = ["Véhicule de liaison",
                                "Motocyclettes",
                                "Moto",
                                "Camionnette",
                                "Camion benne basculante",
                                "Servicing (véhicule porteur)",
                                "Camion d’accompagnement avec grue",
                                "Camion-citerne (eau, carburant)",
                                "Grue motorisée",
                                "Chargeuse de faible puissance 15/20 cv",
                                "Moto basculeur inf. 2500 litres",
                                "Compacteur de type à patin vibrant",
                                "Citerne à gasoil d’au moins 10 000 litres",
                                "Bulldozer 70 à 200 cv",
                                "Pelle chargeuse de 200 à 250cv",
                                "Pelle hydraulique 125 à 200 cv",
                                "Niveleuse inf 150 cv",
                                "Tracteur pour labour sup 80cv + accessoires",
                                "Camion benne basculante d’au moins 6 m3",
                                "Camion benne basculante d’au moins 12 m3",
                                "Bétonnière de capacité minimum 350 litres",
                                "Camion semi-remorque ou plateau au moins 10 T",
                                "Camion atelier",
                                "Camion-citerne à eau d’au moins 10 000 litres",
                                "Camion-citerne à eau d’au moins 30 000 litres",
                                "Citerne à gasoil d’au moins 10 000 litres",
                                "Cuve à gasoil de 10 000 litres",
                                "Compacteur à rouleau lisse au moins 100 cv",
                                "Compacteur pied de mouton au moins 130 cv",
                                "Tracteur pour labour sup 80cv + accessoires",
                                "Bulldozer 200 à 250 cv",
                                "Compacteur rouleau lisse type JV 100",
                                "Pelle hydraulique 125  200 cv",
                                "Compacteur type 815",
                                "Compacteur pied de mouton type JV 100",
                                "Bulldozer sup 200 cv",
                                "Pelle chargeuse sup à 250cv",
                                "Pelle hydraulique sup 250 cv",
                                "Compacteur rouleau lisse type JV 100",
                                "Niveleuse sup 150 cv",
                                "Unité de concassag",
                                "Tracteur pour labour sup 80cv + accessoires"
                        ];
    var options = '<option value=""></option>';
    for(var i = 0; i < listeMaterielRoulant.length; i++) {
        var opt = listeMaterielRoulant[i];
        options += '<option value="' + opt + '">' + opt + '</option>';
    } 
        $("#dt_materiel_roulant").append([
            '<tr class="">',
            '<td class="rs">'+
               ' <select name="libelle_document_roulant[]" class="form-select border-success requis">' + options+
                  
               + '</select>'+
             '</td>',
            '<td class="rs"><input type="file" class="border-success form-control requis" required name="fichier_document_roulant[]"> </td>',
            '<td><a class="btn btn-xs" data-id="0" onclick="deleteRowAutreDocument(this)" title="Supprimer la ligne"> <i class="fa fa-trash text-danger"></i></a></td>',
            '</tr>',
                ].join()
                );
    }

  function addRowMaterielNonRoulant() {
   var listeMaterielNonRoulant = ["Groupe électrogène",
                        "Matériel audio-visuel",
                        "Matériel de sonorisation",
                        "Matériel topographique",
                        "Matériel géotechnique",
                        "Vibreur",
                        "Outillage pose pompe",
                        "Sonde",
                        "Matériel de levage",
                        "GPS",
                        "Groupe électrogène 5 KVA minimum",
                        "Compresseur 8 bars minimum",
                        "Pompe immergée + accessoires",
                        "Sonde de niveau élect",
                        "Débitmètre (compteur, bac jaugé)",
                        "Matériel de mesure in situ",
                        "Appareil géophysique et accessoires",
                        "Lot de tige de forage",
                        "Masse de tige",
                        "Lot de casing ou tubage perdu (PVC)",
                        "Matériel de sécurité (lot)",
                        "Atelier mécanique",
                        "Matériel de cimentation",
                        "Matériel de maçonnerie",
                        "Bétonnière",
                        "Marteau piqueur",
                        "Marteau perforateur",
                        "Jeux de moules",
                        "Cuffat",
                        "Pelle mécanique de moins de 60 cv",
                        "Mini pelle sur chenille empâtement 0,90 à 1,20 m",
                        "Matériel de plomberie",
                        "Petit outillage de chantier (lots)",
                        "Compacteur manuel",
                        "Lot de matériel topographique (niveau de chantier, théodolite, + accessoires)",
                        "Motopompe",
                        "Compacteur pied de mouton au moins 130 cv",
                        "Compacteur pied de mouton type JV 100",
                        "Compresseur (7 bars)",
                        "Groupe électrogène (15 KVA)",
                        "Lot de matériel géotechnique de chantier et de densité",
                        "Pompe d’épreuve",
                        "Palan + chèvre ",
                        "Manomètre sup 15 bars",
                        "Etau",
                        "Boite à filière complète",
                        "Petit matériel de chantier (caisse à outils plombier. Lots)",
                        "Aiguille vibrante",
                        "Matériel de signalisation (lots)",
                        "Clé à griffe (lot)",
                        "Boite à filière complète",
                        "Boite à filière complète",
                        "Tir fort",
                        "Central à béton",
                        "Motopompe (5 m3/h minimum)"]; 
    var options = '<option value=""></option>';
    for(var i = 0; i < listeMaterielNonRoulant.length; i++) {
        var opt = listeMaterielNonRoulant[i];
        options += '<option value="' + opt + '">' + opt + '</option>';
    } 
        $("#dt_materiel_non_roulant").append([
            '<tr class="">',
            '<td class="rs">'+
               ' <select name="libelle_document_non_roulant[]" class="form-select border-success requis">' + options+
                  
               + '</select>'+
             '</td>',
            '<td class="rs"><input type="file" class="border-success form-control requis" required name="fichier_document_non_roulant[]"> </td>',
            '<td><a class="btn btn-xs" data-id="0" onclick="deleteRowAutreDocument(this)" title="Supprimer la ligne"> <i class="fa fa-trash text-danger"></i></a></td>',
            '</tr>',
                ].join()
                );
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
            timer: 5000,
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
   function getSousDomaine() {
    if( $('#domaine').val().length > 0 && $('#categorie').val().length>0){
        $.ajax({
        type: 'GET',
        url: '/get-sous-domaine-by-categorie',
        data: {
            domaine: $('#domaine').val(),
            categorie: $('#categorie').val()
        },
        dataType: 'json',
        cache: false,
        success: function (data) {
             let select = $('#sousdomaine');
             let options = get_values_from_select(data.sousDomaines, {key: 'id', value: 'libelle'});
             append_select_options(select, options);
             document.getElementById("sousdomaine").multiple = true; 
        },
        error: function () {
           showErrors(data);
        }
    });
    }else{
        
    }
    
}

  
function get_values_from_select(data, options, with_empty = true) {
    var options = options || {};
    var key = options.key || 'id';
    var value = options.value || 'valeur';
    var selected = options.selected || null;
    var returnValues = '';
    if (Array.isArray(data)) {
        $.each(data, function (i, item) {
            returnValues += '<option value="' + item[key] + '"';
            if (selected == item[key]) {
                returnValues += ' selected >';
            } else {
                returnValues += ' > ';
            }
            returnValues += item[value] + '</option>';
        });
    } else {
        var attr = options.attr || 'values';
        $.each(data[attr], function (i, item) {
            returnValues += '<option value="' + item[key] + '"';
            if (selected == item[key]) {
                returnValues += ' selected >';
            } else {
                returnValues += ' > ';
            }
            returnValues += item[value] + '</option>';
        });
    }
    if (with_empty) {
        return "<option></option>" + returnValues;
    }
    return returnValues;
}

function append_select_options($select, options, set_old_value = true) {
    Array.from($select).forEach(function (the_select) {
        var $the_select = $(the_select);
        var value = $the_select.val();
        $the_select.empty().append(options);
        setTimeout(() => {
            if (set_old_value && value) {
                $the_select.val(value);
            }
        }, 300);
    });
}

function deleteDocument(me, uuid, chemin){
     
        $.ajax({
        type: 'GET',
        url: '/get-delete-autre-document',
        data: {
            uuid: uuid,
            chemin: chemin
        },
        dataType: 'json',
        cache: false,
        success: function (data) {
              toast("Document supprimé avec succès.", type = 'success');
              $(me).closest('tr').remove();
        },
        error: function () {
           showErrors(data);
        }
    });

 }
</script>
