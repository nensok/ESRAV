<template>
    <div class="container">
        <div class="card card-secondary card-outline">
            <div class="card-header">
              <h3 class="card-title">Reports</h3>

              <div class="card-tools">
                <div class="input-group input-group-sm">
                  <input type="text" class="form-control" placeholder="Search Reports">
                  <div class="input-group-append">
                    <div class="btn btn-secondary">
                      <i class="fas fa-search"></i>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-controls">
                <div class="btn-group">
                </div>
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <img height="50px" width="50px" class="img-circle img-bordered-sm" src="logo/users.png" alt="user image">
                      </div>
                    </td>
                    <td class="mailbox-star"><router-link to="/emergency-unit"><i class="fas fa-check"></i></router-link></td>
                    <td class="mailbox-name"><a href="read-mail.html">Umaru Bauchi</a></td>
                    <td class="mailbox-subject"><b>Accident</b> - Theres been an accident along Jos Bauchi road...
                    </td>
                    <td class="mailbox-date">5 mins ago</td>
                    <td class="mailbox-attachment"><i class="fas fa-trash text-danger"></i></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="icheck-primary">
                        <img height="50px" width="50px" class="img-circle img-bordered-sm" src="logo/users.png" alt="user image">
                      </div>
                    </td>
                    <td class="mailbox-star"><a href="#"><i class="fas fa-check"></i></a></td>
                    <td class="mailbox-name"><a href="read-mail.html">Umaru Bauchi</a></td>
                    <td class="mailbox-subject"><b>Accident</b> - Theres been an accident along Jos Bauchi road...
                    </td>
                    <td class="mailbox-date">5 mins ago</td>
                    <td class="mailbox-attachment"><i class="fas fa-trash text-danger"></i></td>
                  </tr>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer p-0">
              <div class="mailbox-controls">
                <div class="float-right">
                  1-/20
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fas fa-chevron-right"></i></button>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
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
