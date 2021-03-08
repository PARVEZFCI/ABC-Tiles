@extends('expert.master')

@section('title', 'Hospital Charge Add - '.$settingsinfo->company_name.' - '.$settingsinfo->soft_name.'')

@section('content')

@include('expert.sidebar')

@include('expert.topbar')

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
            <div class="alert alert-{{session('class')}} alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <div class="alert-icon contrast-alert"><i class="icon-close"></i></div>
              <div class="alert-message"><span>{{session('message')}}</span></div>
            </div>
        </div>
        <?php endif; ?>

        <div class="col-lg-8">

          <div class="card bg-dark">
      		<div class="card-header border-0 bg-transparent text-white">
                <i class="fa fa-list"></i><span>  Product Type </span>
            </div>

            <div class="card">
            <div class="card-header">
              <div style="display:inline-block; padding-top:5px;">
                <i class="fa fa-plus-circle"></i> Add New Product Type 
              </div> 
            </div>
            
            <div class="card-body">

              <form action="{{url('admin/companystore')}}" id="qcat" method="post">
              @csrf

              <div class="row">

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Company Code </label>
                          <input type="text" name="company_code" class="form-control" placeholder="company Code">
                          
                      </div>
                  </div>

                   
                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Company Name</label>
                          <input required="" type="text" class="form-control"  name="company_name" placeholder="Enter company_name">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Company city & Post Code</label>
                          <input required="" type="text" class="form-control"  name="company_city" placeholder="Enter Company city & Post Code">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Company Phone</label>
                          <input type="number" name="company_phone" class="form-control" placeholder="company phone">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Company fax</label>
                          <input required="" type="text" class="form-control"  name="company_fax" placeholder="Company fax">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Company Email </label>
                          <input required="" type="email" class="form-control"  name="company_email" placeholder="company Email">
                      </div>
                  </div>

                   <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Company Address </label>
                          <input required="" type="text" class="form-control"  name="company_address" placeholder="company_address ">
                      </div>
                  </div>

                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name"> Contact Person Name</label>
                          <input required="" type="text" class="form-control"  name="contact_person" placeholder="Entr contact_person">
                      </div>
                  </div>


                  <div class="col-md-6">
                      <div class="form-group">
                          <label for="name">Contact Person Designation</label>
                          <input required="" type="text" class="form-control"  name="c_p_designation" placeholder="Entr Contact Person Designation">
                      </div>
                  </div>

                  

                  <div class="col-md-12">
                  </div>
                  
                  <div class="col-md-6">
                    <a href="{{url('admin/producttype')}}" class="btn btn-dark btn-block col-md-offset-2">
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
   

  @include('expert.copyright')

  @endsection

  @section('js')
    <script>
    

</script>

  @endsection