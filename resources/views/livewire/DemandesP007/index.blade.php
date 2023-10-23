<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.DemandesP007.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.DemandesP007.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.DemandesP007.liste")
    @endif
</div>