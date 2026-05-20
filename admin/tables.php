<?php $page_title = "Столики"; $current_page = "tables"; ?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="main-content">
    <div class="header">
        <h1>Управління столиками</h1>
        <button class="btn btn-success"><i class="bi bi-plus"></i> Додати столик</button>
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

    <div class="row g-3">
        <?php for($i=1; $i<=12; $i++): ?>
        <div class="col-md-3">
            <div class="card text-center p-3" style="border-radius: 16px; <?php echo $i%3==0 ? 'background: #f8d7da; color: #721c24;' : ''; ?>">
                <h5>Столик <?php echo $i; ?></h5>
                <p><?php echo $i%3==0 ? 'Зайнято' : 'Вільно'; ?></p>
                <small>4 місця</small>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</main>

<?php include 'includes/footer.php'; ?>
