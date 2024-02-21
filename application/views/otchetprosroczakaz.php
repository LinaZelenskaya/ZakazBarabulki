<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID заказа</th>
                                <th>ID контрагента</th>
                                <th>ФИО контрагента</th>
                                <th>Магазин контрагента</th>
                                <th>Дата заказа</th>
                                <th>Дата плановой доставки</th>
                                <th>Дата фактической доставки</th>
                                <th>Количество заказа</th>
                                <th>Цена заказа</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <?php
                        if(!empty($contragent))
                        {
                            foreach($contragent as $row)
                            {
                                echo '<tr>
                                <td>'.$row['OrderID'].'</td>
                                <td>'.$row['UserID'].'</td>
                                <td>'.$row['FIO'].'</td>
                                <td>'.$row['ContragentName'].'</td>
                                <td>'.$row['OrderDate'].'</td>
                                <td>'.$row['OrderDatePlanPostav'].'</td>
                                <td>'.$row['OrderDateFactPostav'].'</td>
                                <td>'.$row['OrderCount'].'</td>
                                <td>'.$row['price'].'</td>
                                </tr>';
                            }
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