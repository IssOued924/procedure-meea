<section id="about" class="about">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

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
                                    <form id="msform" method="POST" action="{{route("demandesp001-store")}}" enctype="multipart/form-data" >
                                        @csrf

                                <!-- progressbar -->
                                <ul id="progressbar" >
                                    <li class="active" id="personal"><strong>Identité du demandeur</strong></li>
                                    <li id="personal"><strong>Identité du fournisseur</strong></li>
                                    <li id="caracteristik"><strong>Pièces jointes</strong></li>
                                    <li id="stockage"><strong>Information relative au stockage</strong></li>
                                    <li id="engagement"><strong>Engagement </strong></li>
                                    <li id="paiement"><strong>Paiement </strong></li>
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
                                                                <input class="checkbox check_boxes required" id="wish_payment_type_1"  name="is_producteur" type="checkbox" value="1">Producteur
                                                            </label>
                                                            </span>
                                                        </div>

                                                        <div class="col-3">

                                                            <span class="checkbox payment-radio">
                                                            <label for="wish_payment_type_2" class="fw-bold">
                                                                <input class="checkbox check_boxes required" id="wish_payment_type_2" name="is_importateur" type="checkbox" value="1">Importateur
                                                            </label>
                                                            </span>
                                                        </div>
                                                        <div class="col-3">

                                                            <span class="checkbox payment-radio">
                                                              <label for="wish_payment_type_3" class="fw-bold">
                                                                <input class="checkbox check_boxes required" id="wish_payment_type_3" name="is_distributeur" type="checkbox" value="1">Distributeur
                                                              </label>
                                                            </span>
                                                        </div>


                                                        <div class="col-3">

                                                            <span class="checkbox payment-radio">
                                                                <label for="wish_payment_type_4" class="fw-bold">
                                                                  <input class="checkbox check_boxes required" id="wish_payment_type_4" name="is_utilisateur" type="checkbox" value="1">Utilisateur
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
                                                    placeholder="Dénomination Sociale" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="siege_social fw-bold">Lieu de résidence/siège<span
                                                        style="color:red">
                                                        *</span></label>

                                                <select name="commune_id" required id="selectMultiple"
                                                    class="form-select border-success" required>
                                                    {{-- <input type="text" placeholder="filtrer ici"> --}}
                                                    <option class="border-success" value="">Veuillez choisir une ville
                                                    </option>
                                                    @foreach ( $communes as $com)
                                                    <option value="{{ $com->uuid }}">{{ $com->libelle }}</option>
                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse Postale </label>
                                                <input type="text" class="border-success"
                                                    name="adresse_postale_demandeur"
                                                    placeholder="Adresse postale"  />
                                            </div>
                                            <div class="col-6">
                                                <label class="boite_postale fw-bold">Téléphone<span style="color:red">
                                                        *</span></label>
                                                <input type="text" name="telephone" class="border-success"
                                                    placeholder="Telephone" value="{{ $telephone}}" required />
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Quantité totale à importer en KG<span style="color:red">
                                                    *</span></label>
                                                <input type="number" min="0" class="form-control border-success" name="quantite"
                                                    placeholder="Quantite à importer" required/>
                                            </div>
                                            
                                        </div><br>


                                        <div class="wish_payment_typeD">
                                            <label class="adresse fw-bold">Dangers liées à la substance<span
                                                style="color: red">*</span></label>
                                            <div class="row">
                                                <div class="col">
                                                    <span class="checkboxD payment-radio">
                                                    <label for="wish_payment_type_0"  class="fw-bold">
                                                        <input class="checkbox check_boxes2 required" id="wish_payment_type_0" name="is_corrosif" type="checkbox" value="1">Corrosif
                                                    </label>
                                                    </span>
                                                </div> 

                                                <div class="col">
                                                    <span class="checkboxD payment-radio">
                                                    <label for="wish_payment_type_20" class="fw-bold">
                                                        <input class="checkbox check_boxes2 required" id="wish_payment_type_20"  name="is_iritant" type="checkbox" value="1">Irritant
                                                    </label>
                                                    </span>
                                                </div>
                                                <div class="col">

                                                    <span class="checkboxD payment-radio">
                                                      <label for="wish_payment_type_30" class="fw-bold">
                                                        <input class="checkbox check_boxes2 required" id="wish_payment_type_30" name="is_toxic" type="checkbox" value="1">Toxique
                                                      </label>
                                                    </span>
                                                </div>


                                                <div class="col">
                                                    <span class="checkboxD payment-radio">
                                                        <label for="wish_payment_type_40" class="fw-bold">
                                                          <input class="checkbox check_boxes2 required" id="wish_payment_type_40" name="is_inflammable" type="checkbox" value="1">Inflammable
                                                        </label>
                                                      </span>
                                                </div>
                                                <div class="col">

                                                    <span class="checkboxD payment-radio">
                                                        <label for="wish_payment_type_50" class="fw-bold">
                                                          <input class="checkbox check_boxes2 required" id="wish_payment_type_50" name="is_danger_env" type="checkbox" value="1">Environnemental
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
                                                <input type="text" class="border-success" name="autre_danger"
                                                    placeholder="Autre à préciser " />
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" name="next" id="sumit1"
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
                                                    placeholder="Dénomination Sociale" required />
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
                                                    <option value="{{ $pay->uuid }}">{{utf8_decode($pay->libelle) }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Adresse<span
                                                        style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="adresse_fournisseur"
                                                    placeholder="Adresse ou numero de telephone" required />
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
                                        <Label>La taille de vos fichiers ne doit pas excéder 3Mo</Label>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe  fw-bold">Une copie de l’avis de faisabilité ou conformite
                                                    <span style="color: red">*</span></label>
                                                <input type="file" class="form-control border-success"
                                                    name="avis_faisabilite" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Une copie de RCCM<span
                                                        style="color:red">
                                                        *</span></label>
                                                <input type="file" name="rccm" class="form-control border-success" required/>
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Une facture pro-forma datant de moins
                                                    de six (06) mois<span style="color:red">
                                                        *</span> </label>
                                                <input type="file" class="border-success form-control"
                                                    name="facture_pro_format" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Une fiche de données de sécurité
                                                    ou fiche technique de chaque produit<span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="fiche_securite"
                                                    class="border-success form-control" required />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Un registre de traçabilité des
                                                    produits ou substances chimiques <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control"
                                                    name="registre_tracabilite" required />
                                            </div>
                                            <div class="col-6">
                                                <label class="pays_residence fw-bold">Un registre des déchets issus de
                                                    leur utilisation <span style="color:red">
                                                        *</span></label>
                                                <input type="file" name="registre_dechet"
                                                    class="form-control border-success" required />
                                            </div>
                                        </div><br>

                                        <div class="row">
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Une attestation de destination finale
                                                    pour le cas spécifique du cyanure <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control"
                                                    name="attestation_destination_finale" required/>
                                            </div>
                                            <div class="col-6">
                                                <label class="nom_societe fw-bold">Liste des produits <span
                                                        style="color: red">*</span></label>
                                                <input type="file" class="border-success form-control"
                                                    name="list_produit" required/>
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
                                                <input type="radio" class="border-success" name="type_local_stockage"
                                                    value="1" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone industrielle</label>
                                                <input type="radio" name="type_local_stockage"
                                                    value="2" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone commerciale</label>
                                                <input type="radio" name="type_local_stockage"
                                                    value="3" />
                                            </div>
                                            <div class="col-3">
                                                <label class="siege_social fw-bold">Zone d’activités diverses</label>
                                                <input type="radio" name="type_local_stockage"
                                                    value="4" />
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3"></div>
                                            <div class="col-6">
                                                <span id="errorRadioZone" style="display:none; color:red">Svp! Chochez au moins une case</span>
                                            </div>
                                            <div class="col-3"></div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Autre à préciser</label>
                                                <input type="text" class="border-success"
                                                    name="type_local_stockage_autre" placeholder="Autre à préciser " />
                                            </div>
                                            <div class="col-6">
                                                <label class="adresse fw-bold">Capacité Totale des locaux de stockage
                                                    <span style="color: red">*</span></label>
                                                <input type="text" class="border-success" name="capacite_stockage"
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
                                                    <div class="col">
                                                        <label class="nom_societe fw-bold">Régime direct</label>
                                                        <input type="radio" name="systeme_transport"
                                                            value="1" />
                                                    </div>
                                                    <div class="col">
                                                        <label class="siege_social fw-bold">Sous-traité</label>
                                                        <input type="radio" name="systeme_transport"
                                                            value="2" />
                                                    </div>
                                                    <div class="col">
                                                        <span id="errorRadioTransp" style="display:none; color:red">Svp! Chochez au moins une case</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-6">
                                                <label>Choisir agrèment<span style="color: red">*</span></label>
                                                <div class="row">
                                                    <div class="col">
                                                        <label class="siege_social fw-bold">Agréé</label>
                                                        <input type="radio" name="agrement_transport" value="1" />
                                                    </div>
                                                    <div class="col">
                                                        <label class="siege_social fw-bold">Non agréé</label>
                                                        <input type="radio" name="agrement_transport"
                                                            value="2" />
                                                    </div>
                                                    <div class="col">
                                                        <span id="errorRadioAgrem" style="display:none; color:red">Svp! Chochez au moins une case</span>
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
                                                class="required-checkbox   checkbox" value="1" required>
                                            <label for="confirmationBox" class="checkbox-label">
                                                En cochant cette case, je certifie sur mon honneur que les informations
                                                renseignées sont correctes.
                                            </label>
                                        </div>

                                    </div>

                                    <input type="button" class="previous action-button-previous" value="Retour" />
                                    <input type="button" disabled id="btnEng" class="next action-button btn btn-success" value="Suivant" />
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


{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js" ;></script> --}}

<script type="text/javascript">
    $('#selectMultiple').select2();
    $('#selectMultiplePays').select2();

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
                        'proc': 'P001'
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

    if (!testSize()) {
        // Si la taille du fichier est supérieure à 5 Mo, afficher un message d'erreur
        alert("Le fichier est trop volumineux. Veuillez sélectionner un fichier de taille inférieure à 5 Mo.");
        return;
    }

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


        current_fs.find('select[required]').each(function () {
            //if ($(this).val() === "") {
            if (!$(this).val().trim()) {
                isValid = false;
                $(this).addClass("error");
            } else {
                $(this).removeClass("error");
            }
        });

        current_fs.find('input[name=type_local_stockage]').each(function () {
            //if ($(this).val() === "") {
            if (!$("input[name=type_local_stockage]").is(":checked")) {
                isValid = false;
                $("#errorRadioZone").show();
            } else {
                $("#errorRadioZone").hide();
            }
        });

        current_fs.find('input[name=systeme_transport]').each(function () {
            //if ($(this).val() === "") {
            if (!$("input[name=systeme_transport]").is(":checked")) {
                isValid = false;
                $("#errorRadioTransp").show();
            } else {
                $("#errorRadioTransp").hide();
            }
        });

        current_fs.find('input[name=agrement_transport]').each(function () {
            //if ($(this).val() === "") {
            if (!$("input[name=agrement_transport]").is(":checked")) {
                isValid = false;
                $("#errorRadioAgrem").show();
            } else {
                $("#errorRadioAgrem").hide();
            }
        });

        //is_producteur  is_importateur is_distributeur is_utilisateur
        current_fs.find('input[name=is_producteur]').each(function () {
        //if ($(this).val() === "") {
        if (!$("input[name=is_producteur]").is(":checked") && !$("input[name=is_importateur]").is(":checked") && !$("input[name=is_distributeur]").is(":checked") && !$("input[name=is_utilisateur]").is(":checked")) {
                isValid = false;
                $("#errorCheckbox").show();
            } else {
                $("#errorCheckbox").hide();
            }
        });


        //is_corrosif is_iritant is_toxic is_inflammable is_danger_env
        current_fs.find('input[name=is_corrosif]').each(function () {
        //if ($(this).val() === "") {
        if (!$("input[name=is_corrosif]").is(":checked") && !$("input[name=is_iritant]").is(":checked") && !$("input[name=is_toxic]").is(":checked") && !$("input[name=is_inflammable]").is(":checked") && !$("input[name=is_danger_env]").is(":checked")) {
                isValid = false;
                $("#errorSubstance").show();
            } else {
                $("#errorSubstance").hide();
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
