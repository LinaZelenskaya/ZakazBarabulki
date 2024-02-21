<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
        <form action="admin/updzakaz" method="post">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row">
                    <div class="col-lg-4"><label for="userlastname" class="form-label">Товар:</label></div>
                    <div class="col-lg-4"><label for="userfirstname" class="form-label">Цена за один товар:</label></div>
                    <div class="col-lg-4"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <?php
                            echo '
                            <input type="hidden" class="form-control" id="ProductID" name="ProductID" value="'.$fish['ProductID'].'">
                            <input type="text" class="form-control" id="ProductName" name="ProductName" value="'.$fish['ProductName'].'" readonly>
                        </div>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" value="'.$fish['ProductPrice'].'">
                        </div>';
                        ?>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-danger">Изменить</button>
                        </div>
                    </div>
                <div class="col-1"></div>
            </div>
            </div><br>
        </form>
    </div>
</main>