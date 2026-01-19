<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">Performance Evaluation</h3>
      <p class="mb-4">
        Assess security personnel performance and track improvement areas.
      </p>
    </div>
  </div>

  <!-- Evaluation Summary Cards -->
  <div class="row mb-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Due for Evaluation</p>
              <h4 class="mb-0">12</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">pending_actions</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm">Monthly performance review</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Average Rating</p>
              <h4 class="mb-0">4.2</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-info shadow-info shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">star</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+0.3 </span>from last quarter</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Outstanding</p>
              <h4 class="mb-0">8</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-success shadow-success shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">military_tech</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm">>4.5 rating this month</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Needs Improvement</p>
              <h4 class="mb-0">3</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-danger shadow-danger shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">warning</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><3.0 rating requires action</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Evaluation Actions -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-primary btn-lg w-100">
                <i class="material-symbols-rounded me-2">add_circle</i>
                New Evaluation
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-info btn-lg w-100">
                <i class="material-symbols-rounded me-2">assessment</i>
                Generate Reports
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-success btn-lg w-100">
                <i class="material-symbols-rounded me-2">download</i>
                Export Results
              </button>
            </div>
            <div class="col-lg-3 col-md-6 mb-3">
              <button class="btn btn-outline-dark btn-lg w-100">
                <i class="material-symbols-rounded me-2">calendar_month</i>
                Schedule All
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Evaluation Table -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Performance Evaluations - Q4 2023</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">Last 30 days</span> evaluations
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <button class="btn btn-sm btn-success mb-0">
                  <i class="fa fa-check-circle me-1"></i> Submit All
                </button>
                <a class="cursor-pointer ms-2" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Bulk Update</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Set Reminders</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">View History</a></li>
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Security Guard</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Last Evaluation</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Professionalism</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alertness</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Attendance</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Overall Rating</th>
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
                        <p class="text-xs text-secondary mb-0">SG-2020-001 | SM Mall of Asia</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Nov 15, 2023</p>
                    <p class="text-xs text-secondary mb-0">By: Supervisor A. Santos</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <span class="text-xs font-weight-bold ms-1">5.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star-half-alt text-warning"></i>
                      <span class="text-xs font-weight-bold ms-1">4.5</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">4.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-success">4.5</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Outstanding</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Completed</span>
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
                        <img src="/assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="guard2">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Maria Santos</h6>
                        <p class="text-xs text-secondary mb-0">SG-2019-045 | BGC Corporate Center</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Nov 14, 2023</p>
                    <p class="text-xs text-secondary mb-0">By: Supervisor R. Cruz</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">4.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <span class="text-xs font-weight-bold ms-1">5.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star-half-alt text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">3.5</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-info">4.2</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Very Good</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Completed</span>
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
                        <img src="/assets/img/team-3.jpg" class="avatar avatar-sm me-3" alt="guard3">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Roberto Garcia</h6>
                        <p class="text-xs text-secondary mb-0">SG-2021-087 | Makati Medical Center</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Nov 10, 2023</p>
                    <p class="text-xs text-secondary mb-0">By: Supervisor L. Fernandez</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">3.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star-half-alt text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">2.5</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">2.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-danger">2.5</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Needs Improvement</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">In Progress</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-danger mb-0 ms-1">
                      <i class="fa fa-comment"></i>
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
                        <p class="text-xs text-secondary mb-0">SG-2018-123 | Ayala Avenue Banks</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Nov 12, 2023</p>
                    <p class="text-xs text-secondary mb-0">By: Manager E. Tan</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <span class="text-xs font-weight-bold ms-1">5.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <span class="text-xs font-weight-bold ms-1">5.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star-half-alt text-warning"></i>
                      <span class="text-xs font-weight-bold ms-1">4.5</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-success">4.8</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Outstanding</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Completed</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-success mb-0 ms-1">
                      <i class="fa fa-award"></i>
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
                        <p class="text-xs text-secondary mb-0">SG-2022-156 | NAIA Terminal 3</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Nov 08, 2023</p>
                    <p class="text-xs text-secondary mb-0">By: Supervisor M. Johnson</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star-half-alt text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">3.5</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">4.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">4.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-info">3.8</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Good</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Completed</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2020-189 | UP Diliman Campus</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Due: Nov 20, 2023</p>
                    <p class="text-xs text-secondary mb-0">Pending evaluation</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs text-secondary">-</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs text-secondary">-</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs text-secondary">-</span>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-secondary">-</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Not Rated</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Pending</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-primary mb-0">
                      <i class="fa fa-play-circle"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-dark mb-0 ms-1">
                      <i class="fa fa-calendar"></i>
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
                        <p class="text-xs text-secondary mb-0">SG-2017-234 | Port of Manila</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">Nov 05, 2023</p>
                    <p class="text-xs text-secondary mb-0">By: Supervisor A. Santos</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">3.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star-half-alt text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">2.5</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="rating-stars">
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-warning"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <i class="fa fa-star text-secondary"></i>
                      <span class="text-xs font-weight-bold ms-1">2.0</span>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="d-flex flex-column align-items-center">
                      <span class="badge badge-lg bg-gradient-danger">2.5</span>
                      <p class="text-xs text-secondary mb-0 mt-1">Needs Improvement</p>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-danger">Action Required</span>
                  </td>
                  <td class="align-middle text-center">
                    <button class="btn btn-xs btn-outline-info mb-0">
                      <i class="fa fa-eye"></i>
                    </button>
                    <button class="btn btn-xs btn-outline-danger mb-0 ms-1">
                      <i class="fa fa-exclamation-triangle"></i>
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

  <!-- Performance Analysis Section -->
  <div class="row">
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <h6>Performance Trends</h6>
          <p class="text-sm mb-0">
            <i class="fa fa-chart-line text-info" aria-hidden="true"></i>
            <span class="font-weight-bold ms-1">Quarterly rating progression</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="performance-chart" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Evaluation Categories</h6>
          <p class="text-sm">
            <i class="fa fa-list-alt text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">Assessment criteria</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-primary text-gradient">security</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Professionalism</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Uniform, conduct, customer service</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-warning text-gradient">visibility</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Alertness</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Situational awareness, response time</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-success text-gradient">schedule</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Attendance</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Punctuality, reliability, leaves</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-info text-gradient">book</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Knowledge</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Procedures, emergency protocols</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-danger text-gradient">report</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Reporting</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Incident reports, documentation</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-dark text-gradient">teamwork</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Teamwork</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Cooperation, communication</p>
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
  // Performance Trends Chart
  var ctx = document.getElementById("performance-chart").getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Q1", "Q2", "Q3", "Q4"],
      datasets: [{
        label: "Overall Average",
        tension: 0.3,
        borderWidth: 3,
        pointRadius: 5,
        pointBackgroundColor: "#17c1e8",
        pointBorderColor: "#ffffff",
        borderColor: "#17c1e8",
        backgroundColor: "transparent",
        data: [3.8, 4.0, 4.1, 4.2],
        fill: false
      }, {
        label: "Professionalism",
        tension: 0.3,
        borderWidth: 2,
        pointRadius: 4,
        pointBackgroundColor: "#e91e63",
        pointBorderColor: "#ffffff",
        borderColor: "#e91e63",
        backgroundColor: "transparent",
        data: [4.0, 4.1, 4.2, 4.3],
        fill: false
      }, {
        label: "Alertness",
        tension: 0.3,
        borderWidth: 2,
        pointRadius: 4,
        pointBackgroundColor: "#fd7e14",
        pointBorderColor: "#ffffff",
        borderColor: "#fd7e14",
        backgroundColor: "transparent",
        data: [3.9, 4.0, 4.0, 4.2],
        fill: false
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
          min: 3.0,
          max: 5.0,
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
            },
            callback: function(value) {
              return value.toFixed(1);
            }
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: '#e5e5e5'
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

  // Add CSS for rating stars
  const style = document.createElement('style');
  style.textContent = `
    .rating-stars {
      display: inline-flex;
      align-items: center;
    }
    .rating-stars .fa-star,
    .rating-stars .fa-star-half-alt {
      font-size: 0.8rem;
      margin: 0 1px;
    }
  `;
  document.head.appendChild(style);
</script>