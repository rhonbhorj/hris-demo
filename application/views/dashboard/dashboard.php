<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">Security Dashboard</h3>
      <p class="mb-4">
        Monitor security operations, attendance, and personnel status.
      </p>
    </div>
    <!-- Summary Cards -->
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Total Guards</p>
              <h4 class="mb-0">32</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-info shadow-info shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">security</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+4 </span>this month</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">On Duty Now</p>
              <h4 class="mb-0">14</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-success shadow-success shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">verified_user</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">100% </span>posts covered</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Late Today</p>
              <h4 class="mb-0">3</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-warning shadow-warning shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">schedule</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-danger font-weight-bolder">9.4% </span>of total</p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6">
      <div class="card">
        <div class="card-header p-2 ps-3">
          <div class="d-flex justify-content-between">
            <div>
              <p class="text-sm mb-0 text-capitalize">Monthly Expenses</p>
              <h4 class="mb-0">₱608,500</h4>
            </div>
            <div class="icon icon-md icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-lg">
              <i class="material-symbols-rounded opacity-10">payments</i>
            </div>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-2 ps-3">
          <p class="mb-0 text-sm"><span class="text-success font-weight-bolder">+5% </span>than last month</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Charts Section -->
  <div class="row mt-4">
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-0">Attendance Rate</h6>
          <p class="text-sm">Monthly Performance</p>
          <div class="pe-2">
            <div class="chart">
              <canvas id="chart-attendance" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-symbols-rounded text-sm my-auto me-1">trending_up</i>
            <p class="mb-0 text-sm"> 87.5% average attendance this month </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mt-4 mb-4">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-0">Shift Coverage</h6>
          <p class="text-sm"> Current shift distribution </p>
          <div class="pe-2">
            <div class="chart">
              <canvas id="chart-shifts" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-symbols-rounded text-sm my-auto me-1">groups</i>
            <p class="mb-0 text-sm"> All shifts adequately staffed </p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 mt-4 mb-3">
      <div class="card">
        <div class="card-body">
          <h6 class="mb-0">Incident Reports</h6>
          <p class="text-sm"> Monthly incident tracking </p>
          <div class="pe-2">
            <div class="chart">
              <canvas id="chart-incidents" class="chart-canvas" height="170"></canvas>
            </div>
          </div>
          <hr class="dark horizontal">
          <div class="d-flex">
            <i class="material-symbols-rounded text-sm my-auto me-1">trending_down</i>
            <p class="mb-0 text-sm"> 20% decrease from last month </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Main Content Section -->
  <div class="row mb-4">
    <!-- Active Assignments Table -->
    <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Current Assignments</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-location-dot text-info" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">14 active posts</span> covered
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Reassign Guard</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Print Schedule</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Emergency Protocol</a></li>
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
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Post Location</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Guard Assigned</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shift</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-info shadow-info text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">store</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">SM Mall of Asia</h6>
                        <p class="text-xs text-secondary mb-0">Main Entrance</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="/assets/img/team-1.jpg" class="avatar avatar-xs rounded-circle me-2" alt="guard1">
                      <div>
                        <h6 class="mb-0 text-sm">Juan Dela Cruz</h6>
                        <p class="text-xs text-secondary mb-0">SG-2020-001</p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">Day Shift</span>
                    <p class="text-xs text-secondary mb-0">6AM-2PM</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Active</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-dark shadow-dark text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">apartment</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">BGC Corporate Center</h6>
                        <p class="text-xs text-secondary mb-0">Tower 3 Lobby</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="/assets/img/team-2.jpg" class="avatar avatar-xs rounded-circle me-2" alt="guard2">
                      <div>
                        <h6 class="mb-0 text-sm">Maria Santos</h6>
                        <p class="text-xs text-secondary mb-0">SG-2019-045</p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-dark">Night Shift</span>
                    <p class="text-xs text-secondary mb-0">10PM-6AM</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Active</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-danger shadow-danger text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">local_hospital</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Makati Medical Center</h6>
                        <p class="text-xs text-secondary mb-0">Emergency Room</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="/assets/img/team-3.jpg" class="avatar avatar-xs rounded-circle me-2" alt="guard3">
                      <div>
                        <h6 class="mb-0 text-sm">Roberto Garcia</h6>
                        <p class="text-xs text-secondary mb-0">SG-2021-087</p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-warning">Swing Shift</span>
                    <p class="text-xs text-secondary mb-0">2PM-10PM</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Absent</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-success shadow-success text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">account_balance</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Ayala Avenue Banks</h6>
                        <p class="text-xs text-secondary mb-0">Main Building</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="/assets/img/team-4.jpg" class="avatar avatar-xs rounded-circle me-2" alt="guard4">
                      <div>
                        <h6 class="mb-0 text-sm">Lorna Fernandez</h6>
                        <p class="text-xs text-secondary mb-0">SG-2018-123</p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">Day Shift</span>
                    <p class="text-xs text-secondary mb-0">7AM-3PM</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Active</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="icon icon-sm icon-shape bg-gradient-warning shadow-warning text-center border-radius-lg me-3">
                        <i class="material-symbols-rounded text-white opacity-10">flight</i>
                      </div>
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">NAIA Terminal 3</h6>
                        <p class="text-xs text-secondary mb-0">Departure Area</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <img src="/assets/img/team-1.jpg" class="avatar avatar-xs rounded-circle me-2" alt="guard5">
                      <div>
                        <h6 class="mb-0 text-sm">Antonio Reyes</h6>
                        <p class="text-xs text-secondary mb-0">SG-2022-156</p>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-dark">Night Shift</span>
                    <p class="text-xs text-secondary mb-0">11PM-7AM</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-info">On Leave</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Recent Activities -->
    <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Recent Activities</h6>
          <p class="text-sm">
            <i class="fa fa-clock text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">Last 24 hours</span>
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-success text-gradient">login</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Juan Dela Cruz - Time In</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">5:55 AM | SM Mall of Asia</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-warning text-gradient">warning</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Maria Santos - Late Arrival</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">10:25 PM | 25 mins late</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-danger text-gradient">cancel</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Roberto Garcia - Absent</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">No show | Makati Med</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-info text-gradient">assignment</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Incident Report Filed</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">BGC Tower 3 | Minor altercation</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-primary text-gradient">swap_horiz</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Shift Change Completed</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">All day shift guards relieved</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-symbols-rounded text-dark text-gradient">add_box</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New Guard Registered</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">SG-2023-300 | Mario Santos</p>
              </div>
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
  // Attendance Chart
  var ctx1 = document.getElementById("chart-attendance").getContext("2d");
  new Chart(ctx1, {
    type: "line",
    data: {
      labels: ["Week 1", "Week 2", "Week 3", "Week 4"],
      datasets: [{
        label: "Attendance Rate",
        tension: 0,
        borderWidth: 2,
        pointRadius: 4,
        pointBackgroundColor: "#17c1e8",
        pointBorderColor: "transparent",
        borderColor: "#17c1e8",
        backgroundColor: "transparent",
        fill: true,
        data: [85, 88, 87, 90],
        maxBarThickness: 6
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      scales: {
        y: {
          min: 70,
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
              size: 14,
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
              size: 14,
              lineHeight: 2
            },
          }
        },
      },
    },
  });

  // Shift Coverage Chart
  var ctx2 = document.getElementById("chart-shifts").getContext("2d");
  new Chart(ctx2, {
    type: "doughnut",
    data: {
      labels: ["Day Shift", "Night Shift", "Swing Shift"],
      datasets: [{
        label: "Guards",
        backgroundColor: ["#17c1e8", "#344767", "#fd7e14"],
        data: [14, 10, 8],
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: true,
          position: 'bottom',
        }
      },
      cutout: '70%',
    },
  });

  // Incidents Chart
  var ctx3 = document.getElementById("chart-incidents").getContext("2d");
  new Chart(ctx3, {
    type: "bar",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov"],
      datasets: [{
        label: "Incidents",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "#e91e63",
        data: [15, 12, 10, 8, 9, 7, 6, 5, 4, 3, 2],
        barThickness: 'flex'
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
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
              size: 14,
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
              size: 14,
              lineHeight: 2
            },
          }
        },
      },
    },
  });
</script>