<section id="about" class="about">
    @if (session()->has('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="container">

        <div>
            <div style="background-color: #ffffff; border: 1px solid #dddddd; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); border-radius: 5px; padding: 50px; margin: 50px;">
                <label style="font-size: 24px; color: black; text-align: center;">Détails de la demande</label>
                <form enctype="multipart/form-data">
                    @csrf <!-- Ajoutez le jeton CSRF pour protéger votre formulaire -->

                    <div class="form-group mt-3">
                        <label for="nom">Nom:</label>
                        <input type="text" id="nom" class="form-control" placeholder="Nom" wire:model="editDemande.nom" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="prenom">Prénom:</label>
                        <input type="text" id="prenom" class="form-control" placeholder="Prénom" wire:model="editDemande.prenom" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="cnib">No CNIB:</label>
                        <input type="text" id="cnib" class="form-control" placeholder="No CNIB" wire:model="editDemande.cnib" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="adresse">Adresse:</label>
                        <input type="text" id="adresse" class="form-control" placeholder="Adresse" wire:model="editDemande.adresse" disabled>
                    </div>

                    <div class="form-group mt-3">
                        <label for="document1">Document (Piece jointe1):</label>
                        <x-primary-button type="button" wire:click="download_PJ_1">Télécharger</x-primary-button> 
                    </div>

                    <div class="form-group mt-3">
                        <label for="document2">Document (Piece jointe):</label>
                        <x-primary-button type="button" wire:click="download_PJ_2">Télécharger</x-primary-button> 
                    </div>

                    <p></p>
                    <div class="text-center">
                        <x-secondary-button class="ml-4" href="/welcome">
                            {{ __('Annuler') }}
                        </x-secondary-button>
                        <x-primary-button class="ml-4" wire:click.prevent="store()">
                            {{ __('Envoyer') }}
                        </x-primary-button>
                    </div><br>
                </form>


            </div>
        </div>

    </div>
</section><!-- End About Section -->