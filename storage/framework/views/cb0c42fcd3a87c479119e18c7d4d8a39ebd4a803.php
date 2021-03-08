<?php $__env->startSection('title', 'Patient Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

<?php $__env->startSection('content'); ?>

<?php echo $__env->make('expert.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('expert.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style type="text/css">

.table-responsive {
    white-space: normal;
}
.dataTables_length{
  display: none;
}
</style>

<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">

        <?php if (session('message')): ?>
        <div class="col-lg-12">
            <div class="alert alert-<?php echo e(session('class')); ?> alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span><?php echo e(session('message')); ?></span></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-lg-8">

          <div class="card bg-dark">
      		<div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-list"></i><span>  Patient Manage </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Patient  
              </div> 
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/patientsaddac')); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">

                <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Patient Type </label>
                          <select required="" type="text" class="form-control" id="pat_type" name="pat_type">
                            <option value="OPD - Out Patient">OPD - Out Patient</option>
                            <option value="IPD - In Patient">IPD - In Patient</option>
                            
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Patient Name </label>
                          <input required="" type="text" class="form-control" id="name" name="name" placeholder="Enter Patient Name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Age </label>
                          <input required="" type="number" class="form-control" id="age" name="age" placeholder="Enter Patient Age">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Gender </label>
                          <select required="" type="text" class="form-control" id="gender" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>

                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Phone </label>
                          <input required="" type="number" class="form-control" id="phone" name="phone" placeholder="Enter Patient Phone">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Address </label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Patient Address">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Guardian Name </label>
                          <input type="text" class="form-control" id="gur_name" name="gur_name" placeholder="Enter Guardian Name">
                      </div>
                  </div>

                  <div class="col-md-12">
                      <div class="form-group">
                          <label for="name">Remarks </label>
                          <input type="text" class="form-control" id="remarks" name="remarks" placeholder="Enter Remarks">
                      </div>
                  </div>

                  

                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/patients')); ?>" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-dark btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Save
                    </button>
                  </div>

              </div>

            </form>

            </div>
          </div>
               
          </div>
        </div>

        

      </div><!--End Row-->
	  
       <!--End Dashboard Content-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   

  <?php echo $__env->make('expert.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('js'); ?>
    <script>
    $(document).ready(function() {
      $("#gender").select2();
      $("#floor").select2();

      $("#destination").on('change',function(){

        $.ajax({
            url: "<?php echo e(url('marchant/destination')); ?>",
            data: {destination: $(this).val()},
            success: function(data){
              $("#parcel_type_res").html(data);
            }
        });

      });

      $("#qcat").on('change','select[name="parcel_type"]', function(){

        $.ajax({
            url: "<?php echo e(url('marchant/parcel_type')); ?>",
            data: {parcel_type: $(this).val()},
            success: function(data){
              $("#delivery_type_res").html(data);
            }
        });

      });

      $("#qcat").on('change','select[name="delivery_type"]', function(){
      
      var destination = $("#destination").val();
      var parcel_type = $("#parcel_type").val();
      var delivery_type = $("#delivery_type").val();

        $.ajax({
            url: "<?php echo e(url('marchant/showweightprice')); ?>",
            data: {destination: destination, parcel_type: parcel_type, delivery_type: delivery_type},
            success: function(data){
              $("#package_typeres").html(data);
            }
        });

    });

    $("#qcat").on('change','select[name="package_type"]', function(){
      //alert($(this).val());

        $.ajax({
            url: "<?php echo e(url('marchant/bookingcal')); ?>",
            data: {package_type: $(this).val()},
            success: function(data){
              $("#deliverycharge").html(data);
              $("#deliverychargef").val(data);
            }
        });

    });


    $("#total_col_amt").on('keyup',function(){
      //alert($(this).val());
      var total_col_amt = $("#total_col_amt").val();
      var deliverychargef = $("#deliverychargef").val();

        $.ajax({
            url: "<?php echo e(url('marchant/bookingcalcodper')); ?>",
            data: {total_col_amt: total_col_amt, deliverychargef: deliverychargef },
            success: function(data){
              $("#bookingcalcodper").html(data);
              $("#bookingcalcodperf").val(data);
              totalcharges();
            }
        });

    });

    });

    function totalcharges(){
      var deliverychargef = $("#deliverychargef").val();
      var bookingcalcodperf = $("#bookingcalcodperf").val();
      
      var totalcharges = (+deliverychargef + +bookingcalcodperf);

      $("#totalcharges").html(totalcharges);
      $("#totalchargesf").val(totalcharges);
      discount();
    }

    function discount(){

      var totalchargesf = $("#totalchargesf").val();

      $.ajax({
            url: "<?php echo e(url('marchant/bookingdiscountcal')); ?>",
            data: {totalchargesf: totalchargesf},
            success: function(data){
              //console.log(data);
              $("#discount").html(data);
              $("#discount").val(data);
              gtotalcharge();
            }
        });

    }


    function gtotalcharge(){

      var totalchargesf = $("#totalchargesf").val();

      $.ajax({
            url: "<?php echo e(url('marchant/bookinggtotalcharge')); ?>",
            data: {totalchargesf: totalchargesf},
            success: function(data){
              //console.log(data);
              $("#gtcharg").html(data);
              $("#gtchargf").val(data);
              ytotalamount();
            }
        });

    }


    function ytotalamount(){
      var total_col_amt = $("#total_col_amt").val();
      var gtchargf = $("#gtchargf").val();
      
      var ytotalamount = (+total_col_amt - +gtchargf);

      $("#ytotalamount").html(ytotalamount);
      $("#ytotalamountf").val(ytotalamount);
      discount();
    }

    
  function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
      object.value = object.value.slice(0, object.maxLength)
  }
    
  function isNumeric (evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode (key);
    var regex = /[0-9]|\./;
    if ( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }


$(document).ready(function() {
    $('#txtPhone').blur(function(e) {

        if (validatePhone('txtPhone')) {
            $('#spnPhoneStatus').html('<span class="login100-form-title"><div class="alert alert-success alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert">×</button><div class="alert-icon contrast-alert"><i class="icon-close"></i></div><div class="alert-message"><span>Valid Phone Number .</span></div></div></span>');
        }
        else {

            $('#spnPhoneStatus').html('<span class="login100-form-title"><div class="alert alert-danger alert-dismissible" role="alert" style="width:100%;"><button type="button" class="close" data-dismiss="alert">×</button><div class="alert-icon contrast-alert"><i class="icon-close"></i></div><div class="alert-message"><span>Please Enter 11 Digit Phone Number .</span></div></div></span>');
        }
    });

  function validatePhone(txtPhone) {
  var btnText = $(this).find("[type=submit]").html();
    var a = document.getElementById(txtPhone).value;
    var filter = /[1-9]{1}[0-9]{9}/;

    if (filter.test(a)) {
        return true;
    } else {
        return false;
    }

}


$("#cus_order_id").on('keyup',function(){
      //alert($(this).val());
        $.ajax({
            url: "<?php echo e(url('marchant/cus_order_id_check')); ?>",
            data: {cus_order_id: $(this).val()},
            success: function(data){
              $("#cus_order_id_check").html(data);
            }
        });

    });

    

});//]]> 

</script>

  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xamppp\htdocs\hospital_management\modern_hospital_private\resources\views/admin/patients/patientsadd.blade.php ENDPATH**/ ?>