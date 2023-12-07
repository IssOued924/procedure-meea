<div>
    @if ($currentPage == PAGECREATEFORM)
        @include("livewire.Demandes-p002.create")
    @endif

    @if ($currentPage == PAGEEDITFORM)
        @include("livewire.Demandes-p002.editForm")
    @endif

    @if($currentPage == PAGELIST)
        @include("livewire.Demandes-p002.liste")
    @endif
</div>
