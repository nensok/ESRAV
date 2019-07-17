<template>
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card card-widget widget-user">
              <!-- you can Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-secondary">
              </div>
              <div class="widget-user-image">
                <img class="img-circle elevation-2" src="logo/users.png" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="description-block">
                      <h5 class="description-header">ESRAV Admin</h5>
                      <span class="description-text">Admin &amp; Monitoring Officer</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="card card-secondary">
                <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
                </div>

                <form class="form-horizontal">
                <div class="card-body">
                   <div class="form-group">
                    <div class="col-sm-10">
                      <div class="custom-file">
                        <label class="custom-file-label" for="exampleInputFile">Choose Profile picture</label>
                        <input type="file" class="custom-file-input">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-10">
                      <input type="password" class="form-control" placeholder="Password">
                    </div>
                  </div>
                   <div class="form-group">
                    <div class="col-sm-10">
                      <input type="password" class="form-control" placeholder=" Confirm Password">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm">Update Profile</button>
                </div>
                <!-- /.card-footer -->
              </form>
               
                
                <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col -->
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
