@extends('Affiliate.layouts.app_master')

@section('content')



<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 mb-4"><span class="text-muted fw-light">Logistics /</span> Dashboard</h4>

    <!-- Card Border Shadow -->
    <div class="row">
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card card-border-shadow-primary">
          <div class="card-body">
            <div class="d-flex align-items-center mb-2 pb-1">
              <div class="avatar me-2">
                <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-truck ti-md"></i></span>
              </div>
              <h4 class="ms-1 mb-0">$0</h4>
            </div>
            <p class="mb-1">Summary</p>
            <p class="mb-0">
              <span class="fw-medium me-1"></span>
              <small class="text-muted">Life time Earning</small>
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card card-border-shadow-warning">
          <div class="card-body">
            <div class="d-flex align-items-center mb-2 pb-1">
              <div class="avatar me-2">
                <span class="avatar-initial rounded bg-label-warning"
                  ><i class="ti ti-alert-triangle ti-md"></i
                ></span>
              </div>
              <h4 class="ms-1 mb-0">$0</h4>
            </div>
            <p class="mb-1">Nov - 2023 Earning</p>
            <p class="mb-0">
              {{-- <span class="fw-medium me-1">-8.7%</span> --}}
              {{-- <small class="text-muted">Nov - 2023 Earning</small> --}}
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-lg-4 mb-4">
        <div class="card card-border-shadow-danger">
          <div class="card-body">
            <div class="d-flex align-items-center mb-2 pb-1">
              <div class="avatar me-2">
                <span class="avatar-initial rounded bg-label-danger"
                  ><i class="ti ti-git-fork ti-md"></i
                ></span>
              </div>
              <h4 class="ms-1 mb-0">$0</h4>
            </div>
            <p class="mb-1">2023 Earning</p>
            <p class="mb-0">
              {{-- <span class="fw-medium me-1">+4.3%</span>
              <small class="text-muted">than last week</small> --}}
            </p>
          </div>
        </div>
      </div>
      {{-- <div class="col-sm-6 col-lg-3 mb-4">
        <div class="card card-border-shadow-info">
          <div class="card-body">
            <div class="d-flex align-items-center mb-2 pb-1">
              <div class="avatar me-2">
                <span class="avatar-initial rounded bg-label-info"><i class="ti ti-clock ti-md"></i></span>
              </div>
              <h4 class="ms-1 mb-0">13</h4>
            </div>
            <p class="mb-1">Late vehicles</p>
            <p class="mb-0">
              <span class="fw-medium me-1">-2.5%</span>
              <small class="text-muted">than last week</small>
            </p>
          </div>
        </div>
      </div> --}}
    </div>
    <!--/ Card Border Shadow -->
    <div class="row">
    <!-- Shipment statistics-->
      <div class="col-lg-12 col-xxl-12 mb-4 order-3 order-xxl-1">
        <div class="card">
          <div class="card-header d-flex align-items-center justify-content-between">
            <div class="card-title mb-0">
              <h5 class="m-0 me-2"> Affiliate earning</h5>
              {{-- <small class="text-muted">Total number of deliveries 23.8k</small> --}}
            </div>
            <div class="dropdown">
              <button
                type="button"
                class="btn btn-label-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                January
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:void(0);">January</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">February</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">March</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">April</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">May</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">June</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">July</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">August</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">September</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">October</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">November</a></li>
                <li><a class="dropdown-item" href="javascript:void(0);">December</a></li>
              </ul>
            </div>
          </div>
          <div class="card-body">
            <div id="shipmentStatisticsChart"></div>
          </div>
        </div>
      </div>
      <!--/ Shipment statistics -->




    </div>
  </div>

@endsection
