<?php

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('M_pembicara');
        $this->load->model('M_webinar');
    }

    function index() {
        $x['pembicara'] = $this->M_pembicara->get_pembicara_active();
        $x['webinar'] = $this->M_webinar->get_webinar_active();
        $this->load->view('V_home', $x);
    }
    function export() {
        //Enter your database information here and the name of the backup file
        $mysqlDatabaseName ='appgarden_webinar';
        $mysqlUserName ='appgarden_webinar';
        $mysqlPassword ='mahesaanugrah811000';
        $mysqlHostName ='appgarden.xyz';
        $mysqlExportPath ='webinar.sql';

        //Please do not change the following points
        //Export of the database and output of the status
        $command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
        exec($command,$output,$worked);
        switch($worked){
        case 0:
        echo 'The database <b>' .$mysqlDatabaseName .'</b> was successfully stored in the following path '.getcwd().'/' .$mysqlExportPath .'</b>';
        break;
        case 1:
        echo 'An error occurred when exporting <b>' .$mysqlDatabaseName .'</b> zu '.getcwd().'/' .$mysqlExportPath .'</b>';
        break;
        case 2:
        echo 'An export error has occurred, please check the following information: <br/><br/><table><tr><td>MySQL Database Name:</td><td><b>' .$mysqlDatabaseName .'</b></td></tr><tr><td>MySQL User Name:</td><td><b>' .$mysqlUserName .'</b></td></tr><tr><td>MySQL Password:</td><td><b>NOTSHOWN</b></td></tr><tr><td>MySQL Host Name:</td><td><b>' .$mysqlHostName .'</b></td></tr></table>';
        break;
        }
    }
}