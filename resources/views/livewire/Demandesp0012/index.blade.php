<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.Demandesp0012.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.Demandesp0012.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.Demandesp0012.liste")
    @endif
</div>
