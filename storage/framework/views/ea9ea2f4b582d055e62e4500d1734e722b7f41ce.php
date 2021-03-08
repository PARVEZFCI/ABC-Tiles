<?php $__env->startSection('title', 'Product details Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.''); ?>

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
      		<div class="card-header border-0  text-white" style="background-color: #FF002A;">
                <i class="fa fa-list"></i><span>  Product Type </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Product Type 
              </div> 
            </div>
            
            <div class="card-body">

              <form action="<?php echo e(url('admin/productUpdate',$productdetails->id)); ?>" id="qcat" method="post">
              <?php echo csrf_field(); ?>

              <div class="row">

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Product type name </label>
                          <select class="form-control" id="product_type" name="product_type">


                            <option ><?php echo e($productdetails->product_type); ?></option>
                          <?php $__currentLoopData = $type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                          <option value="<?php echo e($row->product_type_name); ?>"><?php echo e($row->product_type_name); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                          </select>
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Produt  Code </label>
                          <input required="" type="text" class="form-control"  name="product_code" placeholder="Enter product  code" value="<?php echo e($productdetails->product_code); ?>">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Produt  Name </label>
                          <input required="" type="text" value="<?php echo e($productdetails->product_name); ?>" class="form-control"  name="product_name" placeholder="Enter product  name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Product Specification </label>
                          
                            <select name="product_specification" id="product_specification" class="form-control">
                              <option><?php echo e($productdetails->product_specification); ?></option>

                            </select>
                         
                      </div>
                  </div>


          


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Unit of Mesurement </label>
                          <input required="" value="<?php echo e($productdetails->unit_mesurement); ?>" type="text" class="form-control"  name="unit_mesurement" placeholder="Entr unit mesurement">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Grade </label>
                          <select class="form-control" name="grade">
                          	<option value="<?php echo e($productdetails->grade); ?>">Select Grade</option>
                          	<option>A</option>
                          	<option>B</option>
                          	
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Unit Price </label>
                          <input type="text" value="<?php echo e($productdetails->unit_price); ?>" name="unit_price" class="form-control">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Comission /SQFT </label>
                          <input type="text" value="<?php echo e($productdetails->comission); ?>" name="comission" class="form-control" placeholder=" ENTR Comission ">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Bonus </label>
                          <input type="text" value="<?php echo e($productdetails->bonus); ?>" name="bonus" name="bonus" class="form-control" placeholder="Enter Bonus">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Bonus Option </label>
                          <select name="bonus_option" class="form-control">
                            <option value="<?php echo e($productdetails->bonus_option); ?>"></option>
                            <option>Yes</option>
                            <option>No</option>
                          </select>
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Date </label>
                          <input type="date" value="<?php echo e($productdetails->date); ?>" name="date" class="form-control" placeholder=" ENTR bonus  ">
                      </div>
                  </div>




                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="<?php echo e(url('admin/productdetails')); ?>" class="btn btn-danger btn-block col-md-offset-2">
                      <i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back
                    </a>
                  </div>

                  <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-block col-md-offset-2">
                      <i class="fa fa-check-square-o"></i> Update
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
    

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script type="text/javascript">

  $(document).ready(function() {

    $("#product_type").select2();
    $("#product_specification").select2();
    $("#grade").select2();
   
});

  
  $(document).ready(function() {
         $('select[name="product_type"]').on('change', function(){
             var product_type = $(this).val();
            console.log(product_type);
             
             if(product_type) {
                 $.ajax({
                     url: "<?php echo e(url('admin/producttypesize/')); ?>/"+product_type,
                     type:"GET",
                     dataType:"json",
                     success:function(data) {
                        
                        var d =$('select[name="product_specification"]').empty();
                           $.each(data, function(key, value){

                               $('select[name="product_specification"]').append('<option value="'+ value.size +'">' + value.size + '</option>');

                           });
  
                     },
                    
                 });
             } else {
                 alert('danger');
             }

         });
     });
</script>


  <?php $__env->stopSection(); ?>
<?php echo $__env->make('expert.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SERVER\htdocs\AB-Ceramic-Industries\resources\views/admin/product/productedit.blade.php ENDPATH**/ ?>