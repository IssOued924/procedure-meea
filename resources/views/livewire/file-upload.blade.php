<div>
    <form method="POST" action="/test-route">
    @csrf
    <label for="libelle_court">libelle</label><br>
    <input type="text" id="libelle_court" name="libelle_court" value="ddsdsdsd"><br>

    

    <label for="montant">montant</label><br>
    <input type="text" id="montant" name="montant" value='100000'><br>


       

        <label for="procedure_id">procedure_id</label><br>
    <input type="file" id="procedure_id" name="file"><br>

    <input type="submit" value="Submit">

</form> 
</div>
