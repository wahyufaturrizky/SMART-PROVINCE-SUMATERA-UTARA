<?php
use dosamigos\chartjs\ChartJs;
use rmrevin\yii\fontawesome\FAS;
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>

<!-- Page Heading -->
<div style="margin-top: 80px;" class="d-sm-flex align-items-center justify-content-between mb-2">
	<h1 class="h2 mb-0 text-gray-800 font-weight-bold">Selamat Datang</h1>
	<a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
			class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<h1 class="h1 text-gray-800 font-weight-bold">Gubernur Sumatera Utara</h1>
<p class="mb-4"><?= date('l, d F Y, h:i A'); ?></p>
<!-- <h1 class="h4 mb-4 text-gray-800"><strong>Program Pembangunan Daerah yang disertai Pagu Indikatif Pemerintah Daerah Sumatera Utara Tahun 2019-2023</strong></h1> -->

<!-- Start Visi -->
<!-- <div class="card shadow mb-4">
	<div class="card-header py-3 bg-gradient-primary">
		<h6 class="m-0 font-weight-bold text-gray-100">VISI</h6>
	</div>
	<div class="card-body">
		<p class="font-weight-bold">SUMUT YANG MAJU, AMAN DAN BERMARTABAT</p>
	</div>
</div> -->
<!-- End Visi -->

<!-- Start Misi -->
<!-- <div class="card shadow mb-4">

	<div class="card-header py-3 bg-gradient-primary">
		<h6 class="m-0 font-weight-bold text-gray-100">MISI</h6>
	</div>
	<div class="card-body">

		Content Row
		<div class="row">

			Earnings (Monthly) Card Example
			<div class="col-xl col-md mb-4">
				<div class="card border-left-primary shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary mb-1">1. Mewujudkan masyarakat Sumatera Utara yang bermartabat dalam kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang layak, kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau.</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-users fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			Earnings (Monthly) Card Example
			<div class="col-xl col-md mb-4">
				<div class="card border-left-danger shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-danger mb-1">2. Mewujudkan Sumatera Utara yang bermartabat dalam politik dengan adanya pemerintahan yang bersih dan dicintai, tata kelola pemerintah yang baik, adil dan terpercaya, politik yang beretika, masyarakat yang berwawasan kebangsaan dan memiliki kohesi sosial yang kuat serta harmonis.</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-landmark fa-2x text-danger"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			Earnings (Monthly) Card Example
			<div class="col-xl col-md mb-4">
				<div class="card border-left-info shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-info mb-1">3. Mewujudkan Sumatera Utara yang bermartabat dalam pendidikan karena masyarakatnya yang terpelajar, berkarakter, cerdas, kolaboratif, berdaya saing dan mandiri.</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-school fa-2x text-info"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			Pending Requests Card Example
			<div class="col-xl col-md mb-4">
				<div class="card border-left-warning shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-warning mb-1">4. Mewujudkan Sumatera Utara yang bermartabat dalam pergaulan karena terbebas dari judi, narkoba, prostitusi dan penyelundupan, sehingga menjadi teladan di Asia Tenggara dan Dunia.</div>
							</div>
							<div class="col-auto">
								<i class="far fa-laugh-beam fa-2x text-warning"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

			Pending Requests Card Example
			<div class="col-xl col-md mb-4">
				<div class="card border-left-success shadow h-100 py-2">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-success mb-1">5. Mewujudkan Sumatera Utara yang bermartabat dalam lingkungan karena ekologinya yang terjaga, alamnya yang bersih dan indah, penduduknya yang ramah, berbudaya, berperikemanusiaan dan beradab.</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-leaf fa-2x text-success"></i>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</div> -->
<!-- End Misi -->

