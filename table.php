<?php

include 'header.php';
// include 'include/sidebar.php';
include 'connection/dbh.inc.php';
?>
<!-- START MODAL FOR INSERT DATA ON RECORDS #####################################-->
<div class="modal fade" id="adminModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModal">Records Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="insertdatafromrecord.php" method="POST">
                <div class="modal-body">
                    <!--Modal panel Insert to Record Office -->
                    <!--this is for the tracking number -->
                    <div class="form-group row">
                        <label for="inputTracking" class="col-sm-2 col-form-label">Tracking</label>
                        <div class="col-sm-8">
                            <input type="input" name="user_trackingid" class="form-control" id="inputTracking" placeholder="Tracking Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_title" class="form-control" id="Title" placeholder="Title" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputInputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_name" class="form-control" id="Name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-md-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" id="Title" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputOfficer" class="col-sm-2 col-form-label">Receive By</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_byreceive" class="form-control" id="Title" placeholder="Officer" required>
                        </div>
                    </div>
                    <!--drop down for office destination-->
                    <div class="form-group row">
                        <label for="offce class=" class="col-sm-2 col-form-label">Destination</label>
                        <div class="col-sm-10" required>
                            <select class="form-control" name="user_officestarget" id="office">
                                <option value="">Select Office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="offce class=" class="col-sm-2 col-form-label">1st Channel</label>
                        <div class="col-sm-10" required>
                            <select class="form-control" name="channel_1" id="office">
                                <option value="">Select Office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                        <label for="offce class=" class="col-sm-2 col-form-label mt-3">2nd Channel</label>
                        <div class="col-sm-10" required>
                            <select class="form-control mt-3" name="channel_2" id="office">
                                <option value="">Select Office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                        <label for="offce class=" class="col-sm-2 col-form-label mt-3">3rd Channel</label>
                        <div class="col-sm-10" required>
                            <select class="form-control mt-3" name="channel_3" id="office">
                                <option value="">Select Office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                        <label for="offce class=" class="col-sm-2 col-form-label mt-3">4th Channel</label>
                        <div class="col-sm-10" required>
                            <select class="form-control mt-3" name="channel_4" id="office">
                                <option value="">Select Office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                        <label for="offce class=" class="col-sm-2 col-form-label mt-3">5th Channel</label>
                        <div class="col-sm-10" required>
                            <select class="form-control mt-3" name="channel_5" id="office">
                                <option value="">Select Office</option>
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" id="tooltip" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal"><i class="material-icons">close</i></button>
                    <!--this is the submit code line -->
                    <button type="submit" id="tooltip" name="insertdatafromrecord" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Save"><i class="material-icons">save_alt</i></button>
                </div>
                <!--end of form modal for insert-->
            </form>
        </div>
    </div>
