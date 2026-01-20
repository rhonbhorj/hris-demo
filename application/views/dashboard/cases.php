<div class="container-fluid py-2">
  <div class="row">
    <div class="ms-3">
      <h3 class="mb-0 h4 font-weight-bolder">NOD LIST</h3>
      <p class="mb-4">
        Notice of Disciplinary Action records and management
      </p>
    </div>
  </div>

  <!-- NOD LIST TABLE -->
  <div class="row mb-4">
    <div class="col-12">
      <div class="card">
        <div class="card-header pb-0">
          <div class="row align-items-center">
             <h6>All Case Records</h6>
            <div class="col-lg-8 col-7">
                   <div class="status-tabs me-3">
                  <button class="status-tab btn btn-sm mb-1 active" data-status="all">
                    All Cases
                    <span class="tab-badge">5</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="closed">
                    Case Closed
                    <span class="tab-badge">2</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="denied">
                    Denied IR
                    <span class="tab-badge">1</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="pending">
                    Pending
                    <span class="tab-badge">1</span>
                  </button>
                  <button class="status-tab btn btn-sm mb-1" data-status="investigation">
                    Investigation
                    <span class="tab-badge">1</span>
                  </button>
                </div>
            </div>
            <div class="col-lg my-auto text-end">
              <!-- Status Tabs -->
              <div class="d-flex justify-content-end align-items-center flex-wrap">
            
                <button class="btn btn-sm btn-success mb-0 mt-2" id="btnExportReport">
                  <i class="fas fa-file-excel me-1"></i> Excel
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
                <input type="text" class="form-control" id="tableSearch" placeholder="Search cases, references...">
              </div>
            </div>
            <div class="col-md-4">
              <select class="form-select" id="violationFilter">
                <option value="">All Violations</option>
                <option value="Security">Security Breach</option>
                <option value="Procedure">Procedure Violation</option>
                <option value="Conduct">Conduct Violation</option>
                <option value="Equipment">Equipment Misuse</option>
              </select>
            </div>
          </div>

          <!-- NOD Table -->
          <div class="table-responsive">
            <table class="table align-items-center mb-0" id="nodTable">
              <thead>
                <tr class="bg-gray-100">
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>REF</strong>
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>SPECIFIC VIOLATION</strong>
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>INCIDENT DATE</strong>
                  </th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>DATE NOD CREATED</strong>
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>STATUS</strong>
                  </th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                    <strong>ACTION</strong>
                  </th>
                </tr>
              </thead>
              <tbody id="nodTableBody">
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
                  <i class="fas fa-chevron-left"></i> PREVIOUS
                </button>
                <button class="btn btn-sm btn-outline-secondary ms-2" id="nextPage">
                  NEXT <i class="fas fa-chevron-right"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Add New Case Modal -->
<div class="modal-overlay" id="addCaseModal" style="display: none;">
  <div class="modal" style="max-width: 600px;">
    <div class="modal-header">
      <h3>Add New Case</h3>
      <button class="modal-close" id="closeAddModal">&times;</button>
    </div>
    <div class="modal-body">
      <form id="addCaseForm">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="caseRef">Reference Number</label>
              <input type="text" id="caseRef" class="form-control" required placeholder="e.g., NOD-2023-001" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="caseViolation">Specific Violation</label>
              <select id="caseViolation" class="form-control" required>
                <option value="">Select Violation</option>
                <option value="Security">Security Breach</option>
                <option value="Procedure">Procedure Violation</option>
                <option value="Conduct">Conduct Violation</option>
                <option value="Equipment">Equipment Misuse</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label for="incidentDate">Incident Date</label>
              <input type="date" id="incidentDate" class="form-control" required />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="nodDate">Date NOD Created</label>
              <input type="date" id="nodDate" class="form-control" required />
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="caseStatus">Status</label>
          <select id="caseStatus" class="form-control" required>
            <option value="Pending">Pending</option>
            <option value="Investigation">Under Investigation</option>
            <option value="Closed">Case Closed</option>
            <option value="Denied">Denied IR</option>
          </select>
        </div>
        <div class="form-group">
          <label for="caseDescription">Case Description</label>
          <textarea id="caseDescription" class="form-control" rows="4" required placeholder="Detailed description of the incident..."></textarea>
        </div>
        <div class="form-group">
          <label for="assignedTo">Assigned To</label>
          <select id="assignedTo" class="form-control">
            <option value="">Select Personnel</option>
            <option value="John Smith">John Smith</option>
            <option value="Sarah Johnson">Sarah Johnson</option>
            <option value="Michael Chen">Michael Chen</option>
          </select>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <button class="btn btn-secondary" id="cancelAddBtn">Cancel</button>
      <button class="btn btn-primary" id="submitCaseBtn">
        Save Case
      </button>
    </div>
  </div>
