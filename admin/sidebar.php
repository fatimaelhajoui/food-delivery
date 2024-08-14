<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="home.css" />
    <title>Bootstap 5 Responsive Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"></div>
            <div class="list-group list-group-flush my-3">
                <a href="home.php" class="list-group-item list-group-item-action bg-transparent second-text active"><i class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="liste_categories.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class="fas fa-project-diagram me-2"></i>Categories</a>
                <a href="liste_produits.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class='fas fa-pizza-slice me-2'></i>Produits</a>
                <a href="list_orders.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class='fas fa-shopping-cart me-2'></i>Orders</a>
                <a href="list_orders_history.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class='fas fa-user-friends me-2'></i>Orders History</a>
                <a href="profile.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i class='fas fa-user-circle me-2'></i>Profile</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                </div>

                
			</nav>
	
        

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");

            toggleButton.onclick = function() {
                el.classList.toggle("toggled");
            };
        </script>
</body>

</html>