<!-- Start PENGELOLAAN KEUANGAN DAERAH -->
<div class="row mb-4">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card position-relative">
			<div class="card-body">
				<p style="margin-top: 40px;" class="card-title h5 text-gray-800 font-weight-bold">PENGELOLAAN KEUANGAN DAERAH</p>
				<div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">

					<div class="carousel-inner">

						<div class="carousel-item active">
						
							<div class="row">
								<div class="col-md-12 col-xl-12">
									<div class="row">
										<div class="col-md-8">
											<div class="table-responsive mb-3 mb-md-0">
												<p class="card-title h5 text-primary font-weight-bold">Pendapatan Daerah</p>
												<table class="table table-borderless report-table">
													<tbody>
														<tr>
															<td class="w-50 text-muted">Pendapatan Asli Daerah</td>
															<td class="w-50 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 40%"
																		aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">40%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">21.350.980.872</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan pajak daerah</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 60%"
																		aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">60%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">30.386.082.048</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan retrisbusi daerah</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 45%"
																		aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">45%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan dari hasil pengelolaan kekayaan daerah yang dipisahkan</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 80%"
																		aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">80%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Lain-lain PAD yang disahkan</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 55%"
																		aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">55%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="mt-4 text-center small">
												<span class="mr-2">
													<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
												</span>
												<span class="mr-2">
													<i class="fas fa-circle text-warning"></i> Akan Tercapai
												</span>
												<span class="mr-2">
													<i class="fas fa-circle text-success"></i> Tercapai
												</span>
											</div>
										</div>
										<div class="col-md-4 mt-0">
												<div class="chart-pie">
													<?= ChartJs::widget([
														'type' => 'pie',
														'data' => [
															'radius' => "100%",
															'labels' => ["Pendapatan Daerah ", "Belanja Daerah ", "Pembiayaan Daerah "],
															'datasets' => [
																[
																	'label' => "My First dataset",
																	'backgroundColor' => ["rgba(36, 138, 253, 0.4)", "rgba(255, 193, 0, 0.4)", "rgba(113, 192, 22, 0.4)"],
																	'borderWidth' => 2,
																	'hoverBackgroundColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'borderColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'data' => [50, 25, 25]
																],
															]
														],
														'clientOptions' => [
															'cutoutPercentage' => 80,
															'legend' => [
																'display' => false,
																'position' => 'bottom',
																'labels' => [
																	'fontSize' => 14,
																	'fontColor' => "#425062",
																]
															],
															'tooltips' => [
																'enabled' => true,
																'intersect' => false,
															],

															'layout' => [
																'padding' => [
																	'left' => 10,
																	'right' => 25,
																	'top' => 25,
																	'bottom' => 0
																]
															],
															'maintainAspectRatio' => false,
														],
													]); ?>
												</div>
												
												
											<div id="north-america-legend">
												<div class="report-chart">
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color:#248afd"></div>
															<p class="mb-0">Pendapatan Daerah</p>
														</div>
														<p class="mb-0">30%</p>
													</div>
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color: #ffc100"></div>
															<p class="mb-0">Belanja Daerah</p>
														</div>
														<p class="mb-0">35%</p>
													</div>
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color: #71c016"></div>
															<p class="mb-0">Pembiayaan Daerah</p>
														</div>
														<p class="mb-0">35%</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="carousel-item">
						
							<div class="row">
								<div class="col-md-12 col-xl-12">
									<div class="row">
										<div class="col-md-8">
											<div class="table-responsive mb-3 mb-md-0">
												<p class="card-title h5 text-warning font-weight-bold">Belanja Daerah</p>
												<table class="table table-borderless report-table">
													<tbody>
														<tr>
															<td class="w-50 text-muted">Pendapatan Asli Daerah</td>
															<td class="w-50 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 40%"
																		aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">40%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">21.350.980.872</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan pajak daerah</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 60%"
																		aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">60%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">30.386.082.048</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan retrisbusi daerah</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 45%"
																		aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">45%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan dari hasil pengelolaan kekayaan daerah yang dipisahkan</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 80%"
																		aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">80%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Lain-lain PAD yang disahkan</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 55%"
																		aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">55%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="mt-4 text-center small">
												<span class="mr-2">
													<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
												</span>
												<span class="mr-2">
													<i class="fas fa-circle text-warning"></i> Akan Tercapai
												</span>
												<span class="mr-2">
													<i class="fas fa-circle text-success"></i> Tercapai
												</span>
											</div>
										</div>
										<div class="col-md-4 mt-0">
												<div class="chart-pie">
													<?= ChartJs::widget([
														'type' => 'pie',
														'data' => [
															'radius' => "100%",
															'labels' => ["Pendapatan Daerah ", "Belanja Daerah ", "Pembiayaan Daerah "],
															'datasets' => [
																[
																	'label' => "My First dataset",
																	'backgroundColor' => ["rgba(36, 138, 253, 0.4)", "rgba(255, 193, 0, 0.4)", "rgba(113, 192, 22, 0.4)"],
																	'borderWidth' => 2,
																	'hoverBackgroundColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'borderColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'data' => [50, 25, 25]
																],
															]
														],
														'clientOptions' => [
															'cutoutPercentage' => 80,
															'legend' => [
																'display' => false,
																'position' => 'bottom',
																'labels' => [
																	'fontSize' => 14,
																	'fontColor' => "#425062",
																]
															],
															'tooltips' => [
																'enabled' => true,
																'intersect' => false,
															],

															'layout' => [
																'padding' => [
																	'left' => 10,
																	'right' => 25,
																	'top' => 25,
																	'bottom' => 0
																]
															],
															'maintainAspectRatio' => false,
														],
													]); ?>
												</div>
												
												
											<div id="north-america-legend">
												<div class="report-chart">
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color:#248afd"></div>
															<p class="mb-0">Pendapatan Daerah</p>
														</div>
														<p class="mb-0">30%</p>
													</div>
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color: #ffc100"></div>
															<p class="mb-0">Belanja Daerah</p>
														</div>
														<p class="mb-0">35%</p>
													</div>
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color: #71c016"></div>
															<p class="mb-0">Pembiayaan Daerah</p>
														</div>
														<p class="mb-0">35%</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="carousel-item">
						
							<div class="row">
								<div class="col-md-12 col-xl-12">
									<div class="row">
										<div class="col-md-8">
											<div class="table-responsive mb-3 mb-md-0">
												<p class="card-title h5 text-success font-weight-bold">Pembiayaan Daerah</p>
												<table class="table table-borderless report-table">
													<tbody>
														<tr>
															<td class="w-50 text-muted">Pendapatan Asli Daerah</td>
															<td class="w-50 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 40%"
																		aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">40%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">21.350.980.872</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan pajak daerah</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 60%"
																		aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">60%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">30.386.082.048</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan retrisbusi daerah</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 45%"
																		aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">45%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Penerimaan dari hasil pengelolaan kekayaan daerah yang dipisahkan</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: 80%"
																		aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">80%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
														<tr>
															<td class="text-muted">Lain-lain PAD yang disahkan</td>
															<td class="w-100 px-0">
																<div class="progress progress-md mx-4">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 55%"
																		aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
																</div>
															</td>
															<td>
																<h5 class="font-weight-bold mb-0">55%</h5>
															</td>
															<td>
																<h5 class="font-weight-normal mb-0">32.486.095.724</h5>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="mt-4 text-center small">
												<span class="mr-2">
													<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
												</span>
												<span class="mr-2">
													<i class="fas fa-circle text-warning"></i> Akan Tercapai
												</span>
												<span class="mr-2">
													<i class="fas fa-circle text-success"></i> Tercapai
												</span>
											</div>
										</div>
										<div class="col-md-4 mt-0">
												<div class="chart-pie">
													<?= ChartJs::widget([
														'type' => 'pie',
														'data' => [
															'radius' => "100%",
															'labels' => ["Pendapatan Daerah ", "Belanja Daerah ", "Pembiayaan Daerah "],
															'datasets' => [
																[
																	'label' => "My First dataset",
																	'backgroundColor' => ["rgba(36, 138, 253, 0.4)", "rgba(255, 193, 0, 0.4)", "rgba(113, 192, 22, 0.4)"],
																	'borderWidth' => 2,
																	'hoverBackgroundColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'borderColor' => ["rgba(36, 138, 253, 1)", "rgba(255, 193, 0, 1)", "rgba(113, 192, 22, 1)"],
																	'data' => [50, 25, 25]
																],
															]
														],
														'clientOptions' => [
															'cutoutPercentage' => 80,
															'legend' => [
																'display' => false,
																'position' => 'bottom',
																'labels' => [
																	'fontSize' => 14,
																	'fontColor' => "#425062",
																]
															],
															'tooltips' => [
																'enabled' => true,
																'intersect' => false,
															],

															'layout' => [
																'padding' => [
																	'left' => 10,
																	'right' => 25,
																	'top' => 25,
																	'bottom' => 0
																]
															],
															'maintainAspectRatio' => false,
														],
													]); ?>
												</div>
												
												
											<div id="north-america-legend">
												<div class="report-chart">
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color:#248afd"></div>
															<p class="mb-0">Pendapatan Daerah</p>
														</div>
														<p class="mb-0">30%</p>
													</div>
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color: #ffc100"></div>
															<p class="mb-0">Belanja Daerah</p>
														</div>
														<p class="mb-0">35%</p>
													</div>
													<div class="d-flex justify-content-between mx-4 mx-xl-5 mt-3">
														<div class="d-flex align-items-center">
															<div class="mr-3"
																style="width:20px; height:20px; border-radius: 50%; background-color: #71c016"></div>
															<p class="mb-0">Pembiayaan Daerah</p>
														</div>
														<p class="mb-0">35%</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

					<div style="position: absolute; top: 15px; right:15px; z-index: 1; display: flex; align-items: center; justify-content: center; width: 7%; text-align: center;">
							<a style="width:50px; height:50px;" class="carousel-control-prev bg-primary" href="#detailedReports" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a style="width:50px; height:50px;" class="carousel-control-next bg-primary" href="#detailedReports" role="button" data-slide="next">
								<span class="carousel-control-next-icon" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
					</div>
					

				</div>
			</div>
		</div>
	</div>
