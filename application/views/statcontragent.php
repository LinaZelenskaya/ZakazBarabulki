<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID контрагента</th>
                                <th>Наименование контрагента</th>
                                <th>Количество заказов</th>
                                <th>Сколько продуктов заказано</th>
                                <th>Сумма заказов</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($contragent as $row)
                            {
                                echo '<tr>
                                <td>'.$row['ContragentID'].'</td>
                                <td>'.$row['ContragentName'].'</td>
                                <td>'.$row['countOrder'].'</td>
                                <td>'.$row['SumCount'].'</td>
                                <td>'.$row['Sum'].'</td>
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