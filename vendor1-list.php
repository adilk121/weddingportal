<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-3">
                    <div class="card-header">
                        <h4>Vendors List</h4>
                    </div>
                </div>
            </div>

            <!-- Brand List  -->
            <div class="col-md-3">
                <form action="" method="GET">
                    <div class="card shadow mt-3">
                        <div class="card-header">
                            <h5> Search Filter 
                                <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
                            </h5>
                        </div>
                        <div class="card-body">
                            <h6>Service List</h6>
                            <hr>
                            <?php
                                
                                $con = mysqli_connect('localhost','thediann_bestweddinghub','!+.ub,fL$O7Y','thediann_bestweddinghub');

                                $brand_query = "SELECT * FROM service_cat";
                                $brand_queryy = "SELECT * FROM state_list";
                                $brand_query_run  = mysqli_query($con, $brand_query);
                                 $brand_query_runn  = mysqli_query($con, $brand_queryy);

                                if(mysqli_num_rows($brand_query_run) > 0)
                                {
                                    foreach($brand_query_run as $brandlist)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div>
                                                <input style="text-transform: uppercase;" type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>"
                                                
                                
                                                    <?php if(in_array($brandlist['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlist['name']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                
                                    if(mysqli_num_rows($brand_query_runn) > 0)
                                {
                                    foreach($brand_query_runn as $brandlistt)
                                    {
                                        $checked = [];
                                        if(isset($_GET['brands']))
                                        {
                                            $checked = $_GET['brands'];
                                        }
                                        ?>
                                            <div>
                                                <input style="text-transform: uppercase;" type="checkbox" name="brands[]" value="<?= $brandlistt['state_id']; ?>"
                                                
                                
                                                    <?php if(in_array($brandlistt['id'], $checked)){ echo "checked"; } ?>
                                                 />
                                                <?= $brandlistt['state_name']; ?>
                                            </div>
                                        <?php
                                    }
                                }
                                else
                                {
                                    echo "No Brands Found";
                                }
                            ?>
                        </div>
                        
                        
                    </div>
                </form>
            </div>

            <!-- Brand Items - Products -->
            <div class="col-md-9 mt-3">
                <div class="card ">
                    <div class="card-body row">
                        <?php
                            if(isset($_GET['brands']))
                            {
                                $branchecked = [];
                                $branchecked = $_GET['brands'];
                                foreach($branchecked as $rowbrand)
                                {
                                    // echo $rowbrand;
                                    $products = "SELECT * FROM mediator_list WHERE cat_id IN ($rowbrand) ";
                                    $products_run = mysqli_query($con, $products);
                                    if(mysqli_num_rows($products_run) > 0)
                                    {
                                        foreach($products_run as $proditems) :
                                            ?>
                                                <div class="col-md-4 mt-3">
                                                    <div class="border p-2">
                                                        <h6 style="display:none;"><?= $proditems['id']; ?></h6>
                                                    <lable>Name:- </lable> <h6 style=" text-transform: capitalize;"><?= $proditems['name']; ?></h6>
                                                    <lable>Service:- </lable> <h6 style=" text-transform: capitalize;"><?= $proditems['service_cat']; ?></h6>
                                                    <lable>Contact:- </lable> <h6><?= $proditems['phone']; ?></h6>
                                                    <h6 style="display:none;"><?= $proditems['city']; ?></h6>
                                                    <lable>Address:- </lable> <h6><?= $proditems['address']; ?></h6>
                                                    <lable>Email:- </lable> <h6><?= $proditems['email']; ?></h6>
                                                    <lable>Charges:- </lable> <h6><?= $proditems['price']; ?></h6>
                                                    </div>
                                                </div>
                                            <?php
                                        endforeach;
                                    }
                                }
                            }
                            else
                            {
                                $products = "SELECT * FROM mediator_list";
                                $products_run = mysqli_query($con, $products);
                                if(mysqli_num_rows($products_run) > 0)
                                {
                                    foreach($products_run as $proditems) :
                                        ?>
                                            <div class="col-md-4 mt-3">
                                                <div class="border p-2">
                                                    <h6 style="display:none;"><?= $proditems['id']; ?></h6>
                                                    <lable>Name:- </lable> <h6 style=" text-transform: capitalize;"><?= $proditems['name']; ?></h6>
                                                    <lable>Service:- </lable> <h6 style=" text-transform: capitalize;"><?= $proditems['service_cat']; ?></h6>
                                                    <lable>Contact:- </lable> <h6><?= $proditems['phone']; ?></h6>
                                                    <h6 style="display:none;"><?= $proditems['city']; ?></h6>
                                                    <lable>Address:- </lable> <h6><?= $proditems['address']; ?></h6>
                                                    <lable>Email:- </lable> <h6><?= $proditems['email']; ?></h6>
                                                    <lable>Charges:- </lable> <h6><?= $proditems['price']; ?></h6>
                                                    
                                                    
                                                    
                                                </div>
                                            </div>
                                        <?php
                                    endforeach;
                                }
                                else
                                {
                                    echo "No Items Found";
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>