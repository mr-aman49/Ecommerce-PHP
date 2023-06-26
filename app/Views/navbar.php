<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a href="<?=base_url()?>">Ecommerce</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
            <li class="nav-item">
            <a class="nav-link " href="login"><i class="bi bi-person"></i>Login</a>
            </li>
            
        </ul>

        <ul class="navbar-nav mb-2 mb-lg-0">
            <?php $session=session(); ?>
            <?php if($session->loginned=='loginned'):?>

                <li class="nav-item">
                    <a class="nav-link active" href="<?=base_url()?>/<?$session->user_type=='admin'?'admin_dashboard':'user_dashboard'?>">
                    <i class="bi bi-person-fill"></i><?=$session->username ?> </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url()?>/logout">
                    <i class="bi bi-person-fill-sub"></i>Logout</a>
                </li>
                <?php else: ?>

                
            
          
            <li class="nav-item">
                <a class="nav-link" href="<?=base_url()?>/register">
                <i class="bi bi-person-fill-add"></i>Register</a>
            </li>
         <?php endif ?>
        </ul>


      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>