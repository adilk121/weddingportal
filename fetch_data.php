<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>

    .fa-brands , .fa-solid
    {
        margin: 5px;
        font-size: 18px;
    }
    span
    {
        font-size: 10px;
        font-weight: bold;
    }
    </style>

<?php

//fetch_data.php

include_once('database_connection.php');

if(isset($_POST["action"]))
{
	$query = "SELECT * FROM product WHERE product_status = '1'";
	if(isset($_POST["minimum_price"], $_POST["maximum_price"]) && !empty($_POST["minimum_price"]) && !empty($_POST["maximum_price"]))
	{
		$query .= "AND price BETWEEN '".$_POST["minimum_price"]."' AND '".$_POST["maximum_price"]."'";
	}
	if(isset($_POST["brand"]))
	{
		$brand_filter = implode("','", $_POST["brand"]);
		$query .= "AND product_brand IN('".$brand_filter."')";
	}
	if(isset($_POST["ram"]))
	{
		$ram_filter = implode("','", $_POST["ram"]);
		$query .= "AND state IN('".$ram_filter."')";
	}
	if(isset($_POST["storage"]))
	{
		$storage_filter = implode("','", $_POST["storage"]);
		$query .= "AND phone IN('".$storage_filter."')";
	}

	$statement = $connect->prepare($query);
	$statement->execute();
	$result = $statement->fetchAll();
	$total_row = $statement->rowCount();
	$output = '';
	if($total_row > 0)
	{
		foreach($result as $row)
		{
			$output .= '
			<div class="col-sm-4 col-lg-3 col-md-3">
				<div style="border:1px solid #ccc; border-radius:5px; padding:16px; margin-bottom:16px; height:470px; width:215px;">
					<img src="image1/'. $row['product_image'] .'" alt="" class="img-responsive" >
					<p align="center"><strong><a href="#">'. $row['name'] .'</a></strong></p>
					<h4 style="text-align:center;" class="text-danger" ></h4>
					<p>Service : '. $row['product_brand'].'<br />
					Sate : '. $row['state'] .' <br />
					Email: '. $row['email'] .'<br />
					Phone : '. $row['phone'] .'<br>
                    Price : '. $row['price'] .' <span>(Price Can Be  Vary)</span><br>
                    Connect : <a href='. $row['fb_link'] .'><i class="fa-brands fa-facebook-f"></i></a> <a href='. $row['insta_link'] .'><i class="fa-brands fa-instagram"></i></a> <a href='. $row['map_link'] .'><i class="fa-solid fa-map-location-dot"></i></a>
                    </p>

				</div>

			</div>
			';
		}
	}
	else
	{
		$output = '<h3>No Data Found</h3>';
	}
	echo $output;
}

?>