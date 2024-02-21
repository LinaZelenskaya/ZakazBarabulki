<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID товара</th>
                                <th>Наименование товара</th>
                                <th>Сколько товаров заказано</th>
                                <th>Сумма заказов</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($product as $row)
                            {
                                echo '<tr>
                                <td>'.$row['ProductID'].'</td>
                                <td>'.$row['ProductName'].'</td>
                                <td>'.$row['countProd'].'</td>
                                <td>'.$row['sum'].'</td>
                                </tr>';
                            }
                        ?>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
            </div><br>
            </div></div></div></div></form>
    </div>
    </main>