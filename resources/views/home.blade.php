@extends('layout.navbar')

@section('content')

<br>
<br>
<br>
<div class="header">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center">
        <div class="col-lg-6 col-7">
          <h2 class="h2 text-black d-inline-block mb-0">Home</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<div class="row">
    <div class="col-xl-3 col-md-6">
      <div class="card bg-gradient-primary border-0">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0 text-white">Tasks completed</h5>
              <span class="h2 font-weight-bold mb-0 text-white">8/24</span>
              <div class="progress progress-xs mt-3 mb-0">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%;"></div>
              </div>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-gradient-info border-0">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0 text-white">Contacts</h5>
              <span class="h2 font-weight-bold mb-0 text-white">123/267</span>
              <div class="progress progress-xs mt-3 mb-0">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
              </div>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-gradient-danger border-0">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0 text-white">Items sold</h5>
              <span class="h2 font-weight-bold mb-0 text-white">200/300</span>
              <div class="progress progress-xs mt-3 mb-0">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
              </div>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-md-6">
      <div class="card bg-gradient-default border-0">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0 text-white">Notifications</h5>
              <span class="h2 font-weight-bold mb-0 text-white">50/62</span>
              <div class="progress progress-xs mt-3 mb-0">
                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
              </div>
            </div>
            <div class="col-auto">
              <button type="button" class="btn btn-sm btn-neutral mr-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-h"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
          </p>
        </div>
      </div>
    </div>
  </div>

@endsection