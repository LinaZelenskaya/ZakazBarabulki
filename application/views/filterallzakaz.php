<main style="background-color: #ebe7e3;">
    <div class="container mb-5"><br>
    <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <form method="POST" action="" role="form" class="form-inline">
                    <div class="row">
                            <div class="col-lg-12">
                                <h1 style="color: #dc3545;">Все заказы</h1><hr style="color: #dc3545;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <label for="d1" class="form-label">По контрагенту</label>
                                <select class="form-select" aria-label="Default select example" name="contragents" id="contragents">
                                <?php
                                    foreach($contragent as $row)
                                    {
                                       echo '<option value="'.$row['ContragentID'].'">'.$row['ContragentName'].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-lg-5">
                                <label for="d1" class="form-label">По ФИО контрагента</label>
                                <select class="form-select" aria-label="Default select example" name="contragentsFIO" id="contragentsFIO">
                                <?php
                                    foreach($contragentFIO as $row)
                                    {
                                       echo '<option value="'.$row['UserID'].'">'.$row['FIO'].'</option>';
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="col-lg-2">
                            <br>
                            <button type="submit" class="btn btn-danger">Поиск</button>
                            </div>
                        </div><br>
                    </form>
                <div class="col-1"></div>
    </div>
</main>