</div>
<!--END MODAL FOR INSERT DATA ON RECORDS ########################################-->
<!-- START MODAL FOR UPDATE DATA ON RECORDS-->
<div class="modal fade" id="editmodal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="adminModal">Edit Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="updaterecord.php" method="POST">
                <div class="modal-body">
                    <!--Modal panel Insert to Record Office -->
                    <!--this is for the tracking number -->
                    <input type="hidden" name="update_id" id="update_id">

                    <div class="form-group row">
                        <label for="inputTracking" class="col-sm-2 col-form-label">Tracking</label>
                        <div class="col-sm-8">
                            <input type="input" name="user_trackingid" id="user_trackingid" class="form-control" id="inputTracking" placeholder="Tracking Number" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputTitle" class="col-sm-2 col-form-label">Tittle</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_title" id="user_title" class="form-control" id="Title" placeholder="Title" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputInputName" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="user_name" id="user_name" class="form-control" id="Name" placeholder="Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-md-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" id="email" class="form-control" id="Title" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputOfficer" class="col-sm-2 col-form-label">Receive By</label>
                        <div class="col-sm-10">

                            <input type="text" name="user_byreceive" id="user_byreceive" class="form-control" id="Title" placeholder="Officer">
                        </div>
                    </div>
                    <!-- --------------------------------------------------------------------------------------------------- -->
                    <div class="form-group row">
                        <label for="offce class=" class="col-sm-2 col-form-label">Destination</label>
                        <div class="col-sm-10">

                            <select type="text" class="form-control" name="user_officestarget" id="user_officestarget">
                                <option value="Accountant's office">Accountant's office</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Accounting - Bookkeeper (101)">
                                    Accounting - Bookkeeper (101)
                                </option>
                                <option value="Accounting - Bookkeeper (164)">
                                    Accounting - Bookkeeper (164)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Bookstore)">
                                    Accounting - Bookkeeper (164-Bookstore)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Canteen)">
                                    Accounting - Bookkeeper (164-Canteen)
                                </option>
                                <option value="Accounting - Bookkeeper (164-CCRD)">
                                    Accounting - Bookkeeper (164-CCRD)
                                </option>
                                <option value="Accounting - Bookkeeper (164-Hostel)">
                                    Accounting - Bookkeeper (164-Hostel)
                                </option>
                                <option value="Accounting - Bookkeeper (401)">
                                    Accounting - Bookkeeper (401)
                                </option>
                                <option value="Alumni Office">Alumni Office</option>
                                <option value="BAC">BAC</option>
                                <option value="BIMP-EAGA">BIMP-EAGA</option>
                                <option value="Budget">Budget</option>
                                <option value="CAH">CAH</option>
                                <option value="CAO">CAO</option>
                                <option value="Cashier">Cashier</option>
                                <option value="CBA">CBA</option>
                                <option value="CCJE">CCJE</option>
                                <option value="CCRD">CCRD-Main</option>
                                <option value="CCRD-North">CCRD-North</option>
                                <option value="CCRD-South">CCRD-South</option>
                                <option value="CEAT">CEAT</option>
                                <option value="CFO">CFO</option>
                                <option value="CHMT">CHMT</option>
                                <option value="Clinic">Clinic</option>
                                <option value="CNHS">CNHS</option>
                                <option value="COA">COA</option>
                                <option value="Construction and Maintenance Services">
                                    Construction and Maintenance Services
                                </option>
                                <option value="CS">CS</option>
                                <option value="CSPG">CSPG</option>
                                <option value="CTE">CTE</option>
                                <option value="Curriculum Instructional Materials Development Office">
                                    Curriculum Instructional Materials Development Office
                                </option>
                                <option value="Dep-Ed K to 12 G9">Dep-Ed K to 12 G9</option>
                                <option value="Electrical & Audio-visual Section">
                                    Electrical & Audio-visual Section
                                </option>
                                <option value="ETEEAP">ETEEAP</option>
                                <option value="Extension Office">Extension Office</option>
                                <option value="F&S Development Director">
                                    F&S Development Director
                                </option>
                                <option value="Gender and Development">
                                    Gender and Development
                                </option>
                                <option value="Graduate School">Graduate School</option>
                                <option value="HRMO">HRMO</option>
                                <option value="ICT">ICT</option>
                                <option value="ICU">ICU</option>
                                <option value="IGP">IGP</option>
                                <option value="Institutional Development">
                                    Institutional Development
                                </option>
                                <option value="Internal Audit Service Office">
                                    Internal Audit Service Office
                                </option>
                                <option value="Janitorial Services">Janitorial Services</option>
                                <option value="Legal Affairs">Legal Affairs</option>
                                <option value="LES">LES</option>
                                <option value="LHS">LHS</option>
                                <option value="Library">Library</option>
                                <option value="Marine Science Laboratory">
                                    Marine Science Laboratory
                                </option>
                                <option value="Medical Laboratory">Medical Laboratory</option>
                                <option value="Medical School">Medical School</option>
                                <option value="Motorpool">Motorpool</option>
                                <option value="NROTCU">NROTCU</option>
                                <option value="NSTP Office">NSTP Office</option>
                                <option value="Office of the President">
                                    Office of the President
                                </option>
                                <option value="Office of the Student Affairs">
                                    Office of the Student Affairs
                                </option>
                                <option value="Office of Transnational Education">
                                    Office of Transnational Education
                                </option>
                                <option value="PAC">PAC</option>
                                <option value="Palawan Studies Center">
                                    Palawan Studies Center
                                </option>
                                <option value="Panrehiyong Sentro ng Wika ng Filipino">
                                    Panrehiyong Sentro ng Wika ng Filipino
                                </option>
                                <option value="PIONEER">PIONEER</option>
                                <option value="PITBI">PITBI</option>
                                <option value="Planning Office">Planning Office</option>
                                <option value="PMO">PMO</option>
                                <option value="PRIMO">PRIMO</option>
                                <option value="Property & Warehouse Unit">
                                    Property & Warehouse Unit
                                </option>
                                <option value="PSU Band">PSU Band</option>
                                <option value="PSU Bookstore">PSU Bookstore</option>
                                <option value="PSU Canteen">PSU Canteen</option>
                                <option value="PSU CUYO">PSU CUYO</option>
                                <option value="PSU Faculty Union">PSU Faculty Union</option>
                                <option value="PSU Hostel">PSU Hostel</option>
                                <option value="PSU I-Hub">PSU I-Hub</option>
                                <option value="PSU LSHS">PSU LSHS</option>
                                <option value="PSU Multi Purpose Cooperative">
                                    PSU Multi Purpose Cooperative
                                </option>
                                <option value="PSU Museum">PSU Museum</option>
                                <option value="PSU Sining Palawan Dance Troupe">
                                    PSU Sining Palawan Dance Troupe
                                </option>
                                <option value="PSU-Palawan Studies Cente">
                                    PSU-Palawan Studies Center
                                </option>
                                <option value="Quality Assurance and Services">
                                    Quality Assurance and Services
                                </option>
                                <option value="Records">Records</option>
                                <option value="Registrar's Office">Registrar's Office</option>
                                <option value="Research">Research</option>
                                <option value="ROTC Office">ROTC Office</option>
                                <option value="SCAO">SCAO</option>
                                <option value="School of Graduate Studies & Research">
                                    School of Graduate Studies & Research
                                </option>
                                <option value="School of Law">School of Law</option>
                                <option value="Security Office">Security Office</option>
                                <option value="SEMDO">SEMDO</option>
                                <option value="SEPO">SEPO</option>
                                <option value="SGO">SGO</option>
                                <option value="Sports Division">Sports Division</option>
                                <option value="Stock Room">Stock Room</option>
                                <option value="Supply">Supply</option>
                                <option value="SWKO">SWKO</option>
                                <option value="Transnational Education">
                                    Transnational Education
                                </option>
                                <option value="UDRRMT">UDRRMT</option>
                                <option value="University Board Secretary Office">
                                    University Board Secretary Office
                                </option>
                                <option value="University Intellectual Property Office">
                                    University Intellectual Property Office
                                </option>
                                <option value="University Quality Assurance Center (UQAC)">
                                    University Quality Assurance Center (UQAC)
                                </option>
                                <option value="UREO">UREO</option>
                                <option value="Utility Services">Utility Services</option>
                                <option value="VPAA">VPAA</option>
                                <option value="VPEC">VPEC</option>
                                <option value="VPFA">VPFA</option>
                                <option value="VPRE">VPRE</option>
                            </select>
                        </div>
                    </div>
                    <!-- hidden button to update the date -->
                    <input type="hidden" name="user_createdate" id="user_createdate">
                </div>
                <div class="modal-footer">
                    <button type="button" id="tooltip" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Close" data-dismiss="modal"><i class="material-icons">close</i></button>

                    <!--this is the submit code line -->
                    <button type="submit" id="updaterecord" name="updaterecord" class="btn btn-primary">Update Data</button>
                </div>
                <!--end of form modal for insert-->
            </form>

        </div>
    </div>
