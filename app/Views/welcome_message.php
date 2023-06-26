<?= $this->extend('public_layout')?>
<?= $this->section('content')?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Online Store</h1>      
    <p>Mission, Vission & Values</p>
  </div>
</div>



<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        
        <div class="panel-body"><img src="<?= base_url() ?>/public/img/mobile.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Mobiles</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        
        <div class="panel-body"><img src="<?= base_url() ?>/public/img/computer.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Laptops,TV</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        
        <div class="panel-body"><img src="<?= base_url() ?>/public/img/mobile.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Clothes</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Spaeker,earphones</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Footwear</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Daily Use</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  <p>Online Store Copyright</p>  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>
<?=$this->endSection()?>