<?php $page_title = "Бронювання"; $current_page = "reservations"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <div class="header">
        <h1>Бронювання</h1>
        <button class="btn btn-primary"><i class="bi bi-plus"></i> Нове бронювання</button>
    </div>

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

    <div class="card shadow-sm" style="border-radius: 16px;">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Клієнт</th>
                        <th>Дата</th>
                        <th>Столик</th>
                        <th>Статус</th>
                        <th>Дії</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>101</td>
                        <td>Олена Коваль</td>
                        <td>2025-11-01 19:00</td>
                        <td>Столик 5</td>
                        <td><span class="badge bg-success">Підтверджено</span></td>
                        <td><button class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></button></td>
                    </tr>
                    <!-- ще рядки -->
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
