<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">Performance Evaluation</h3>
      <p class="mb-4">
        Assess security personnel performance and track improvement areas.
      </p>
    </div>
  </div>

  <!-- NEW PROBATIONARY EVALUATION TABLE -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row align-items-center">
            <div class="col-lg-6 col-7">
              <h6>EVALUATION FOR PROBATIONARY</h6>
          
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <!-- Status Tabs -->
              <div class="d-flex justify-content-end align-items-center flex-wrap">
                <div class="status-tabs me-3">
                  <button class="status-tab btn btn-sm mb-1 active" data-status="all">
                    All Departments
                    <span class="tab-badge">12</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="pending">
                    PENDING
                    <span class="tab-badge">5</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="management">
                    FOR APPROVAL
                    <span class="tab-badge">4</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="accomplished">
                    ACCOMPLISHED
                    <span class="tab-badge">3</span>
                  </button>
                </div>
                <button class="btn btn-sm btn-success mb-0" id="btnExportReport">
                  <i class="fas fa-file-export me-1"></i> Export Report
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <!-- Table Filters -->
          <div class="row mx-3 mb-3">
            <div class="col-md-8">
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-search"></i>
                </span>
                <input type="text" class="form-control" id="tableSearch" placeholder="Search employees, objectives...">
              </div>
            </div>
            <div class="col-md-4">
              <select class="form-select" id="periodFilter">
                <option value="">All Periods</option>
                <option value="Q1 2024">Q1 2024</option>
                <option value="Q2 2024">Q2 2024</option>
                <option value="Q3 2024">Q3 2024</option>
                <option value="Q4 2024">Q4 2024</option>
              </select>
            </div>
          </div>

          <!-- Evaluation Table -->
          <div class="table-responsive">
            <table class="table align-items-center mb-0" id="probationaryTable">
              <thead>
                <tr class="bg-gray-100">
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">
                    <strong>NAME OF EMPLOYEE</strong>
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" rowspan="2">
                    <strong>DATE HIRED</strong>
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" rowspan="2">
                    <strong>TENURESHIP</strong>
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" colspan="2">
                    <strong>PERIOD OF EVALUATION</strong>
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" rowspan="2">
                    <strong>OBJECTIVE</strong>
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">
                    <strong>STATUS</strong>
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" rowspan="2">
                    <strong>ACTION</strong>
                  </th>
                </tr>
                <tr class="bg-gray-100">
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>FROM</strong>
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>TO</strong>
                  </th>
                </tr>
              </thead>
              <tbody id="evaluationTableBody">
                <!-- Data will be populated by JavaScript -->
              </tbody>
            </table>
          </div>

          <!-- Pagination -->
          <div class="row mx-3 mt-3">
            <div class="col-md-6">
              <div class="pagination-info text-sm text-secondary">
                SHOWING <span id="startRow">0</span> TO <span id="endRow">0</span> OF <span
                  id="totalRows">0</span> ENTRIES
              </div>
            </div>
            <div class="col-md-6 text-end">
              <div class="pagination-controls">
                <button class="btn btn-sm btn-outline-secondary" id="prevPage">
                  <i class="fas fa-chevron-left"></i> Previous
                </button>
                <button class="btn btn-sm btn-outline-secondary ms-2" id="nextPage">
                  Next <i class="fas fa-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

