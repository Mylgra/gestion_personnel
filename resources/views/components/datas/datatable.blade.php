@php
    $models = $getModels();
    $actions = $getActions();
    $columns = $getFields();
    $datas = $models['data'];
@endphp
<div class="card-inner-group">
    <div class="card-inner p-0">
        <div class="nk-tb-list nk-tb-ulist">
            @if($columns)
                <div class="nk-tb-item nk-tb-head">
                    @foreach($columns as $value => $column)
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid">
                                <label class="custom-control-label" for="uid"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col"><span class="sub-text">Instructor</span></div>
                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                        @if($column === 'actions')
                            <div class="nk-tb-col nk-tb-col-tools">
                                <ul class="nk-tb-actions gx-1 my-n1">
                                    <li>
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email to All</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend Selected</span></a></li>
                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Seleted</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endif
            @if($datas)
                @foreach($datas as $value => $item)
                    <div class="nk-tb-item">
                        <div class="nk-tb-col nk-tb-col-check">
                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                <input type="checkbox" class="custom-control-input" id="uid1">
                                <label class="custom-control-label" for="uid1"></label>
                            </div>
                        </div>
                        <div class="nk-tb-col">
                            <a href="html/lms/instructor-details.html">
                                <div class="user-card">
                                    <div class="user-avatar bg-primary">
                                        <span>AB</span>
                                    </div>
                                    <div class="user-info">
                                        <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>
                                        <span>info@softnio.com</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span>+811 758-756433</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>United State</span>
                        </div>
                        <div class="nk-tb-col tb-col-lg">
                            <span>Lorem ipsum dolor sit amet.</span>
                        </div>
                        <div class="nk-tb-col tb-col-mb">
                            <span>12 active courses</span>
                        </div>
                        <div class="nk-tb-col tb-col-md">
                            <span class="tb-status text-success">Active</span>
                        </div>
                        <div class="nk-tb-col nk-tb-col-tools">
                            <ul class="nk-tb-actions gx-1">
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                        <em class="icon ni ni-mail-fill"></em>
                                    </a>
                                </li>
                                <li class="nk-tb-action-hidden">
                                    <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">
                                        <em class="icon ni ni-user-cross-fill"></em>
                                    </a>
                                </li>
                                <li>
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            @else
                <div class="nk-tb-item text-center">
                    Pas des donnee disponible
                </div>
            @endif

{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid1">--}}
{{--                        <label class="custom-control-label" for="uid1"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar bg-primary">--}}
{{--                                <span>AB</span>--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Abu Bin Ishtiyak <span class="dot dot-success d-md-none ms-1"></span></span>--}}
{{--                                <span>info@softnio.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 758-756433</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>United State</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>12 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-success">Active</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid2">--}}
{{--                        <label class="custom-control-label" for="uid2"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar">--}}
{{--                                <img src="./images/avatar/a-sm.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Ashley Lawson <span class="dot dot-warning d-md-none ms-1"></span></span>--}}
{{--                                <span>ashley@softnio.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 534-98324</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>United kingdom</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>24 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-warning">Pending</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid3">--}}
{{--                        <label class="custom-control-label" for="uid3"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar bg-info">--}}
{{--                                <span>JL</span>--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Joe Larson <span class="dot dot-success d-md-none ms-1"></span></span>--}}
{{--                                <span>larson@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 987-4958</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>United State</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>2 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-success">Active</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid4">--}}
{{--                        <label class="custom-control-label" for="uid4"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar bg-danger">--}}
{{--                                <span>JM</span>--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Jane Montgomery <span class="dot dot-danger d-md-none ms-1"></span></span>--}}
{{--                                <span>jane84@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 765-4958</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Canada</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>14 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-danger">Suspend</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid5">--}}
{{--                        <label class="custom-control-label" for="uid5"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar">--}}
{{--                                <img src="./images/avatar/b-sm.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Frances Burns <span class="dot dot-success d-md-none ms-1"></span></span>--}}
{{--                                <span>frances@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 987-9875</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Australia</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>20 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-success">Active</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid6">--}}
{{--                        <label class="custom-control-label" for="uid6"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar">--}}
{{--                                <img src="./images/avatar/c-sm.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Alan Butler <span class="dot dot-info d-md-none ms-1"></span></span>--}}
{{--                                <span>butler@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 847-4532</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Brazil</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>3 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-info">Inactive</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid7">--}}
{{--                        <label class="custom-control-label" for="uid7"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar bg-warning">--}}
{{--                                <span>VL</span>--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Victoria Lynch <span class="dot dot-success d-md-none ms-1"></span></span>--}}
{{--                                <span>victoria@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 231-5463</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>India</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>5 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-success">Active</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid8">--}}
{{--                        <label class="custom-control-label" for="uid8"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar bg-success">--}}
{{--                                <span>PN</span>--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Patrick Newman <span class="dot dot-success d-md-none ms-1"></span></span>--}}
{{--                                <span>patrick@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 347-4958</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Bangladesh</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>29 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-success">Active</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid9">--}}
{{--                        <label class="custom-control-label" for="uid9"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar">--}}
{{--                                <img src="./images/avatar/d-sm.jpg" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Jane Harris <span class="dot dot-warning d-md-none ms-1"></span></span>--}}
{{--                                <span>harris@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 816-4958</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>India</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>6 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-warning">Pending</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
{{--            <div class="nk-tb-item">--}}
{{--                <div class="nk-tb-col nk-tb-col-check">--}}
{{--                    <div class="custom-control custom-control-sm custom-checkbox notext">--}}
{{--                        <input type="checkbox" class="custom-control-input" id="uid10">--}}
{{--                        <label class="custom-control-label" for="uid10"></label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col">--}}
{{--                    <a href="html/lms/instructor-details.html">--}}
{{--                        <div class="user-card">--}}
{{--                            <div class="user-avatar bg-purple">--}}
{{--                                <span>EW</span>--}}
{{--                            </div>--}}
{{--                            <div class="user-info">--}}
{{--                                <span class="tb-lead">Emma Walker <span class="dot dot-success d-md-none ms-1"></span></span>--}}
{{--                                <span>walker@example.com</span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span>+811 162-5647</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Brazil</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-lg">--}}
{{--                    <span>Lorem ipsum dolor sit amet.</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-mb">--}}
{{--                    <span>35 active courses</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col tb-col-md">--}}
{{--                    <span class="tb-status text-success">Active</span>--}}
{{--                </div>--}}
{{--                <div class="nk-tb-col nk-tb-col-tools">--}}
{{--                    <ul class="nk-tb-actions gx-1">--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">--}}
{{--                                <em class="icon ni ni-mail-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nk-tb-action-hidden">--}}
{{--                            <a href="#" class="btn btn-trigger btn-icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Suspend">--}}
{{--                                <em class="icon ni ni-user-cross-fill"></em>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <div class="drodown">--}}
{{--                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-end">--}}
{{--                                    <ul class="link-list-opt no-bdr">--}}
{{--                                        <li><a href="html/lms/instructor-details.html"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>--}}
{{--                                        <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div><!-- .nk-tb-item -->--}}
        </div>
    </div>
    <div class="card-inner">
        <div class="nk-block-between-md g-3">
            <div class="g">
                {{ $datas->links('components.pagination') }}
            </div>
        </div>
    </div>
</div>
