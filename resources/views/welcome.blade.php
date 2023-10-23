@extends('layouts/layoutW')
@section('contenuWelcome')


        <!-- ======= Hero Section ======= -->

        <!-- End Hero -->

        <!-- ======= Breadcrumbs ======= -->
        <!-- End Breadcrumbs -->

        <!-- ======= sidebar Section ======= -->
            <div class="container">

                <!-- <div class="row"> -->


                    <div class="col">

                        <div class="row">


                            @foreach($procedure->take(5) as $proc)
                            {{-- {{ dd($procedure->baseJuridique )}} --}}
                            <div class="col-lg col-md mb20">
                                <div class="mb-4">

                                    <div class="" style="width:14rem; border:none; text-align:left; display:inline">
                                        <div style="">
                                            <img src="{{asset($proc->img)}}" class="" alt="..." width="100%" height="100%" >
                                        </div>

                                        <!-- <h6 > -->
                                            <a title="" href="/{{$proc->code}}" class="">
                                                <div class="proc_text rounded" style="background-color: {{$proc->code_color}}; height:100%;">
                                                    {{ $proc->libelle_long }}
                                                </div>
                                            </a>
                                            <!-- </h6> -->
                                            {{-- <a href="" style="align-items:center;" class="btn btn-primary   btn-sm">voir plus</a> --}}

                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="row" id="mycard">
                            @foreach($procedure->slice(-5) as $proc)
                            <div class="col-lg col-md mb20">
                                <div class="mb-4">

                                    <div class="" style="width:14rem; border:none; text-align:left; display:inline">
                                        <div style="">
                                            <img src="{{asset($proc->img)}}" class="" alt="..." width="100%" height="100%" >
                                        </div>

                                       <a title="" href="/{{$proc->code}}" class="">
                                                <div class="proc_text rounded" style="background-color: {{$proc->code_color}}; height:100%;">
                                                    {{ $proc->libelle_long }}
                                                </div>
                                            </a>

                                    </div>
                                </div>
                            </div>
                            @endforeach


                            <!-- debut Modal pour afficher les details -->
                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Demande d'autorisation de transport/transfert d'un animal sauvage ou de
                                                trophées (certificat d'origine)</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore tempore voluptatum porro unde ex ad
                                            numquam
                                            quibusdam cumque ullam iusto, voluptates commodi, sequi illum reiciendis eius tempora, ipsa maxime
                                            corporis.

                                        </div>
                                        <div class="modal-footer">
                                            <x-secondary-button class="ml-4">
                                                {{ __('Fermer') }}
                                            </x-secondary-button>
                                            <x-primary-button class="ml-4" href="/demandes" wire:navigate>
                                                {{ __('Postuler') }}
                                            </x-primary-button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- fin Modal pour afficher les details -->
                        </div>

                    </div>
                <!-- </div> -->
            </div>


        <!-- End Contact Section -->

@endsection
