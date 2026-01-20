<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function dashboard_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/dashboard.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
    public function security_personnel_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/security_personnel.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
    public function attendance_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/attendance.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
    public function payroll_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/payroll.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
    public function reports_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/reports.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
    public function evaluation_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/evaluation.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
     public function cases_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/cases.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
     public function settings_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/settings.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }
     public function qr_code_scanner_page()
    {
        $this->load->view('dashboard/templates/tp_header.php');
        $this->load->view('dashboard/templates/tp_sidebar.php');
        $this->load->view('dashboard/templates/tp_navbar.php');
        $this->load->view('dashboard/qr_code_scanner.php');
        $this->load->view('dashboard/templates/tp_footer.php');
    }


}
