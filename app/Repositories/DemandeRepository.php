<?php

namespace App\Repositories;
use App\Models\Demande;
use Illuminate\Support\Facades\Storage;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
//use Your Model

/**
 * Class DemandeRepository.
 */
class DemandeRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Demande::class;
    }


    public function uploadFile(array $data){

        //dd($data['file']->getClientOriginalName().  $data['file']->getClientOriginalExtension());die;
        $this->unsetClauses();
        $fileName = time().'.'.$data['procedure_id']->getClientOriginalExtension(); 
        //$fileName = time().'.'.$data->file->extension(); 
        
        //creer un repertoire avec matricule comme nom 
        //on enregistre tous les fichiers du personnel concerné
        //$libelle = $data->libelle;
       // echo $data;
        $libelle = $data['libelle_court'];
        echo $libelle;
        $url = 'public/'.$libelle;
        Storage::makeDirectory($url);
        
        //deplacer la photo dans le dossier créé
        //$data['file']->Storage::copy('app/public/'.$libelle, $fileName);

        $path = $data['procedure_id']->storeAs('public/'.$libelle, $fileName);
        //ajouter lutilisateur connecté et le filename pour la création de personnel 
        //$request->merge(['Utilisateurs_id' => auth()->user()->id, 'photo' => $fileName]);
        return $path;
    }
}
