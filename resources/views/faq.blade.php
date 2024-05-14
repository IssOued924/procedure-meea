@extends('layouts/layoutW')
<style>
    .accordion-flush > .accordion-item > .accordion-header .accordion-button, .accordion-flush > .accordion-item > .accordion-header .accordion-button.collapsed {
        border-radius: 0;
    }
    .accordion-item:first-of-type > .accordion-header .accordion-button {
        border-top-left-radius: var(--bs-accordion-inner-border-radius);
        border-top-right-radius: var(--bs-accordion-inner-border-radius);
    }
    .accordion-button:hover {
        z-index: 2;
    }


    /* Accordion */
    .accordion-item {
        border: 1px solid #ebeef4;
    }

    .accordion-button:focus {
        outline: 0;
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        color: #012970;
        background-color: #f6f9ff;
    }

    .accordion-flush .accordion-button {
        padding: 15px 0;
        background: none;
        border: 0;
    }

    .accordion-flush .accordion-button:not(.collapsed) {
        box-shadow: none;
        color: #4154f1;
    }

    .accordion-flush .accordion-body {
        padding: 0 0 15px 0;
        color: #3e4f6f;
        font-size: 15px;
    }
    table {
        font-size: 15px;
        margin-left:auto;
        margin-right:auto;
        border-collapse: collapse;
        width: 95%;
    }
    table th {
        font-size: 15px;
        font-weight: bold;
        border: 1px solid #999999;
        padding: 0px 5px;
    }
    table td {
        border: 1px solid #999999;
        padding: 5px 5px;
    }
    p, button{
        margin: 10px!important;
    }
</style>
@section('faq')

<div class="container" style="margin: 0 auto; padding: 0 auto; width: 60rem;">
    <h2>Questions frequemment posées</h2>
    <div class="row">

        <div class="col-lg-12">
            <!-- Accordion without outline borders -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Qu’est-ce que l’avis technique d’importation de produits chimiques ?
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>C’est un acte qui atteste que son détenteur dispose d’installations et d’équipements adaptés pour assurer une gestion sécurisée des produits chimiques qu’il envisage importer.
                                L’avis technique est une pièce constitutive du dossier de demande d’Autorisation spéciale d’importation (ASI) de produits chimiques délivrée par le Secrétariat Permanent du Guichet unique du commerce et de l’investissement (SP-GUCI).
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Qui peut soumettre une demande d’avis technique d’importation de produits chimiques ?
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                                Toute personne physique ou morale peut soumettre une demande d’avis technique d’importation de produits chimiques à conditions :
                                <br> <b>Pour les importateurs-utilisateurs (utilisent des produits chimiques dans son process de production)  </b>
                            <ul>
                                <li>Etre régulièrement établie au Burkina Faso</li>
                                <li>Disposer des autorisations préalables requises pour l’exercice de l’activité</li>
                                <li>Disposer d’un avis favorable pour la faisabilité ou la conformité environnementale du projet ou de l’établissement</li>
                                <li>Disposer de moyens de prévention et de lutte contre les risques associés à l’utilisation des produits chimiques.</li>
                            </ul>
                            <br>
                            <b>Pour les importateurs-distributeurs (distributeurs ou vendeurs) </b>
                            <ul>
                                <li>Etre régulièrement établie au Burkina Faso</li>
                                <li>disposer d’un agrément de distribution.</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Comment soumettre une demande d'avis technique d'importation de produits chimiques?
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                                <ul>
                                <li>Télécharger, renseigner, signer et cacheter le registre de traçabilité et éventuellement la liste des produits, l’attestation de destination finale</li>
                                <li>Numériser tous les documents ;</li>
                                <li>Créer votre compte sur le portail ;</li>
                                <li>Soumettre la demande.</li>
                            </ul> 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                            Quelles sont les exigences de sécurité pour l'importation de produits chimiques ?
                        </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                                Voir arrêté portant arrêté interministériel portant cahier des charges de l’importateur-distributeur et de l’importateur-utilisateur de produits ou substances chimiques dangereux.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                            Quel est le délai de traitement habituel pour l'avis technique d'importation?
                        </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                              Pour les demandes qui ne requièrent pas de visites des installations de stockage, le délai maximum de délivrance est de 14 jours ouvrables à compter de la date de validation de la demande.
