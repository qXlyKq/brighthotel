<aside class="sidebar" id="sidebar">
    <div class="sidebar-header">
        <img src="images/logo.png" alt="Logo">
    </div>
    <nav>
        <a href="index.php" class="nav-link <?php echo $current_page == 'dashboard' ? 'active' : ''; ?>">
            <i class="bi bi-speedometer2"></i> Панель керування
        </a>
        <a href="reservations.php" class="nav-link <?php echo $current_page == 'reservations' ? 'active' : ''; ?>">
            <i class="bi bi-calendar-check"></i> Бронювання
        </a>
        <a href="tables.php" class="nav-link <?php echo $current_page == 'tables' ? 'active' : ''; ?>">
            <i class="bi bi-table"></i> Столи
        </a>
        <a href="users.php" class="nav-link <?php echo $current_page == 'users' ? 'active' : ''; ?>">
            <i class="bi bi-people"></i> Користувачі
        </a>
        <a href="analytics.php" class="nav-link <?php echo $current_page == 'analytics' ? 'active' : ''; ?>">
            <i class="bi bi-graph-up"></i> Аналітика
        </a>
    </nav>
</aside>
