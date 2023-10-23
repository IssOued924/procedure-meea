<div class="row p-4 pt-2">
    <div class="col-12">
        <div class="card">
            <!-- <div class="card-header bg-gradient-primary d-flex align-items-center">
                <div class="card-tools d-flex align-items-center">
                    <div class="input-group input-group-md" style="width: 250px;">
                        <input type="text" name="table_search" wire:model.debounce="search" class="form-control float-right" placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
 -->
            <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-triped">
                    <thead>
                        <tr>
                            <th class="text-center">Nom</th>
                            <th class="text-center">CNIB</th>
                            <th class="text-center">Adresse</th>
                            <th class="text-center">Date Ajout</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($demandes as $demande)
                        <tr>
                            <!-- <td>
                                <img src="{{asset($demande->document1)}}" alt="" style="width:60px;height:60px;">
                            </td> -->
                            <td class="text-center">{{ $demande->prenom }} {{ $demande->nom }}</td>
                            <td class="text-center">{{ $demande->cnib }}</td>
                            <td class="text-center">{{ $demande->adresse }}</td>
                            <td class="text-center"><span class="tag tag-success">{{ $demande->created_at->diffForHumans() }}</span></td>
                            <td class="text-center">
                                <button class="btn btn-primary" title="Détails" wire:click="edit({{ $demande->id }})"><i class="bi bi-eye"></i></button>
                                <button class="btn btn-primary" title="Modifier"><i class="bx bxs-edit"></i></button>
                                <button class="btn btn-danger" title="Supprimer"><i class="bx bx-trash"></i></button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger">
                                    <h5><i class="icon fas fa-ban"></i>Information !</h5> Aucune demande soumises pour le moment.
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <div class="float-right">{{ $demandes->links() }}</div>
            </div>

        </div>

    </div>
</div>