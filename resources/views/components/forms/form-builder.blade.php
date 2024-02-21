@php
    $name = $getName();
    $sections = $getSections();
    $route = $getRoute();
@endphp
<div class="container-fluid">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="components-preview wide-md mx-auto">
                <div class="nk-block-head nk-block-head-lg wide-sm">
                    <div class="nk-block-head-content">
                        <div class="nk-block-head-sub">
                            <a class="back-to" href="html/components.html">
                                <em class="icon ni ni-arrow-left"></em>
                                <span>Components</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="nk-block nk-block-lg">
                    <div class="card">
                        <div class="card-inner">
                            <div class="card-head">
                                <h5 class="card-title">{{ $name }}</h5>
                            </div>
                            <form wire:submit.prevent="storeData" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-4">
                                    @foreach($sections as $section)
                                        {{ $section }}
                                    @endforeach
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Save Informations</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
