<main role="main" class="main-content">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="row" style="justify-content: space-between;">
					<h2 class="mb-2 page-title">Danh sách phòng ban</h2>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#admin-themphong"></span>Thêm phòng</button>
				</div>
				<div class="row my-4">
					<!-- Small table -->
					<div class="col-md-12">
						<div class="card shadow">
							<div class="card-body">
								<!-- table -->
								<table class="table datatables" id="dataTable-1">
									<thead>
										<tr>
											<th>STT</th>
											<th>Mã</th>
											<th>Tên</th>
											<th>Tên TP</th>
											<th>Số lượng NV</th>
											<th>Lương TB </th>
											<th>Ngày nhận chức</th>
											<th>Hành động</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>1</td>
											<td>IT</td>
											<td>Công nghệ</td>
											<td>Hoàng Khang</td>
											<td>23</td>
											<td>10.000.000</td>
											<td>20-02-2020</td>
											<td>
												<div style="display: flex; align-items: center; justify-content: start; gap: 10px;">
													<button type="button" class="btn mb-2 btn-warning">Sửa</button>
													<button type="button" class="btn mb-2 btn-danger">Xóa</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>1</td>
											<td>IT</td>
											<td>Công nghệ</td>
											<td>Hoàng Khang</td>
											<td>23</td>
											<td>10.000.000</td>
											<td>20-02-2020</td>
											<td>
												<div style="display: flex; align-items: center; justify-content: start; gap: 10px;">
													<button type="button" class="btn mb-2 btn-warning">Sửa</button>
													<button type="button" class="btn mb-2 btn-danger">Xóa</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>1</td>
											<td>IT</td>
											<td>Công nghệ</td>
											<td>Hoàng Khang</td>
											<td>23</td>
											<td>10.000.000</td>
											<td>20-02-2020</td>
											<td>
												<div style="display: flex; align-items: center; justify-content: start; gap: 10px;">
													<button type="button" class="btn mb-2 btn-warning">Sửa</button>
													<button type="button" class="btn mb-2 btn-danger">Xóa</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>1</td>
											<td>IT</td>
											<td>Công nghệ</td>
											<td>Hoàng Khang</td>
											<td>23</td>
											<td>10.000.000</td>
											<td>20-02-2020</td>
											<td>
												<div style="display: flex; align-items: center; justify-content: start; gap: 10px;">
													<button type="button" class="btn mb-2 btn-warning">Sửa</button>
													<button type="button" class="btn mb-2 btn-danger">Xóa</button>
												</div>
											</td>
										</tr>
										<tr>
											<td>1</td>
											<td>IT</td>
											<td>Công nghệ</td>
											<td>Hoàng Khang</td>
											<td>23</td>
											<td>10.000.000</td>
											<td>20-02-2020</td>
											<td>
												<div style="display: flex; align-items: center; justify-content: start; gap: 10px;">
													<button type="button" class="btn mb-2 btn-warning">Sửa</button>
													<button type="button" class="btn mb-2 btn-danger">Xóa</button>
												</div>
											</td>
										</tr>


									</tbody>
								</table>
							</div>
						</div>
					</div> <!-- simple table -->
				</div> <!-- end section -->
			</div> <!-- .col-12 -->
		</div> <!-- .row -->
	</div> <!-- .container-fluid -->
	<div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="list-group list-group-flush my-n3">
						<div class="list-group-item bg-transparent">
							<div class="row align-items-center">
								<div class="col-auto">
									<span class="fe fe-box fe-24"></span>
								</div>
								<div class="col">
									<small><strong>Package has uploaded successfull</strong></small>
									<div class="my-0 text-muted small">Package is zipped and uploaded</div>
									<small class="badge badge-pill badge-light text-muted">1m ago</small>
								</div>
							</div>
						</div>
						<div class="list-group-item bg-transparent">
							<div class="row align-items-center">
								<div class="col-auto">
									<span class="fe fe-download fe-24"></span>
								</div>
								<div class="col">
									<small><strong>Widgets are updated successfull</strong></small>
									<div class="my-0 text-muted small">Just create new layout Index, form, table</div>
									<small class="badge badge-pill badge-light text-muted">2m ago</small>
								</div>
							</div>
						</div>
						<div class="list-group-item bg-transparent">
							<div class="row align-items-center">
								<div class="col-auto">
									<span class="fe fe-inbox fe-24"></span>
								</div>
								<div class="col">
									<small><strong>Notifications have been sent</strong></small>
									<div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
									<small class="badge badge-pill badge-light text-muted">30m ago</small>
								</div>
							</div> <!-- / .row -->
						</div>
						<div class="list-group-item bg-transparent">
							<div class="row align-items-center">
								<div class="col-auto">
									<span class="fe fe-link fe-24"></span>
								</div>
								<div class="col">
									<small><strong>Link was attached to menu</strong></small>
									<div class="my-0 text-muted small">New layout has been attached to the menu</div>
									<small class="badge badge-pill badge-light text-muted">1h ago</small>
								</div>
							</div>
						</div> <!-- / .row -->
					</div> <!-- / .list-group -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body px-5">
					<div class="row align-items-center">
						<div class="col-6 text-center">
							<div class="squircle bg-success justify-content-center">
								<i class="fe fe-cpu fe-32 align-self-center text-white"></i>
							</div>
							<p>Control area</p>
						</div>
						<div class="col-6 text-center">
							<div class="squircle bg-primary justify-content-center">
								<i class="fe fe-activity fe-32 align-self-center text-white"></i>
							</div>
							<p>Activity</p>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-6 text-center">
							<div class="squircle bg-primary justify-content-center">
								<i class="fe fe-droplet fe-32 align-self-center text-white"></i>
							</div>
							<p>Droplet</p>
						</div>
						<div class="col-6 text-center">
							<div class="squircle bg-primary justify-content-center">
								<i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
							</div>
							<p>Upload</p>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-6 text-center">
							<div class="squircle bg-primary justify-content-center">
								<i class="fe fe-users fe-32 align-self-center text-white"></i>
							</div>
							<p>Users</p>
						</div>
						<div class="col-6 text-center">
							<div class="squircle bg-primary justify-content-center">
								<i class="fe fe-settings fe-32 align-self-center text-white"></i>
							</div>
							<p>Settings</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- new event modal -->
	<div class="modal fade" id="admin-themphong" tabindex="-1" role="dialog" aria-labelledby="eventModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="varyModalLabel">Thêm phòng ban</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body p-8">
					<div class="card shadow mb-8">
						<div class="card-body">
							<form class="needs-validation" action="index.php?page=admin-phongban" method="post" novalidate>
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="validationCustom01">Mã phòng</label>
										<input type="text" class="form-control" id="validationCustom01" value="" required>
										<div class="valid-feedback"> Looks good! </div>
									</div>
									<div class="col-md-6 mb-3">
										<label for="validationCustom02">Tên phòng</label>
										<input type="text" class="form-control" id="validationCustom02" value="" required>
										<div class="valid-feedback"> Looks good! </div>
									</div>
								</div> <!-- /.form-row -->
								<div class="form-group mb-3">
									<label for="example-select">Trưởng phòng</label>
									<select class="form-control" id="example-select">
										<option>Hiểu thị toàn bộ danh sách nhân viên ở đây, trừ trưởng phòng</option>
										<option>22 - Duy Tân</option>
										<option>23 - Hoài Nam</option>
										<option>...</option>
									</select>
								</div>
								<div style="display: flex; justify-content: end;">
								<input class="btn btn-primary" type="submit" value="Thêm"></input>
								</div>
							</form>
						</div> <!-- /.card-body -->
					</div> <!-- /.card -->
				</div>
			</div>
		</div> <!-- new event modal -->
