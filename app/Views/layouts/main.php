<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | POS System</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            color: #1f2937;
            background: #f3f6f4;
            font-family: Arial, sans-serif;
        }

        header {
            background: #07583d;
        }

        .navigation {
            width: min(1100px, 92%);
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            min-height: 70px;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
            text-decoration: none;
        }

        nav {
            display: flex;
            gap: 8px;
        }

        nav a {
            padding: 10px 14px;
            color: #d8eee5;
            border-radius: 6px;
            text-decoration: none;
        }

        nav a:hover,
        nav a.active {
            color: #07583d;
            background: #f5c451;
        }

        .container {
            width: min(1100px, 92%);
            margin: auto;
        }

        .hero {
            padding: 100px 0;
            color: white;
            background: linear-gradient(135deg, #063d2c, #078153);
        }

        .hero h1 {
            max-width: 750px;
            margin: 0 0 18px;
            font-size: 52px;
        }

        .hero p {
            max-width: 700px;
            color: #d5e9df;
            font-size: 19px;
            line-height: 1.7;
        }

        .button {
            display: inline-block;
            margin: 12px 8px 0 0;
            padding: 13px 20px;
            color: #063d2c;
            background: #f5c451;
            border-radius: 7px;
            font-weight: bold;
            text-decoration: none;
        }

        .content {
            min-height: 500px;
            padding: 65px 0;
        }

        .content h1 {
            color: #07583d;
            font-size: 38px;
        }

        .content p {
            max-width: 800px;
            line-height: 1.8;
        }

        .card {
            padding: 28px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            margin-top: 25px;
            border-collapse: collapse;
            background: white;
        }

        th,
        td {
            padding: 16px;
            border-bottom: 1px solid #dfe5e1;
            text-align: left;
        }

        th {
            color: white;
            background: #07583d;
        }

        tbody tr:hover {
            background: #edf8f2;
        }

        footer {
            padding: 22px;
            color: #c9ddd4;
            background: #053426;
            text-align: center;
        }

        @media (max-width: 700px) {
            .navigation {
                padding: 15px 0;
                align-items: flex-start;
                flex-direction: column;
                gap: 12px;
            }

            nav {
                width: 100%;
                overflow-x: auto;
            }

            nav a {
                white-space: nowrap;
            }

            .hero h1 {
                font-size: 38px;
            }

            .table-wrapper {
                overflow-x: auto;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="navigation">
            <a class="logo" href="<?= site_url('/') ?>">
                POS System
            </a>

            <nav>
                <a
                    class="<?= $activePage === 'home' ? 'active' : '' ?>"
                    href="<?= site_url('/') ?>"
                >
                    Home
                </a>

                <a
                    class="<?= $activePage === 'about' ? 'active' : '' ?>"
                    href="<?= site_url('about') ?>"
                >
                    About
                </a>

                <a
                    class="<?= $activePage === 'customers' ? 'active' : '' ?>"
                    href="<?= site_url('customers') ?>"
                >
                    Customers
                </a>

                <a
                    class="<?= $activePage === 'users' ? 'active' : '' ?>"
                    href="<?= site_url('users') ?>"
                >
                    Users
                </a>
            </nav>
        </div>
    </header>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        IT0049 Web System Technologies – Technical Formative Assessment 1
    </footer>
</body>
</html>