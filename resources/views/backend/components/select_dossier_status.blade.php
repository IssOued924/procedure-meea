<div class="row">
    <div class="col-3"></div>
        <div class="col-6" style="text-align: center">
            <select name="dossierStatus" id="etat" class="form-select border-success" onchange="loadDemandeListeByStatus()">
                <option value="All" value="" >Tout les dossiers</option>
                <option {{( (isset($selectedEtat) && $selectedEtat == 'D') ? 'selected': '')}} value="D" value="" >Nouveaux dossiers</option>
                <option {{( (isset($selectedEtat) && $selectedEtat == 'E') ? 'selected': '')}} value="E" value="" >Dossiers receptionnés</option>
                <option {{( (isset($selectedEtat) && $selectedEtat == 'V') ? 'selected': '')}} value="V" value="" >Dossiers traités</option>
                <option {{( (isset($selectedEtat) && $selectedEtat == 'S') ? 'selected': '')}} value="S" value="" >Dossiers signés</option>
                <option {{( (isset($selectedEtat) && $selectedEtat == 'A') ? 'selected': '')}} value="A" value="" >Dossiers archivés</option>
            </select>
        </div>
    <div class="col-3"></div>
</div>
<br>