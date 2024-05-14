<table id="example2" class="table datatable table-bordered table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date Demande</th>
            <th scope="col">Référence</th>
            <th scope="col">Demandeur</th>
            <th scope="col">Résidence</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @php
        $i = 1;
        $checkData = 0;
        @endphp
        @foreach ($demandes as $demande)
        
        @if($demande->paiement)
        @php
            $checkData = 1;
        @endphp
        <tr>
            <th scope="row">{{ $i++ }}</th>
            <td>{{ \Carbon\Carbon::parse($demande->created_at)->format('d-m-Y') }}</td>
            <td> {{ $demande->reference }}</td>
            <td> {{ $demande->demandeur }}</td>
            <td>{{ $demande->residence }}</td>
            <td>
                <a title="Voir Détail" href="{{ route('paiement.demande.detail', ['process' => $demande->procedure, 'id_demande' => $demande->uuid]) }}" class="btn btn-xs btn-info ">
                        <i class="bi bi-eye"></i> 
                </a>
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>



@if($checkData)
<script>
    
    $(function () {
        $(document).ready(function () {
            $('#example2').DataTable({

                dom: 'Blfrtip',
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
                "lengthMenu": [
                    [5, 10, 50, -1],
                    ["5", "10", "50", "All"]
                ],

                buttons: [{
                        extend: 'csv',
                        text: 'CSV',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'excel',
                        text: 'Excel',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                    {
                        extend: 'print',
                        text: 'Imprimer',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7]
                        }
                    },
                ],
                select: true,
                "pagingType": "full_numbers",
                language: {
                    search: "Rechercher&nbsp;:",
                    lengthMenu: " _MENU_ ",
                    info: "Affichage de l'&eacute;lement _START_ &agrave; _END_ sur _TOTAL_ &eacute;l&eacute;ments",
                    infoEmpty: "Affichage de l'&eacute;lement 0 &agrave; 0 sur 0 &eacute;l&eacute;ments",
                    infoFiltered: "(filtr&eacute; de _MAX_ &eacute;l&eacute;ments au total)",
                    infoPostFix: "",
                    loadingRecords: "Chargement en cours...",
                    zeroRecords: "Aucun &eacute;l&eacute;ment &agrave; afficher",
                    emptyTable: "Aucune donnée disponible dans le tableau",
                    paginate: {
                        first: "Premier",
                        previous: "Pr&eacute;c&eacute;dent",
                        next: "Suivant",
                        last: "Dernier"
                    },
                    aria: {
                        sortAscending: ": activer pour trier la colonne par ordre croissant",
                        sortDescending: ": activer pour trier la colonne par ordre décroissant"
                    }
                }
                });

        });

    });
</script>
@endif