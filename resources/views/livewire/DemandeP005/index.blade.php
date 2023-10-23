<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.DemandeP005.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.DemandeP005.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.DemandeP005.liste")
    @endif
</div>