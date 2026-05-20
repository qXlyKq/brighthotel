<?php $page_title = "Аналітика"; $current_page = "analytics"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <div class="header">
        <h1>Аналітика</h1>
        <select class="form-select w-auto">
            <option>Останні 7 днів</option>
            <option>Останні 30 днів</option>
            <option>Останній рік</option>
        </select>
    </div>

    <div class="row g-4">
        <div class="col-lg-8">
            <div class="card" style="border-radius: 16px;">
                <div class="card-body">
                    <canvas id="analyticsChart" height="300"></canvas>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100" style="border-radius: 16px;">
                <div class="card-body">
                    <h5>Популярні страви</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between">Цезар салат <span class="badge bg-primary">142</span></li>
                        <li class="list-group-item d-flex justify-content-between">Стейк <span class="badge bg-success">98</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    new Chart(document.getElementById('analyticsChart'), {
        type: 'line',
        data: {
            labels: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Нд'],
            datasets: [{
                label: 'Бронювання',
                data: [12, 19, 15, 25, 22, 30, 28],
                borderColor: '#4361ee',
                backgroundColor: 'rgba(67,97,238,0.1)',
                tension: 0.4
            }]
        }
    });
</script>

<?php include 'includes/footer.php'; ?>