</main> <!-- main -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src='js/jquery.dataTables.min.js'></script>
<script src='js/dataTables.bootstrap4.min.js'></script>
<script>
	$('#dataTable-1').DataTable({
		autoWidth: true,
		"lengthMenu": [
			[16, 32, 64, -1],
			[16, 32, 64, "All"]
		]
	});
</script>
<script src="js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'UA-56159088-1');
</script>

</script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src='js/jquery.mask.min.js'></script>
<script src='js/select2.min.js'></script>
<script src='js/jquery.steps.min.js'></script>
<script src='js/jquery.validate.min.js'></script>
<script src='js/jquery.timepicker.js'></script>
<script src='js/dropzone.min.js'></script>
<script src='js/uppy.min.js'></script>
<script src='js/quill.min.js'></script>
<script>
	$('.select2').select2({
		theme: 'bootstrap4',
	});
	$('.select2-multi').select2({
		multiple: true,
		theme: 'bootstrap4',
	});
	$('.drgpicker').daterangepicker({
		singleDatePicker: true,
		timePicker: false,
		showDropdowns: true,
		locale: {
			format: 'MM/DD/YYYY'
		}
	});
	$('.time-input').timepicker({
		'scrollDefault': 'now',
		'zindex': '9999' /* fix modal open */
	});
	/** date range picker */
	if ($('.datetimes').length) {
		$('.datetimes').daterangepicker({
			timePicker: true,
			startDate: moment().startOf('hour'),
			endDate: moment().startOf('hour').add(32, 'hour'),
			locale: {
				format: 'M/DD hh:mm A'
			}
		});
	}
	var start = moment().subtract(29, 'days');
	var end = moment();

	function cb(start, end) {
		$('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
	}
	$('#reportrange').daterangepicker({
		startDate: start,
		endDate: end,
		ranges: {
			'Today': [moment(), moment()],
			'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
			'Last 7 Days': [moment().subtract(6, 'days'), moment()],
			'Last 30 Days': [moment().subtract(29, 'days'), moment()],
			'This Month': [moment().startOf('month'), moment().endOf('month')],
			'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
				'month')]
		}
	}, cb);
	cb(start, end);
	$('.input-placeholder').mask("00/00/0000", {
		placeholder: "__/__/____"
	});
	$('.input-zip').mask('00000-000', {
		placeholder: "____-___"
	});
	$('.input-money').mask("#.##0,00", {
		reverse: true
	});
	$('.input-phoneus').mask('(000) 000-0000');
	$('.input-mixed').mask('AAA 000-S0S');
	$('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
		translation: {
			'Z': {
				pattern: /[0-9]/,
				optional: true
			}
		},
		placeholder: "___.___.___.___"
	});
	// editor
	var editor = document.getElementById('editor');
	if (editor) {
		var toolbarOptions = [
			[{
				'font': []
			}],
			[{
				'header': [1, 2, 3, 4, 5, 6, false]
			}],
			['bold', 'italic', 'underline', 'strike'],
			['blockquote', 'code-block'],
			[{
					'header': 1
				},
				{
					'header': 2
				}
			],
			[{
					'list': 'ordered'
				},
				{
					'list': 'bullet'
				}
			],
			[{
					'script': 'sub'
				},
				{
					'script': 'super'
				}
			],
			[{
					'indent': '-1'
				},
				{
					'indent': '+1'
				}
			], // outdent/indent
			[{
				'direction': 'rtl'
			}], // text direction
			[{
					'color': []
				},
				{
					'background': []
				}
			], // dropdown with defaults from theme
			[{
				'align': []
			}],
			['clean'] // remove formatting button
		];
		var quill = new Quill(editor, {
			modules: {
				toolbar: toolbarOptions
			},
			theme: 'snow'
		});
	}
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
		'use strict';
		window.addEventListener('load', function() {
			// Fetch all the forms we want to apply custom Bootstrap validation styles to
			var forms = document.getElementsByClassName('needs-validation');
			// Loop over them and prevent submission
			var validation = Array.prototype.filter.call(forms, function(form) {
				form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
						event.preventDefault();
						event.stopPropagation();
					}
					form.classList.add('was-validated');
				}, false);
			});
		}, false);
	})();
</script>
<script>
	var uptarg = document.getElementById('drag-drop-area');
	if (uptarg) {
		var uppy = Uppy.Core().use(Uppy.Dashboard, {
			inline: true,
			target: uptarg,
			proudlyDisplayPoweredByUppy: false,
			theme: 'dark',
			width: 770,
			height: 210,
			plugins: ['Webcam']
		}).use(Uppy.Tus, {
			endpoint: 'https://master.tus.io/files/'
		});
		uppy.on('complete', (result) => {
			console.log('Upload complete! We’ve uploaded these files:', result.successful)
		});
	}
</script>
<script src="js/apps.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());
	gtag('config', 'UA-56159088-1');
</script>