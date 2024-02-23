<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <x-brandcrumb title="Ajouter Agent">
                <li class="nk-block-tools-opt d-none d-sm-block">
                    <a href="{{ route('create-agent') }}" wire:navigate
                       class="btn btn-dim btn-primary">
                        <em class="icon ni ni-arrow-long-left"></em>
                        <span>Retour</span>
                    </a>
                </li>
            </x-brandcrumb>
            {{ $this->components() }}
        </div>
    </div>
</div>
