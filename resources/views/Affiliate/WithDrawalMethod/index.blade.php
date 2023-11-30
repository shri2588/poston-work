@extends('Affiliate.layouts.app_master')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Withdrawal methods</span></h4>
        <div class="row">
            <div class="card"><br>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons btn-group flex-wrap">
                        <button
                            class="btn btn-secondary create-new btn-primary btn-sm" tabindex="0"
                            aria-controls="DataTables_Table_0" type="button">
                            <span>
                                <i class="ti ti-plus me-sm-1" aria-controls="DataTables_Table_0"></i> <span
                                    class="d-none d-sm-inline-block">Add New</span>
                                </span>
                        </button>
                    </div>
                </div>
                <table id="tableId">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Manual <span class="fas fa-info-circle text-primary"></span></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Paypal <span class="fas fa-info-circle text-primary"></span></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Edit</a>
                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- Modal to add new record -->
     <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
          <button
            type="button"
            class="btn-close text-reset"
            data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
          <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
            <div class="col-sm-12">
              <label class="form-label" for="basicFullname">Full Name</label>
              <div class="input-group input-group-merge">
                <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
                <input
                  type="text"
                  id="basicFullname"
                  class="form-control dt-full-name"
                  name="basicFullname"
                  placeholder="John Doe"
                  aria-label="John Doe"
                  aria-describedby="basicFullname2" />
              </div>
            </div>
            <div class="col-sm-12">
              <label class="form-label" for="basicPost">Post</label>
              <div class="input-group input-group-merge">
                <span id="basicPost2" class="input-group-text"><i class="ti ti-briefcase"></i></span>
                <input
                  type="text"
                  id="basicPost"
                  name="basicPost"
                  class="form-control dt-post"
                  placeholder="Web Developer"
                  aria-label="Web Developer"
                  aria-describedby="basicPost2" />
              </div>
            </div>
            <div class="col-sm-12">
              <label class="form-label" for="basicEmail">Email</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="ti ti-mail"></i></span>
                <input
                  type="text"
                  id="basicEmail"
                  name="basicEmail"
                  class="form-control dt-email"
                  placeholder="john.doe@example.com"
                  aria-label="john.doe@example.com" />
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            <div class="col-sm-12">
              <label class="form-label" for="basicDate">Joining Date</label>
              <div class="input-group input-group-merge">
                <span id="basicDate2" class="input-group-text"><i class="ti ti-calendar"></i></span>
                <input type="text" class="form-control dt-date"
                  id="basicDate"
                  name="basicDate"
                  aria-describedby="basicDate2"
                  placeholder="MM/DD/YYYY"
                  aria-label="MM/DD/YYYY" />
              </div>
            </div>
            <div class="col-sm-12">
              <label class="form-label" for="basicSalary">Salary</label>
              <div class="input-group input-group-merge">
                <span id="basicSalary2" class="input-group-text"><i class="ti ti-currency-dollar"></i></span>
                <input
                  type="number"
                  id="basicSalary"
                  name="basicSalary"
                  class="form-control dt-salary"
                  placeholder="12000"
                  aria-label="12000"
                  aria-describedby="basicSalary2" />
              </div>
            </div>
            <div class="col-sm-12">
              <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
              <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            </div>
          </form>
        </div>
      </div>
      <!--/ DataTable with Buttons -->

@endsection
