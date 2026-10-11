<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="content">
    <div class="container">
        <div class="card">
            <h1>Customer Accounts</h1>

            <p>
                The following customer records come from a static PHP array.
            </p>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php foreach ($customers as $index => $customer): ?>
                            <tr>
                                <td><?= esc($index + 1) ?></td>
                                <td><?= esc($customer['fullName']) ?></td>
                                <td><?= esc($customer['email']) ?></td>
                                <td><?= esc($customer['phone']) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>