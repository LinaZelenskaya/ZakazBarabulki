<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>   
    <div class="row">
                </div>
                <table class="table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Дата заказа</th>
                                <th>Дата доставки(плановая)</th>
                                <th>Дата доставки(фактическая)</th>
                                <th>Контрагент</th>
                                <th>Колличество</th>
                                <th>Статус</th>
                                <th>Цена</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($orders as $row)
                            {
                                echo 
                                '<tr>
                                <td>'.$row['OrderID'].'</td>
                                <td>'.$row['OrderDate'].'</td>
                                <td>'.$row['OrderDatePlanPostav'].'</td>
                                <td>'.$row['OrderDateFactPostav'].'</td>
                                <td>'.$row['UserID'].'</td>
                                <td>'.$row['OrderCount'].'</td>
                                <td>'.$row['OrderStatus'].'</td>
                                <td>'.$row['PriceID'].'</td>
                                <td><button type="button" class="btn btn-danger">Удалить</button></a></td>';
                                if(!empty($row['orders']))
                                {
                                   echo'<th>'.$row['orders'].'</th>';
                                }
                                else
                                {
                                    
                                    echo '<th><a href="kontragent/kontrorders'.$row['OrderID'].'">
                                    <button type="button" class="btn btn-danger">Редактировать</button></a></th>';
                                }
                                echo '</tr>';
                               
                            }
                        ?>
                    </table>
                </div>
                <div class="col-1"></div>
            </div>
            </div><br>
            </div></div></div>
    </div>
</main>