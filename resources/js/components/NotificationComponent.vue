<template>
    <div>
        <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
                <h3><i class="fas fa-bell"></i></h3> &nbsp;&nbsp;&nbsp;
          <span class="badge badge-danger navbar-badge">75</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Notifications Start Here -->
            <div class="media">
              <img src="logo/users.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Another Name
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Theres a kidnapping going on now</p>
                <p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 1 Hour Ago</p>
              </div>
            </div>
            <!-- Notifications Ends Here -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Notifications Starts Here -->
            <div class="media">
              <img src="logo/users.png" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  User Name
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Fulani Herdsmen are attacking people now</p>
                <p class="text-sm text-muted"><i class="fas fa-clock mr-1"></i> 10 Hours Ago</p>
              </div>
            </div>
            <!-- Notifications Ends Here -->
          </a>
          <div class="dropdown-divider"></div>
          <router-link to="/reports" class="dropdown-item dropdown-footer">See All Notifications</router-link>
        </div>
      </li>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