</div>
<!-- End PENGELOLAAN KEUANGAN DAERAH -->

<!-- Start Indikator Pembangunan Provinsi Sumatera Utara -->
<div class="row mb-4">
	<div class="col-md-12 grid-margin">
		<div class="card bg-white border-0 position-relative">
			<div class="card-body">
				<p style="margin-top: 40px;" class="card-title h5 text-gray-800 font-weight-bold text-uppercase">Indikator Pembangunan Provinsi Sumatera Utara</p>
				<div id="performanceOverview" class="carousel slide performance-overview-carousel position-static pt-2"
					data-ride="carousel">
					<div class="carousel-inner">

						<div class="carousel-item active">
							<p class="card-title h6 text-white font-weight-normal text-gray-800 mb-4"><strong
									class="text-primary">Misi 1 :</strong> Mewujudkan masyarakat Sumatera Utara yang bermartabat dalam
								kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang layak,
								kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau:</p>

							<div class="row">

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">80</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#DetailModal">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">80</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">80</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row mt-4">

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">20</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">60</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">20</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="mt-4 text-center small">
								<span class="mr-2">
									<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
								</span>
								<span class="mr-2">
									<i class="fas fa-circle text-warning"></i> Akan Tercapai
								</span>
								<span class="mr-2">
									<i class="fas fa-circle text-success"></i> Tercapai
								</span>
							</div>
						</div>

						<div class="carousel-item">
							<p class="card-title h6 text-white font-weight-normal text-gray-800 mb-4"><strong
									class="text-primary">Misi 2 :</strong> Mewujudkan Sumatera Utara yang bermartabat dalam politik dengan adanya pemerintahan yang bersih dan dicintai, tata kelola pemerintah yang baik, adil dan terpercaya, politik yang beretika, masyarakat yang berwawasan kebangsaan dan memiliki kohesi sosial yang kuat serta harmonis:</p>

							<div class="row">

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">80</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">80</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">80</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="row mt-4">

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">20</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">60</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

								<div class="col-md-4 grid-margin stretch-card">
									<div class="card">
										<div class="card-body">
											<div class="d-flex justify-content-between">
												<p class="text-muted">Realisasi</p>
												<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
											</div>
											<div class="d-flex justify-content-between">
												<p class="h1 green-tosca">20</p>
												<p class="h1 old-blue">110</p>
											</div>
											<div class="progress progress-md">
												<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
											<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
											<div class="text-center mt-4">
												<button type="button" class="btn btn-primary">Lihat Detail</button>
											</div>
										</div>
									</div>
								</div>

							</div>

							<div class="mt-4 text-center small">
								<span class="mr-2">
									<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
								</span>
								<span class="mr-2">
									<i class="fas fa-circle text-warning"></i> Akan Tercapai
								</span>
								<span class="mr-2">
									<i class="fas fa-circle text-success"></i> Tercapai
								</span>
							</div>
						</div>

					</div>
					
					<div style="position: absolute; top: 15px; right:15px; z-index: 1; display: flex; align-items: center; justify-content: center; width: 7%; text-align: center;">

						<a style="width:50px; height:50px;" class="carousel-control-prev bg-primary" href="#performanceOverview"
							role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a style="width:50px; height:50px;" class="carousel-control-next bg-primary" href="#performanceOverview"
							role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Indikator Pembangunan Provinsi Sumatera Utara -->

<!-- Start Collapsable Card -->
<div class="card shadow mb-4">
	<!-- Card Header - Accordion -->
	<a href="#collapseCardExample01" class="d-block card-header py-3" data-toggle="collapse" role="button"
		aria-expanded="true" aria-controls="collapseCardExample01">
		<h6 class="m-0 font-weight-bold text-primary">Misi 1</h6>
		<p class="card-title h6 text-white font-weight-normal text-gray-800 mt-2">Mewujudkan masyarakat Sumatera Utara yang bermartabat dalam kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang layak, kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau : </p>
	</a>
	<!-- Card Content - Collapse -->
	<div class="collapse" id="collapseCardExample01">
		<div class="card-body">

			<div>

				<div class="row">

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row mt-4">

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">20</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
										role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">60</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
										role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">20</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
										role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="mt-4 text-center small">
					<span class="mr-2">
						<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-warning"></i> Akan Tercapai
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-success"></i> Tercapai
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Collapsable Card -->

