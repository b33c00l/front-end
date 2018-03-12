<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<title>Create product</title>
	</head>
	<body>
		<div class="container">
			<div>
				<form class="well form-horizontal" action=" " method="post"  id="product_form">
					<fieldset>
						<legend>Create a product</legend>
						<div class="row">
							<div class="col-md-6">
								
								<div class="form-group">
									<label class="col control-label">Pre-order?</label>
									<div class="col">
										<div class="radio">
											<label>
												<input type="radio" name="pre_order" value="yes" /> Yes
											</label>
											<label>
												<input type="radio" name="pre_order" value="no" /> No
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Order deadline</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input  name="deadline" placeholder="Order deadline" class="form-control" disabled="true"  type="date">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Title</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input  name="title" placeholder="Title" class="form-control"  type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">EAN</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input  name="ean" placeholder="EAN" class="form-control"  type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Select a platform</label>
									<div class="col selectContainer">
										<div class="input-group">
											<select name="select platform" class="form-control selectpicker" >
												<option value=" " ></option>
												<option value="">PC</option>}
												<option value="">PS3</option>}
												<option value="">PS4</option>}
												<option value="">XONE</option>}
												option
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Select a category</label>
									<div class="col selectContainer">
										<div class="input-group">
											<select name="select platform" class="form-control selectpicker" >
												<option value=" " ></option>
												<option value="">Action</option>}
												<option value="">Horror</option>}
												<option value="">FPS</option>}
												<option value="">Strategy</option>}
												option
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Select a publisher</label>
									<div class="col selectContainer">
										<div class="input-group">
											<select name="select platform" class="form-control selectpicker" >
												<option value=" " ></option>
												<option value="">Take2</option>}
												<option value="">Ubisoft</option>}
												<option value="">Namco</option>}
												<option value="">EA</option>}
												option
											</select>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col control-label">Release date</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input  name="release_date" placeholder="Release date" class="form-control"  type="date">
										</div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col control-label">PEGI</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input  name="pegi" placeholder="PEGI" class="form-control"  type="number">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Video URL</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input  name="video_url" placeholder="Video URL" class="form-control"  type="text">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Images</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<input type="file" class="form-control-file" id="exampleFormControlFile1">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col control-label">Synapsis</label>
									<div class="col inputGroupContainer">
										<div class="input-group">
											<textarea class="form-control" name="comment" placeholder="Synapsis" rows="6"></textarea>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col">
										<button type="submit" class="btn btn-danger btn-block" >Create</button>
									</div>
								</div>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
		</div><!-- /.container -->
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</body>
</html>