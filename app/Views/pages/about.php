<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

<section class="content">
    <div class="container">
        <div class="card">
            <h1>About the POS System</h1>

            <p>
                This application is a basic Point-of-Sale system created
                using CodeIgniter 4 and the Model-View-Controller architecture.
            </p>

            <p>
                Routes receive the requested URL, controllers prepare the
                required information, and views display the final page.
                Customer and user records are temporarily stored in static
                PHP arrays because this version does not use a database.
            </p>
        </div>
    </div>
</section>

<?= $this->endSection() ?>