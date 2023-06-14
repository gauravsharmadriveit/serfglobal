<?php include('style.php'); ?>
<?php include('header.php'); ?>
<section>
   <div class="rs-breadcrumbs img7">
      <div class="container">
         <div class="breadcrumbs-inner">
            <h1 class="page-title">
               Online Application               
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
                     <form action="" class="row justify-content-center align-items-center clearfix">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">
                              <label for="Select ">Select</label>                                 
                              <select name="country" class="form-select" id="country" required>
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
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Full Name">Full Name <span class="text-danger">*</span></label>                                 
                              <input type="text" class="form-control" id="" aria-describedby=""  required>                                                       
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Name of collge/ university">Name of collge/ university <span class="text-danger">*</span></label>                                 
                              <input type="text" class="form-control" id="" aria-describedby=""  required> 
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                           <div class="form-group">   
                              <label for="Permentent Address ">Permentent Address  <span class="text-danger">*</span></label>                                 
                                <textarea name="" class="form-control" id="" required ></textarea>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-6">
                           <div class="form-group">   
                              <label for="Permentent Address ">Communication Address   <span class="text-danger">*</span></label>                                 
                                <textarea name="" class="form-control" id="" required></textarea>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Membership Type">Membership Type  <span class="text-danger">*</span></label>                                 
                              <select name="name_title" id="name_title" class="form-select" required="">
                               <option value="" selected="">--Select Membership Type--</option>
                               <option value=""> Life Member</option>
                               <option value=""> Annual Member</option>
                               <option value=""> Sessional Member</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Upload CV">Upload CV <span class="text-danger">*</span></label>    
                              <input type="file" class="form-control b-0" required="">                            
                           </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-4">
                           <div class="form-group">   
                              <label for="Upload Payment Proof ">Upload Payment Proof  <span class="text-danger">*</span></label>    
                              <input type="file" class="form-control b-0" required="">                            
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
