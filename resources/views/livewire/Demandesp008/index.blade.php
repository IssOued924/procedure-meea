<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.Demandesp008.createDechets")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.Demandesp008.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.Demandesp008.liste")
    @endif
</div>