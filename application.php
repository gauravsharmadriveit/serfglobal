<?php include('style.php'); ?>
<?php include('header.php'); ?>
<section>
   <div class="rs-breadcrumbs img7">
      <div class="container">
         <div class="breadcrumbs-inner">
            <h1 class="page-title">
               Application               
            </h1>
         </div>
      </div>
   </div>
</section>
<section class="online_application clearfix">
   <div class="container clearfix">
      <div class="row clearfix">
         <div class="col-md-12">
            <div class="form_box">
               <div class="card">
                  <div class="card-body">
                     <form method="post" action='application_send.php' enctype="multipart/form-data" class="row justify-content-center align-items-center clearfix">
                        <div class="col-md-6 col-sm-12 col-lg-3">
                           <div class="form-group">
                              <label for="Select ">Select</label>                                 
                              <select name="name_title" class="form-select" id="name_title" required>
                                 <option value="" selected="">--Select--</option>
                                 <option value="Mr.">Mr.</option>
                                 <option value="Mrs.">Mrs.</option>
                                 <option value="Miss">Miss</option>
                                 <option value="Ms.">Ms.</option>
                                 <option value="Dr.">Dr.</option>
                                 <option value="Prof.">Prof.</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-3">
                           <div class="form-group">   
                              <label for="Full Name">Full Name <span class="text-danger">*</span></label>                                 
                              <input type="text" name="f_name" class="form-control" id="f_name" aria-describedby=""  required>                                                       
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-3">
                           <div class="form-group">   
                              <label for="Full Name">Email Address <span class="text-danger">*</span></label>                                 
                              <input type="text" class="form-control" name="email" id="email" aria-describedby=""  required>                                                       
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-3">
                           <div class="form-group">   
                              <label for="Name of collge/ university">Name of collge/ university <span class="text-danger">*</span></label>                                 
                              <input type="text" class="form-control" id="college_university" aria-describedby="" name="college_university"  required> 
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                           <div class="form-group">   
                              <label for="Permentent Address ">Permentent Address  <span class="text-danger">*</span></label>                                 
                                <textarea  class="form-control" id="p_address" name="p_address" required ></textarea>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                           <div class="form-group">   
                              <label for="Permentent Address ">Communication Address   <span class="text-danger">*</span></label>                                 
                                <textarea  class="form-control" id="c_address" name="c_address" required></textarea>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Membership Type">Fellowship / National Awards  <span class="text-danger">*</span></label>   
                              <select name="f_n_award" id="f_n_award" class="form-select" required="">                              
                              <option value="0" selected>Select Fellowship /National Awards</option>
                              <optgroup label="General Category">                              
                               <option value="Aishwarya Memorial the Best Teacher Award">Aishwarya Memorial the Best Teacher Award</option>
                               <option value="Aishwarya Memorial The Best Scholar Award">Aishwarya Memorial The Best Scholar Award</option>
                               <option value="Aishwarya Memorial Young Scientist Award">Aishwarya Memorial Young Scientist Award </option>
                               <option value="Aishwarya Memorial Research Excellence Award">Aishwarya Memorial Research Excellence Award</option>
                               </optgroup>
                               <optgroup label="Conference Category">                              
                               <option value="Aishwarya Memorial The Best Paper award">Aishwarya Memorial The Best Paper award</option>
                               <option value="Aishwarya Memorial The best presentation award">Aishwarya Memorial The best presentation award</option>
                               <option value="Aishwarya Memorial The best poster award">Aishwarya Memorial The best poster award</option>
                               <option value="Aishwarya Memorial Research Excellence Award">Aishwarya Memorial Research Excellence Award</option>
                               </optgroup>
                               </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Membership Type">Fellowship / Global Awards  <span class="text-danger">*</span></label>                                 
                              <select name="f_g_award"  id="f_g_award" class="form-select"  required>
                              <option value="0" selected>Select Fellowship /Global Awards</option>
                               <optgroup label="International Awards">       
                               <option value="Aishwarya Memorial International Academician award"> Aishwarya Memorial International Academician award</option>
                               <option value="Aishwarya Memorial International Researcher award"> Aishwarya Memorial International Researcher award</option>
                               <option value="Aishwarya Memorial International Young Scientist Award"> Aishwarya Memorial International Young Scientist Award</option>  
                               <option value="Aishwarya Memorial Research Excellence Award">Aishwarya Memorial Research Excellence Award</option> 
                               </optgroup>    
                               <optgroup label="Conference Category">                              
                               <option value="Aishwarya Memorial The Best Paper award">Aishwarya Memorial The Best Paper award</option>
                               <option value="Aishwarya Memorial The best presentation award">Aishwarya Memorial The best presentation award</option>
                               <option value="Aishwarya Memorial The best poster award">Aishwarya Memorial The best poster award</option>
                               <option value="Aishwarya Memorial Research Excellence Award">Aishwarya Memorial Research Excellence Award</option>
                               </optgroup>                            
                            </select>
                           </div>
                        </div>
                       
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Upload CV">Upload CV <span class="text-danger">*</span></label>    
                              <input name="file[]" multiple="multiple" class="form-control b-0" type="file" id="file" accept=".doc,.docx,.pdf" required="">                       
                           </div>
                        </div>
                        
                        <div class="col-md-6 col-sm-12 col-lg-3">                            
                                <input type="Submit" class="btn_application mt-3 mb-2" value="Submit Application ">                       
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<?php include('footer.php'); ?>
<?php include('script.php'); ?>
<?php $status = @$_GET['status']; 
if($status == 'true') {
   echo '<script>Swal.fire("Mail has been sent successfully");</script>';
}
?>
      