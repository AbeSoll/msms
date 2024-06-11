<style>
  /* Style for the navbar */
.navbar {
    background-color: #563d7c; /* Darker background color */
    transition: background-color 0.3s ease;
}

.navbar-brand .brand-text {
    font-weight: bold;
    font-size: 1.2em;
    color: #ffffff;
}

.navbar-toggler-icon {
    background-image: url('data:image/svg+xml;charset=utf8,%3Csvg viewBox="0 0 30 30" xmlns="http://www.w3.org/2000/svg"%3E%3Cpath stroke="rgba%28255, 255, 255, 0.5%29" stroke-width="2" linecap="round" linejoin="round" d="M4 7h22M4 15h22M4 23h22"/%3E%3C/svg%3E');
}

.nav-link {
    color: #ffffff !important;
    transition: color 0.3s ease, background-color 0.3s ease;
}

.nav-link:hover {
    color: #ffd700 !important; /* Gold color on hover */
    background-color: #452f57; /* Slightly darker background on hover */
    border-radius: 5px; /* Rounded corners for tabs */
}

/* Style for active link */
.nav-link.active {
    font-weight: bold;
    border-bottom: 2px solid #ffd700; /* Gold underline for active link */
}

.nav-item {
    position: relative;
}

/* Darken effect when cursor is near placeholder */
.navbar-collapse::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: -1;
}

.navbar:hover .navbar-collapse::before {
    opacity: 1;
}

  .user-img{
        position: absolute;
        height: 27px;
        width: 27px;
        object-fit: cover;
        left: -7%;
        top: -12%;
  }
  .btn-rounded{
        border-radius: 50px;
  }
</style>
<!-- Navbar -->
      <?php if($_settings->userdata('id') > 0): ?>
      <style>
        #login-nav{
          position:fixed !important;
          top: 0 !important;
          z-index: 1037;
        }
        #top-Nav{
          top: 30px;
        }
        .text-sm .layout-navbar-fixed .wrapper .main-header ~ .content-wrapper, .layout-navbar-fixed .wrapper .main-header.text-sm ~ .content-wrapper {
          margin-top: calc(4.93725rem + 1px);
      }
      </style>
      <nav class="bg-dark w-100 px-2 py-1 position-fixed top-0" id="login-nav">
        <div class="text-right">
          <a href="./admin" class="mx-2">Admin Panel</a>
          <span class="mx-2">Howdy, <?= $_settings->userdata('username') ?></span>
          <span class="mx-1"><a href="<?= base_url.'classes/Login.php?f=logout' ?>"><i class="fa fa-power-off"></i></a></span>
        </div>
      </nav>
      <?php endif; ?>
      <nav class="main-header navbar navbar-expand navbar-light border-0 navbar-light text-sm bg-primary text-light" id='top-Nav'>
        
        <div class="container">
          <a href="./" class="navbar-brand">
            <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Site Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light text-light"><?php echo $_settings->info('short_name') ?></span>
          </a>

          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
              <li class="nav-item">
                <a href="./" class="nav-link <?= isset($page) && $page =='home' ? "active" : "" ?>">Home</a>
              </li>
              <li class="nav-item">
                <a href="./?page=services" class="nav-link <?= isset($page) && $page =='services' ? "active" : "" ?>">Our Services</a>
              </li>
              <li class="nav-item">
                <a href="./?page=appointment" class="nav-link <?= isset($page) && $page =='appointment' ? "active" : "" ?>">Book Appointment</a>
              </li>
              <li class="nav-item">
                <a href="./?page=contact" class="nav-link <?= isset($page) && $page =='contact' ? "active" : "" ?>">Contacts</a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">Contact</a>
              </li> -->
            </ul>

            
          </div>
          <!-- Right navbar links -->
          <div class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <?php if($_settings->userdata('id') <= 0): ?>
            <a href="./admin" class="nav-link">Login</a>
            <?php endif; ?>
        </div>
        </div>
      </nav>
      <!-- /.navbar -->
      <script>
        $(function(){
          $('#search-form').submit(function(e){
            e.preventDefault()
            if($('[name="q"]').val().length == 0)
            location.href = './';
            else
            location.href = './?'+$(this).serialize();
          })
        })
      </script>