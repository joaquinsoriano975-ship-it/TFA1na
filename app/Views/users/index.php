<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="content">
    <div class="container">
        <div class="card">
            <h1>User Accounts</h1>

            <p>
                The following staff records come from a static PHP array.
            </p>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Role</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($users as $index => $user): ?>
                            <tr>
                                <td><?= esc($index + 1) ?></td>
                                <td><?= esc($user['username']) ?></td>
                                <td><?= esc($user['fullName']) ?></td>
                                <td><?= esc($user['role']) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>