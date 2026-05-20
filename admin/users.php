<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Користувачі | Адмін Панель</title>

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

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--primary);
            cursor: pointer;
            z-index: 1001;
        }

        .card {
            border: none;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        }

        .table th {
            font-weight: 600;
            color: var(--gray);
            text-transform: uppercase;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
        }

        .table td {
            vertical-align: middle;
        }

        .badge {
            font-weight: 500;
            padding: 0.4em 0.8em;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
            font-size: 0.875rem;
        }

        @media (max-width: 992px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.show { transform: translateX(0); }
            .main-content { margin-left: 0; }
            .menu-toggle { display: block; }
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
        <a href="index.php" class="nav-link">
            <i class="bi bi-speedometer2"></i> Панель
        </a>
        <a href="reservations.php" class="nav-link">
            <i class="bi bi-calendar-check"></i> Бронювання
        </a>
        <a href="tables.php" class="nav-link">
            <i class="bi bi-table"></i> Столики
        </a>
        <a href="users.php" class="nav-link active">
            <i class="bi bi-people"></i> Користувачі
        </a>
        <a href="analytics.php" class="nav-link">
            <i class="bi bi-graph-up"></i> Аналітика
        <a href="../reservation.php" class="nav-link">
            <i class="bi bi-card-checklist"></i> Бронювання номеру
        </a>
        </a>
    </nav>
</aside>

<!-- MAIN CONTENT -->
<main class="main-content">

    <!-- HEADER -->
    <div class="header">
        <div>
            <h1>Користувачі</h1>
            <small class="text-muted">Управління всіма користувачами</small>
        </div>
        <div>
            <button class="btn btn-primary me-2">
                <i class="bi bi-person-plus"></i> Додати користувача
            </button>
            <img src="images/admin.jpg" alt="User" class="user-avatar">
        </div>
    </div>

    <!-- USERS TABLE -->
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th>Фото</th>
                            <th>Ім’я</th>
                            <th>Пошта</th>
                            <th>Телефон</th>
                            <th>Роль</th>
                            <th>Статус</th>
                            <th>Дата приєднання</th>
                            <th>Дії</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="images/avatar/1.jpg" width="40" class="rounded-circle" alt="User"></td>
                            <td><strong>Олена Коваль</strong></td>
                            <td>olena@example.com</td>
                            <td>+380 99 123 4567</td>
                            <td><span class="badge bg-primary">Адмін</span></td>
                            <td><span class="badge bg-success">Активний</span></td>
                            <td>12 Бер 2024</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="images/avatar/2.jpg" width="40" class="rounded-circle" alt="User"></td>
                            <td><strong>Максим Петренко</strong></td>
                            <td>max@example.com</td>
                            <td>+380 67 987 6543</td>
                            <td><span class="badge bg-info">Менеджер</span></td>
                            <td><span class="badge bg-success">Активний</span></td>
                            <td>05 Лют 2025</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="images/avatar/3.jpg" width="40" class="rounded-circle" alt="User"></td>
                            <td><strong>Софія Іваненко</strong></td>
                            <td>sofia@example.com</td>
                            <td>+380 93 555 2211</td>
                            <td><span class="badge bg-secondary">Офіціант</span></td>
                            <td><span class="badge bg-warning text-dark">Очікує</span></td>
                            <td>28 Жов 2025</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="images/avatar/4.jpg" width="40" class="rounded-circle" alt="User"></td>
                            <td><strong>Дмитро Шевчук</strong></td>
                            <td>dmitro@example.com</td>
                            <td>+380 50 777 8899</td>
                            <td><span class="badge bg-dark">Шеф</span></td>
                            <td><span class="badge bg-danger">Заблокований</span></td>
                            <td>15 Вер 2024</td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary me-1" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-success" title="Unblock">
                                    <i class="bi bi-unlock"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <nav class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Попередня</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Наступна</a></li>
                </ul>
            </nav>
        </div>
    </div>

</main>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Mobile menu
    document.getElementById('menuToggle').addEventListener('click', function() {
        document.getElementById('sidebar').classList.toggle('show');
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