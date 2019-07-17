<template>
    <div class="container">
        <div class="row">
          <div class="col-md-6">
              <div class="form-group">
                <label for="inputStatus">Location</label>
                <select class="form-control custom-select" @change="showSeen">
                  <option selected="" disabled="">Select State/Region</option>
                  <option>Abuja</option>
                  <option>Jos</option>
                  <option>Zamfara</option>
                  <option>Delta</option>
                  <option>Lagos</option>
                </select>
              </div>
            <!-- /.widget-user -->
          </div>
          <!-- /.col -->
          <div class="col-md-6" v-if="seen">
             <div class="col-12  d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                  State Emergency units
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-12">
                      <p class="text-muted text-sm"><b>Email: </b> <a href="https://">Esrav@stateemergencyoffice.ng</a> </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: ESRAV Street 123, Esrav City 097463, NG</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 234 - 080Emergency</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" data-toggle="modal" data-target="#sentmessage" class="btn btn-sm btn-danger">
                      <i class="fas fa-bullhorn"></i> Alert Unit
                    </a>
                  </div>
                </div>
              </div>
            </div>
           
        </div>   <!-- /.col -->
     </div>

     <!-- Modal for sending messages state units -->
    <div class="modal fade" id="sentmessage" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send messages</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="card-body">
                <div class="form-group">
                    <label for="inputName">Emergency Location</label>
                    <input type="text"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea id="Description" class="form-control" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="inputStatus">Status</label>
                    <select class="form-control custom-select">
                    <option selected="" disabled="">Select one</option>
                    <option>Fulani / Bandits</option>
                    <option>Accident</option>
                    <option>Kidnap</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-envelope"></i> Send</button>
            </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
    export default {
        data(){
            return{
              seen: false
            }
        },
        methods:{
            showSeen(){
                this.seen = true
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
