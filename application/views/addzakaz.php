<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
        <form action="contragent/inszakaz" method="post">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="row">
                        <div class="col-lg-4">
                            <?php
                            echo '
                            <input type="hidden" class="form-control" id="ProductID" name="ProductID" value="'.$fish['ProductID'].'">
                            <label for="userlastname" class="form-label">Товар:</label>
                            <input type="text" class="form-control" id="ProductName" name="ProductName" value="'.$fish['ProductName'].'" readonly>
                        </div>
                        <div class="col-lg-4">
                            <label for="userfirstname" class="form-label">Цена за один товар:</label>
                            <input type="text" class="form-control" id="ProductPrice" name="ProductPrice" value="'.$fish['ProductPrice'].'" readonly>
                        </div>';
                        ?>
                        <div class="col-lg-4">
                            <label for="userfathername" class="form-label">Количество:</label>
                            <input type="number" id="countfish" name="countfish" class="form-control"><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-danger">Заказать</button>
                        </div>
                    </div>
                <div class="col-1"></div>
            </div>
            </div><br>
        </form>
    </div>
</main>