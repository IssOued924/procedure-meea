<div class="row">
    <div class="col-3"></div>
        <div class="col-6" style="text-align: center">
            <select name="optionPaiement" id="option" class="form-select border-success" onchange="loadPaiementListeByOption()">
                <option value="All" value="" >Tout les dossiers</option>
                <option {{( (isset($selectedOption) && $selectedOption == 'Orange') ? 'selected': '')}} value="Orange" value="" >Orange Money</option>
                <option {{( (isset($selectedOption) && $selectedOption == 'Moov') ? 'selected': '')}} value="Moov" value="" >Moov Money</option>
            </select>
        </div>
    <div class="col-3"></div>
</div>
<br>