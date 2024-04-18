<div>
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Create Projects</h3>
            </div>
            <div class="nk-block-head-content">
                <div class="toggle-wrap nk-block-tools-toggle">
                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                        <em class="icon ni ni-menu-alt-r"></em>
                    </a>
                    <div class="toggle-expand-content" data-content="pageMenu">
                        <ul class="nk-block-tools g-3">
                            <li class="nk-block-tools-opt d-none d-sm-block">
                                <a href="{{ route('create-event') }}" wire:navigate class="btn btn-primary">
                                    <em class="icon ni ni-arrow-long-left"></em>
                                    <span>Back Project</span>
                                </a>
                            </li>
                            <li class="nk-block-tools-opt d-block d-sm-none">
                                <a href="{{ route('create-event') }}" wire:navigate class="btn btn-icon btn-primary">
                                    <em class="icon ni ni-arrow-long-left"></em>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nk-block mt-2">
        {{ $this->form() }}
    </div>
</div>
