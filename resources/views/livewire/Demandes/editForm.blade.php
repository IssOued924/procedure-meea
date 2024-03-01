<section id="about" class="about">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif



    <div class="container-fluid" id="grad1">
        <div class="row justify-content-center mt-0">
            <div class="col-11 col-sm-9 col-md-7 col-lg-10 text-center p-0 mt-3 mb-2">
                <div class="cardd px-0 pt-4 pb-0 mt-3 mb-3">
                    <h5><strong>Délivrance d'avis technique d'importation de produits chimiques industriels </strong></h5>
                   <p> @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif</p>
                    <p> Les champs suivis d'étoile rouge sont obligatoires    </p>
                    <div class="row">

                        <div class="col-md-12 mx-0">
                                    <form id="msform" method="POST" action="{{ route('demandesp001-update') }}" enctype="multipart/form-data" >
                                        <input type="hidden" class="border-success" name="uuid" value='{{$demande->uuid}}'/>
                                        @csrf

                                <!-- progressbar -->
                                <ul id="progressbar" >
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="personal"><strong>Identité du fournisseur</strong></li>
                                    <li id="caracteristik"><strong>Pièces jointes</strong></li>
                                    <li id="stockage"><strong>Information relative au stockage</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    {{-- <li id="paiement"><strong>Paiement </strong></li> --}}
                                    {{-- <li id="confirm"><strong>Validation</strong></li> --}}
                                </ul>
                                <!-- fieldsets -->
                                <fieldset>
                                    <div class="form-card ">
                                        <h4 class="fs-title">Identité du demandeur <span style="color:red">
                                                *</span></h4>

                                                <div class="wish_payment_type">
                                                    <div class="row">
                                                        <div class="col-3">
                                                            <span class="checkbox payment-radio">
                                                            <label for="wish_payment_type_1"  class="fw-bold">
                                                                <input class="checkbox check_boxes required" id="wish_payment_type_1" {{ intval($demande->is_producteur)==1 ? 'checked' : ''}}   name="is_producteur" type="checkbox" value="1">Producteur
                                                            </label>
                                                            </span>
                                                        </div>

                                                        <div class="col-3">

                                                            <span class="checkbox payment-radio">
                                                            <label for="wish_payment_type_2" class="fw-bold">
                                                                <input class="checkbox check_boxes required" id="wish_payment_type_2"  {{ intval($demande->is_importateur)==1 ? 'checked' : ''}} name="is_importateur" type="checkbox" value="1">Importateur
                                                            </label>
                                                            </span>
                                                        </div>
                                                        <div class="col-3">

                                                            <span class="checkbox payment-radio">
                                                              <label for="wish_payment_type_3" class="fw-bold">
                                                                <input class="checkbox check_boxes required" id="wish_payment_type_3"  {{ intval($demande->is_distributeur)==1 ? 'checked' : ''}} name="is_distributeur" type="checkbox" value="1">Distributeur
                                                              </label>
                                                            </span>
                                                        </div>


                                                        <div class="col-3">

                                                            <span class="checkbox payment-radio">
                                                                <label for="wish_payment_type_4" class="fw-bold">
                                                                  <input class="checkbox check_boxes required" id="wish_payment_type_4" {{ intval($demande->is_utilisateur)==1 ? 'checked' : ''}} name="is_utilisateur" type="checkbox" value="1">Utilisateur
                                                                </label>
                                                              </span>
                                                        </div>


                                                      <input id='submit1' type="hidden" value="Submit">
                                                  </div>
                                             </div><br>



                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold"> <strong>Dénomination
                                                        Sociale</strong> <span style="color: red">*</span></label>
                                                <input type="text" class="border-success"
                                                    name="denomination_sociale_demandeur"
                                                    placeholder="Dénomination Sociale" value="{{ $demande->denomination_sociale_demandeur }}" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Lieu de résidence/siège<span
                                                        style="color:red">
                                                        *</span></label>

                                                <select name="commune_id" required id="selectMultiple"
                                                    class="form-select border-success">
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option class="border-success" value="">Veuillez choisir une ville
                                                    </option>
                                                    @foreach ( $communes as $com)
                                                    <option {{ $demande->commune_id == $com->uuid ? 'selected' : ''}} value="{{ $com->uuid }}">{{ $com->libelle }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse Postale </label>
                                                <input type="text" class="border-success"
                                                    name="adresse_postale_demandeur"
                                                    placeholder="Adresse ou numero de telephone" value="{{ $demande->adresse_postale_demandeur }}" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">Téléphone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" class="border-success"
                                                    placeholder="Telephone" value="{{ $telephone}}"  />
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Quantité totale à importer en KG</label>
                                                <input type="text" class="border-success" value="{{ $demande->quantite }}" name="quantite"
                                                    placeholder="Quantite à importer" />
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div><br>


                                        <div class="wish_payment_typeD">
                                            <label class="adresse fw-bold">Dangers liées à la substance<span
                                                style="color: red">*</span></label>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="checkboxD payment-radio">
                                                    <label for="wish_payment_type_0"  class="fw-bold">
                                                        <input class="checkbox check_boxes2 required" id="wish_payment_type_0"  {{ intval($demande->is_corrosif)==1 ? 'checked' : ''}}  name="is_corrosif" type="checkbox" value="1">Corrosif
                                                    </label>
                                                    </span>
                                                </div>

                                                <div class="col">
                                                    <span class="checkboxD payment-radio">
                                                    <label for="wish_payment_type_20" class="fw-bold">
                                                        <input class="checkbox check_boxes2 required" id="wish_payment_type_20" {{ intval($demande->is_iritant)==1 ? 'checked' : ''}}   name="is_iritant" type="checkbox" value="1">Irritant
                                                    </label>
                                                    </span>
                                                </div>
                                                <div class="col">

                                                    <span class="checkboxD payment-radio">
                                                      <label for="wish_payment_type_30" class="fw-bold">
                                                        <input class="checkbox check_boxes2 required" id="wish_payment_type_30" {{ intval($demande->is_toxic)==1 ? 'checked' : ''}} name="is_toxic" type="checkbox" value="1">Toxique
                                                      </label>
                                                    </span>
                                                </div>


                                                <div class="col">
                                                    <span class="checkboxD payment-radio">
                                                        <label for="wish_payment_type_40" class="fw-bold">
                                                          <input class="checkbox check_boxes2 required" id="wish_payment_type_40" {{ intval($demande->is_inflammable)==1 ? 'checked' : ''}} name="is_inflammable" type="checkbox" value="1">Inflammable
                                                        </label>
                                                      </span>
                                                </div>
                                                <div class="col">

                                                    <span class="checkboxD payment-radio">
                                                        <label for="wish_payment_type_50" class="fw-bold">
                                                          <input class="checkbox check_boxes2 required" id="wish_payment_type_50" {{ intval($demande->is_danger_env)==1 ? 'checked' : ''}} name="is_danger_env" type="checkbox" value="1">Environnemental
                                                        </label>
                                                      </span>
                                                </div>


                                              <input id='submit2' type="hidden" value="Submit">
                                          </div>
                                     </div>

                                     <br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Autre à préciser</label>
                                                <input type="text" class="border-success" value="{{ $demande->autre_danger }}" name="autre_danger"
                                                    placeholder="Autre à préciser " />
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div>
                                    </div>

                                    <input type="button" name="next" id="sumit1"
                                        class="next action-button btn btn-success" value="Suivant" />
                                    <!-- Ajoutez ceci dans la première étape du formulaire -->
                                    <div class="error-message" style="color: red;"></div>

                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Identité du fournisseur</h2>

                                        <div class="row">
                                            <div class="col">
                                                <label class="nom_societe fw-bold">Dénomination Sociale<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success"
                                                    name="denomination_sociale_fournisseur"
                                                    placeholder="Dénomination Sociale" value="{{ $demande->denomination_sociale_fournisseur }}" required />
                                            </div><br>
                                            <div class="col">
                                                <label class="siege_social fw-bold">Pays de résidence<span
                                                        style="color:red">
                                                        *</span></label>
                                                        <select name="pays_fournisseur" required id="selectMultiplePays"
                                                    class="form-select border-success ">
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option class="border-success" value="">Veuillez choisir un Pays
                                                    </option>
                                                    @foreach ( $pays as $pay)
                                                    <option {{ $demande->pays_fournisseur==$pay->uuid ? 'selected' : ''}}  value="{{ $pay->uuid }}">{{utf8_decode($pay->libelle) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="adresse_fournisseur"
                                                    placeholder="Adresse ou numero de telephone" value="{{ $demande->adresse_fournisseur }}" required />
                                            </div>
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div>

                                    </div>
                                    <input type="button" class="previous action-button-previous" value="Retour" />
                                    <input type="button" class="next action-button" value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Pièces à fournir</h2>
                                        <?php
                                        $pathFaisabilite ='';
                                        $pathRccm='';
                                        $pathFacture ='';
                                        $pathSecurite='';
                                        $pathTracabilite ='';
                                        $pathDechet='';
                                        $pathDechetAttestation='';
                                        $pathProduit='';
                                        foreach ( $documents as $doc){
                                            if($doc->libelle =="Avis Faisabilite")
                                                $pathFaisabilite = $doc->chemin;
                                            elseif($doc->libelle == "Rccm")
                                                $pathRccm = $doc->chemin;
                                            elseif($doc->libelle == "Facture Pro-Format")
                                                $pathFacture = $doc->chemin;
                                            elseif($doc->libelle == "Fiche Securite")
                                                $pathSecurite = $doc->chemin;
                                            elseif($doc->libelle == "Registre de Tracabilite")
                                                $pathTracabilite = $doc->chemin;
                                            elseif($doc->libelle == "Registre Dechet")
                                                $pathDechet = $doc->chemin;
                                            elseif($doc->libelle == "Attestation destination Finale")
                                                $pathDechetAttestation = $doc->chemin;
                                            elseif($doc->libelle == "Liste des poduits")
                                                $pathProduit = $doc->chemin;
                                           ?>
                                            <a  class="text-success" target="_blank" href="{{ Storage::url($doc->chemin) }}"><b><i class="bi bi-file-earmark-pdf"></i>  {{$doc->libelle}}</b></a>
                                             <br>
                                           <?php }?>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe  fw-bold">Une copie de l’avis de faisabilité
                                                    <span style="color: red">*</span></label>
                                                <input type="file" class="form-control border-success"
                                                    name="avis_faisabilite"/>
                                                    <input type="hidden" value="{{$pathFaisabilite  }}" class="form-control border-success"
                                                    name="current_faisabilite" />


                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Une copie de RCCM<span
                                                        style="color:red">
                                                        *</span></label>
                                                <input type="file" name="rccm" class="form-control border-success"  />
                                                <input type="hidden" value="{{$pathRccm  }}" name="current_rccm" class="form-control border-success"  />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Une facture pro-forma datant de moins
                                                    de six (06) mois<span style="color:red">
                                                        *</span> </label>
                                                <input type="file" class="border-success form-control"
                                                    name="facture_pro_format"   />
                                                    <input type="hidden" value="{{ $pathFacture }}" class="border-success form-control"
                                                    name="current_facture_pro_format"   />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Une fiche de données de sécurité
                                                    ou fiche technique de chaque produit<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="fiche_securite"
                                                    class="border-success form-control"   />

                                                    <input type="hidden" value="{{$pathSecurite  }}" name="current_fiche_securite"
                                                    class="border-success form-control"   />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Un registre de traçabilité des
                                                    produits ou substances chimiques <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control"
                                                    name="registre_tracabilite"   />

                                                    <input type="hidden" value="{{ $pathTracabilite  }}" class="border-success form-control"
                                                    name="current_registre_tracabilite"   />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Un registre des déchets issus de
                                                    leur utilisation <span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="registre_dechet"
                                                    class="form-control border-success"   />
                                                    <input type="hidden" value="{{ $pathDechet }}" name="current_registre_dechet"
                                                    class="form-control border-success"   />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Une attestation de destination finale
                                                    pour le cas spécifique du cyanure <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control"
                                                    name="attestation_destination_finale"  />
                                                    <input type="hidden" value="{{ $pathDechetAttestation }}" class="border-success form-control"
                                                    name="current_attestation_destination_finale"  />
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Liste des produits <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control"
                                                    name="list_produit"  />

                                                    <input type="hidden" value="{{ $pathProduit  }}" class="border-success form-control"
                                                    name="current_list_produit"  />
                                            </div>

                                        </div><br>

                                    </div>
                                    <input type="button" class="previous action-button-previous" value="Retour" />
                                    <input type="button" class="next action-button" value="Suivant" />
                                </fieldset>
                                <fieldset>
                                    <div class="form-card">
                                        <h2 class="fs-title">Informations relatives au transport et au stockage</h2>

                                        <div class="row">
                                            <label for="">
                                                Lieu d’implantation des locaux de stockage
                                                <span style="color:red">*</span>
                                            </label>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <label class="nom_societe fw-bold">Zone d’habitation</label>
                                                <input type="radio" class="border-success" {{ $demande->type_local_stockage ? 'checked' : ''}}  name="type_local_stockage"
                                                    value="Zone d’habitation" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone industrielle</label>
                                                <input type="radio" {{ $demande->type_local_stockage ? 'checked' : ''}} name="type_local_stockage"
                                                    value="Zone industrielle" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone commerciale</label>
                                                <input type="radio" {{ $demande->type_local_stockage ? 'checked' : ''}} name="type_local_stockage"
                                                    value="Zone commerciale" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone d’activités diverses</label>
                                                <input type="radio" {{ $demande->type_local_stockage ? 'checked' : ''}} name="type_local_stockage"
                                                    value="Zone d’activités diverses" />
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Autre à préciser</label>
                                                <input type="text" class="border-success"
                                                    name="type_local_stockage_autre" value="{{ $demande->type_local_stockage_autre }}" placeholder="Autre à préciser " />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Capacité Totale des locaux de stockage
                                                    <span style="color: red">*</span></label>
                                                <input type="text" class="border-success" value="{{ $demande->capacite_stockage }}" name="capacite_stockage"
                                                    placeholder="Capacité Totale des locaux de stockage" required />
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            {{-- <div class="col-6">
                                                <label class="boite_postale">Telephone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" placeholder="Telephone" />
                                            </div> --}}
                                        </div><br>

                                        {{-- <div class="row ">
                                            <div class="col text-center">
                                                <label for="#">Système de transport <span style="color:red">
                                                        *</span></label>
                                            </div>

                                            <div class="col text-center">
                                                <label for="#">Agrément<span style="color:red">
                                                        *</span></label>
                                            </div>
                                        </div> --}}
                                        <div class="row col">
                                            <div class="col-6">
                                                <label>Choisir le système de transport <span
                                                        style="color: red">*</span></label>
                                                <div class="row">
                                                    <div class="col-4">
                                                        <label class="nom_societe fw-bold">Régime direct</label>
                                                        <input type="radio" {{ $demande->systeme_transport ? 'checked' : ''}}  name="systeme_transport"
                                                            value="Régime direct" />
                                                    </div>
                                                    <div class="col">
                                                        <label class="siege_social fw-bold">Sous-traité</label>
                                                        <input type="radio" {{ $demande->systeme_transport ? 'checked' : ''}} name="systeme_transport"
                                                            value="Sous-traité" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <label>Choisir agrèment<span style="color: red">*</span></label>
                                                <div class="row">
                                                    <div class="col-3">
                                                        <label class="siege_social fw-bold">Agréé</label>
                                                        <input type="radio" {{ $demande->agrement_transport ? 'checked' : ''}} name="agrement_transport" value="Agrée" />
                                                    </div>
                                                    <div class="col-3">
                                                        <label class="siege_social fw-bold">Non agréé</label>
                                                        <input type="radio" {{ $demande->agrement_transport ? 'checked' : ''}}  name="agrement_transport"
                                                            value="Non agrée" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <input type="button" class="previous action-button-previous" value="Retour" />
                                    <input type="button" class="next action-button" value="Suivant" />
                                </fieldset>
                                <fieldset>

                                    <div class="form-card">
                                        <h2 class="fs-title"> </h2>

                                        <div class="row">
                                            <input type="checkbox" id="confirmationBox" name="is_certified"
                                                class="required-checkbox  checkbox" {{ intval($demande->is_certified==1) ? 'checked' : ''}}  value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" class="previous action-button-previous" value="Retour" />
                                    <input type="submit" class="next action-button" value="Valider" />
                                </fieldset>



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End About Section -->


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" ;></script> --}}

<script type="text/javascript">
    $('#selectMultiple').select2();
    $('#selectMultiplePays').select2();

</script>

<script type='text/javascript'>
    $(document).ready(function(){

var current_fs, next_fs, previous_fs; //fieldsets
var opacity;


        // verification des checkbox
var verifyCheckboxDemandeur = function () {
  var checkboxes = $('.wish_payment_type .checkbox');
  var inputs = checkboxes.find('input');
  var first = inputs.first()[0];

  inputs.on('change', function () {
    this.setCustomValidity('');
  });

  first.setCustomValidity(checkboxes.find('input:checked').length === 0 ? 'Choose one' : '');
}
    // deuxieme liee aux dangers
var verifyCheckboxDemandeurDanger = function () {
  var checkboxes2 = $('.wish_payment_typeD .checkboxD');
  var inputs2 = checkboxes2.find('input');
  var first2 = inputs2.first()[0];

  inputs2.on('change', function () {
    this.setCustomValidity('');
  });

  first2.setCustomValidity(checkboxes2.find('input:checked').length === 0 ? 'Choose one' : '');
}

$('#submit1').click(verifyCheckboxDemandeur);
$('#submit2').click(verifyCheckboxDemandeurDanger);


$(".next").click(function () {

        current_fs = $(this).parent();
        next_fs = $(this).parent().next();

        $('#submit1').click();
        $('#submit2').click();

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
