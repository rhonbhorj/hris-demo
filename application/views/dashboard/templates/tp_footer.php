    <!-- <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer> -->
    </div>
    </main>
    <script src="/assets/js/core/popper.min.js"></script>
    <script src="/assets/js/core/bootstrap.min.js"></script>
    <script src="/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".collapse").forEach(collapse => {
          const key = "collapseState_" + collapse.id;

          if (localStorage.getItem(key) === "open") {
            collapse.classList.add("show");
          }

          collapse.addEventListener("shown.bs.collapse", () => {
            localStorage.setItem(key, "open");
          });

          collapse.addEventListener("hidden.bs.collapse", () => {
            localStorage.setItem(key, "closed");
          });
        });

        const currentPath = window.location.pathname;

        document.querySelectorAll(".nav-link[href]").forEach(link => {
          if (link.getAttribute("href") === currentPath) {
            link.classList.add("active", "bg-gradient-dark", "text-white");
            link.classList.remove("text-dark");
            let collapse = link.closest(".collapse");
            while (collapse) {
              collapse.classList.add("show");
              localStorage.setItem("collapseState_" + collapse.id, "open");
              const toggle = document.querySelector(
                `a[data-bs-toggle="collapse"][href="#${collapse.id}"]`
              );

              if (toggle) {
                toggle.classList.add("active");

                toggle.setAttribute("aria-expanded", "true");
              }

              collapse = collapse.parentElement.closest(".collapse");
            }
          }
        });
      });
    </script>



    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->

    <script src="/assets/js/material-dashboard.min.js?v=3.2.0"></script>
    </body>

    </html>