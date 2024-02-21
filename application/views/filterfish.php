<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
                    <form method="POST" action="" role="form" class="form-inline">
                    <div class="row">
                            <div class="col-lg-12">
                                <h1 style="color: #dc3545;">Все товары</h1><hr style="color: #dc3545;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="d1" class="form-label">Фильтровать по виду рыб</label>
                            </div>
                            <div class="col-lg-4">
                                <label for="d1" class="form-label">По цене</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <select class="form-select" aria-label="Default select example" name="fishname" id="fishname">
                                    <option value=""></option>
                                <?php
                                    foreach($fishselect as $row)
                                    {
                                       echo '<option value="'.$row['ProductID'].'">'.$row['ProductName'].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="С" name="searchproductpriceC" id="searchproductpriceC">
                            </div>
                            <div class="col-lg-3">
                                <input type="text" class="form-control" placeholder="По" name="searchproductpricePo" id="searchproductpricePo"><br>
                            </div>
                            <div class="col-lg-2">
                            <button type="submit" class="btn btn-danger">Поиск</button>
                            </div>
                        </div><br>
                    </form>
    </div>
</main>