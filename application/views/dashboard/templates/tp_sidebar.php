  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
        aria-hidden="true" id="iconSidenav"></i>

      <a class="navbar-brand px-4 py-3 m-0"
        href="https://demos.creative-tim.com/material-dashboard/pages/dashboard"
        target="_blank">
        <img src="/assets/img/kw_logo.png" class="navbar-brand-img" width="auto" height="26" alt="main_logo">
        <span class="ms-1 text-sm text-dark">Security Agency</span>
      </a>

      <div class="px-4 pb-2">
        <!-- <span class="text-xs text-muted fst-italic">
          For demo purposes only
        </span> -->
      </div>
    </div>

    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-dark" href="/dashboard">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>

        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#employeesNav" class="nav-link text-dark"
            aria-controls="employeesNav" role="button"
            aria-expanded="false">
            <i class="material-symbols-rounded opacity-5 {% if page.brand == 'RTL' %}ms-2{% else %}me-2{% endif %}">contract</i>
            <span class="nav-link-text ms-1">Employees</span>
          </a>
          <div class="collapse" id="employeesNav">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-dark" href="/security-personnel">
                  <i class="material-symbols-rounded opacity-5">groups</i>
                  <span class="nav-link-text ms-1">Security Personnel</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/attendance">
                  <i class="material-symbols-rounded opacity-5">event_available</i>
                  <span class="nav-link-text ms-1">Attendance</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/payroll">
                  <i class="material-symbols-rounded opacity-5">payments</i>
                  <span class="nav-link-text ms-1">Payroll</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/reports">
                  <i class="material-symbols-rounded opacity-5">bar_chart</i>
                  <span class="nav-link-text ms-1">Incident Reports</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/cases">
                  <i class="material-symbols-rounded opacity-5">work</i>
                  <span class="nav-link-text ms-1">Cases</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-dark" href="/evaluation">
                  <i class="material-symbols-rounded opacity-5">fact_check</i>
                  <span class="nav-link-text ms-1">Evaluation</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#inspectorNav" class="nav-link text-dark"
            aria-controls="inspectorNav" role="button"
            aria-expanded="false">
            <i class="material-symbols-rounded opacity-5">manage_search</i>
            <span class="nav-link-text ms-1">Inspector</span>
          </a>
          <div class="collapse {% if page in ['qr-code-scanner'] %}show{% endif %}" id="inspectorNav">
            <ul class="nav ">
              <li class="nav-item">
                <a class="nav-link text-dark" href="/qr-code-scanner">
                  <i class="material-symbols-rounded opacity-5">qr_code_scanner</i>
                  <span class="nav-link-text ms-1">QR Code</span>
                </a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="./pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">settings</i>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="./pages/sign-up.html">
            <i class="material-symbols-rounded opacity-5">logout</i>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <!-- <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn btn-outline-dark mt-4 w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard?ref=sidebarfree" type="button">Documentation</a>
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
      </div>
    </div> -->
  </aside>