<?php include 'header.php'; ?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					
					<div class="card main-card">
						<div class="card-body">
							
							<div class="row">
								<div class="col-lg-8 col-md-12 pr-md-5">
									<form action="#" class="cv-submit" id="job-apply">
									
										<label for="name" class="d-block">
											Full Name <span class="text-danger">*</span>
										</label>
										<input id="name" type="text" name="name" class="form-control" placeholder="E.g. Nymphadora tonx" required>

										<label for="email" class="d-block">
											Email <span class="text-danger">*</span>
										</label>
										<input id="email" type="email" name="email" class="form-control" placeholder="E.g. mail@example.com" required>

										<label for="mobile_number" class="d-block">
											Mobile Number <span class="text-danger">*</span>
										</label>
										<input id="mobile_number" type="text" name="mobile_number" class="form-control" placeholder="E.g. +628122974346" required>

										<p class="mt-4">Upload your CV (.doc, .docx, .pdf, .txt, max file size: 5MB): <span class="text-danger">*</span></p>
										<label for="upload" class="btn btn-warning btn-block text-left mb-4">Click here to select your file</label>
										<input type="file" id="upload" class="d-none" required>

										<p>From time to time, we would like to send you news and updates about Alternative Media, as well as information regarding live vacancies that may be of interest to you. If you would like to receive this information, please click Yes:</p>
										
										<div>
										  <input id="yes" type="radio" name="subscribe" value="yes" checked>
										  <label for="yes"><span><span></span></span>Yes</label>
										</div>
										
										<div>
										  <input id="no" type="radio" name="subscribe" value="no">
										  <label for="no"><span><span></span></span>No</label>
										</div>
										
										<div class="mt-3">
											<div class="g-recaptcha" data-callback="recaptchaCallback"  data-sitekey="6Lcx8V0UAAAAAOrZp4tG_4bAwkUnt0-egLeZ3m1u"></div>
										</div>
										
										<div class="mt-4">
											<input type="submit" class="btn btn-gra text-light" value="Submit Your Application" id="submitbtn" disabled>
										</div>

									</form>
								</div>

								<div class="col-lg-4 col-md-12 d-none d-lg-block">
									<div class="embed-responsive embed-responsive-16by9 mb-5">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3312.419346721138!2d151.20437669735227!3d-33.878852326314984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae2336e15179%3A0xb1fccc4beddec5b0!2sAlternative+Media!5e0!3m2!1sen!2sid!4v1528356794119" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
									</div>

									<h3>Why Alternative Media?</h3>
									<ul class="check">
										<li>We are a rapidly growing fintech helping Australians save money</li>
										<li>8 million site visits every year</li>
										<li>60 million dollars in annual sales</li>
										<li>Opportunities to work with a range of teams and overseas.</li>
									</ul>
								</div>
							</div>

						</div>

						<?php include 'testi.php'; ?>
					</div>

				</div>
			</div>
		</div>
	</section>
<?php include 'footer.php'; ?> 