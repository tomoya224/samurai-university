    <?php get_header(); ?>
		<!-- Home -->
		<div class="home">
			<div class="breadcrumbs_container">
				<div class="image_header">
					<div class="header_info">
						<div>Contact</div>
						<div>お問い合わせ</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Course -->

		<div class="course">
			<div class="row content-body">
				<!-- Course -->
				<div class="col-lg-8">
					<!-- Course Tabs -->
					<div class="course_tabs_container">
						<div class="tab_panels">
							<!-- Description -->
							<div class="tab_panel">
								<div class="tab_panel_title">お問い合わせ</div>
								<div class="tab_panel_content">
									<div class="">
										<div class="container contact_form">
											
												<div class="input_title">
													<h4>お名前</h4>
												</div>
												<div class="form-row">
													<div class="col-md-3 mb-3">
													[mwform_text name="first_name" id="first_name" class="form-control" size="125" maxlength="125" placeholder="侍"]
													</div>
													<div class="col-md-3 mb-3">
														[mwform_text name="family_name" id="family_name" class="form-control" size="125" maxlength="125" placeholder="太郎"]
													</div>
												</div>
												<div class="input_title">
													<h4>E-mail</h4>
												</div>
												<div class="form-row">
													<div class="col-md-6">
													[mwform_email name="e-mail" id="e-mail" class="form-control" size="125" maxlength="125" placeholder="example@sejuku.net"]
													</div>
												</div>
												<div class="input_title">
													<h4>題名</h4>
												</div>
												<div class="form-row">
													<div class="col-md-12">
													[mwform_text name="title" id="title" class="form-control" size="125" maxlength="125" placeholder="願書受付について"]
													</div>
												</div>
												<div class="input_title">
													<h4>メッセージ本文</h4>
												</div>
												<div class="form-row">
													<div class="col-md-12">
													[mwform_textarea name="message" id="message" class="form-control" maxlength="125" cols="50" rows="5" placeholder="願書受付について聞きたいです。"]
													</div>
												</div>
												<div class="text-right">
												[mwform_submit name="submit" class="btn submit_form" value="送信"]
												</div>
											
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Course Sidebar -->
				<div class="col-lg-4" style="background-color: #2B7B8E33">
					 <?php get_sidebar('main'); ?>
				</div>
			</div>
		</div>

		<!-- Footer -->
        <?php get_footer(); ?>
		