Pour les demandes nécessitant une visite des installations de stockage, le délai maximum de délivrance de l’avis technique est de un (01) mois à compter de la date de validation de la demande.  
                            </p>
			</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSix1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix1" aria-expanded="false" aria-controls="flush-collapseSix1">
                            Comment obtenir un permis d’écotourisme ou tourisme écologique ?
                        </button>
                    </h2>
                    <div id="flush-collapseSix1" class="accordion-collapse collapse" aria-labelledby="flush-headingSix1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                                Manifester l’intérêt au niveau de la plateforme avec :
                            <ul>
                                <li>son document d’identité (CNI ou passeport) valide ;</li>
                                <li>une photo d’identité du principal demandeur </li>
                                <li>réunir la somme de la quittance qui varie de 1000 FCFA à 250000 FCFA selon la catégorie du demandeur et le type du permis demandé et un timbre de 200 FCFA</li>
                                <li>la liste des personnes associées au principal demandeur dans le cas d’un groupe ou d’une personne morale.</li>
                              
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingSeven1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven1" aria-expanded="false" aria-controls="flush-collapseSeven1">
                           Quels sont les frais associés à la demande de permis écotourisme ?
                        </button>
                    </h2>
                    <div id="flush-collapseSeven1" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <br>
                            <p>
                                Article 11 : 3/ Permis d’écotourisme ou tourisme écologique<br><br>
                                <table border="1">
                                <tbody>
                                <tr>
                                    <th rowspan="2">Type de permis</th>
                                    <th colspan="3" style="text-align: center;">Catégorie de personne</th>
                                </tr>
                                <tr>
                                  
                                    <th>National</th>
                                     <th>Expatriés résidents</th>
                                     <th>Touristes</th>
                                </tr>
                                <tr>
                                    <td>Permis de visite touristique</td>
                                    <td>1 000 F</td>
                                    <td>3 000 F</td>
                                     <td>5 000 F</td>
                                </tr>
                                 <tr>
                                    <td>Permis photographique</td>
                                    <td>10 000 F</td>
                                    <td>25 000 F</td>
                                     <td>50 000 F</td>
                                </tr>
                                 <tr>
                                    <td>Permis cinematographique</td>
                                    <td>50 000 F</td>
                                    <td>100 000 F</td>
                                     <td>250 000 F</td>
                                </tr>
                                </tbody>
                                </table>
                               <br>
                            <b>NB</b> : En plus de ces différents frais indiqués dans le tableau ci-dessus, il faut un timbre de 200 FCFA
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingHeigth1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseHeigth1" aria-expanded="false" aria-controls="flush-collapseHeigth1">
                            Combien de temps dure la validité d’un permis d’écotourisme ?
                        </button>
                    </h2>
                    <div id="flush-collapseHeigth1" class="accordion-collapse collapse" aria-labelledby="flush-headingHeigth1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                                Article 12 de l’arrêté conjoint 96-022 indique que les permis de visite touristique sont valables pour une année et pour toutes les aires fauniques du Burkina Faso. Les permis cinématographiques et photographiques sont valables pour deux (02) semaines et pour toutes les aires fauniques du Burkina
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingNine1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine1" aria-expanded="false" aria-controls="flush-collapseNine1">
                            Quelles sont les conditions d’âge pour obtenir une autorisation de chasse ?
                        </button>
                    </h2>
                    <div id="flush-collapseNine1" class="accordion-collapse collapse" aria-labelledby="flush-headingNine1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                               L’article 120 de la loi 003-2011/AN portant code forestier du Burkina Faso indique que le droit de chasse est reconnu à toute personne âgée d’au moins 18 ans. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTen1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen1" aria-expanded="false" aria-controls="flush-collapseTen1">
                           Quelles sont les zones de chasses autorisées ?
                        </button>
                    </h2>
                    <div id="flush-collapseTen1" class="accordion-collapse collapse" aria-labelledby="flush-headingTen1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                               Carte qui sera élaborée et intégrée à la plateforme. Elle pourra être mise à jour chaque année avant le début de chaque campagne de chasse. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingEleven1">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven1" aria-expanded="false" aria-controls="flush-collapseEleven1">
                            Dois-je passer un test de sécurité pour obtenir une autorisation de chasse ?
                        </button>
                    </h2>
                    <div id="flush-collapseEleven1" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven1" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                             <br>
                            <p>
                                 <b>Non </b> ; l’article 144 du même code forestier indique que le guide de chasse est chargé de veiller à la sécurité de ses clients.  Il est solidairement responsable des dommages causés par eux aux tiers. Il est considéré comme complice de la violation par ses clients de la réglementation
                                 faunique en vigueur, à charge pour lui de prouver qu'il a fait tout ce qui était de son pouvoir pour empêcher la commission de l’infraction.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</div>



<script>

    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
@endsection