</div>

<!-- View/Edit Case Modal -->
<div class="modal-overlay" id="viewCaseModal" style="display: none;">
  <div class="modal" style="max-width: 700px;">
    <div class="modal-header">
      <h3 id="viewModalTitle">Case Details</h3>
      <button class="modal-close" id="closeViewModal">&times;</button>
    </div>
    <div class="modal-body">
      <div id="caseDetails">
     
      </div>
    </div>
    <div class="modal-footer">
      <div id="viewButtons">
        <button class="btn btn-secondary" id="closeViewBtn">Close</button>
        <button class="btn btn-success" id="closeCaseBtn">Close Case</button>
        <button class="btn btn-danger" id="denyCaseBtn">Deny IR</button>
        <button class="btn btn-primary" id="editCaseBtn">Edit</button>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  // Sample NOD cases data based on the image
  let nodCases = [
    {
      id: 1,
      ref: "NOD-2023-001",
      violation: "Security Breach",
      incidentDate: "2023-06-01",
      nodDate: "2023-06-02",
      status: "Closed",
      description: "Unauthorized access to restricted area",
      assignedTo: "John Smith",
      department: "Security"
    },
    {
      id: 2,
      ref: "NOD-2023-002",
      violation: "Procedure Violation",
      incidentDate: "2023-06-03",
      nodDate: "2023-06-04",
      status: "Denied",
      description: "Failure to follow standard operating procedure",
      assignedTo: "Sarah Johnson",
      department: "Operations"
    },
    {
      id: 3,
      ref: "NOD-2023-003",
      violation: "Conduct Violation",
      incidentDate: "2023-06-05",
      nodDate: "2023-06-06",
      status: "Pending",
      description: "Inappropriate behavior during duty hours",
      assignedTo: "Michael Chen",
      department: "HR"
    },
    {
      id: 4,
      ref: "NOD-2023-004",
      violation: "Equipment Misuse",
      incidentDate: "2023-06-07",
      nodDate: "2023-06-08",
      status: "Investigation",
      description: "Improper use of company equipment",
      assignedTo: "Emma Wilson",
      department: "IT"
    },
    {
      id: 5,
      ref: "NOD-2023-005",
      violation: "Security Breach",
      incidentDate: "2023-06-09",
      nodDate: "2023-06-10",
      status: "Closed",
      description: "Data breach attempt",
      assignedTo: "Robert Brown",
      department: "Security"
    }
  ];

  // Pagination variables
  let currentPage = 1;
  const rowsPerPage = 5;
  let currentFilteredCases = [...nodCases];
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
      filterCases();
    });

    // Search functionality
    $("#tableSearch").on("input", function () {
      filterCases();
    });

    // Violation filter
    $("#violationFilter").change(function () {
      filterCases();
    });

    // Pagination
    $("#prevPage").click(function () {
      if (currentPage > 1) {
        currentPage--;
        renderTable();
      }
    });

    $("#nextPage").click(function () {
      const totalPages = Math.ceil(currentFilteredCases.length / rowsPerPage);
      if (currentPage < totalPages) {
        currentPage++;
        renderTable();
      }
    });

    // Export button
    $("#btnExportReport").click(function () {
      exportToExcel();
    });

    // Modal functionality
    const addCaseBtn = document.createElement("button");
    addCaseBtn.className = "btn btn-sm btn-primary mb-0 ms-2";
    addCaseBtn.innerHTML = '<i class="fas fa-plus me-1"></i> Add New Case';
    addCaseBtn.id = "addCaseBtn";
    $(".card-header .text-end").prepend(addCaseBtn);

    $("#addCaseBtn").click(function () {
      $("#addCaseModal").show();
    });

    $("#closeAddModal, #cancelAddBtn").click(function () {
      $("#addCaseModal").hide();
      $("#addCaseForm")[0].reset();
    });

    $("#closeViewModal, #closeViewBtn").click(function () {
      $("#viewCaseModal").hide();
    });

    $("#submitCaseBtn").click(function () {
      addNewCase();
    });

    // Edit, Close, Deny buttons are handled in the action functions below
  });

  function renderTable() {
    const startIndex = (currentPage - 1) * rowsPerPage;
    const endIndex = startIndex + rowsPerPage;
    const pageCases = currentFilteredCases.slice(startIndex, endIndex);

    $("#nodTableBody").empty();

    if (pageCases.length === 0) {
      const row = `
        <tr>
          <td colspan="6" class="text-center py-4">
            <div class="text-muted">NO DATA AVAILABLE IN TABLE</div>
          </td>
        </tr>
      `;
      $("#nodTableBody").append(row);
    } else {
      pageCases.forEach((caseItem) => {
        const statusClass = getStatusClass(caseItem.status);
        
        // Create action buttons with lock icons as shown in the image
        const actionButtons = `
          <button class="btn btn-xs btn-outline-info mb-0" onclick="viewCase(${caseItem.id})" title="View">
            <i class="fas fa-lock"></i>
          </button>
          <button class="btn btn-xs btn-outline-info mb-0 ms-1" onclick="editCase(${caseItem.id})" title="Edit">
            <i class="fas fa-lock"></i>
          </button>
        `;

        const row = `
          <tr>
            <td>
              <div class="d-flex flex-column">
                <h6 class="mb-0 text-sm">${caseItem.ref}</h6>
              </div>
            </td>
            <td>
              <p class="text-sm font-weight-bold mb-0">${caseItem.violation}</p>
            </td>
            <td>
              <p class="text-sm mb-0">${formatDate(caseItem.incidentDate)}</p>
            </td>
            <td>
              <p class="text-sm mb-0">${formatDate(caseItem.nodDate)}</p>
            </td>
            <td class="text-center">
              <span class="badge ${statusClass}">${caseItem.status}</span>
            </td>
            <td class="text-center">
              ${actionButtons}
            </td>
          </tr>
        `;
        $("#nodTableBody").append(row);
      });
    }

    // Update pagination info
    $("#startRow").text(pageCases.length > 0 ? startIndex + 1 : 0);
    $("#endRow").text(Math.min(endIndex, currentFilteredCases.length));
    $("#totalRows").text(currentFilteredCases.length);

    // Update pagination buttons
    $("#prevPage").prop("disabled", currentPage === 1);
    $("#nextPage").prop("disabled", currentPage === Math.ceil(currentFilteredCases.length / rowsPerPage));
  }

  function filterCases() {
    const searchTerm = $("#tableSearch").val().toLowerCase();
    const violationFilter = $("#violationFilter").val();

    currentFilteredCases = nodCases.filter((caseItem) => {
      // Status filter
      const matchesStatus = currentStatusFilter === 'all' || 
                           (currentStatusFilter === 'closed' && caseItem.status === 'Closed') ||
                           (currentStatusFilter === 'denied' && caseItem.status === 'Denied') ||
                           (currentStatusFilter === 'pending' && caseItem.status === 'Pending') ||
                           (currentStatusFilter === 'investigation' && caseItem.status === 'Investigation');

      // Search filter
      const matchesSearch = searchTerm === '' ||
        caseItem.ref.toLowerCase().includes(searchTerm) ||
        caseItem.violation.toLowerCase().includes(searchTerm) ||
        caseItem.description.toLowerCase().includes(searchTerm);

      // Violation filter
      let matchesViolation = true;
      if (violationFilter) {
        matchesViolation = caseItem.violation === violationFilter;
      }

      return matchesStatus && matchesSearch && matchesViolation;
    });

    currentPage = 1;
    updateTabCounts();
    renderTable();
  }

  function updateTabCounts() {
    const allCount = nodCases.length;
    const closedCount = nodCases.filter(c => c.status === 'Closed').length;
    const deniedCount = nodCases.filter(c => c.status === 'Denied').length;
    const pendingCount = nodCases.filter(c => c.status === 'Pending').length;
    const investigationCount = nodCases.filter(c => c.status === 'Investigation').length;

    $('.status-tab[data-status="all"] .tab-badge').text(allCount);
    $('.status-tab[data-status="closed"] .tab-badge').text(closedCount);
    $('.status-tab[data-status="denied"] .tab-badge').text(deniedCount);
    $('.status-tab[data-status="pending"] .tab-badge').text(pendingCount);
    $('.status-tab[data-status="investigation"] .tab-badge').text(investigationCount);
  }

  function formatDate(dateString) {
    const date = new Date(dateString);
    return date.toLocaleDateString("en-US", {
      month: "short",
      day: "numeric",
      year: "numeric",
    });
  }

  function getStatusClass(status) {
    switch (status) {
      case 'Closed': return 'bg-gradient-success';
      case 'Denied': return 'bg-gradient-danger';
      case 'Pending': return 'bg-gradient-warning';
      case 'Investigation': return 'bg-gradient-info';
      default: return 'bg-gradient-secondary';
    }
  }

  // Action functions
  function viewCase(id) {
    const caseItem = nodCases.find(c => c.id === id);
    if (caseItem) {
      $("#viewModalTitle").text(`Case Details - ${caseItem.ref}`);
      $("#caseDetails").html(`
        <div class="row">
          <div class="col-md-6">
            <div class="detail-item">
              <label>Reference Number:</label>
              <p>${caseItem.ref}</p>
            </div>
            <div class="detail-item">
              <label>Violation:</label>
              <p>${caseItem.violation}</p>
            </div>
            <div class="detail-item">
              <label>Incident Date:</label>
              <p>${formatDate(caseItem.incidentDate)}</p>
            </div>
            <div class="detail-item">
              <label>NOD Created:</label>
              <p>${formatDate(caseItem.nodDate)}</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="detail-item">
              <label>Status:</label>
              <span class="badge ${getStatusClass(caseItem.status)}">${caseItem.status}</span>
            </div>
            <div class="detail-item">
              <label>Department:</label>
              <p>${caseItem.department}</p>
            </div>
            <div class="detail-item">
              <label>Assigned To:</label>
              <p>${caseItem.assignedTo}</p>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-12">
            <div class="detail-item">
              <label>Description:</label>
              <p>${caseItem.description}</p>
            </div>
          </div>
        </div>
      `);
      $("#viewCaseModal").show();
    }
  }

  function editCase(id) {
    const caseItem = nodCases.find(c => c.id === id);
    if (caseItem) {
      alert(`Edit case ${caseItem.ref}\n\nThis would open an edit form in a real application.`);
    }
  }

  function closeCase(id) {
    const caseItem = nodCases.find(c => c.id === id);
    if (caseItem) {
      if (confirm(`Close case ${caseItem.ref}? This action cannot be undone.`)) {
        caseItem.status = 'Closed';
        filterCases();
        renderTable();
        alert('Case has been closed successfully!');
      }
    }
  }

  function denyCase(id) {
    const caseItem = nodCases.find(c => c.id === id);
    if (caseItem) {
      if (confirm(`Deny IR for case ${caseItem.ref}? This action cannot be undone.`)) {
        caseItem.status = 'Denied';
        filterCases();
        renderTable();
        alert('IR has been denied successfully!');
      }
    }
  }

  function addNewCase() {
    const ref = $("#caseRef").val();
    const violation = $("#caseViolation").val();
    const incidentDate = $("#incidentDate").val();
    const nodDate = $("#nodDate").val();
    const status = $("#caseStatus").val();
    const description = $("#caseDescription").val();
    const assignedTo = $("#assignedTo").val();

    // Generate new ID
    const newId = Math.max(...nodCases.map(c => c.id)) + 1;

    // Create new case object
    const newCase = {
      id: newId,
      ref: ref,
      violation: violation,
      incidentDate: incidentDate,
      nodDate: nodDate,
      status: status,
      description: description,
      assignedTo: assignedTo,
      department: assignedTo === 'John Smith' || assignedTo === 'Robert Brown' ? 'Security' : 
                  assignedTo === 'Sarah Johnson' ? 'Operations' :
                  assignedTo === 'Michael Chen' ? 'HR' : 'General'
    };

    // Add to cases array
    nodCases.push(newCase);

    // Close modal and reset form
    $("#addCaseModal").hide();
    $("#addCaseForm")[0].reset();

    // Update tables
    filterCases();
    renderTable();

    alert(`New case ${ref} has been added successfully!`);
  }

  function exportToExcel() {
    alert(`Exporting ${currentFilteredCases.length} cases to Excel file.\n\nIn a real application, this would generate and download an Excel file.`);
    // In a real application, this would use a library like SheetJS to generate Excel file
  }
