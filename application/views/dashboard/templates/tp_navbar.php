  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-2 top-1 px-0 py-1 mx-3 border-radius-lg z-index-sticky shadow-none" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-2">
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link p-0 text-body">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </div>
        <nav aria-label="breadcrumb" class="ps-2">
          <ol class="breadcrumb bg-transparent mb-0 p-0">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" id="breadcrumbCurrent" aria-current="page"></li>

          </ol>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link p-0 text-body" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        let path = window.location.pathname;
        let page = path.substring(path.lastIndexOf('/') + 1)
          .replace('.html', '')
          .replace('-', ' ');

        page = page.charAt(0).toUpperCase() + page.slice(1);

        document.getElementById("breadcrumbCurrent").textContent = page;
      });
    </script>