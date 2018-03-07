<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" href= "css/style.css">
</head>
<body>
	<div class="container">

		<!-- Search bar -->

		<div id="search" class="row justify-content-center">
			<div class="col-10 ">
				<div class="input-group mb-3">
					<input type="text" class="form-control" placeholder="Search..." aria-label="Recipient's username" aria-describedby="basic-addon2">
					<div class="input-group-append">
						<button class="btn btn-outline-secondary" type="button">GO!</button>
					</div>
				</div>
			</div>
		</div>

		<!-- Sidebar -->

		<div class="row">
			<div id="sidebar" class="col-2">
				<div id="categories" class="row">
					<h4>Categories</h4>
					<ul class="list-group">
						<li class="list-group-item">Cras justo odio</li>
						<li class="list-group-item">Dapibus ac facilisis in</li>
						<li class="list-group-item">Morbi leo risus</li>
						<li class="list-group-item">Porta ac consectetur ac</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Vestibulum at eros</li>
						<li class="list-group-item">Vestibulum at eros</li>
					</ul>
				</div>

				<!-- Most popular -->

				<div id="popular" class="row">
					<h4>Most Popular</h4>
					<figure>
						<img id="popular" src="images/fc4.jpg"class="img-thumbnail">
						<figcaption class="text-center">Image</figcaption>
					</figure><figure>
						<img id="popular" src="images/fc4.jpg"class="img-thumbnail">
						<figcaption class="text-center">Image</figcaption>
					</figure><figure>
						<img id="popular" src="images/fc4.jpg"class="img-thumbnail">
						<figcaption class="text-center">Image</figcaption>
					</figure><figure>
						<img id="popular" src="images/fc4.jpg"class="img-thumbnail">
						<figcaption class="text-center">Image</figcaption>
					</figure>
				</div>
			</div>

			<!-- Table filters -->

			<div class="col-10">
				<div id="radioboxes" class="row justify-content-around">
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							Show Pre-orders
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							Show Back-orders
						</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
						<label class="form-check-label" for="defaultCheck1">
							Show Packshots
						</label>
					</div>
				</div>

				<!-- Product table -->

				<div class="col-md-12">
					<table class="table">
						<thead class="thead-light">
							<tr>
								<th scope="col">EAN:</th>
								<th scope="col">Name:</th>
								<th scope="col">Release Date:</th>
								<th scope="col">Publisher:</th>
								<th scope="col">Stock:</th>
								<th scope="col">Price:</th>
								<th scope="col">Amount</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>							<tr>
								<td class="align-middle">3307212280150</td>
								<td class="align-middle">XONE Far Cry 4</td>
								<td class="align-middle">2017-12-05</td>
								<td class="align-middle">Ubisoft</td>
								<td class="align-middle">123</td>
								<td class="align-middle">9,63</td>
								<td class="align-middle">
									<input style="width: 50px" type="number" name="amount">
								</td>
								<td class="align-middle">
									<div class="btn btn-info">To cart</div>
								</td>
								<td class="align-middle">
									<img class="packshot" src="images/fc4.jpg">
								</td>
							</tr>
						</tbody>
					</table>
				</div>
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

				<!-- New arrivals -->

				<div id="arrivals" class="row justify-content-center">
					<div class="row justify-content-center">
						<h2>New arrivals</h2>
					</div>
					<div class="row justify-content-center col-12">
						<figure>
							<img class="gallery" src="images/fc4.jpg">
							<figcaption>Far cry 4</figcaption>
						</figure><figure>
							<img class="gallery" src="images/fc4.jpg">
							<figcaption>Far cry 4</figcaption>
						</figure><figure>
							<img class="gallery" src="images/fc4.jpg">
							<figcaption>Far cry 4</figcaption>
						</figure><figure>
							<img class="gallery" src="images/fc4.jpg">
							<figcaption>Far cry 4</figcaption>
						</figure><figure>
							<img class="gallery" src="images/fc4.jpg">
							<figcaption>Far cry 4</figcaption>
						</figure>
					</div>
				</div>
			</div>
		</div>
	</div>


</body>
</html>