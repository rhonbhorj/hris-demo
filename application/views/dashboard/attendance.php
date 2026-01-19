<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">Security Personnel Attendance</h3>
      <p class="mb-4">
        Track daily attendance, late arrivals, and absences.
      </p>
    </div>
  </div>

  <!-- Attendance Summary Cards -->
  <div class="row mb-4">
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Present Today</p>
              <h4 class="mb-0">28/32</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-success shadow-success shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">check_circle</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+2 </span>than yesterday</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Late Arrivals</p>
              <h4 class="mb-0">3</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">schedule</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">-1 </span>than yesterday</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Absent</p>
              <h4 class="mb-0">4</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-danger shadow-danger shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">cancel</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">+2 </span>than yesterday</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">On Leave</p>
              <h4 class="mb-0">2</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-info shadow-info shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">beach_access</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">0 </span>change</p>
        </div>
      </div>
    </div>
  </div>

  <!-- New Charts Section Added Here -->
  <div class="row mb-4">
    <div class="col-lg-6 col-md-6 mt-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-0">Attendance Distribution Today</h6>
          <p class="text-sm">Current day status breakdown</p>
          <div class="pe-2">
            <div class="chart">
              <canvas id="attendance-donut-chart" class="chart-canvas" height="250"></canvas>
            </div>
          </div>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-symbols-rounded text-sm my-auto me-1">pie_chart</i>
            <p class="mb-0 text-sm"> Total: 32 security personnel </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mt-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-0">Weekly Attendance Trend</h6>
          <p class="text-sm">Present vs Absent (Nov 9-15)</p>
          <div class="pe-2">
            <div class="chart">
              <canvas id="attendance-weekly-chart" class="chart-canvas" height="250"></canvas>
            </div>
          </div>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-symbols-rounded text-sm my-auto me-1">trending_up</i>
            <p class="mb-0 text-sm"> Daily attendance rate tracking </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Attendance Table -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Today's Attendance - November 15, 2023</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-calendar-check text-info" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">Daily log</span> for all security personnel
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <button class="btn btn-sm btn-outline-info mb-0">
                  <i class="fa fa-print me-1"></i> Print Report
                </button>
                <a class="cursor-pointer ms-2" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Mark Attendance</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Export to Excel</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">View Monthly Report</a></li>
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Shift Schedule</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time In</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time Out</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Remarks</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hours Rendered</th>
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
                        <p class="text-xs text-secondary mb-0">SG-2020-001 | Day Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">6:00 AM - 2:00 PM</p>
                    <p class="text-xs text-secondary mb-0">SM Mall of Asia</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-success">5:55 AM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">2:05 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Present</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-success">Early</span>
                    <p class="text-xs text-secondary mb-0">No issues</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">8h 10m</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2019-045 | Night Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">10:00 PM - 6:00 AM</p>
                    <p class="text-xs text-secondary mb-0">BGC Corporate Center</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">10:25 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">6:00 AM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Late</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-danger">25 mins late</span>
                    <p class="text-xs text-secondary mb-0">Traffic</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">7h 35m</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2021-087 | Swing Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">2:00 PM - 10:00 PM</p>
                    <p class="text-xs text-secondary mb-0">Makati Medical Center</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-warning">-</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">-</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Absent</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-danger">No show</span>
                    <p class="text-xs text-secondary mb-0">No call</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">0h 0m</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2018-123 | Day Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">7:00 AM - 3:00 PM</p>
                    <p class="text-xs text-secondary mb-0">Ayala Avenue Banks</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-success">6:50 AM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">3:10 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Present</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-success">Early</span>
                    <p class="text-xs text-secondary mb-0">Overtime 10 mins</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">8h 20m</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2022-156 | Night Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">11:00 PM - 7:00 AM</p>
                    <p class="text-xs text-secondary mb-0">NAIA Terminal 3</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-warning">-</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">-</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">On Leave</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-info">Sick Leave</span>
                    <p class="text-xs text-secondary mb-0">Medical certificate submitted</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">0h 0m</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2020-189 | Swing Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">3:00 PM - 11:00 PM</p>
                    <p class="text-xs text-secondary mb-0">UP Diliman Campus</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">3:15 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">11:00 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Late</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-danger">15 mins late</span>
                    <p class="text-xs text-secondary mb-0">Transportation issue</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">7h 45m</span>
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
                        <p class="text-xs text-secondary mb-0">SG-2017-234 | Day Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">8:00 AM - 4:00 PM</p>
                    <p class="text-xs text-secondary mb-0">Port of Manila</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-success">7:45 AM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">4:05 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Present</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-success">Early</span>
                    <p class="text-xs text-secondary mb-0">Regular duty</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">8h 20m</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div>
                        <img src="/assets/img/team-4.jpg" class="avatar avatar-sm me-3" alt="guard8">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Susana Mercado</h6>
                        <p class="text-xs text-secondary mb-0">SG-2023-267 | Night Shift</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0">9:00 PM - 5:00 AM</p>
                    <p class="text-xs text-secondary mb-0">QC Government Center</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold text-danger">9:10 PM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold">5:00 AM</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Late</span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold text-danger">10 mins late</span>
                    <p class="text-xs text-secondary mb-0">Family emergency</p>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-xs font-weight-bold">7h 50m</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Attendance Statistics -->
  <div class="row">
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <h6>Monthly Attendance Summary - November 2023</h6>
          <p class="text-sm mb-0">
            <i class="fa fa-chart-bar text-info" aria-hidden="true"></i>
            <span class="font-weight-bold ms-1">Attendance trends</span> for the current month
          </p>
        </div>
        <div class="card-body p-3">
          <div class="chart">
            <canvas id="attendance-chart" class="chart-canvas" height="300"></canvas>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Attendance Status Overview</h6>
          <p class="text-sm">
            <i class="fa fa-info-circle text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">Today's breakdown</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-success text-gradient">check_circle</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Present - 28 guards</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">87.5% attendance rate</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-warning text-gradient">schedule</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Late - 3 guards</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Average 16 minutes late</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-danger text-gradient">cancel</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Absent - 4 guards</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">2 with notice, 2 without</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-info text-gradient">beach_access</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">On Leave - 2 guards</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">1 sick leave, 1 vacation</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-primary text-gradient">timer</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Average Hours: 7h 48m</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">Across all present guards</p>
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
  var ctxDonut = document.getElementById("attendance-donut-chart").getContext("2d");
  new Chart(ctxDonut, {
    type: "doughnut",
    data: {
      labels: ["Present", "Late", "Absent", "On Leave"],
      datasets: [{
        label: "Guards",
        backgroundColor: ["#17c1e8", "#fd7e14", "#e91e63", "#344767"],
        data: [28, 3, 4, 2],
        borderWidth: 2,
        borderColor: "#ffffff"
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
          labels: {
            padding: 20,
            usePointStyle: true,
          }
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              let label = context.label || '';
              let value = context.parsed || 0;
              let total = context.dataset.data.reduce((a, b) => a + b, 0);
              let percentage = Math.round((value / total) * 100);
              return `${label}: ${value} (${percentage}%)`;
            }
          }
        }
      },
      cutout: '70%',
    },
  });

  // Weekly Attendance Trend Chart
  var ctxWeekly = document.getElementById("attendance-weekly-chart").getContext("2d");
  new Chart(ctxWeekly, {
    type: "line",
    data: {
      labels: ["Nov 9", "Nov 10", "Nov 11", "Nov 12", "Nov 13", "Nov 14", "Nov 15"],
      datasets: [{
        label: "Present",
        tension: 0.3,
        borderWidth: 3,
        pointRadius: 5,
        pointBackgroundColor: "#17c1e8",
        pointBorderColor: "#ffffff",
        borderColor: "#17c1e8",
        backgroundColor: "transparent",
        data: [26, 27, 28, 26, 27, 26, 28],
        fill: false
      }, {
        label: "Absent",
        tension: 0.3,
        borderWidth: 2,
        pointRadius: 4,
        pointBackgroundColor: "#e91e63",
        pointBorderColor: "#ffffff",
        borderColor: "#e91e63",
        backgroundColor: "transparent",
        data: [4, 3, 2, 4, 3, 4, 4],
        fill: false
      }, {
        label: "Late",
        tension: 0.3,
        borderWidth: 2,
        pointRadius: 4,
        pointBackgroundColor: "#fd7e14",
        pointBorderColor: "#ffffff",
        borderColor: "#fd7e14",
        backgroundColor: "transparent",
        data: [2, 2, 2, 2, 2, 4, 3],
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
          beginAtZero: true,
          max: 32,
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

  // Monthly Attendance Summary Chart
  var ctx = document.getElementById("attendance-chart").getContext("2d");
  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
      datasets: [{
        label: "Attendance Rate %",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 8,
        borderSkipped: false,
        backgroundColor: "#17c1e8",
        data: [85, 88, 87, 90],
        barThickness: 30
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        },
        tooltip: {
          callbacks: {
            label: function(context) {
              return `Attendance: ${context.parsed.y}%`;
            }
          }
        }
      },
      scales: {
        y: {
          beginAtZero: true,
          max: 100,
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: '#e5e5e5'
          },
          ticks: {
            callback: function(value) {
              return value + '%';
            },
            color: "#737373",
            padding: 10,
            font: {
              size: 12,
              lineHeight: 2
            },
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