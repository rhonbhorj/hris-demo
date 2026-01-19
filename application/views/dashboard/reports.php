<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">Incident Reports</h3>
      <p class="mb-4">
        Track, manage, and analyze security incidents and emergency situations.
      </p>
    </div>
  </div>

  <!-- Incident Summary Cards -->
  <div class="row mb-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Total Incidents</p>
              <h4 class="mb-0">42</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">warning</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">This Month</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Open Cases</p>
              <h4 class="mb-0">8</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">pending_actions</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-warning font-weight-bolder">Require Attention</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Resolved</p>
              <h4 class="mb-0">32</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-success shadow-success shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">check_circle</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">76% Resolution Rate</span></p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Escalated</p>
              <h4 class="mb-0">2</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-danger shadow-danger shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">priority_high</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">Police Involvement</span></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Incident Actions -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-primary btn-lg w-100">
                <i class="material-symbols-rounded me-2">add_alert</i>
                New Incident Report
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-info btn-lg w-100">
                <i class="material-symbols-rounded me-2">summarize</i>
                Generate Summary
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-success btn-lg w-100">
                <i class="material-symbols-rounded me-2">download</i>
                Export Reports
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-dark btn-lg w-100">
                <i class="material-symbols-rounded me-2">print</i>
                Print Logs
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Incident Reports Table -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Recent Incident Reports</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-exclamation-triangle text-danger" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">Last 30 days</span> incidents
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <button class="btn btn-sm btn-success mb-0">
                  <i class="fa fa-filter me-1"></i> Filter
                </button>
                <a class="cursor-pointer ms-2" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">By Severity</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">By Location</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">By Status</a></li>
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Incident Details</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Location</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Reported By</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Severity</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date/Time</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-danger shadow-danger text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">gavel</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Physical Altercation</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1123 | Two individuals fighting at entrance</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">SM Mall of Asia</p>
                    <p class="text-xs text-secondary mb-0">Main Entrance, Pasay City</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-1.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard1">
                      <span class="text-xs font-weight-bold">Juan Dela Cruz</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">High</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Resolved</span>
                    <p class="text-xs text-secondary mb-0 mt-1">Police called</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 15, 2023</span>
                    <p class="text-xs text-secondary mb-0">14:25 PM</p>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-file-pdf"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-warning shadow-warning text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">no_entry</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Unauthorized Entry Attempt</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1124 | Attempted breach at back gate</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">BGC Corporate Center</p>
                    <p class="text-xs text-secondary mb-0">Tower 3, Loading Dock</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-2.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard2">
                      <span class="text-xs font-weight-bold">Maria Santos</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Medium</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Investigating</span>
                    <p class="text-xs text-secondary mb-0 mt-1">CCTV review ongoing</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 14, 2023</span>
                    <p class="text-xs text-secondary mb-0">22:10 PM</p>
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
                      <div class="icon icon-sm icon-shape bg-gradient-info shadow-info text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">medical_services</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Medical Emergency</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1125 | Visitor collapsed near food court</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Makati Medical Center</p>
                    <p class="text-xs text-secondary mb-0">Emergency Room Lobby</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-3.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard3">
                      <span class="text-xs font-weight-bold">Roberto Garcia</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">High</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Resolved</span>
                    <p class="text-xs text-secondary mb-0 mt-1">Patient stabilized</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 13, 2023</span>
                    <p class="text-xs text-secondary mb-0">10:45 AM</p>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-file-pdf"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-dark shadow-dark text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">lock</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Lost Property</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1126 | Wallet found at security checkpoint</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Ayala Avenue Banks</p>
                    <p class="text-xs text-secondary mb-0">Main Lobby, Makati</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-4.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard4">
                      <span class="text-xs font-weight-bold">Lorna Fernandez</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">Low</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">Awaiting Claim</span>
                    <p class="text-xs text-secondary mb-0 mt-1">In security vault</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 12, 2023</span>
                    <p class="text-xs text-secondary mb-0">15:30 PM</p>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-primary mb-0 ms-1">
                      <i class="fa fa-handshake"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-danger shadow-danger text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">local_fire_department</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Fire Alarm Activation</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1127 | False alarm in kitchen area</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">NAIA Terminal 3</p>
                    <p class="text-xs text-secondary mb-0">Food Court Area, Pasay</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-1.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard5">
                      <span class="text-xs font-weight-bold">Antonio Reyes</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Medium</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Resolved</span>
                    <p class="text-xs text-secondary mb-0 mt-1">System reset</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 11, 2023</span>
                    <p class="text-xs text-secondary mb-0">19:15 PM</p>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-file-pdf"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-warning shadow-warning text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">car_crash</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Vehicle Accident</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1128 | Minor collision in parking lot</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">UP Diliman Campus</p>
                    <p class="text-xs text-secondary mb-0">Gate 2 Parking Area</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-2.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard6">
                      <span class="text-xs font-weight-bold">Cristina Lim</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Medium</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">Escalated</span>
                    <p class="text-xs text-secondary mb-0 mt-1">Police report filed</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 10, 2023</span>
                    <p class="text-xs text-secondary mb-0">08:45 AM</p>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-danger mb-0 ms-1">
                      <i class="fa fa-gavel"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-info shadow-info text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">support_agent</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Customer Dispute</h6>
                        <p class="text-xs text-secondary mb-0">IR-2023-1129 | Argument at ticket counter</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Port of Manila</p>
                    <p class="text-xs text-secondary mb-0">Passenger Terminal</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <img src="/assets/img/team-3.jpg" class="avatar avatar-xs rounded-circle mb-1" alt="guard7">
                      <span class="text-xs font-weight-bold">Eduardo Tan</span>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">Low</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Resolved</span>
                    <p class="text-xs text-secondary mb-0 mt-1">Mediated by security</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-sm font-weight-bold">Nov 09, 2023</span>
                    <p class="text-xs text-secondary mb-0">11:20 AM</p>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-file-pdf"></i>
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

  <!-- Incident Analysis Section -->
  <div class="row">
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <h6>Incident Trends & Analysis</h6>
          <p class="text-sm mb-0">
            <i class="fa fa-chart-bar text-info" aria-hidden="true"></i>
            <span class="font-weight-bold ms-1">Monthly incident breakdown</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="incident-chart" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Incident Summary</h6>
          <p class="text-sm">
            <i class="fa fa-list text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">Current month overview</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-danger text-gradient">gavel</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Security Breaches</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">5 incidents this month</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-warning text-gradient">medical_services</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Medical Emergencies</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">3 incidents this month</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-primary text-gradient">car_crash</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Vehicle Incidents</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">8 incidents this month</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-info text-gradient">support_agent</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Customer Disputes</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">15 incidents this month</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-success text-gradient">lock</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Lost Property</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">11 incidents this month</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-dark text-gradient">local_fire_department</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Fire Alarms</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">2 incidents this month</p>
              </div>
            </div>
          </div>
          <hr class="dark horizontal my-3">
          <div class="d-flex justify-content-between">
            <div>
              <h6 class="mb-0 text-sm">Response Time</h6>
              <p class="text-xs text-secondary">Average: 3.2 minutes</p>
            </div>
            <div>
              <h6 class="mb-0 text-sm">Resolution Rate</h6>
              <p class="text-xs text-success">76%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="/assets/js/core/popper.min.js"></script>
<script src="/assets/js/core/bootstrap.min.js"></script>
<script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="/assets/js/plugins/chartjs.min.js"></script>
<script>
  // Incident Trends Chart
  var ctx = document.getElementById("incident-chart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
      datasets: [{
        label: "Security Breaches",
        backgroundColor: "#e91e63",
        data: [3, 4, 2, 5, 3, 4, 3, 2, 4, 3, 5],
        barThickness: 10
      }, {
        label: "Medical Emergencies",
        backgroundColor: "#fd7e14",
        data: [2, 1, 3, 2, 1, 2, 3, 2, 1, 2, 3],
        barThickness: 10
      }, {
        label: "Vehicle Incidents",
        backgroundColor: "#17c1e8",
        data: [5, 6, 7, 8, 6, 5, 7, 8, 6, 7, 8],
        barThickness: 10
      }, {
        label: "Customer Disputes",
        backgroundColor: "#82d616",
        data: [12, 14, 13, 15, 14, 13, 12, 14, 13, 14, 15],
        barThickness: 10
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'top',
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: '#e5e5e5'
          },
          ticks: {
            color: "#737373",
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2
            }
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false,
          },
          ticks: {
            color: '#737373',
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>