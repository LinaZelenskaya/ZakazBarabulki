<header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #dc3545;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="img/barabulka.png" alt="..." class="logo" width="120" height="110"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/product"><u>Список товаров</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/contr1"><u>Контрагенты</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/useradmin"><u>Пользователи</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/pricelistadmin"><u>Прайслисты</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/allcontragent"><u>Отчет контрагенты</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/alltovar"><u>Отчет товары</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="admin/allcontragentzakaz"><u>Отчет заказы</u></a>
                    </li>
                    <li class="nav-item">
                        <?php
                            echo "<a class='nav-link'>На сайте: $UserLogin</a>";
                        ?>
                    </li>
                </ul>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="main/logout">Выход</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
</header>