<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href= "css/style.css">
</head>
<body>
	<div class="container">

		<!-- Filters -->

		<div class="row">
			<div class="btn-group">
				<button type="button" class="btn btn-dark btn-sm dropdown-toggle m-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Action
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-dark btn-sm dropdown-toggle m-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Action
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-dark btn-sm dropdown-toggle m-5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Action
				</button>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="#">Separated link</a>
				</div>
			</div>

			<button class="btn btn-danger m-5">Filter</button>



		</div>

		<!-- Order table -->

		<div class="row">
			<div class="col-md-12 table-responsive">
				<table class="table table-sm">
					<thead class="thead-light">
						<tr>
							<th scope="col">Order ID:</th>
							<th scope="col">Date:</th>
							<th scope="col">User name:</th>
							<th scope="col">Status:</th>
							<th scope="col">Type:</th>
							<th scope="col">Invoice:</th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-middle">1234456</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Topo Centras</td>
							<td class="align-middle">Confirmed</td>
							<td class="align-middle">Pre-order</td>
							<td class="align-middle">
								<img width="20px" class="figure-img" src="images/pdf.png">
							</td>
							<td class="align-middle">
								<div class="btn btn-dark btn-sm">Edit</div>
								<div class="btn btn-danger btn-sm">Delete</div>
							</td>
						</tr>
						<tr>
							<td class="align-middle">1234456</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Topo Centras</td>
							<td class="align-middle">Confirmed</td>
							<td class="align-middle">Pre-order</td>
							<td class="align-middle">
								<img width="20px" class="figure-img" src="images/pdf.png">
							</td>
							<td class="align-middle">
								<div class="btn btn-dark btn-sm">Edit</div>
								<div class="btn btn-danger btn-sm">Delete</div>
							</td>
						</tr>
						<tr>
							<td class="align-middle">1234456</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Topo Centras</td>
							<td class="align-middle">Confirmed</td>
							<td class="align-middle">Pre-order</td>
							<td class="align-middle">
								<img width="20px" class="figure-img" src="images/pdf.png">
							</td>
							<td class="align-middle">
								<div class="btn btn-dark btn-sm">Edit</div>
								<div class="btn btn-danger btn-sm">Delete</div>
							</td>
						</tr>
						<tr>
							<td class="align-middle">1234456</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Topo Centras</td>
							<td class="align-middle">Confirmed</td>
							<td class="align-middle">Pre-order</td>
							<td class="align-middle">
								<img width="20px" class="figure-img" src="images/pdf.png">
							</td>
							<td class="align-middle">
								<div class="btn btn-dark btn-sm">Edit</div>
								<div class="btn btn-danger btn-sm">Delete</div>
							</td>
						</tr>
						<tr>
							<td class="align-middle">1234456</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Topo Centras</td>
							<td class="align-middle">Confirmed</td>
							<td class="align-middle">Pre-order</td>
							<td class="align-middle">
								<img width="20px" class="figure-img" src="images/pdf.png">
							</td>
							<td class="align-middle">
								<div class="btn btn-dark btn-sm">Edit</div>
								<div class="btn btn-danger btn-sm">Delete</div>
							</td>
						</tr>
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

	<!-- Export all to Excel -->

	<div class="row m-5">
		<div class="col-8"></div>
		<div class="col-4">
			<h4>Export all:</h4>
			<a class="btn btn-dark" href="#">Orders</a>
			<a class="btn btn-dark" href="#">Pre-orders</a>
			<a class="btn btn-dark" href="#">Back-orders</a>
		</div>
	</div>
</div>
</body>
</html>