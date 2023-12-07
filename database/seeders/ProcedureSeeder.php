<?php

namespace Database\Seeders;

use App\Models\Structure;
use App\Models\Service;
use App\Models\Procedure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcedureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
      $str1 =   Structure::create([
            "libelle_court" => "DGEF",
            "libelle_long" =>"Direction Générale des Eaux et Forêts",

        ]);
        $str1->save();

       $serv1 = Service::create([
            "libelle_court" => "DGEF",
            "libelle_long" =>"Direction Générale des Eaux et Forêts",
            "structure_id"=> $str1->uuid
        ]);
         $serv1->save();
        $str2 =   Structure::create([
            "libelle_court" => "DGRE",
            "libelle_long" =>"Direction Générale des Ressources en Eaux",

        ]);
        $str2->save();
        $serv2 =  Service::create([
            "libelle_court" => "DGRE",
            "libelle_long" =>"Direction Générale des Ressources en Eaux",
            "structure_id"=> $str2->uuid
         ]);
         $serv2->save();
        $str3 =   Structure::create([
            "libelle_court" => "DGPE",
            "libelle_long" =>"Direction Générale de la Proctection de L'Environnement",

        ]);
        $str3->save();
       $serv3 =  Service::create([
            "libelle_court" => "DGPE",
            "libelle_long" =>"Direction Générale de la Proctection de L'Environnement",
            "structure_id"=> $str3->uuid
        ]);
        $serv3->save();



        Procedure::create([
            "libelle_court" => "AGDS",
            "libelle_long" =>"Autorisation de gestion des déchets Solide",
            "description" => "A propos de ce service La Demande d'autorisation de gestion des dechets est une autorisation officielle officiel qui certifie le lieu de résidence d'une personne au moment de la demande. Le dossier est traité par les autorités de l'Administration Locale au niveau du Secteur.",
            "img" => "img/dechet.png",
            "code_color" => "#359b27",
            "code" => "P008",
            "service_id"=>$serv3->uuid,
            "tarif" => 1500
        ]);


        Procedure::create([
            "libelle_court" => "DATIPC",
            "libelle_long" =>"Délivrance d'avis technique d'importation de produits chimiques ",
            "description" => "Description de produit chimique",
            "img" => "img/chim.png",
            "code_color" => "#f26b56",
            "code" => "P001",
            "service_id"=>$serv3->uuid,
            "tarif" => 1600
        ]);
        Procedure::create([
            "libelle_court" => "CEESPNB",
            "libelle_long" =>"Certificat d'exemption des emballages et sachets plastiques non biodégradables",
            "description" => "Description des exemptions",
            "img" => "img/degra.png",
            "code_color" => "#2274bb",
            "code" => "P006",
            "service_id"=>$serv3->uuid,
            "tarif" => 1700
        ]);
        Procedure::create([
            "libelle_court" => "CHESPB",
            "libelle_long" =>"Certificat d'Homologation des emballages et sachets plastiques biodégradables",
            "description" => "Description des homologations",
            "img" => "img/9.png",
            "code_color" => "#bf6e12",
            "code" => "P007",
            "service_id"=>$serv3->uuid,
            "tarif" => 1800
        ]);
        Procedure::create([
            "libelle_court" => "OATEA",
            "libelle_long" =>"Octroit d'agrément technique eau et assainissement",
            "description" => "L’exercice des entreprises et bureaux d’études dans le domaine de
                l’eau et de l’assainissement est soumis à la possession d’un agrément
                technique échelonné en catégories pour les différents types de prestations.",
            "img" => "img/fg.png",
            "code_color" => "#abd9fe",
            "code" => "P002",
            "service_id"=>$serv2->uuid,
            "code" => 1400
        ]);
        Procedure::create([
            "libelle_court" => "PETE",
            "libelle_long" =>"Permis d'écotourisme ou de tourisme écologique",
            "description" => "Document administratif autorisant une personne physique à pénétrer
                dans une aire protégée et à y observer, photographier ou filmer à l’aide d’appareils
                amateurs ou professionnels le paysage,
                les animaux sauvages et autres curiosités touristiques dans ladite aire.",
            "img" => "img/3.png",
            "code_color" => "#d3b521",
            "code" => "P0012",
            "service_id"=>$serv1->uuid,
            "code" => 1300
        ]);
        Procedure::create([
            "libelle_court" => "CDAS",
            "libelle_long" =>"Certificat de détention d'un animal sauvage",
            "description" => "Acte administratif autorisant une personne physique ou morale nationale,
                expatriée résidente ou expatriée non-résidente à détenir un animal sauvage ou une partie
                d’un animal sauvage (trophées, viande etc)
                pour certifier l’origine et les conditions d’acquisition du produit.",
            "img" => "img/dff.png",
            "code_color" => "#e2853d",
            "code" => "P004",
            "service_id"=>$serv1->uuid,
            "code" => 1200
        ]);
        Procedure::create([
            "libelle_court" => "ADDMC",
            "libelle_long" =>"Autorisation donnant droit à mener la chasse",
            "description" => "Acte administratif autorisant une tierce personne à effectuer la chasse
                (de tuer, blesser, poursuivre, rechercher, inquiéter, viser un animal en liberté ou détruire).",
            "img" => "img/gfd.png",
            "code_color" => "#629449",
            "code" => "P003",
            "service_id"=>$serv1->uuid,
            "code" => 1100
        ]);
        Procedure::create([
            "libelle_court" => "PCBCB",
            "libelle_long" =>"Permis de circulation du bois et charbon de bois",
            "description" => "Permis pour tout transport de bois et charbon de bois en vue de consommation/distribution.",
            "img" => "img/60.png",
            "code_color" => "#14b522",
            "code" => "P005",
            "service_id"=>$serv1->uuid,
            "code" => 1000
        ]);
        Procedure::create([
            "libelle_court" => "PCBCB",
            "libelle_long" =>"Permis de coupe du bois et charbon de bois",
            "description" => "Description de la coupe du bois",
            "img" => "img/10.png",
            "code_color" => "#b7703d",
            "code" => "P0011",
            "service_id"=>$serv1->uuid,
            "code" => 1500
        ]);

    }
}
