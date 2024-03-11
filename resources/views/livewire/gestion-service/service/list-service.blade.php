<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-block-head nk-block-head-sm">
                <div class="nk-block-between">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">Liste des services</h3>
                    </div>
                    <div class="nk-block-head-content">
                        <div class="toggle-wrap nk-block-tools-toggle">
                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                <em class="icon ni ni-menu-alt-r"></em>
                            </a>
                            <div class="toggle-expand-content" data-content="pageMenu">
                                <ul class="nk-block-tools g-3">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light"
                                               data-bs-toggle="dropdown">
                                                <em class="d-none d-sm-inline icon ni ni-filter-alt"></em>
                                                <span>Filtered By</span>
                                                <em class="dd-indc icon ni ni-chevron-right"></em>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><span>Open</span></a></li>
                                                    <li><a href="#"><span>Closed</span></a></li>
                                                    <li><a href="#"><span>Onhold</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nk-block-tools-opt d-none d-sm-block">
                                        <a href="{{ route('services.create') }}" wire:navigate
                                           class="btn btn-dim btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                            <span>Ajouter un Service</span>
                                        </a>
                                    </li>
                                    <li class="nk-block-tools-opt d-block d-sm-none">
                                        <a href="#" class="btn btn-icon btn-primary">
                                            <em class="icon ni ni-plus"></em>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
