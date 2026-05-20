<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Адмін Панель</title>

    <!-- Bootstrap 5 + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #4361ee;
            --success: #2ecc71;
            --warning: #f39c12;
            --danger: #e74c3c;
            --dark: #2d3436;
            --light: #f8f9fa;
            --gray: #95a5a6;
        }

        * { font-family: 'Inter', sans-serif; }

        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            margin: 0;
            color: var(--dark);
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            height: 100%;
            background: #fff;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            z-index: 1000;
            padding: 2rem 1.5rem;
            transition: transform 0.3s ease;
        }

        .sidebar-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .sidebar-header img {
            height: 50px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
        }

        .nav-link {
            color: #6c757d;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            margin-bottom: 0.5rem;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            text-decoration: none;
        }

        .nav-link i {
            margin-right: 12px;
            font-size: 1.1rem;
            width: 24px;
        }

        .nav-link:hover, .nav-link.active {
            background: var(--primary);
            color: white !important;
            transform: translateX(5px);
        }

        .main-content {
            margin-left: 280px;
            padding: 2rem;
            transition: margin 0.3s ease;
        }

        .header {
            background: white;
            padding: 1.5rem 2rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h1 {
            font-size: 1.8rem;
            font-weight: 700;
            margin: 0;
            background: linear-gradient(90deg, var(--primary), #7209b7);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .user-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--primary);
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 2rem;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
            border: none;
            position: relative;
            overflow: hidden;
        }

        .stat-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 6px;
            height: 100%;
            background: var(--color);
            border-radius: 0 20px 20px 0;
        }

        .stat-icon {
            width: 70px;
            height: 70px;
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            background: var(--color);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
            margin-bottom: 1.5rem;
        }

        .stat-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin: 0.5rem 0;
            color: var(--dark);
        }

        .stat-label {
            color: var(--gray);
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.9rem;
        }

        .stat-change {
            font-size: 0.9rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            margin-top: 0.5rem;
        }

        .stat-change.positive { color: var(--success); }
        .stat-change.negative { color: var(--danger); }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
            z-index: 1001;
        }

        @media (max-width: 992px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.show { transform: translateX(0); }
            .main-content { margin-left: 0; }
            .menu-toggle { display: block; }
        }

        .welcome-modal .modal-content {
            border-radius: 20px;
            border: none;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }

        .welcome-modal .modal-header {
            border: none;
            padding: 2rem 2rem 0;
        }

        .welcome-modal .modal-body {
            padding: 1rem 2rem 2rem;
        }

        .welcome-modal .modal-footer {
            border: none;
            padding: 0 2rem 2rem;
        }

        .welcome-modal h5 {
            font-weight: 700;
            color: var(--primary);
        }
    </style>
</head>
<body>

<!-- MOBILE MENU TOGGLE -->
<button class="menu-toggle position-fixed top-0 start-0 m-3" id="menuToggle">
    <i class="bi bi-list"></i>
</button>

<!-- SIDEBAR -->
<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <img src="images/logo.png" alt="Logo">
    </div>
    <nav>
        <a href="index.php" class="nav-link active">
            <i class="bi bi-speedometer2"></i> Панель керування
        </a>
        <a href="reservations.php" class="nav-link">
            <i class="bi bi-calendar-check"></i> Бронювання
        </a>
        <a href="tables.php" class="nav-link">
            <i class="bi bi-table"></i> Столи
        </a>
        <a href="users.php" class="nav-link">
            <i class="bi bi-people"></i> Користувачі
        </a>
        <a href="analytics.php" class="nav-link">
            <i class="bi bi-graph-up"></i> Аналітика
        </a>
        <a href="../reservation.php" class="nav-link">
            <i class="bi bi-card-checklist"></i> Бронювання номеру
        </a>
    </nav>
</aside>

<!-- MAIN CONTENT -->
<main class="main-content">

    <!-- HEADER -->
    <div class="header">
        <div>
            <h1>Панель керування</h1>
            <small class="text-muted">Ласкаво просимо, Адмін!</small>
        </div>
        <img src="images/admin.jpg" alt="User" class="user-avatar">
    </div>

    <!-- STATISTICS CARDS -->
    <div class="row g-4">

        <!-- Total Users -->
        <div class="col-lg-3 col-md-6">
            <div class="stat-card" style="--color: var(--primary)">
                <div class="stat-icon">
                    <i class="bi bi-people"></i>
                </div>
                <div class="stat-value">12,485</div>
                <div class="stat-label">Всього користувачів</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 12.5%
                </div>
            </div>
        </div>

        <!-- Active Sessions -->
        <div class="col-lg-3 col-md-6">
            <div class="stat-card" style="--color: var(--success)">
                <div class="stat-icon">
                    <i class="bi bi-person-check"></i>
                </div>
                <div class="stat-value">3,248</div>
                <div class="stat-label">Активні зараз</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 8.2%
                </div>
            </div>
        </div>

        <!-- Revenue -->
        <div class="col-lg-3 col-md-6">
            <div class="stat-card" style="--color: var(--warning)">
                <div class="stat-icon">
                    <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="stat-value">$48,592</div>
                <div class="stat-label">Дохід</div>
                <div class="stat-change positive">
                    <i class="bi bi-arrow-up"></i> 23.1%
                </div>
            </div>
        </div>

        <!-- Conversion Rate -->
        <div class="col-lg-3 col-md-6">
            <div class="stat-card" style="--color: var(--danger)">
                <div class="stat-icon">
                    <i class="bi bi-graph-up-arrow"></i>
                </div>
                <div class="stat-value">68.4%</div>
                <div class="stat-label">Конверсія</div>
                <div class="stat-change negative">
                    <i class="bi bi-arrow-down"></i> 2.1%
                </div>
            </div>
        </div>

    </div>

</main>

<!-- WELCOME MODAL -->
<div class="modal fade welcome-modal" id="welcomeModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="bi bi-rocket-takeoff text-primary"></i> Вітаємо, Адмін!
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body text-center">
                <p class="lead">Готовий до нових звершень?</p>
                <p class="text-muted">Сьогодні чудовий день для продуктивності!</p>
            </div>
            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-primary px-4" data-bs-dismiss="modal">
                    Почати роботу
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Mobile menu
    document.getElementById('menuToggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
    });

    // Auto open modal
    document.addEventListener('DOMContentLoaded', function() {
        const modal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        modal.show();
    });

    // Close sidebar when clicking outside (mobile)
    document.addEventListener('click', function(e) {
        const sidebar = document.getElementById('sidebar');
        const toggle = document.getElementById('menuToggle');
        if (window.innerWidth < 992 && 
            !sidebar.contains(e.target) && 
            !toggle.contains(e.target) && 
            sidebar.classList.contains('show')) {
            sidebar.classList.remove('show');
        }
    });
</script>

</body>
</html>