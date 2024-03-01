
// instruction datatables
function  dossierByStatus(status) {
    $('#tb_courrier_entrant').DataTable({
        //destroy: true,
        dom: 'lBfrtip',
        stateSave: true,
        stateDuration: -1,
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "Tous"]],
        search: {
            'smart': true,
        },
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        //responsive: true,
        language: {
            url: APP_URL + '/js/French.json'
        },
        processing: true,
        serverSide: true,
        ajax: {
            url: route('getDossierByStatus'),
            type: 'GET'
        },
        columns: [
            { data: 'DT_RowIndex', name: 'DT_RowIndex', title:'N°' },
            {data: 'num_chrono', name: 'num_chrono', title: 'Date Demande'},
            {data: 'reference', name: 'reference', title: 'Demandeur'},
           // {data: 'objet', name: 'objet', title: 'Objet'},
            // {data: 'objet', name: 'objet', title: 'Objet', render: function (data, type, row) {
            //         if (data.length >70) {
            //             return '<span title="'+data+'" data-toggle="tooltip">'+data.slice(0, 70)+ '...</span>';
            //         } else {
            //             return data;
            //         }
            //     }
            // },
            {data: 'provenance', name: 'provenance', title: 'Résidence'},
            {data: 'nature', name: 'nature', title: 'Etat Demande'},
            {data: 'priorite', name: 'priorite', title: 'Paiement'},
            {data: 'priorite', name: 'priorite', title: 'Délai'},
            {data: 'priorite', name: 'priorite', title: 'Déposé'},
            {data: 'priorite', name: 'priorite', title: 'Assigné à'},
            // {data: 'courrier_suivi', name: 'courrier_suivi', title: 'Suivi', render: function (data) {
            //         if (data) {
            //             return '<span class="badge badge-warning"> Oui </span>';
            //         } else {
            //             return '<span class="badge badge-success">Non</span>';
            //         }
            //     }
            // },
            // // { data: 'date_courrier', name:'date_courrier', title: 'Date Courrier' },
            // {data: 'date_courrier', name: 'date_courrier', title: 'Date Courrier', render: function (data) {
            //         if (data == null || data.length < 10) {
            //             return "-";
            //         } else {
            //             let date = new Date(data);
            //             let dateStr =
            //                     ("00" + date.getDate()).slice(-2) + "/" +
            //                     ("00" + (date.getMonth() + 1)).slice(-2) + "/" +
            //                     date.getFullYear() + " ";
            //             return dateStr
            //         }
            //     }
            // },
            // //  { data: 'date_arrivee', name: 'date_arrivee', title: 'Date Arrivée' },
            // {data: 'date_arrivee', name: 'date_arrivee', title: 'Date Arrivée', render: function (data) {
            //         if (data == null || data.length < 10) {
            //             return "-";
            //         } else {
            //             let date = new Date(data);
            //             let dateStr =
            //                     ("00" + date.getDate()).slice(-2) + "/" +
            //                     ("00" + (date.getMonth() + 1)).slice(-2) + "/" +
            //                     date.getFullYear() + " ";
            //             return dateStr
            //         }
            //     }
            // },

            // {data: 'statut', name: 'statut', title: 'Statut', render: function (data) {
            //         if (data == "Impute") {
            //             return '<span class="badge badge-warning"> Imputé </span>';
            //         } else if (data === 'Reception') {
            //             return '<span class="badge badge-info"> Réceptionné </span>';
            //         } else {
            //             return '<span class="badge badge-success">Nouveau</span>';
            //         }
            //     }
            // },
            {data: 'action', name: 'action', orderable: false, printable: false, title: 'Action'},
        ],
        order: [[1, 'asc']]
    });
}