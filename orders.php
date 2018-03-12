<!DOCTYPE html>
<html>
	<head>
		<title>Orders</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<!-- Filters -->
			<div class="row">
				<div class="btn-group">
					<button type="button" class="btn btn-dark btn-sm dropdown-toggle filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					User name
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
					<button type="button" class="btn btn-dark btn-sm dropdown-toggle filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Status
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
					<button type="button" class="btn btn-dark btn-sm dropdown-toggle filters" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Type
					</button>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<a class="dropdown-item" href="#">Something else here</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Separated link</a>
					</div>
					<button type="button" class="btn btn-danger filters">Filter</button>
				</div>
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
							</tr>
						</thead>
						<tbody>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>
							<tr>
								<td data-label="Order:" class="align-middle"><a href="#">1234456</a></td>
								<td data-label="Date:" class="align-middle">2017-12-05</td>
								<td data-label="User name:" class="align-middle">Topo Centras</td>
								<td data-label="Status:" class="align-middle">Confirmed</td>
								<td data-label="Type:" class="align-middle">Pre-order</td>
								<td data-label="Invoice:" class="align-middle">
									<img width="20px" class="figure-img" src="images/pdf.png">
								</td>
							</tr>		
						</tbody>
					</table>
				</div>
			</div>
			<!-- Export all to Excel -->
			<div class="row export">
				<label>
					<h4>Export all to excel:</h4>
				</label>
			</div>
			<div class="row">
				<div class="btn-group" role="group" aria-label="export_buttons">
					<button type="button" class="btn btn-danger btn-sm export">Orders</button>
					<button type="button" class="btn btn-danger btn-sm export">Pre-orders</button>
					<button type="button" class="btn btn-danger btn-sm export">Back-orders</button>
				</div>
			</div>
			<!-- Pagination -->
			<div id="pagination" class="row justify-content-center">
				<nav aria-label="Page navigation example">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
							<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav>
			</div>
			
		</div>
	</body>
</html>