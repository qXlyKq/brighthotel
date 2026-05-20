<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title ?? 'Admin Dashboard'; ?></title>

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
        .sidebar-header { text-align: center; margin-bottom: 3rem; }
        .sidebar-header img { height: 50px; filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1)); }
        .nav-link {
            color: #6c757d;
            padding: 0.75rem 1rem;
            border-radius: 12px;
            margin-bottom: 0.5rem;
            font-weight: 500;
            transition: all 0.3s;
            display: flex;
            align-items: center;
        }
        .nav-link i { margin-right: 12px; font-size: 1.1rem; width: 24px; }
        .nav-link:hover, .nav-link.active {
            background: var(--primary);
            color: white !important;
            transform: translateX(5px);
        }
        .main-content { margin-left: 280px; padding: 2rem; transition: margin 0.3s ease; }
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
        .user-avatar { width: 50px; height: 50px; border-radius: 50%; object-fit: cover; border: 3px solid var(--primary); }
        .menu-toggle { display: none; background: none; border: none; font-size: 1.5rem; color: var(--primary); cursor: pointer; }
        @media (max-width: 992px) {
            .sidebar { transform: translateX(-100%); }
            .sidebar.show { transform: translateX(0); }
            .main-content { margin-left: 0; }
            .menu-toggle { display: block; }
        }
    </style>
</head>
<body>