</div>
<!-- END MODAL FOR UPDATE DATA ON RECORDS-->

<!-- START MODAL FOR DELETE DATA ON RECORDS-->
<div class="modal fade" id="deletemodal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger ">
                <h5 class="modal-title text-white" id="adminModal">Delete Record</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!-- below is the line of code will excute after click the button confirmation delete -->
            <form action="delete.php" method="POST">
                <div class="modal-body">

                    <input type="hidden" name="delete_id" id="delete_id">
                    <span> Do you want to delete this data? </span>
                </div>
                <div class=" modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <!--this is the submit code line -->
                    <button type="submit" name="deleterecord" class="btn btn-danger">Delete Data</button>
                </div>
                <!--end of form modal for insert-->
            </form>

        </div>
    </div>
</div>
<!-- END MODAL FOR DELETE DATA ON RECORDS-->

<title> ADMIN </title>

<section class="home-section">
    <div class="container-fluid">
        <div class="jumbotron m-0 p-0">
            <div class="card">
                <div class="card-header">
                    <div class="container">
                        <h1 mt-2 pl-2 class="text-center pt-2 mb-0 text-dark"> Welcome Admin</h1>
                    </div>
                    <div class="card-body">
                        <div class="row row-lg text-left">
                            <div class="container-fluid card m-0 p-0">
                                <div class="card-body pd-0 md-0">
                                    <div class="container-fluid p-2">
                                        <div class="btn mt-0 mb-0 text-center">
                                            <!-- <button type="button col-md-10" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#adminModal">
                                                Add Record
                                            </button> -->

                                        </div>
                                        <!--table query for fetching data -->
                                        <?php

                                        $sql = "SELECT * FROM users";
                                        $result = mysqli_query($conn, $sql);
                                        ?>
                                        <div>
                                            <button type="button col-md-10" class="btn btn-info btn-sm" data-toggle="modal" data-target="#adminModal">
                                                <span class="material-icons" data-toggle="tooltip" data-placement="top" id="toolip" title="Add New Data">
                                                    note_add
                                                </span>
                                            </button>
                                        </div>

                                        <table class=" table table-hover table-striped table-border">
                                            <thead class="bg-dark text-light">
                                                <tr>
                                                    <th scope="col">id</th>
                                                    <th scope="col">Tracking</th>
                                                    <th scope="col">Particulars</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Receive</th>
                                                    <th scope="col">Destination</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Edit</th>
                                                    <th scope="col">Delete</th>
                                                </tr>
                                            </thead>
                                            <br>
                                            <tbody>
                                                <?php
                                                // watch out sa query table, need mo palitan yung table ng user para doon sa tracking inforamtion
                                                $sql = "SELECT * FROM users";
                                                $result = mysqli_query($conn, $sql);

                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $timestamp = $row['user_datecreate'];

                                                ?>
                                                    <tr>
                                                        <td> <?php echo $row['id']; ?> </td>
                                                        <td> <?php echo $row['user_trackingid']; ?> </td>
                                                        <td> <?php echo $row['user_title']; ?> </td>

                                                        <td> <?php echo $row['user_name']; ?> </td>
                                                        <td> <?php echo $row['email']; ?> </td>
                                                        <td> <?php echo $row['user_byreceive']; ?> </td>
                                                        <td> <?php echo $row['user_officestarget']; ?> </td>
                                                        <td> <?php echo date('M d, Y, g:ia', strtotime($timestamp)); ?> </td>
                                                        <td>
                                                            <button type="button" class="btn btn-success btn-sm editbtn">
                                                                <span class="material-icons">
                                                                    edit_note
                                                                </span>
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-danger btn-sm deletebtn">
                                                                <span class="material-icons">
                                                                    delete
                                                                </span>

                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                            <!-- table loop for query the itaration-->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--dito lagay yung card-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- below is the content for the table in admin panel  -->

</section>

<?php
include('include/footer.php');
?>