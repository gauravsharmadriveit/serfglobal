<?php include('style.php'); ?>
<?php include('header.php');
?>
<section>
   <div class="rs-breadcrumbs img7">
      <div class="container">
         <div class="breadcrumbs-inner">
            <h1 class="page-title">
               Have questions - Contact Us                       
            </h1>
         </div>
      </div>
   </div>
</section>
<section class="contact_us_section">
   <div class="container clearfix">
   <div class="row clearfix">
      <div class="col-md-6 col-sm-12 col-lg-6">
         <div class="conatct_us_tabs">
            <ul class="nav nav-tabs nav-pills nav-fill gap-2" id="myTab">
               <li class="nav-item">
                  <a href="#india" class="nav-link active" data-bs-toggle="tab">India</a>
               </li>
               <li class="nav-item">
                  <a href="#poland" class="nav-link" data-bs-toggle="tab">Poland</a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane fade show active" id="india">
                  <div class="tab_content">
                     <p>Editorial and other inquiries should be directed to</p>
                     <ul>
                        <li>Prof.(Dr.) Narendra Kumar</li>
                        <li>Executive Editor, Member Planning,  SERF International Journals</li>
                        <li><b>Email:</b> <a href="mailto:info@SERFinternationaljournal.org">info@SERFinternationaljournal.org</a> </li>
                        <li><b>Phone:</b> <a href="telto:+91-8854005488">+91-8854005488</a> </li>
                     </ul>
                  </div>
               </div>
               <div class="tab-pane fade" id="poland">
                  <div class="tab_content">
                     <p>Editorial and other inquiries should be directed to</p>
                     <ul>
                        <li>Prof. (Dr.) Ilona Pawełoszek</li>
                        <li>Faculty of Management, Częstochowa University of Technology, Poland</li>
                        <li>Chair Person Managing and planning Committee</li>
                        <li>Executive Editor, SERF International Journal</li>
                        <li><b>Email:</b> <a href="mailto:drnilona@serfinternational.com">drnilona@serfinternational.com</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-md-6 col-sm-12 col-lg-6">
         <div class="contact_form">
            <div class="card mt-lg-0 mt-sm-2">
               <div class="card-body border-0">
                  <div class="contact_title">
                     <h3>Contact Us</h3>
                  </div>
                  
                  <form method="post" action='send.php' class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="form-group">                                    
                           <input type="text" class="form-control" name="f_name" id="" aria-describedby="" placeholder="Full name" required>                               
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="form-group">                                    
                           <input type="text" class="form-control" id="" name="email" aria-describedby="" placeholder="Email address" required>                               
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="form-group">                                    
                           <input type="number" class="form-control" id="" name="mobile_number" inputmode="tel" aria-describedby="" placeholder="Mobile number" required>                               
                        </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-lg-6">
                        <div class="form-group">                                    
                            <select name="country_name" class="form-select" id="country"  required>
                            <?php include('country-name.php'); ?>
                            </select>                            
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="form-group">                                    
                           <textarea name="message"  class="form-control" id="" cols="10" rows="3" placeholder="Messages.." required></textarea>                             
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="submit_btn">
                           <input type="Submit" class="btn_submit" value="Send">
                        </div>
                     </div>
                    
                  </form>
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
   echo '<script>Swal.fire("Thank you! Your form has been submitted successfully.");</script>';
}

?>
            
