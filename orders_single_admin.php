<!DOCTYPE html>
<html>
<head>
	<title>Orders admin</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href= "css/style.css">
</head>
<body>
	<div class="container">
		
		<!-- Order table -->

		<div class="row">
			<div class="col-md-12 table-responsive">
				<table class="table table-sm">
					<thead class="thead-light">
						<tr>
							<th>EAN:</th>
							<th>Platform:</th>
							<th>Name:</th>
							<th>Release Date:</th>
							<th>Publisher:</th>
							<th>Price:</th>
							<th>Amount</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="align-middle">3307212280150</td>
							<td class="align-middle">XONE</td>
							<td class="align-middle">XONE Far Cry 4</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Ubisoft</td>
							<td class="align-middle ">
								<input class="input-group-sm" type="number" placeholder="9,65" name="Price">
							</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="30" name="amount">
							</td>
							<td class="align-middle">
								<a class="btn btn-dark btn-sm" href="#">Update</a>
								<a class="btn btn-danger btn-sm" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td class="align-middle">3307212280150</td>
							<td class="align-middle">XONE</td>
							<td class="align-middle">XONE Far Cry 4</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Ubisoft</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="9,65" name="Price">
							</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="30" name="amount">
							</td>
							<td class="align-middle">
								<a class="btn btn-dark btn-sm" href="#">Update</a>
								<a class="btn btn-danger btn-sm" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td class="align-middle">3307212280150</td>
							<td class="align-middle">XONE</td>
							<td class="align-middle">XONE Far Cry 4</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Ubisoft</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="9,65" name="Price">
							</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="30" name="amount">
							</td>
							<td class="align-middle">
								<a class="btn btn-dark btn-sm" href="#">Update</a>
								<a class="btn btn-danger btn-sm" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td class="align-middle">3307212280150</td>
							<td class="align-middle">XONE</td>
							<td class="align-middle">XONE Far Cry 4</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Ubisoft</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="9,65" name="Price">
							</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="30" name="amount">
							</td>
							<td class="align-middle">
								<a class="btn btn-dark btn-sm" href="#">Update</a>
								<a class="btn btn-danger btn-sm" href="#">Delete</a>
							</td>
						</tr>
						<tr>
							<td class="align-middle">3307212280150</td>
							<td class="align-middle">XONE</td>
							<td class="align-middle">XONE Far Cry 4</td>
							<td class="align-middle">2017-12-05</td>
							<td class="align-middle">Ubisoft</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="9,65" name="Price">
							</td>
							<td class="align-middle">
								<input class="input-group-sm" type="number" placeholder="30" name="amount">
							</td>
							<td class="align-middle">
								<a class="btn btn-dark btn-sm" href="#">Update</a>
								<a class="btn btn-danger btn-sm" href="#">Delete</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<!-- Comments and attachments -->

		<div class="row">
			<div class="col-6">
				<form>
					<div class="form-group">
						<label for="exampleFormControlTextarea1"><h4>Comments</h4></label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
					</div>
					<div class="form-group">
						<a class="btn btn-dark" href="#">Confirm</a>
						<a class="btn btn-danger" href="#">Reject</a>
					</div>
				</form>
			</div>
			<div class="col-6">
				<form action="#" enctype="multipart/form-data">
					<div class="form-group">
						<label for="invoice"><h4>Invoice</h4></label>
						<input class="form-control" id="invoice" type="file" name="upload">
					</div>
				</form>
			</div>
		</body>
		</html>
