<main style="background-color: #ebe7e3;">
    <div class="container mb-2"><br>
    <form method="POST" action="admin/inssprice">
                <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class ="col-lg-2">
                        <select class="form-select" aria-label="Default select example" name="TypeName" id="TypeName">
                                    <option value=""></option>
                                <?php
                                    foreach($typeprice as $row)
                                    {
                                       echo '<option value="'.$row['TypeID'].'">'.$row['TypeName'].'</option>';
                                    }
                                ?>
                                </select>
                        </div>
                        <div class ="col-lg-2">
                        <select class="form-select" aria-label="Default select example" name="ProductName" id="ProductName">
                                    <option value=""></option>
                                <?php
                                    foreach($product as $row)
                                    {
                                       echo '<option value="'.$row['ProductID'].'">'.$row['ProductName'].'</option>';
                                    }
                                ?>
                                </select>
                        </div>
                        <div class ="col-lg-4">
                            <button type="submit" class="btn btn-danger">Новый прайслист</button>
                        </div>
                    </div>
                </div></div></form>
                </div> 
                <div class="container mb-5"><br>
                <div class="mb-3">
            </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID прайса</th>
                                <th>Тип прайса</th>
                                <th>Рыба</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($pricelist as $row)
                            {
                                echo '<tr>
                                <td>'.$row['PriceID'].'</td>
                                <td>'.$row['TypeName'].'</td>
                                <td>'.$row['ProductName'].'</td>';

                                if(!empty($row['pricelist']))
                                {
                                   echo'<th>'.$row['pricelist'].'</th>';
                                }
                                else
                                {
                                    echo '<th><a href="admin/upddprice/'.$row['PriceID'].'"><button type="button" class="btn btn-danger">Редактировать</button></a></th>';
                                    echo '<th><a href="admin/deletprice/'.$row['PriceID'].'"><button type="button" class="btn btn-danger">Удалить</button></a></th>';
                                }
                                echo '</tr>';
                            }
                            
                        ?>
                    </table>
                <div class="col-1"></div>
            </div>
            </div><br>
    </div>
    </main>