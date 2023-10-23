<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.Demandesp0011.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.Demandesp0011.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.Demandesp0011.liste")
    @endif
</div>
