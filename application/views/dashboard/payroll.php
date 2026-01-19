<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">Payroll Management</h3>
      <p class="mb-4">
        Process salaries, deductions, and generate payslips for security personnel.
      </p>
    </div>
  </div>

  <!-- Payroll Summary Cards -->
  <div class="row mb-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Monthly Payroll</p>
              <h4 class="mb-0">₱608,500</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">payments</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">Processing</span> for November 2023</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Avg. Salary</p>
              <h4 class="mb-0">₱19,016</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-info shadow-info shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">calculate</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+3.2% </span>from last month</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Deductions</p>
              <h4 class="mb-0">₱48,680</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">remove_circle</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">SSS, PhilHealth, Pag-IBIG</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Net Payable</p>
              <h4 class="mb-0">₱559,820</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-success shadow-success shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">account_balance_wallet</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm">To be disbursed on <span class="font-weight-bolder">Nov 30</span></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Payroll Actions -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-primary btn-lg w-100">
                <i class="material-symbols-rounded me-2">play_circle</i>
                Process Payroll
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-info btn-lg w-100">
                <i class="material-symbols-rounded me-2">receipt_long</i>
                Generate Payslips
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-success btn-lg w-100">
                <i class="material-symbols-rounded me-2">download</i>
                Export to Excel
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-dark btn-lg w-100">
                <i class="material-symbols-rounded me-2">print</i>
                Print Reports
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Payroll Table -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Payroll for November 2023</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-calendar text-info" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">Period:</span> Nov 1 - Nov 30, 2023
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <button class="btn btn-sm btn-success mb-0">
                  <i class="fa fa-check-circle me-1"></i> Approve All
                </button>
                <a class="cursor-pointer ms-2" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Process Late Payments</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Adjust Deductions</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">View Audit Trail</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Employee</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Basic Salary</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Overtime</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Allowances</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Deductions</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Net Pay</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-1.jpg" class="avatar avatar-sm me-3" alt="guard1">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Juan Dela Cruz</h6>
                        <p class="text-xs text-secondary mb-0">SG-2020-001</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱18,500</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱2,400</span>
                    <p class="text-xs text-secondary mb-0">16 hours</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,500</span>
                    <p class="text-xs text-secondary mb-0">Transport + Meal</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,480</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱20,920</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Approved</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-print"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="guard2">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Maria Santos</h6>
                        <p class="text-xs text-secondary mb-0">SG-2019-045</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱19,200</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,800</span>
                    <p class="text-xs text-secondary mb-0">12 hours</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,500</span>
                    <p class="text-xs text-secondary mb-0">Transport + Meal</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,536</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱20,964</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Approved</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-print"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="guard3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Roberto Garcia</h6>
                        <p class="text-xs text-secondary mb-0">SG-2021-087</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱17,800</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱0</span>
                    <p class="text-xs text-secondary mb-0">No overtime</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,500</span>
                    <p class="text-xs text-secondary mb-0">Transport + Meal</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,424</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱17,876</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Pending</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-print"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="guard4">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Lorna Fernandez</h6>
                        <p class="text-xs text-secondary mb-0">SG-2018-123</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱22,500</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱3,000</span>
                    <p class="text-xs text-secondary mb-0">20 hours</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱2,000</span>
                    <p class="text-xs text-secondary mb-0">Supervisor Allowance</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,800</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱25,700</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Approved</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-print"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-1.jpg" class="avatar avatar-sm me-3" alt="guard5">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Antonio Reyes</h6>
                        <p class="text-xs text-secondary mb-0">SG-2022-156</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱18,000</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,200</span>
                    <p class="text-xs text-secondary mb-0">8 hours</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,500</span>
                    <p class="text-xs text-secondary mb-0">Transport + Meal</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,440</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱19,260</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">On Hold</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-warning mb-0 ms-1">
                      <i class="fa fa-edit"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="guard6">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Cristina Lim</h6>
                        <p class="text-xs text-secondary mb-0">SG-2020-189</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱17,500</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱900</span>
                    <p class="text-xs text-secondary mb-0">6 hours</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,500</span>
                    <p class="text-xs text-secondary mb-0">Transport + Meal</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,400</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱18,500</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Approved</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-print"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="guard7">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Eduardo Tan</h6>
                        <p class="text-xs text-secondary mb-0">SG-2017-234</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">₱20,000</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱0</span>
                    <p class="text-xs text-secondary mb-0">Suspended</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">₱1,500</span>
                    <p class="text-xs text-secondary mb-0">Transport + Meal</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">-₱1,600</span>
                    <p class="text-xs text-secondary mb-0">SSS, PhilHealth, Pag-IBIG</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">₱19,900</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Deducted</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-dark mb-0 ms-1">
                      <i class="fa fa-file-invoice"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Payroll Breakdown Section -->
  <div class="row">
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <h6>Payroll Distribution</h6>
          <p class="text-sm mb-0">
            <i class="fa fa-chart-pie text-info" aria-hidden="true"></i>
            <span class="font-weight-bold ms-1">November 2023 breakdown</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="payroll-chart" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Payroll Summary</h6>
          <p class="text-sm">
            <i class="fa fa-info-circle text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">Financial overview</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-success text-gradient">attach_money</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Gross Payroll</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">₱608,500</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-danger text-gradient">money_off</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Total Deductions</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">₱48,680 (8%)</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-primary text-gradient">account_balance</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Net Payable</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">₱559,820</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-info text-gradient">timer</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Processing Time</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">2 days remaining</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-warning text-gradient">people</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Employees Paid</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">28/32 (87.5%)</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-dark text-gradient">schedule</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Disbursement Date</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">November 30, 2023</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <script src="/assets/js/plugins/chartjs.min.js"></script>
<script>
  // Payroll Distribution Chart
  var ctx = document.getElementById("payroll-chart").getContext("2d");
  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Basic Salaries", "Overtime Pay", "Allowances", "Government Deductions", "Net Pay"],
      datasets: [{
        label: "Amount (₱)",
        backgroundColor: ["#17c1e8", "#344767", "#82d616", "#fd7e14", "#e91e63"],
        data: [437600, 10800, 12500, 48680, 559820],
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'right',
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              let label = context.label || '';
              let value = context.parsed || 0;
              let total = context.dataset.data.reduce((a, b) => a + b, 0);
              let percentage = Math.round((value / total) * 100);
              return `${label}: ₱${value.toLocaleString()} (${percentage}%)`;
            }
          }
        }
      },
      cutout: '60%',
    },
  });
</script>