<?php $__env->startSection('content'); ?> 
<div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">Send Message</h3>
      </div>
      <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form class="form-sample" action="" method="" >
                    <?php echo csrf_field(); ?>
                    <label for="sendto">Send To</label>
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input"> Active Members </label>
                          </div>
                          <div class="form-check">
                            <label class="form-check-label">
                              <input type="checkbox" class="form-check-input" checked> Inactive Members </label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea1">Message</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Description"></textarea>
                      </div> 
                  </form>
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                  <button class="btn btn-dark">Cancel</button>    
              </div>
            </div>
        </div>
      </div>
    </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/abishek/Desktop/Workspace/GymHub/resources/views/admin/sendmessage.blade.php ENDPATH**/ ?>