<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.DemandesP006.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.DemandesP006.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.DemandesP006.liste")
    @endif
</div>