<!-- Start Collapsable Card -->
<div class="card shadow mb-4">
	<!-- Card Header - Accordion -->
	<a href="#collapseCardExample02" class="d-block card-header py-3" data-toggle="collapse" role="button"
		aria-expanded="true" aria-controls="collapseCardExample02">
		<h6 class="m-0 font-weight-bold text-primary">Misi 2</h6>
		<p class="card-title h6 text-white font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
					bermartabat dalam politik dengan adanya pemerintahan yang bersih dan
					dicintai, tata kelola pemerintah yang baik, adil dan terpercaya, politik yang beretika, masyarakat yang
					berwawasan
					kebangsaan dan memiliki kohesi sosial yang kuat serta harmonis:</p>
	</a>
	<!-- Card Content - Collapse -->
	<div class="collapse" id="collapseCardExample02">
		<div class="card-body">

			<div>
				
				<div class="row">

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row mt-4">

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">20</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
										role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">60</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
										role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">20</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
										role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="mt-4 text-center small">
					<span class="mr-2">
						<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-warning"></i> Akan Tercapai
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-success"></i> Tercapai
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Collapsable Card -->

<!-- Start Collapsable Card -->
<div class="card shadow mb-4">
	<!-- Card Header - Accordion -->
	<a href="#collapseCardExample03" class="d-block card-header py-3" data-toggle="collapse" role="button"
		aria-expanded="true" aria-controls="collapseCardExample03">
		<h6 class="m-0 font-weight-bold text-primary">Misi 3</h6>
		<p class="card-title h6 text-white font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang bermartabat dalam pendidikan karena masyarakatnya yang terpelajar, berkarakter, cerdas, kolaboratif, berdaya saing dan mandiri : </p>
	</a>
	<!-- Card Content - Collapse -->
	<div class="collapse" id="collapseCardExample03">
		<div class="card-body">

			<div>
				
				<div class="row">

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">80</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
										role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="row mt-4">

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">20</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
										role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">60</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
										role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 grid-margin stretch-card">
						<div class="card">
							<div class="card-body">
								<div class="d-flex justify-content-between">
									<p class="text-muted">Realisasi</p>
									<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
								</div>
								<div class="d-flex justify-content-between">
									<p class="h1 green-tosca">20</p>
									<p class="h1 old-blue">110</p>
								</div>
								<div class="progress progress-md">
									<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
										role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
								<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
								<div class="text-center mt-4">
									<button type="button" class="btn btn-primary">Lihat Detail</button>
								</div>
							</div>
						</div>
					</div>

				</div>

				<div class="mt-4 text-center small">
					<span class="mr-2">
						<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-warning"></i> Akan Tercapai
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-success"></i> Tercapai
					</span>
				</div>
				</div>
				</div>
				</div>
				</div>
				<!-- End Collapsable Card -->

				<!-- Start Collapsable Card -->
				<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<a href="#collapseCardExample04" class="d-block card-header py-3" data-toggle="collapse" role="button"
						aria-expanded="true" aria-controls="collapseCardExample04">
						<h6 class="m-0 font-weight-bold text-primary">Misi 4</h6>
						<p class="card-title h6 text-white font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
							bermartabat dalam pergaulan karena terbebas dari judi, narkoba, prostitusi dan penyelundupan, sehingga menjadi
							teladan di Asia Tenggara dan Dunia : </p>
					</a>
					<!-- Card Content - Collapse -->
					<div class="collapse" id="collapseCardExample04">
						<div class="card-body">

							<div>

								<div class="row">

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
														role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
														role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">80</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 80%"
														role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="row mt-4">

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">20</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
														role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">60</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"
														role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-4 grid-margin stretch-card">
										<div class="card">
											<div class="card-body">
												<div class="d-flex justify-content-between">
													<p class="text-muted">Realisasi</p>
													<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
												</div>
												<div class="d-flex justify-content-between">
													<p class="h1 green-tosca">20</p>
													<p class="h1 old-blue">110</p>
												</div>
												<div class="progress progress-md">
													<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 20%"
														role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
												<div class="text-center mt-4">
													<button type="button" class="btn btn-primary">Lihat Detail</button>
												</div>
											</div>
										</div>
									</div>

								</div>

								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
								</div>
								</div>
								</div>
								</div>
								<!-- End Collapsable Card -->

								<!-- Start Collapsable Card -->
								<div class="card shadow mb-4">
									<!-- Card Header - Accordion -->
									<a href="#collapseCardExample05" class="d-block card-header py-3" data-toggle="collapse" role="button"
										aria-expanded="true" aria-controls="collapseCardExample05">
										<h6 class="m-0 font-weight-bold text-primary">Misi 5</h6>
										<p class="card-title h6 text-white font-weight-normal text-gray-800 mt-2">Mewujudkan Sumatera Utara yang
											bermartabat dalam lingkungan karena ekologinya yang terjaga, alamnya yang bersih dan indah, penduduknya
											yang ramah, berbudaya, berperikemanusiaan dan beradab : </p>
									</a>
									<!-- Card Content - Collapse -->
									<div class="collapse" id="collapseCardExample05">
										<div class="card-body">

											<div>

												<div class="row">

													<div class="col-md-4 grid-margin stretch-card">
														<div class="card">
															<div class="card-body">
																<div class="d-flex justify-content-between">
																	<p class="text-muted">Realisasi</p>
																	<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
																</div>
																<div class="d-flex justify-content-between">
																	<p class="h1 green-tosca">80</p>
																	<p class="h1 old-blue">110</p>
																</div>
																<div class="progress progress-md">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
																		style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
																		aria-valuemax="100"></div>
																</div>
																<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
																<div class="text-center mt-4">
																	<button type="button" class="btn btn-primary">Lihat Detail</button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-4 grid-margin stretch-card">
														<div class="card">
															<div class="card-body">
																<div class="d-flex justify-content-between">
																	<p class="text-muted">Realisasi</p>
																	<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
																</div>
																<div class="d-flex justify-content-between">
																	<p class="h1 green-tosca">80</p>
																	<p class="h1 old-blue">110</p>
																</div>
																<div class="progress progress-md">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
																		style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
																		aria-valuemax="100"></div>
																</div>
																<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
																<div class="text-center mt-4">
																	<button type="button" class="btn btn-primary">Lihat Detail</button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-4 grid-margin stretch-card">
														<div class="card">
															<div class="card-body">
																<div class="d-flex justify-content-between">
																	<p class="text-muted">Realisasi</p>
																	<p class="text-muted"><strong class="old-blue">65%</strong> dari Target</p>
																</div>
																<div class="d-flex justify-content-between">
																	<p class="h1 green-tosca">80</p>
																	<p class="h1 old-blue">110</p>
																</div>
																<div class="progress progress-md">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
																		style="width: 80%" role="progressbar" aria-valuenow="80" aria-valuemin="0"
																		aria-valuemax="100"></div>
																</div>
																<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
																<div class="text-center mt-4">
																	<button type="button" class="btn btn-primary">Lihat Detail</button>
																</div>
															</div>
														</div>
													</div>

												</div>

												<div class="row mt-4">

													<div class="col-md-4 grid-margin stretch-card">
														<div class="card">
															<div class="card-body">
																<div class="d-flex justify-content-between">
																	<p class="text-muted">Realisasi</p>
																	<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
																</div>
																<div class="d-flex justify-content-between">
																	<p class="h1 green-tosca">20</p>
																	<p class="h1 old-blue">110</p>
																</div>
																<div class="progress progress-md">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																		style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
																		aria-valuemax="100"></div>
																</div>
																<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
																<div class="text-center mt-4">
																	<button type="button" class="btn btn-primary">Lihat Detail</button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-4 grid-margin stretch-card">
														<div class="card">
															<div class="card-body">
																<div class="d-flex justify-content-between">
																	<p class="text-muted">Realisasi</p>
																	<p class="text-muted"><strong class="old-blue">40%</strong> dari Target</p>
																</div>
																<div class="d-flex justify-content-between">
																	<p class="h1 green-tosca">60</p>
																	<p class="h1 old-blue">110</p>
																</div>
																<div class="progress progress-md">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
																		style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0"
																		aria-valuemax="100"></div>
																</div>
																<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
																<div class="text-center mt-4">
																	<button type="button" class="btn btn-primary">Lihat Detail</button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-md-4 grid-margin stretch-card">
														<div class="card">
															<div class="card-body">
																<div class="d-flex justify-content-between">
																	<p class="text-muted">Realisasi</p>
																	<p class="text-muted"><strong class="old-blue">80%</strong> dari Target</p>
																</div>
																<div class="d-flex justify-content-between">
																	<p class="h1 green-tosca">20</p>
																	<p class="h1 old-blue">110</p>
																</div>
																<div class="progress progress-md">
																	<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
																		style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0"
																		aria-valuemax="100"></div>
																</div>
																<h4 class="mt-4">Skor Pola Pangan Harapan (PPH)</h4>
																<div class="text-center mt-4">
																	<button type="button" class="btn btn-primary">Lihat Detail</button>
																</div>
															</div>
														</div>
													</div>

												</div>

				<div class="mt-4 text-center small">
					<span class="mr-2">
						<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-warning"></i> Akan Tercapai
					</span>
					<span class="mr-2">
						<i class="fas fa-circle text-success"></i> Tercapai
					</span>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Collapsable Card -->

