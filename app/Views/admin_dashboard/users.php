<?= $this->extend('private_layout')?>
<?= $this->section('content')?>



<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1>List of registerd users</h1>
            <table class="table table-dark table-bordered">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this-> endSection()?>