<script src="/assets/js/plugins/chartjs.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Sample evaluation data for probationary employees
  let evaluations = [
    {
      id: 1,
      name: "John Smith",
      dateHired: "2023-01-15",
      tenureship: "6 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Initial Probation Review",
      status: "pending",
      department: "IT",
      period: "Q2 2023"
    },
    {
      id: 2,
      name: "Sarah Johnson",
      dateHired: "2023-03-10",
      tenureship: "4 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Mid-probation Assessment",
      status: "management",
      department: "HR",
      period: "Q2 2023"
    },
    {
      id: 3,
      name: "Michael Chen",
      dateHired: "2023-02-22",
      tenureship: "5 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Final Probation Review",
      status: "accomplished",
      department: "Sales",
      period: "Q2 2023"
    },
    {
      id: 4,
      name: "Emma Wilson",
      dateHired: "2023-04-28",
      tenureship: "3 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Initial Assessment",
      status: "pending",
      department: "Marketing",
      period: "Q2 2023"
    },
    {
      id: 5,
      name: "Robert Brown",
      dateHired: "2023-01-14",
      tenureship: "6 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Probation Completion",
      status: "management",
      department: "Finance",
      period: "Q2 2023"
    },
    {
      id: 6,
      name: "Lisa Anderson",
      dateHired: "2023-03-30",
      tenureship: "4 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Performance Review",
      status: "accomplished",
      department: "IT",
      period: "Q3 2023"
    },
    {
      id: 7,
      name: "David Miller",
      dateHired: "2023-02-05",
      tenureship: "5 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Skills Assessment",
      status: "pending",
      department: "Operations",
      period: "Q3 2023"
    },
    {
      id: 8,
      name: "Jennifer Lee",
      dateHired: "2023-04-18",
      tenureship: "3 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Initial Evaluation",
      status: "management",
      department: "Customer Service",
      period: "Q3 2023"
    },
    {
      id: 9,
      name: "Thomas Garcia",
      dateHired: "2023-01-01",
      tenureship: "6 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Final Assessment",
      status: "accomplished",
      department: "IT",
      period: "Q3 2023"
    },
    {
      id: 10,
      name: "Amanda Taylor",
      dateHired: "2023-03-15",
      tenureship: "4 months",
      periodFrom: "2023-06-01",
      periodTo: "2023-06-30",
      objective: "Mid-term Review",
      status: "pending",
      department: "HR",
      period: "Q4 2023"
    }
  ];

  // Pagination variables
  let currentPage = 1;
  const rowsPerPage = 5;
  let currentFilteredEvaluations = [...evaluations];
  let currentStatusFilter = 'all';

  $(document).ready(function () {
    // Initialize table
    updateTabCounts();
    renderTable();

    // Status Tab switching
    $(".status-tab").click(function () {
      $(".status-tab").removeClass("active");
      $(this).addClass("active");

      currentStatusFilter = $(this).data("status");
      currentPage = 1;
      filterEvaluations();
    });

    // Search functionality
    $("#tableSearch").on("input", function () {
      filterEvaluations();
    });

    // Period filter
    $("#periodFilter").change(function () {
      filterEvaluations();
    });

    // Pagination
    $("#prevPage").click(function () {
      if (currentPage > 1) {
        currentPage--;
        renderTable();
      }
    });

    $("#nextPage").click(function () {
      const totalPages = Math.ceil(currentFilteredEvaluations.length / rowsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        renderTable();
      }
    });

    // Export buttons
    $("#btnExportReport").click(function () {
      exportToCSV();
    });

    $("#btnExportResults").click(function () {
      exportToCSV();
    });

    // Other action buttons
    $("#btnNewEvaluation").click(function () {
      alert("New Evaluation functionality would open a form here.");
    });

    $("#btnGenerateReports").click(function () {
      alert("Generate Reports functionality would be implemented here.");
    });

    $("#btnScheduleAll").click(function () {
      alert("Schedule All functionality would be implemented here.");
    });

    // Initialize chart
    initializePerformanceChart();
  });

  function renderTable() {
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const pageEvaluations = currentFilteredEvaluations.slice(startIndex, endIndex);

    $("#evaluationTableBody").empty();

    if (pageEvaluations.length === 0) {
      const row = `
        <tr>
          <td colspan="8" class="text-center py-4">
            <div class="text-muted">NO DATA AVAILABLE IN TABLE</div>
          </td>
        </tr>
      `;
      $("#evaluationTableBody").append(row);
    } else {
      pageEvaluations.forEach((evalItem) => {
        const statusText = getStatusText(evalItem.status);
        const statusClass = getStatusClass(evalItem.status);

        const row = `
          <tr>
            <td>
              <div class="d-flex px-2 py-1">
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="mb-0 text-sm">${evalItem.name}</h6>
                  <p class="text-xs text-secondary mb-0">ID: EMP${String(evalItem.id).padStart(3, "0")}</p>
                </div>
              </div>
            </td>
            <td>
              <p class="text-sm font-weight-bold mb-0">${formatDate(evalItem.dateHired)}</p>
            </td>
            <td>
              <p class="text-sm font-weight-bold mb-0">${evalItem.tenureship}</p>
            </td>
            <td class="text-center">
              <p class="text-sm mb-0">${formatDate(evalItem.periodFrom)}</p>
            </td>
            <td class="text-center">
              <p class="text-sm mb-0">${formatDate(evalItem.periodTo)}</p>
            </td>
            <td>
              <p class="text-sm mb-0">${evalItem.objective}</p>
            </td>
            <td class="text-center">
              <span class="badge ${statusClass}">${statusText}</span>
            </td>
            <td class="text-center">
              <button class="btn btn-xs btn-outline-info mb-0" onclick="viewEvaluation(${evalItem.id})" title="View">
                <i class="fas fa-eye"></i>
              </button>
              <button class="btn btn-xs btn-outline-warning mb-0 ms-1" onclick="editEvaluation(${evalItem.id})" title="Edit">
                <i class="fas fa-edit"></i>
              </button>
              <button class="btn btn-xs btn-outline-success mb-0 ms-1" onclick="submitEvaluation(${evalItem.id})" title="Submit">
                <i class="fas fa-paper-plane"></i>
              </button>
            </td>
          </tr>
        `;
        $("#evaluationTableBody").append(row);
      });
    }

    // Update pagination info
    $("#startRow").text(pageEvaluations.length > 0 ? startIndex + 1 : 0);
    $("#endRow").text(Math.min(endIndex, currentFilteredEvaluations.length));
    $("#totalRows").text(currentFilteredEvaluations.length);

    // Update pagination buttons
    $("#prevPage").prop("disabled", currentPage === 1);
    $("#nextPage").prop("disabled", currentPage === Math.ceil(currentFilteredEvaluations.length / rowsPerPage));
  }

  function filterEvaluations() {
    const searchTerm = $("#tableSearch").val().toLowerCase();
    const periodFilter = $("#periodFilter").val();

    currentFilteredEvaluations = evaluations.filter((evalItem) => {
      // Status filter
      const matchesStatus = currentStatusFilter === 'all' || evalItem.status === currentStatusFilter;

      // Search filter
      const matchesSearch = searchTerm === '' ||
        evalItem.name.toLowerCase().includes(searchTerm) ||
        evalItem.objective.toLowerCase().includes(searchTerm) ||
        evalItem.department.toLowerCase().includes(searchTerm);

      // Period filter
      let matchesPeriod = true;
      if (periodFilter) {
        matchesPeriod = evalItem.period === periodFilter;
      }

      return matchesStatus && matchesSearch && matchesPeriod;
    });

    currentPage = 1;
    updateTabCounts();
    renderTable();
  }

  function updateTabCounts() {
    const allCount = evaluations.length;
    const pendingCount = evaluations.filter(e => e.status === 'pending').length;
    const managementCount = evaluations.filter(e => e.status === 'management').length;
    const accomplishedCount = evaluations.filter(e => e.status === 'accomplished').length;

    $('.status-tab[data-status="all"] .tab-badge').text(allCount);
    $('.status-tab[data-status="pending"] .tab-badge').text(pendingCount);
    $('.status-tab[data-status="management"] .tab-badge').text(managementCount);
    $('.status-tab[data-status="accomplished"] .tab-badge').text(accomplishedCount);
  }

  function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString("en-US", {
      year: "numeric",
      month: "short",
      day: "numeric",
    });
  }

  function getStatusText(status) {
    switch (status) {
      case 'pending': return 'PENDING';
      case 'management': return 'FOR APPROVAL';
      case 'accomplished': return 'ACCOMPLISHED';
      default: return status.toUpperCase();
    }
  }

  function getStatusClass(status) {
    switch (status) {
      case 'pending': return 'bg-gradient-warning';
      case 'management': return 'bg-gradient-info';
      case 'accomplished': return 'bg-gradient-success';
      default: return 'bg-gradient-secondary';
    }
  }

  // Action functions
  function viewEvaluation(id) {
    const evalItem = evaluations.find(e => e.id === id);
    if (evalItem) {
      alert(`Evaluation Details:\n\nEmployee: ${evalItem.name}\nDate Hired: ${formatDate(evalItem.dateHired)}\nTenureship: ${evalItem.tenureship}\nEvaluation Period: ${formatDate(evalItem.periodFrom)} to ${formatDate(evalItem.periodTo)}\nObjective: ${evalItem.objective}\nStatus: ${getStatusText(evalItem.status)}\nDepartment: ${evalItem.department}`);
    }
  }

  function editEvaluation(id) {
    const evalItem = evaluations.find(e => e.id === id);
    if (evalItem) {
      alert(`Edit evaluation for ${evalItem.name}\n\nThis would open an edit form in a real application.`);
    }
  }

  function submitEvaluation(id) {
    const evalItem = evaluations.find(e => e.id === id);
    if (evalItem) {
      if (confirm(`Submit evaluation for ${evalItem.name} for management approval?`)) {
        // Update status to management
        evalItem.status = 'management';
        updateTabCounts();
        filterEvaluations();
        alert('Evaluation submitted for management approval!');
      }
    }
  }

  function exportToCSV() {
    alert("Export functionality would be implemented here.\nData would be exported to CSV format.");
    // In a real application, this would generate and download a CSV file
  }

  function initializePerformanceChart() {
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
              callback: function (value) {
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
  }
</script>