<!-- Start Capaian Misi -->
<!-- <div class="card shadow mb-4">

	<div class="card-header py-3 bg-gradient-primary">
		<h6 class="m-0 font-weight-bold text-gray-100">CAPAIAN INDIKATOR KINERJA DAERAH</h6>
	</div>
	<div class="card-body">

		Start Sasaran 1.1
		<div class="card shadow mb-4">

			<div class="card-header py-3 bg-gradient-primary">
				<h6 class="m-0 font-weight-bold text-gray-100">CAPAIAN INDIKATOR MISI</h6>
			</div>
			<div class="card-body">

				<div class="row">

					<div class="col-lg mb-4">
						<div class="card bg-primary text-white shadow">
							<div class="card-body">
								MISI
							</div>
						</div>
					</div>
					<div class="col-lg mb-4">
						<div class="card bg-success text-white shadow">
							<div class="card-body">
								2019
							</div>
						</div>
					</div>
					<div class="col-lg mb-4">
						<div class="card bg-warning text-white shadow">
							<div class="card-body">
								KENAIKAN
							</div>
						</div>
					</div>
					<div class="col-lg mb-4">
						<div class="card bg-info text-white shadow">
							<div class="card-body">
								2018
							</div>
						</div>
					</div>
				
				</div>

				Start Content Row
				<div class="row">

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-primary">MISI 1</div>
										<div class="text-xs text-gray-800 mb-1">1. Mewujudkan masyarakat Sumatera Utara yang bermartabat dalam kehidupan karena memiliki iman dan taqwa, tersedianya sandang pangan yang cukup, rumah yang layak, kesehatan yang prima, mata pencaharian yang menyenangkan, serta harga-harga yang terjangkau.</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-users fa-2x text-primary"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-success">CAPAIAN MISI 1</div>
								<div class="chart-bar">
									<?= ChartJs::widget([
										'type' => 'pie',
										'data' => [
											'radius' => "100%",
											'labels' => ["Capaian Misi 2019", ""],
											'datasets' => [
												[
													'label' => "My First dataset",
													'backgroundColor' => ["RGBA(28,200,138, 0.4)", "RGBA(133,135,150, 0.4)"],
													'borderWidth' => 2,
													'hoverBackgroundColor' => ["RGBA(28,200,138,1)", "RGBA(133,135,150,1)"],
													'borderColor' => ["RGBA(28,200,138,1)", "RGBA(133,135,150,1)"],
													'data' => [85, 15]
												],
											]
										],
										'clientOptions' => [
											'cutoutPercentage' => 80,
											'legend' => [
												'display' => false,
												'position' => 'bottom',
												'labels' => [
													'fontSize' => 14,
													'fontColor' => "#425062",
												]
											],
											'tooltips' => [
												'enabled' => true,
												'intersect' => false,
											],

											'layout' => [
												'padding' => [
													'left' => 10,
													'right' => 25,
													'top' => 25,
													'bottom' => 0
												]
											],
											'maintainAspectRatio' => false,


										],
									]); ?>
								</div>
								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">PERSENTASI CAPAIAN MISI 1</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">85%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-warning">KENAIKAN MISI 1</div>
								<div class="chart-bar">
									<?= ChartJs::widget([
										'type' => 'pie',
										'data' => [
											'radius' => "100%",
											'labels' => ["Kenaikan Misi 1", ""],
											'datasets' => [
												[
													'label' => "My First dataset",
													'backgroundColor' => ["RGBA(246,194,62, 0.4)", "RGBA(133,135,150, 0.4)"],
													'borderWidth' => 2,
													'hoverBackgroundColor' => ["RGBA(246,194,62,1)", "RGBA(133,135,150,1)"],
													'borderColor' => ["RGBA(246,194,62,1)", "RGBA(133,135,150,1)"],
													'data' => [35, 65]
												],
											]
										],
										'clientOptions' => [
											'cutoutPercentage' => 80,
											'legend' => [
												'display' => false,
												'position' => 'bottom',
												'labels' => [
													'fontSize' => 14,
													'fontColor' => "#425062",
												]
											],
											'tooltips' => [
												'enabled' => true,
												'intersect' => false,
											],

											'layout' => [
												'padding' => [
													'left' => 10,
													'right' => 25,
													'top' => 25,
													'bottom' => 0
												]
											],
											'maintainAspectRatio' => false,


										],
									]); ?>
								</div>
								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">KENAIKAN CAPAIAN MISI 1</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">35%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-info shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-info">CAPAIAN MISI 1</div>
								<div class="chart-bar">
									<?= ChartJs::widget([
										'type' => 'pie',
										'data' => [
											'radius' => "100%",
											'labels' => ["Capaian Misi 2018", ""],
											'datasets' => [
												[
													'label' => "My First dataset",
													'backgroundColor' => ["RGBA(54,185,204, 0.4)", "RGBA(133,135,150, 0.4)"],
													'borderWidth' => 2,
													'hoverBackgroundColor' => ["RGBA(54,185,204,1)", "RGBA(133,135,150,1)"],
													'borderColor' => ["RGBA(54,185,204,1)", "RGBA(133,135,150,1)"],
													'data' => [75, 25]
												],
											]
										],
										'clientOptions' => [
											'cutoutPercentage' => 80,
											'legend' => [
												'display' => false,
												'position' => 'bottom',
												'labels' => [
													'fontSize' => 14,
													'fontColor' => "#425062",
												]
											],
											'tooltips' => [
												'enabled' => true,
												'intersect' => false,
											],

											'layout' => [
												'padding' => [
													'left' => 10,
													'right' => 25,
													'top' => 25,
													'bottom' => 0
												]
											],
											'maintainAspectRatio' => false,


										],
									]); ?>
								</div>
								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">PERSENTASI CAPAIAN MISI 1</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">75%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				End Content Row

			</div>

		</div>
		End Sasaran 1.1



	</div>

