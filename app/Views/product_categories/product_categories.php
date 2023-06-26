<?= $this->extend('private_layout')?>
<?= $this->section('content')?>



<div class="container">
    <div class="row">
        <div class="col-sm-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="<?=base_url('/product_categories')?>" method="post" enctype="multipart/form-data">
                        <div class="mb-2">
                            <h1>Add product categories</h1>
                        </div>

                        <div class="mb-2">
                            <label for="name">Category name</label>
                            <input type="text" name="name" class="form-control" value="<?= old('name');?>">
                        </div>  
                        
                        <div class="mb-2">
                            <label for="image">Category image</label>
                            <input type="file" name="image" class="form-control" >
                        </div>

                        <div class="mb-2 text-center">
                            <input type="submit" name="save" value="Save" class="btn btn-primary">
                        </div>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this -> endSection()?>