</script>

<style>
.status-tabs {
  display: flex;
  flex-wrap: wrap;
  gap: 5px;
}

.status-tab {
  padding: 5px 10px;
  border-radius: 4px;
  font-size: 12px;
  font-weight: 500;
  border: 1px solid #dee2e6;
  background: white;
  color: #6c757d;
  display: flex;
  align-items: center;
  gap: 5px;
}

.status-tab.active {
  background: #4e73df;
  color: white;
  border-color: #4e73df;
}

.tab-badge {
  background: rgba(255, 255, 255, 0.2);
  padding: 2px 6px;
  border-radius: 10px;
  font-size: 11px;
}

.badge {
  display: inline-block;
  padding: 4px 12px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
}

.bg-gradient-success {
  background: linear-gradient(135deg, #28a745, #20c997);
  color: white;
}

.bg-gradient-danger {
  background: linear-gradient(135deg, #dc3545, #e83e8c);
  color: white;
}

.bg-gradient-warning {
  background: linear-gradient(135deg, #ffc107, #fd7e14);
  color: white;
}

.bg-gradient-info {
  background: linear-gradient(135deg, #17a2b8, #20c997);
  color: white;
}

.bg-gradient-secondary {
  background: linear-gradient(135deg, #6c757d, #adb5bd);
  color: white;
}

.modal-overlay {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0,0,0,0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1000;
}

.modal {
  background: white;
  border-radius: 10px;
  width: 90%;
  max-height: 90vh;
  overflow-y: auto;
}

.modal-header {
  padding: 20px;
  border-bottom: 1px solid #e2e8f0;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.modal-header h3 {
  margin: 0;
  font-size: 20px;
  color: #2d3748;
}

.modal-close {
  background: none;
  border: none;
  font-size: 24px;
  cursor: pointer;
  color: #6c757d;
}

.modal-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  margin-bottom: 8px;
  font-weight: 500;
  color: #4a5568;
}

.form-group input,
.form-group select,
.form-group textarea {
  width: 100%;
  padding: 10px;
  border: 1px solid #e2e8f0;
  border-radius: 6px;
  font-size: 14px;
}

.form-group textarea {
  resize: vertical;
}

.modal-footer {
  padding: 20px;
  border-top: 1px solid #e2e8f0;
  display: flex;
  justify-content: flex-end;
  gap: 10px;
}

.btn {
  padding: 10px 20px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
}

.btn-secondary {
  background: #6c757d;
  color: white;
}

.btn-primary {
  background: #4e73df;
  color: white;
}

.btn-success {
  background: #28a745;
  color: white;
}

.btn-danger {
  background: #dc3545;
  color: white;
}

.detail-item {
  margin-bottom: 15px;
}

.detail-item label {
  display: block;
  font-weight: 600;
  color: #4a5568;
  margin-bottom: 5px;
}

.detail-item p {
  margin: 0;
  color: #6c757d;
  font-size: 15px;
}
</style>