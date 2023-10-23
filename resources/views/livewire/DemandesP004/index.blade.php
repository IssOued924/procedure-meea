<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.DemandesP004.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.DemandesP004.details")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.DemandesP004.liste")
    @endif
</div>