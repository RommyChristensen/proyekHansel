<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Scan</title>
    <script src="{{asset('js/instascan.min.js')}}"></script>
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrapv3/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('assets/plugins/bootstrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
	<button type="button" id="ajaxModal" style="display: none;" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Edit User</h4>
		</div>
		<div class="modal-body">
			<form id="formEditUser">
				<div class="form-group">
					<label for="">Id</label>
					<input type="text" name="id" readonly="true" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Nama</label>
					<input type="text" name="nama" readonly="true" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Alamat</label>
					<input type="text" name="alamat" readonly="true" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Telp</label>
					<input type="text" name="telp" readonly="true" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Kuota</label>
					<input type="text" name="kuota" readonly="true" class="form-control">
				</div>
				<div class="form-group">
					<label for="">Kehadiran</label>
					<input type="text" name="kehadiran" readonly="true" class="form-control">
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		</div>
		</div>

	</div>
	</div>
    <div class="container" id="containerScanner">
		<div class="jumbotron">

            <video id="qr_preview"></video>
			
			<script>
				// JS SCRIPT
				var active_cam = 0;

				var scanner = new Instascan.Scanner(
					{
						video: document.getElementById('qr_preview'),
						mirror: false
					}
				);

				// attach listener to scanner
				scanner.addListener('scan',
					(content)=>
					{
						console.log(content);
						getIdUser(content);
						// $("#idTamu").val(content);
						//console.log($("#idTamu").val());
						// updateFields();
						// animateDataTamu();
					}
				);

				// Get Cameras
				Instascan.Camera.getCameras().then
				(
					(cameras) =>
					{
						if(cameras.length > 0)
						{
							scanner.start(cameras[active_cam]);
						}
						else
						{
							console.log("No Cameras Found !");
						}
					}
				)
				.catch
				(
					(error) =>
					{
						alert(error);
					}
				)

			</script>
			<button class="btn btn-info" onclick="change_cam()">Change Camera</button>
		</div>
	</div>
	{{-- <div class="container" id="containerInput" style="display: none">
		<div class="jumbotron">
			<h3>Data Tamu</h3>
			<hr>
			
			<div class="form-group">
				<label for="idTamu">ID Tamu</label>
				<input type="idTamu" name="idTamu" id="idTamu" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label for="nama_tamu">Name</label>
				<input type="text" name="nama_tamu" id="nama_tamu" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" name="alamat" id="alamat" class="form-control" readonly>
			</div>
			<div class="form-group">
					<label for="nomor_telp">Nomor Telepon</label>
					<input type="text" name="nomor_telp" id="nomor_telp" class="form-control" readonly>
				</div>
			<div class="form-group">
				<label for="jumlah_undangan">Jumlah Undangan</label>
				<input type="text" name="jumlah_undangan" id="jumlah_undangan" class="form-control" readonly>
			</div>
			<div class="form-group">
				<label for="jumlah_datang">Jumlah Datang</label>
				<input type="number" name="jumlah_datang" id="jumlah_datang" class="form-control"  min="1" max="5">
			</div>
			<div class="form-group">
				<label for="inpGroupCBox">Hadiah</label>
				<div class="input-group mb-3" id="inpGroupCBox">
					<div class="input-group-prepend">
						<div class="input-group-text ">
							<input type="checkbox" id="cbHadiah" aria-label="Checkbox for following text input" onchange="cbBoxChange()">
						</div>
					</div>
					<input type="text" class="form-control" aria-label="Text input with checkbox" id="hadiahID" readonly="1">
				</div>
			</div>
			<button class="btn btn-success" onclick="checkValid()">Update Data</button>
			<button class="btn btn-danger" onclick="animateScanner()">Back</button>
		</div>
	</div>
	<div id="debug">
		
	</div> --}}
	<script>
		var user;
		var timerCheckHadiah;

		function change_cam()
		{
			// Get Cameras
			Instascan.Camera.getCameras().then
				(
					(cameras) =>
					{
						if(cameras.length > 0)
						{
							active_cam = (active_cam+1) % (cameras.length);
							scanner.start(cameras[active_cam]);
						}
						else
						{
							console.log("No Cameras Found !");
						}
					}
				)
				.catch
				(
					(error) =>
					{
						alert(error);
					}
				)
		}

		function updateFields()
		{
			$.post("queryUser.php",{idtamu: $("#idTamu").val()}, function(data)
			{
				console.log(data);
				if(data == ';;;;;')
				{
					clearFields();
					animateScanner();
					alert("Data Tidak Ditemukan!");	
				}
				else
				{
					var datauser = data.split(";");
					if(datauser[5] == '0')
					{
						$("#nama_tamu").val(datauser[1]);
						$("#alamat").val(datauser[2]);
						$("#nomor_telp").val(datauser[3]);
						$("#jumlah_undangan").val(datauser[4])
						$("#jumlah_datang").attr("max",datauser[4]);
					}
					else
					{
						clearFields();
						animateScanner();
						alert("Tamu Sudah Datang! Mohon Kontak Admin untuk Mengubah Data Ini!");
					}
				}
			});
		}

		function clearFields()
		{
			$("#idTamu").val("");
			$("#nama_tamu").val("");
			$("#alamat").val("");
			$("#jumlah_undangan").val("");
			$("#jumlah_datang").attr("max",0);
			$("#jumlah_datang").val("");
			document.getElementById("cbHadiah").checked = false;
			clearInterval(timerCheckHadiah);
			$("#hadiahID").val("");
		}

		function cbBoxChange()
		{
			var cbox = document.getElementById("cbHadiah").checked;
			if(cbox)
			{
				startTimerCheckHadiah();
			}
			else
			{
				clearInterval(timerCheckHadiah);
				$("#hadiahID").val("");
			}
		}

		function startTimerCheckHadiah()
		{
			timerCheckHadiah = setInterval(function(){checkHadiah(); console.log("update Hadiah")},100);
		}

		function checkValid()
		{

				if(document.getElementById("jumlah_datang").value == "" || document.getElementById("jumlah_datang").validity.rangeOverflow || document.getElementById("jumlah_datang").validity.rangeUnderflow)
				{
					alert("Error, Jumlah Datang Harus Valid (1 - "+ $("#jumlah_datang").attr("max") +")");
				}
				else
				{
					// UPDATE DATABASE!
					$.post
					(
						"absenTamu.php",
						{
							idtamu : $("#idTamu").val(), 
							jumhadir: $("#jumlah_datang").val()
						}, 
						function(content)
						{
							$("debug").html(content);
							var cbox = document.getElementById("cbHadiah").checked;
							if(cbox)
							{
								$.post
								(
									"insertHadiah.php",
									{
										idtamu: $("#idTamu").val(), 
										idhadiah: $("#hadiahID").val()
									}
								);
							}

							animateScanner();
							clearFields();
						}
					);
				}	
			
		}

		function animateScanner()
		{
			$("#containerScanner").slideDown();
			$("#containerInput").slideUp();
		}

		function animateDataTamu()
		{
			$("#containerScanner").slideUp();
			$("#containerInput").slideDown();
		}

		function getIdUser(id) {
		    $.ajax({
		        method: "post",
		        url: "/Burger123/test",
		        data: {
		            "_token": "{{ csrf_token() }}",
					"id" : id
		        },
		        success: function (res) {
		            let dataUser = JSON.parse(res);

					$("[name='id']").val(dataUser[0].id);
					$("[name='nama']").val(dataUser[0].nama);
					$("[name='alamat']").val(dataUser[0].alamat);
					$("[name='telp']").val(dataUser[0].telp);
					$("[name='kuota']").val(dataUser[0].kuota);
					$("[name='kehadiran']").val(dataUser[0].kehadiran);

					$("#ajaxModalContent").html(dataUser);

					$("#ajaxModal").click();
					console.log(dataUser);
		        }
		    });
		}

		animateScanner();

	</script>

	{{-- <script>
		$(document).ready(function(){
			$("#testajax").click(function(e){
				e.preventDefault();
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				
			});
		});
	</script> --}}
    
</body>
</html>