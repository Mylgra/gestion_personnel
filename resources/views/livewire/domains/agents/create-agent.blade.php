<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <x-brandcrumb title="Ajouter Agent">
                <li class="nk-block-tools-opt d-none d-sm-block">
                    <a href="{{ route('agents') }}" wire:navigate
                       class="btn btn-dim btn-primary">
                        <em class="icon ni ni-arrow-long-left"></em>
                        <span>Retour</span>
                    </a>
                </li>
            </x-brandcrumb>
            <small>
                Character count: <span x-text="$wire.person_id.length"></span>
            </small>
            {{ $this->components() }}
        </div>
    </div>
</div>