</div> -->
<!-- End Capaian Misi -->

<!-- Start Perhitungan Evaluasi Capaian Kerja -->
<!-- <div class="card shadow mb-4">

	<div class="card-header py-3 bg-gradient-primary">
		<h6 class="m-0 font-weight-bold text-gray-100">PERHITUNGAN EVALUASI CAPAIAN KINERJA PEMBANGUNAN DAERAH TERHADAP TARGET AKHIR PERIODE</h6>
	</div>
	<div class="card-body">

		Earnings (Monthly) Card Example
		<div class="card border-left-primary shadow h-100 py-2 mb-4">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="h6 font-weight-bold text-gray-800">Semakin tinggi angka persentase menunjukkan pencapaian kinerja dan kondisi yang semakin baik (Positif), maka digunakan rumus dibawah ini:</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-primary"></i>
					</div>
				</div>
			</div>
		</div>

		Earnings (Monthly) Card Example
		<div class="card border-left-primary shadow h-100 py-2 mb-4">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="h6 font-weight-bold text-gray-800">

							Start Rumus Pencapaian Kinerja 
							<table border="0" class="h4 font-weight-bold" cellpadding="0" cellspacing="0">
								<tr>
									<td rowspan="3" valign="middle">&nbsp;<i>% Pencapaian Kinerja</i></td>
									<td rowspan="3" valign="middle">&nbsp;<i>=</i></td>
									<td align="center"><i>Realisasi</td>
									<td rowspan="3" valign="middle">&nbsp;<i>x</i></td>
									<td rowspan="3" valign="middle">&nbsp;<i>100%</i></td>
								</tr>
								<tr>
									<td align="center"><img src="images/1px.gif" alt="_____" width="60" height="1"></td>
								</tr>
								<tr>
									<td align="center">Rencana</td>
								</tr>
							</table>
							End Rumus Pencapaian Kinerja 

						</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-users fa-2x text-primary"></i>
					</div>
				</div>
			</div>
		</div>

		Start KETERANGAN INDIKATOR PENCAPAIAN KINERJA
		<div class="card shadow mb-4">

			<div class="card-header py-3 bg-gradient-primary">
				<h6 class="m-0 font-weight-bold text-gray-100">KETERANGAN INDIKATOR PENCAPAIAN KINERJA</h6>
			</div>
			<div class="card-body">

				<div class="row">

					<div class="col-lg-4 mb-4">
						<div class="card bg-warning font-weight-bold text-gray-900 shadow">
							<div class="card-body">
								SIMBOL
							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-4">
						<div class="card bg-warning font-weight-bold text-gray-900 shadow">
							<div class="card-body">
								KRITERIA
							</div>
						</div>
					</div>

					<div class="col-lg-4 mb-4">
						<div class="card bg-warning font-weight-bold text-gray-900 shadow">
							<div class="card-body">
								PENJELASAN KERITERIA
							</div>
						</div>
					</div>

				</div>

				Start Content Row
				<div class="row">

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="no-gutters align-items-center">
									<div class="text-center">
										<i class="fas fa-circle fa-3x text-success"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-gray-800">TERCAPAI/MELAMPAUI</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-tachometer-alt fa-2x text-success"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-gray-800">Apabila persentase capaian kinerja s/d tahun 2015 (Tw4) dibandingkan dengan target akhir periode Renstra &ge; 100% </div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-success"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				End Content Row

				Start Content Row
				<div class="row">

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="no-gutters align-items-center">
									<div class="text-center">
										<i class="fas fa-sort-up fa-5x text-warning"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-gray-800">AKAN TERCAPAI</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-tachometer-alt fa-2x text-warning"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-gray-800">Apabila persentase capaian kinerja s/d tahun 2019 (Tw 4) dibandingkan dengan target akhir periode Renstra sebesar 75% s/d < 100%</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-warning"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				End Content Row

				Start Content Row
				<div class="row">

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-danger shadow h-100 py-2">
							<div class="card-body">
								<div class="no-gutters align-items-center">
									<div class="text-center">
										<i class="fas fa-sort-down fa-5x text-danger"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-danger shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-gray-800">PERLU USAHA KERAS</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-tachometer-alt fa-2x text-danger"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-4 mb-4">
						<div class="card border-left-danger shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-gray-800">Apabila persentase capaian kinerja s/d tahun 2019 (Tw 4) dibandingkan dengan target akhir periode Renstra sebesar 75% s/d <75%</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-danger"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				End Content Row

				Earnings (Monthly) Card Example
				<div class="card border-left-primary shadow h-100 py-2 mb-4">
					<div class="card-body">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="h5 font-weight-bold text-primary">KETERANGAN</div>
								<div class="h6 font-weight-bold text-gray-800">Dasar perhitungan yang digunakan adalah rata-rata persentase target kinerja s/d tahun 2015 (Tw 4) dibandingkan dengan target akhir periode Renstra sebesar &ge; 75%</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-users fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
		End KETERANGAN INDIKATOR PENCAPAIAN KINERJA



	</div>

