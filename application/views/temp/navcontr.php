<header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #dc3545;">
            <div class="container-fluid">
              <a class="navbar-brand" href="#"><img src="imge/car.png" alt="..." class="logo" width="140" height="85"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="main"><u>Товары</u></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="manager/zayavki"><u>Оформление заказа</u></a>
                    </li>
                    <li>
                        <?php
                            echo "<a class='nav-link'>На сайте: $userlogin</a>";
                        ?>
                    </li>
                </ul>
                <ul class="navbar-nav w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="main/logout">Выход</a>
                    </li>
                </ul>
              </div>
            </div>
          </nav>
</header>