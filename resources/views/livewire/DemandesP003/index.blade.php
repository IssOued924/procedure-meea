<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.DemandesP003.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.DemandesP003.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.DemandesP003.liste")
    @endif
</div>