</div> -->
<!-- End Perhitungan Evaluasi Capaian Kerja -->

<!-- Start Tujuan -->
<!-- <div class="card shadow mb-4">

	<div class="card-header py-3 bg-gradient-primary">
		<h6 class="m-0 font-weight-bold text-gray-100">TUJUAN 1</h6>
	</div>
	<div class="card-body">

		Start Sasaran 1.1
		<div class="card shadow mb-4">

			<div class="card-header py-3 bg-gradient-primary">
				<h6 class="m-0 font-weight-bold text-gray-100">SASARAN 1.1</h6>
			</div>
			<div class="card-body">

				Start Content Row
				<div class="row mb-4">

					Earnings (Monthly) Card Example
					<div class="col-xl col-md mb-4">
						<div class="card border-left-primary shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-primary">SASARAN 1.1.1</div>
										<div class="text-xs text-gray-800 mb-1">1. Tersedianya sdm aparatur yang memahami dan melaksanakan
											penegakan hukum.</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-bullseye fa-2x text-primary"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-xl col-md mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-success">INDIKATOR</div>
										<div class="text-xs text-gray-800 mb-1">1. Menurutnya pelanggaran ketertiban, ketentraman,
											keindahan.</div>
										<div class="text-xs text-gray-800 mb-1">2. Meningkatnya penyelesaian khusus tanah.</div>
										<div class="text-xs text-gray-800 mb-1">3. Meningkatnya penyelesaian ijin lokasi.</div>
										<div class="text-xs text-gray-800 mb-1">4. Menurutnya pengaduan perlindungan perempuan dan anak dari
											tindakan kekerasan.</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-tachometer-alt fa-2x text-success"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-xl col-md mb-4">
						<div class="card border-left-info shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info">TARGET 2019</div>
										<div class="text-xs text-gray-800 mb-1">1. Program Pembinaan Keagamaan.</div>
										<div class="text-xs text-gray-800 mb-1">2. Program Peningkatan Keamanan dan Kenyamanan Lingkungan.
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-crosshairs fa-2x text-info"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

					Pending Requests Card Example
					<div class="col-xl col-md mb-4">
						<div class="card border-left-warning shadow h-100 py-2">
							<div class="card-body">
								<div class="row no-gutters align-items-center">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-warning">REALISASI 2019</div>
										<div class="text-xs text-gray-800 mb-1">1. Meningkatnya Pembinaan Kerukunan Kehidupan Beragama.
										</div>
										<div class="text-xs text-gray-800 mb-1">2. Persentase konflik Ipolek Sosbud yang tertangani.</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-rocket fa-2x text-warning"></i>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
				End Content Row

				Start Content Row
				<div class="row">

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4" >
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-success">INDIKATOR 1</div>
								<div class="chart-bar">
									<?= ChartJs::widget([
										'type' => 'bar',
										'data' => [
											'labels' => ["2016", "2017", "2018", "2019",],
											'datasets' => [
												[
													'label' => "My First dataset",
													'backgroundColor' => "rgba(26, 192, 198, 0.4)",
													'borderWidth' => 2,
													'hoverBackgroundColor' => "rgba(26, 192, 198, 1)",
													'borderColor' => "rgba(26, 192, 198, 1)",
													'data' => [65, 59, 90, 81, 0, 100]
												],
											]
											],
										'clientOptions' => [
											'legend' => [
												'display' => false,
												'position' => 'bottom',
												'labels' => [
													'fontSize' => 14,
													'fontColor' => "#425062",
												]
											],
											'tooltips' => [
												'enabled' => true,
												'intersect' => false,
											],
											
											'layout' => [
												'padding' => [
													'left' => 10,
													'right' => 25,
													'top' => 25,
													'bottom' => 0
												]
											],
											'maintainAspectRatio' => false,
											

										],
									]); ?>
								</div>

								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">TAGET KINERJA 2020</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">70%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-success">INDIKATOR 2</div>
								<div class="chart-bar">
								<?= ChartJs::widget([
									'type' => 'bar',
									'data' => [
										'labels' => ["2016", "2017", "2018", "2019", ],
										'datasets' => [
											[
												'label' => "My First dataset",
												'backgroundColor' => "rgba(255, 168, 34, 0.4)",
												'borderWidth' => 2,
												'hoverBackgroundColor' => "rgba(255, 168, 34, 1)",
												'borderColor' => "rgba(255, 168, 34, 1)",
												'data' => [65, 59, 90, 81, 0, 100]
											],
										]
									],
									'clientOptions' => [
										'legend' => [
											'display' => false,
											'position' => 'bottom',
											'labels' => [
												'fontSize' => 14,
												'fontColor' => "#425062",
											]
										],
										'tooltips' => [
											'enabled' => true,
											'intersect' => false,
										],

										'layout' => [
											'padding' => [
												'left' => 10,
												'right' => 25,
												'top' => 25,
												'bottom' => 0
											]
										],
										'maintainAspectRatio' => false,


									],
								]); ?>
								</div>
								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">TAGET KINERJA 2020</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">90%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-success">INDIKATOR 3</div>
								<div class="chart-bar">
								<?= ChartJs::widget([
									'type' => 'bar',
									'data' => [
										'labels' => ["2016", "2017", "2018", "2019", ],
										'datasets' => [
											[
												'label' => "My First dataset",
												'backgroundColor' => "rgba(19, 78, 111, 0.4)",
												'borderWidth' => 2,
												'hoverBackgroundColor' => "rgba(19, 78, 111, 1)",
												'borderColor' => "rgba(19, 78, 111, 1)",
												'data' => [65, 59, 90, 81, 0, 100]
											],
										]
									],
									'clientOptions' => [
										'legend' => [
											'display' => false,
											'position' => 'bottom',
											'labels' => [
												'fontSize' => 14,
												'fontColor' => "#425062",
											]
										],
										'tooltips' => [
											'enabled' => true,
											'intersect' => false,
										],

										'layout' => [
											'padding' => [
												'left' => 10,
												'right' => 25,
												'top' => 25,
												'bottom' => 0
											]
										],
										'maintainAspectRatio' => false,


									],
								]); ?>
								</div>
								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">TAGET KINERJA 2020</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">30%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
							</div>
						</div>
					</div>

					Earnings (Monthly) Card Example
					<div class="col-lg-3 mb-4">
						<div class="card border-left-success shadow h-100 py-2">
							<div class="card-body">
								<div class="h6 font-weight-bold text-success">INDIKATOR 4</div>
								<div class="chart-bar">
								<?= ChartJs::widget([
									'type' => 'bar',
									'data' => [
										'labels' => ["2016", "2017", "2018", "2019", ],
										'datasets' => [
											[
												'label' => "My First dataset",
												'backgroundColor' => "rgba(255, 97, 80, 0.4)",
												'borderWidth' => 2,
												'hoverBackgroundColor' => "rgba(255, 97, 80, 1)",
												'borderColor' => "rgba(255, 97, 80, 1)",
												'data' => [65, 59, 90, 81, 0, 100]
											],
										]
									],
									'clientOptions' => [
										'legend' => [
											'display' => false,
											'position' => 'bottom',
											'labels' => [
												'fontSize' => 14,
												'fontColor' => "#425062",
											]
										],
										'tooltips' => [
											'enabled' => true,
											'intersect' => false,
										],

										'layout' => [
											'padding' => [
												'left' => 10,
												'right' => 25,
												'top' => 25,
												'bottom' => 0
											]
										],
										'maintainAspectRatio' => false,


									],
								]); ?>
								</div>
								<div class="row no-gutters align-items-center mt-4">
									<div class="col mr-2">
										<div class="h6 font-weight-bold text-info text-uppercase mb-1">TAGET KINERJA 2020</div>
										<div class="row no-gutters align-items-center">
											<div class="col-auto">
												<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">60%</div>
											</div>
											<div class="col">
												<div class="progress progress-sm mr-2">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60"
														aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-auto">
										<i class="fas fa-clipboard-list fa-2x text-info"></i>
									</div>
								</div>
								<div class="mt-4 text-center small">
									<span class="mr-2">
										<i class="fas fa-circle text-danger"></i> Perlu Usaha Keras
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-warning"></i> Akan Tercapai
									</span><br>
									<span class="mr-2">
										<i class="fas fa-circle text-success"></i> Tercapai
									</span>
								</div>
							</div>
						</div>
					</div>

				</div>
				End Content Row

			</div>

		</div>
		End Sasaran 1.1



	</div>

