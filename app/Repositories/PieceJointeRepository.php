<?php

namespace App\Repositories;
use App\Models\PieceJointe;
use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use Illuminate\Support\Facades\Storage;
/**
 * Class PieceJointeRepository.
 */
class PieceJointeRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return PieceJointe::class;
    }
    
    public function all($filtre = array()) {
        $this->newQuery()->eagerLoad();
        $models = $this->query
                 ->join('procedure_piece_jointes', 'procedure_piece_jointes.piece_jointe_id', '=', 'piece_jointes.uuid')
                ->where($filtre)->get();
        $this->unsetClauses();
        return $models;
    }
    
    public function uploadFile($file) {
        $this->unsetClauses();
        $tt = $this->genererRandomString(4);
        $fileName = time() . $tt . '.' . $file->getClientOriginalExtension();
        $url = 'public/modele/';
        Storage::makeDirectory($url);
        $path = $file->storeAs('public/modele', $fileName);
        return $path;
    }

    function genererRandomString($longueur = 10) {
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $longueur; $i++) {
            $index = mt_rand(0, strlen($caracteres) - 1);
            $randomString .= $caracteres[$index];
        }

        return $randomString;
    }
}
