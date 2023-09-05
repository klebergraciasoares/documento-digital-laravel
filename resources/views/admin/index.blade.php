<x-layout title=""  >

    <h2 class="display-4 mb-0">Dashboard</h2>
    <div class="text-muted">Sales overview &amp; summary</div>



    <div class="container-xl p-5">
        <div class="row justify-content-between align-items-center mb-5">
            <div class="col flex-shrink-0 mb-5 mb-md-0">

            </div>
            <div class="col-12 col-md-auto">
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <mwc-select class="mw-50 mb-2 mb-md-0" outlined="" label="View by">
                        <mwc-list-item selected="" value="0" mwc-list-item="" tabindex="0" aria-disabled="false" role="option" aria-selected="true">Pedidos, </mwc-list-item>
                        <mwc-list-item value="1" mwc-list-item="" tabindex="-1" aria-disabled="false" role="option">Clientes e</mwc-list-item>
                        <mwc-list-item value="2" mwc-list-item="" tabindex="-1" aria-disabled="false" role="option">Leads</mwc-list-item>
                    </mwc-select>
                    <mwc-select class="mw-50" outlined="" label="Sales from">
                    </mwc-select>
                </div>
            </div>
        </div>


        <!-- Colored status cards-->
        <div class="row gx-5">
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised bg-primary text-white">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5 text-white">101.1K</div>
                                <div class="card-text">Downloads</div>
                            </div>
                            <div class="icon-circle bg-white-50 text-primary"><i class="material-icons">download</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs">arrow_upward</i>
                                <div class="caption fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised bg-warning text-white">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5 text-white">12.2K</div>
                                <div class="card-text">Purchases</div>
                            </div>
                            <div class="icon-circle bg-white-50 text-warning"><i class="material-icons">storefront</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs">arrow_upward</i>
                                <div class="caption fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised bg-secondary text-white">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5 text-white">5.3K</div>
                                <div class="card-text">Customers</div>
                            </div>
                            <div class="icon-circle bg-white-50 text-secondary"><i class="material-icons">people</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs">arrow_upward</i>
                                <div class="caption fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-md-6 mb-5">
                <div class="card card-raised bg-info text-white">
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                            <div class="me-2">
                                <div class="display-5 text-white">7</div>
                                <div class="card-text">Channels</div>
                            </div>
                            <div class="icon-circle bg-white-50 text-info"><i class="material-icons">devices</i></div>
                        </div>
                        <div class="card-text">
                            <div class="d-inline-flex align-items-center">
                                <i class="material-icons icon-xs">arrow_upward</i>
                                <div class="caption fw-500 me-2">3%</div>
                                <div class="caption">from last month</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <!-- Revenue breakdown chart example-->
            <div class="col-lg-8 mb-5">
                <div class="card card-raised h-100">
                    <div class="card-header bg-primary text-white px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-4">
                                <h2 class="card-title text-white mb-0">Revenue Breakdown</h2>
                                <div class="card-subtitle">Compared to previous year</div>
                            </div>
                            <div class="d-flex gap-2 me-n2">
                                <button class="btn btn-lg btn-text-white btn-icon mdc-ripple-upgraded" type="button"><i class="material-icons">download</i></button>
                                <button class="btn btn-lg btn-text-white btn-icon mdc-ripple-upgraded" type="button"><i class="material-icons">print</i></button>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row gx-4">
                            <div class="col-12 col-xxl-2">
                                <div class="d-flex flex-column flex-md-row flex-xxl-column align-items-center align-items-xl-start justify-content-between">
                                    <div class="mb-4 text-center text-md-start">
                                        <div class="text-xs font-monospace text-muted mb-1">Actual Revenue</div>
                                        <div class="display-5 fw-500">$59,482</div>
                                    </div>
                                    <div class="mb-4 text-center text-md-start">
                                        <div class="text-xs font-monospace text-muted mb-1">Revenue Target</div>
                                        <div class="display-5 fw-500">$50,000</div>
                                    </div>
                                    <div class="mb-4 text-center text-md-start">
                                        <div class="text-xs font-monospace text-muted mb-1">Goal</div>
                                        <div class="display-5 fw-500 text-success">119%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xxl-10"><canvas id="dashboardBarChart" style="display: block; box-sizing: border-box; height: 312px; width: 624.9px;" width="624" height="312"></canvas></div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent position-relative ripple-gray mdc-ripple-upgraded">
                        <a class="d-flex align-items-center justify-content-end text-decoration-none stretched-link text-primary" href="#!">
                            <div class="fst-button">Open Report</div>
                            <i class="material-icons icon-sm ms-1">chevron_right</i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Segments pie chart example-->
            <div class="col-lg-4 mb-5">
                <div class="card card-raised h-100">
                    <div class="card-header bg-primary text-white px-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-4">
                                <h2 class="card-title text-white mb-0">Segments</h2>
                                <div class="card-subtitle">Revenue sources</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-lg btn-text-light btn-icon me-n2 dropdown-toggle mdc-ripple-upgraded" id="segmentsDropdownButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></button>
                                <ul class="dropdown-menu" aria-labelledby="segmentsDropdownButton">
                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Action</a></li>
                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Another action</a></li>
                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Separated link</a></li>
                                    <li><a class="dropdown-item mdc-ripple-upgraded" href="#!">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="d-flex h-100 w-100 align-items-center justify-content-center">
                            <div class="w-100" style="max-width: 20rem"><canvas id="myPieChart" style="display: block; box-sizing: border-box; height: 320px; width: 320px;" width="320" height="320"></canvas></div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent position-relative ripple-gray mdc-ripple-upgraded">
                        <a class="d-flex align-items-center justify-content-end text-decoration-none stretched-link text-primary" href="#!">
                            <div class="fst-button">Open Report</div>
                            <i class="material-icons icon-sm ms-1">chevron_right</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <!-- Privacy suggestions illustrated card-->
            <div class="col-xl-6 mb-5">
                <div class="card card-raised h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <div class="me-4">
                                <h2 class="card-title mb-0">Privacy Suggestions</h2>
                                <p class="card-text">Take our privacy checkup to choose which settings are right for you.</p>
                            </div>
                            <img src="assets/img/illustrations/security.svg" alt="..." style="height: 6rem">
                        </div>
                    </div>
                    <div class="card-footer bg-transparent position-relative ripple-gray px-4 mdc-ripple-upgraded"><a class="stretched-link text-decoration-none" href="#!">Review suggestions (4)</a></div>
                </div>
            </div>
            <!-- Account storage illustrated card-->
            <div class="col-xl-6 mb-5">
                <div class="card card-raised h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between">
                            <div class="me-4">
                                <h2 class="card-title mb-0">Account Storage</h2>
                                <p class="card-text">Your account storage is shared across all devices.</p>
                                <div class="progress mb-2" style="height: 0.25rem"><div class="progress-bar" role="progressbar" style="width: 33%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="30"></div></div>
                                <div class="card-text">10 GB of 30 GB used</div>
                            </div>
                            <img src="assets/img/illustrations/cloud.svg" alt="..." style="height: 6rem">
                        </div>
                    </div>
                    <div class="card-footer bg-transparent position-relative ripple-gray px-4 mdc-ripple-upgraded"><a class="stretched-link text-decoration-none" href="#!">Manage storage</a></div>
                </div>
            </div>
        </div>
        <div class="card card-raised">
            <div class="card-header bg-primary text-white px-4">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="me-4">
                        <h2 class="card-title text-white mb-0">Orders</h2>
                        <div class="card-subtitle">Details and history</div>
                    </div>
                    <div class="d-flex gap-2">
                        <button class="btn btn-lg btn-text-white btn-icon mdc-ripple-upgraded" type="button"><i class="material-icons">download</i></button>
                        <button class="btn btn-lg btn-text-white btn-icon mdc-ripple-upgraded" type="button"><i class="material-icons">print</i></button>
                    </div>
                </div>
            </div>
            <div class="card-body p-4">
                <!-- Simple DataTables example-->
                <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
