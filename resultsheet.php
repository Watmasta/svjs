<title>Term Results | Southview Junior School</title>
<?php require_once "../../inc/head.inc.php";?>
<style>
  ::-moz-selection {
    background: #0ddb83;
    color: #FFF;
  }

  ::selection {
    background-color: #0ddb83;
    color: #FFF;
  }
</style>
<body style="background-color: #F5F5F5">
   <!-- Sidenav -->
   <?php require_once "../../inc/staff.inc/sidenav.inc.php";?>
   <!-- Main content -->
   <div class="main-content" id="panel">
   <!-- Topnav -->
   <?php require_once "../../inc/staff.inc/topnav.inc.php";?>
   <!-- Header -->
   <div class="header pb-3 d-flex align-items-center" style="min-height: 350px; background-image: url(../../assets/img/theme/academ.jpg); background-size: cover; background-position: center center;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-7"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
         <div class="row">
            <div class="col-lg-12 col-md-10">
               <h1 class="display-2 text-white" data-aos="slide-right" data-aos-duration="1000">Academics • Result Sheet</h1>
               <p class="text-white mt-0 mb-2" data-aos="slide-right" data-aos-duration="1500">These are the term results. You can upload & view how your students performed in each subject and the total term marks.</p>
               <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
                  <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                     <div class="modal-content">
                        <div class="modal-body p-0">
                           <div class="card bg-secondary border-0 mb-0">
                              <div class="card-header bg-transparent pt--6 pb-3">
                                 <!-- <div class="text-muted text-center mt-2 mb-3"><small>....</small></div> -->
                                 <div class="btn-wrapper text-center">
                                    <div class="text-center">
                                       <span class="shortcut-media avatar avatar-lg rounded-circle bg-success">
                                       <i class="ni ni-lg ni-cloud-upload-96"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                              <div class="card-body px-lg-5 py-lg-5">
                                 <div class="text-center text-muted mb-4">
                                    <p>Upload Results</p>
                                 </div>
                                 <form>
                                    <div class="custom-file">
                                       <input type="file" class="custom-file-input" id="customFileLang" lang="en">
                                       <label class="custom-file-label" for="customFileLang">Select file</label>
                                    </div>
                                    <div class="text-center">
                                       <button type="submit" class="btn btn-success mt-5" style="border-radius: 25px;">Submit</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Page content -->
   <div class="container-fluid mt--6">
      <div class="row justify-content-center">
         <div class="col-lg-12">
            <p class="text-center">
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1" style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Pre-Sch.
               </button>
               <button class="btn btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Grade 1-4
               </button>
               <button class="btn btn-md btn-neutral my-1 text-success" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3"style="border-radius: 20px;" data-aos="fade-in" data-aos-duration="3000">
               Upper-class
               </button>
            </p>
            <div class="collapse" id="collapseExample1">
               <div class="card mb-7">
                  <!-- Card header -->
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h2 class="mb-0">Pre-School Marklist</h2>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download as a PDF" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your results" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                        <div class="col-6">
                           <h4 class="mb-0">
                              Marklist: 
                              <t class="font-weight-light">...........................................</t>
                           </h4>
                        </div>
                     </div>
                  </div>
                  <!-- Light table -->
                  <div class="table-responsive">
                     <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th><b class="text-default">Leaders Name</b></th>
                              <th>Math</th>
                              <th>Lang</th>
                              <th>Env</th>
                              <th>Rel</th>
                              <th>Psych & CRT</th>
                              <th>LIT</th>
                              <th><b class="text-default">REMARKS</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">10/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">08/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Design System</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">30/08/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Black Dashboard</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Prepared By: 
                           <t class="font-weight-light">......................................................................................</t>
                        </h4>
                     </div>
                     <br>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Class Teacher: 
                           <t class="font-weight-light">...................................................................................</t>
                        </h4>
                     </div>
                     <br>
                  </div>
               </div>
            </div>
            <div class="collapse" id="collapseExample2">
               <div class="card mb-7">
                  <!-- Card header -->
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h2 class="mb-0">Grade 1-4 Marklist</h2>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download as a PDF" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your results" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                        <div class="col-6">
                           <h4 class="mb-0">
                              Marklist: 
                              <t class="font-weight-light">...........................................</t>
                           </h4>
                        </div>
                     </div>
                  </div>
                  <!-- Light table -->
                  <div class="table-responsive">
                     <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th><b class="text-default">Leaders Name</b></th>
                              <th>Math</th>
                              <th>Lang</th>
                              <th>Env</th>
                              <th>Rel</th>
                              <th>Psych & CRT</th>
                              <th>LIT</th>
                              <th><b class="text-default">REMARKS</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">10/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">08/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Design System</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">30/08/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Black Dashboard</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Prepared By: 
                           <t class="font-weight-light">......................................................................................</t>
                        </h4>
                     </div>
                     <br>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Class Teacher: 
                           <t class="font-weight-light">...................................................................................</t>
                        </h4>
                     </div>
                     <br>
                  </div>
               </div>
            </div>
            <div class="collapse" id="collapseExample3">
               <div class="card mb-7">
                  <!-- Card header -->
                  <div class="card-header border-0">
                     <div class="row">
                        <div class="col-6">
                           <h3 class="mb-0">Upper-Class Marklist</h3>
                        </div>
                        <div class="col-12 text-right">
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="modal" data-target="#modal-form" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-upload-96"></i></span>
                           <span type="submit" class="btn-inner--text">Upload</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Download as a PDF" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="ni ni-cloud-download-95"></i></span>
                           <span type="submit" class="btn-inner--text">Download</span>
                           </a>
                           <a href="#" class="btn btn-sm btn-success btn-icon" data-toggle="tooltip" data-original-title="Print your results" style="border-radius: 15px;">
                           <span class="btn-inner--icon"><i class="fas fa-user-edit"></i></span>
                           <span type="submit" class="btn-inner--text">Print</span>
                           </a>
                        </div>
                        <div class="col-6">
                           <h4 class="mb-0">
                              Marklist: 
                              <t class="font-weight-light">...........................................</t>
                           </h4>
                        </div>
                     </div>
                  </div>
                  <!-- Light table -->
                  <div class="table-responsive">
                     <table class="table align-items-center table-flush table-striped">
                        <thead class="thead-light">
                           <tr>
                              <th><b class="text-default">Leaders Name</b></th>
                              <th>Math</th>
                              <th>Eng</th>
                              <th>Comp</th>
                              <th>TOT</th>
                              <th>Kisw</th>
                              <th>Insha</th>
                              <th>Jumla</th>
                              <th>SCI</th>
                              <th>SS</th>
                              <th>CRE</th>
                              <th><b class="text-default">Total</b></th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">10/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Dashboard PRO</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">08/09/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Argon Design System</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                                 <!-- <span class="text-muted">30/08/2018</span> -->
                              </td>
                              <td>
                                 <!-- <a href="#!" class="font-weight-bold">Black Dashboard</a> -->
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b>Total Marks</b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b>M.S.S</b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b>Position</b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                           <tr>
                              <td class="table-year-value">
                                 <b></b>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                              <td>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Prepared By: 
                           <t class="font-weight-light">......................................................................................</t>
                        </h4>
                     </div>
                     <hr>
                     <br>
                     <div class="col-6">
                        <h4 class="mb-0 ml-2">
                           Class Teacher: 
                           <t class="font-weight-light">...................................................................................</t>
                        </h4>
                     </div>
                     <hr>
                     <br>
                  </div>
               </div>
            </div>
            <!-- Footer -->
            <section class="mt-8">
               <?php require_once "../../inc/footer.php";?>
            </section>
         </div>
      </div>
   </div>
   <!-- Scripts -->
   <?php require_once "../../inc/scripts.inc.php";?>
</body>