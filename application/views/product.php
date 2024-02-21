<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>№</th>
                                <th>Наимeнование</th>
                                <th>Колличество</th>
                                <th>Цена</th>
                            </tr>
                        </thead>
                        <?php
                            foreach($product as $row)
                            {
                                echo 
                                '<tr>
                                <td>'.$row['ProductID'].'</td>
                                <td>'.$row['ProductName'].'</td>
                                <td>'.$row['ProductCount'].'</td>
                                <td>'.$row['ProductPrice'].'</td>
                                </tr>';
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