<div class="datatable-dropdown">
<label>
<select class="datatable-selector"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="20">20</option><option value="25">25</option></select> entries per page
</label>
</div>
<div class="datatable-search">
<input class="datatable-input" placeholder="Search..." type="search" title="Search within table" aria-controls="datatablesSimple">
</div>
</div>
<div class="datatable-container"><table id="datatablesSimple" class="datatable-table"><thead><tr><th data-sortable="true" style="width: 26.80851063829787%;"><a href="#" class="datatable-sorter">Name</a></th><th data-sortable="true" style="width: 10.297872340425531%;"><a href="#" class="datatable-sorter">Ext.</a></th><th data-sortable="true" style="width: 28.510638297872344%;"><a href="#" class="datatable-sorter">City</a></th><th data-sortable="true" style="width: 17.361702127659576%;"><a href="#" class="datatable-sorter">Start Date</a></th><th data-sortable="true" style="width: 17.02127659574468%;"><a href="#" class="datatable-sorter">Completion</a></th></tr></thead><tbody><tr data-index="0"><td>Unity Pugh</td><td>9958</td><td>Curicó</td><td>2005/02/11</td><td>37%</td></tr><tr data-index="1"><td>Theodore Duran</td><td>8971</td><td>Dhanbad</td><td>1999/04/07</td><td>97%</td></tr><tr data-index="2"><td>Kylie Bishop</td><td>3147</td><td>Norman</td><td>2005/09/08</td><td>63%</td></tr><tr data-index="3"><td>Willow Gilliam</td><td>3497</td><td>Amqui</td><td>2009/29/11</td><td>30%</td></tr><tr data-index="4"><td>Blossom Dickerson</td><td>5018</td><td>Kempten</td><td>2006/11/09</td><td>17%</td></tr><tr data-index="5"><td>Elliott Snyder</td><td>3925</td><td>Enines</td><td>2006/03/08</td><td>57%</td></tr><tr data-index="6"><td>Castor Pugh</td><td>9488</td><td>Neath</td><td>2014/23/12</td><td>93%</td></tr><tr data-index="7"><td>Pearl Carlson</td><td>6231</td><td>Cobourg</td><td>2014/31/08</td><td>100%</td></tr><tr data-index="8"><td>Deirdre Bridges</td><td>1579</td><td>Eberswalde-Finow</td><td>2014/26/08</td><td>44%</td></tr><tr data-index="9"><td>Daniel Baldwin</td><td>6095</td><td>Moircy</td><td>2000/11/01</td><td>33%</td></tr></tbody></table></div>
<div class="datatable-bottom">
<div class="datatable-info">Showing 1 to 10 of 100 entries</div>
<nav class="datatable-pagination"><ul class="datatable-pagination-list"><li class="datatable-pagination-list-item datatable-hidden datatable-disabled"><a data-page="1" class="datatable-pagination-list-item-link">‹</a></li><li class="datatable-pagination-list-item datatable-active"><a data-page="1" class="datatable-pagination-list-item-link">1</a></li><li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">2</a></li><li class="datatable-pagination-list-item"><a data-page="3" class="datatable-pagination-list-item-link">3</a></li><li class="datatable-pagination-list-item"><a data-page="4" class="datatable-pagination-list-item-link">4</a></li><li class="datatable-pagination-list-item"><a data-page="5" class="datatable-pagination-list-item-link">5</a></li><li class="datatable-pagination-list-item"><a data-page="6" class="datatable-pagination-list-item-link">6</a></li><li class="datatable-pagination-list-item"><a data-page="7" class="datatable-pagination-list-item-link">7</a></li><li class="datatable-pagination-list-item datatable-ellipsis datatable-disabled"><a class="datatable-pagination-list-item-link">…</a></li><li class="datatable-pagination-list-item"><a data-page="10" class="datatable-pagination-list-item-link">10</a></li><li class="datatable-pagination-list-item"><a data-page="2" class="datatable-pagination-list-item-link">›</a></li></ul></nav>
</div></div>
            </div>
        </div>
    </div>


</x-layout
>