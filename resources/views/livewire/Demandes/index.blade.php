<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.Demandes.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.Demandes.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.Demandes.liste")
    @endif
</div>
