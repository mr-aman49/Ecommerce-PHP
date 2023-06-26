<?= $this->extend('public_layout')?>
<?= $this->section('content')?>


<div class="container">
                <div class="row min-vh-50 align-items-center">
                <div class="col-md-6 d-none d-md-block" data-aos="fade-down">
                        <img src="<?= base_url() ?>/public/img/reg.png" width="90%" alt="">
                    </div>

                    <div class="col-md-6 content " data-aos="fade-right">
                    
                    <form action="<?=base_url('register')?>" method="post">
                        <div class="container">
                            <h1>Register Here</h1>
                            <?php $session= session();?>
                            <?php if(! is_null($session->getFlashdata('success_message'))):?>
                            <div class="alert alert-success">
                                <?=$session->getFlashdata('success_message');?>
                            </div>

                            <?php endif ?>
                            
                            <p>Please fill in the details to create an account with us.</p>
                            
                            <div class ="mb-2">
                                <label for="username"><b>Username</b></label>
                                <input type="text" class="form-control" name="username" >
                                
                                
                            </div>
                        
                            <div class ="mb-2">
                                <label for="email"><b>Email</b></label>
                                <input type="text" class="form-control" name="email" >
                                
                            </div>

                            <div class ="mb-2">
                                <label for="password"><b>Password</b></label>
                                <input type="text" class="form-control" name="password" >
                                
                            </div>

                            
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                            <button type="submit" class="register"><strong>Register</strong></button>
                        </div>
                            <div class="container signin">
                            <p>Already have an account? <a href="login">Sign in</a>.</p>
                            </div>
                    </form>
                </div>
                    
                </div>
            </div>
<?=$this->endSection()?>