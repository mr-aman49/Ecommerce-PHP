<?= $this->extend('public_layout')?>
<?= $this->section('content')?>


<div class="container">
                <div class="row min-vh-50 align-items-center">
                <div class="col-md-6 d-none d-md-block" data-aos="fade-down">
                        <img src="<?= base_url() ?>/public/img/log.png" width="90%" alt="">
                    </div>

                    <div class="col-md-6 content " data-aos="fade-right">
                    
                    <form action="<?=base_url('login')?>" method="post">
                        <div class="container">
                            <h1>Login Here</h1>
                            <?php $session= session();?>
                            <?php if(! is_null($session->getFlashdata('failed_message'))):?>
                            <div class="alert alert-danger">
                                <?=$session->getFlashdata('failed_message');?>
                            </div>

                            <?php endif ?>
                            <?php $validation=\Config\Services::validation();?>
                            <p>Please fill in the details to create an account with us.</p>
                            
                        
                            <div class ="mb-2">
                                <label for="email"><b>Email</b></label>
                                <input type="text" class="form-control" name="email" >
                                
                            </div>

                            <div class ="mb-2">
                                <label for="password"><b>Password</b></label>
                                <input type="text" class="form-control" name="password" >
                                
                            </div>

                            <button type="submit" class="register"><strong>Register</strong></button>
                        </div>
                            <div class="container signin">
                            <p>Don't have an account? <a href="register">Sign Up</a>.</p>
                            </div>
                    </form>
                </div>
                    
                </div>
            </div>
<?=$this->endSection()?>