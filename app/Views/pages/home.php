<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="hero">
    <div class="container">
        <h1>Welcome to Our Point-of-Sale System</h1>

        <p>
            This is the first version of a CodeIgniter-based POS system.
            It demonstrates routes, controllers, views, navigation links,
            and static PHP arrays.
        </p>

        <a class="button" href="<?= site_url('customers') ?>">
            View Customers
        </a>

        <a class="button" href="<?= site_url('users') ?>">
            View Users
        </a>
    </div>
</section>

<?= $this->endSection() ?>