</div> -->
<!-- End Tujuan -->

<!-- Detail Modal-->
<div class="modal fade" id="DetailModal" tabindex="-1" role="dialog" aria-labelledby="DetailModalContent"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header align-items-center">
						<h5 class="modal-title" id="DetailModalContent">Skor Pola Pangan Harapan (PPH)</h5>
						<div class="badge badge-primary badge-pill ml-2">Misi 1</div>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
					<p>Dilaksanakan melalui program :</p>
					<p><strong class="text-primary">Program 1 :</strong> Program Peningkatan Diversifikasi dan Ketahanan Pangan Masyarakat</p>
						<div class = "chart-bar" >
							<?= ChartJs::widget([
								'type' => 'bar',
								'data' => [
									'labels' => ["2018", "2019", "2020", "2021", "2022", "2023", ],
									'datasets' => [
										[
											'label' => "My First dataset",
											'backgroundColor' => "rgba(26, 192, 198, 0.4)",
											'borderWidth' => 2,
											'hoverBackgroundColor' => "rgba(26, 192, 198, 1)",
											'borderColor' => "rgba(26, 192, 198, 1)",
											'data' => [20, 40, 60, 80, 100, 110, 0, 120]
										],
									]
								],
								'clientOptions' => [
									'legend' => [
										'display' => false,
										'position' => 'bottom',
										'labels' => [
											'fontSize' => 14,
											'fontColor' => "#425062",
										]
									],
									'tooltips' => [
										'enabled' => true,
										'intersect' => false,
									],

									'layout' => [
										'padding' => [
											'left' => 10,
											'right' => 25,
											'top' => 25,
											'bottom' => 0
										]
									],
									'maintainAspectRatio' => false,


								],
							]); ?>
						</div>
					<p>Target peningkatan Diversifikasi dan Ketahanan Pangan Masyarakat dari tahun <strong class="text-gray-800 font-weight-bold">2018 - 2023<strong></p>
				</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>




<!-- <?= yii\jui\DatePicker::widget(['name' => 'nina']) ?>
<?php 
echo FAS::icon('home'); 
?> -->
