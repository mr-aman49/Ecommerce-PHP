<?= $this->extend('public_layout')?>
<?= $this->section('content')?>
<div class="jumbotron">
  <div class="container text-center">
          
    <?php
    use App\Models\UserDetailsModel; 
    $model= new UserDetailsModel();
    $session =session();
    $user_id=$session->user_id;
    $record=$model->where('user_id',$user_id)->first();
    
    ?>
    <div class='class'>
        <div class="card-body">
        <form action="<?=base_url('profile')?>" method="post">
        <div class='row'>
        <h1>change profile</h1>
            <div class='col'>
                <label for='country'>Country:</label><br/>
                <input type='text' class="form-control" name='country' id='country'
                value="<?= ! is_null($record)?$record['country']:''?>">
            </div>

            <div class='col'>
                <label for='state'>State:</label><br/>
                <input type='text' class="form-control" name='state' id='state'
                value="<?= ! is_null($record)?$record['state']:''?>">
            </div>

            <div class='col'>
                <label for='district'>District:</label><br/>
                <input type='text' class="form-control" name='district' id='district'
                value="<?= ! is_null($record)?$record['district']:''?>">
            </div>
        </div>

        <div class='row'>
            <div class='col'>
                <label for='pincode'>Pincode:</label><br/>
                <input type='text' class="form-control" name='pincode' id='pincode'
                value="<?= ! is_null($record)?$record['pincode']:''?>">
            </div>

            <div class='col'>
                <label for='mobile'>Mobile number:</label><br/>
                <input type='text' class="form-control" name='mobile' id='mobile'
                value="<?= ! is_null($record)?$record['mobile']:''?>">
            </div>

            
        </div>

        <div class='row'>
        <div class='col'>
                <label for='local_address'>Local Address</label><br/>
                <textarea name="local_address"class="form-control" id="local_address"><?= ! is_null($record)?$record['local_address']:''?></textarea>
            </div>

            <div class='col'>
                <label for='permanent_address'>Permanent Address</label><br/>
                <textarea name="permanent_address"class="form-control" id="permanent_address"><?= ! is_null($record)?$record['permanent_address']:''?></textarea>
            </div>

            
        </div>
        <div class='text-center my-2'>
        <button type="submit" class='btn btn-primary'> Save Changes</button>
        </div>
        
    </form>
        </div>
    </div>
    
  </div>
</div>

<?=$this->endSection()?>