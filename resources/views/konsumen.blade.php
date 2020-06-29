<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" id="tambah_konsumen">
		  Tambah Konsumen
		</button>
		<br>
		<br>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Konsumen</th>
					<th>Jenis Kendaraan</th>
					<th>No. Polisi</th>
					<th>Tanggal Lahir</th>
					<th>Jenis Kelamin</th>
					<th>No. HP</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($data_konsumen as $konsumen)
				<tr>
					<td>{{ $konsumen->konsumen }}</td>
					<td>{{ $konsumen->jenis_kendaraan }}</td>
					<td>{{ $konsumen->no_polisi }}</td>
					<td>{{ $konsumen->tgl_lahir }}</td>
					<td>{{ $konsumen->jenis_kelamin }}</td>
					<td>{{ $konsumen->no_hp }}</td>
					<td>
						<a href="/konsumen/edit/{{ $konsumen->id }}" class="btn btn-secondary btn-sm">Edit</a>
						<a href="/konsumen/delete/{{ $konsumen->id }}" class="btn btn-secondary btn-sm" onclick="return confirm('Delete?');">Delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>		
	</div>

	<!-- MODAL ADD -->
	<div id="formModal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title"><b class="title-form">Tambah Kelas</b></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form id="konsumen_form" action="/konsumen/add" method="POST">
	        	@csrf
				<div class="box-body">
	                <table width="100%" class="table-bordered">
	                	<tr>
	                		<td>Konsumen</td>
	                		<td></td>
	                		<td><input type="text" name="konsumen" id="konsumen"></td>
	                	</tr>
	                	<tr>
	                		<td>Jenis Kendaraan</td>
	                		<td></td>
	                		<td>
	                			<select id="jenis_kendaraan" name="jenis_kendaraan">
	                				<option value="Mobil">Mobil</option>
	                				<option value="Motor">Motor</option>
	                			</select>
	                		</td>
	                	</tr>
	                	<tr>
	                		<td>No Polisi</td>
	                		<td></td>
	                		<td><input type="text" name="no_polisi"></td>
	                	</tr>
	                	<tr>
	                		<td>Tanggal Lahir</td>
	                		<td></td>
	                		<td><input type="text" name="tgl_lahir" id="tgl_lahir"></td>
	                	</tr>
	                	<tr>
	                		<td>Jenis kelamin</td>
	                		<td></td>
	                		<td>
	                			<select id="jenis_kelamin" name="jenis_kelamin">
	                				<option value="L"> Laki-laki</option>
	                				<option value="P"> Perempuan</option>
	                			</select>
	                		</td>
	                	</tr>
	                	<tr>
	                		<td>No HP</td>
	                		<td></td>
	                		<td><input type="text" name="no_hp" id="no_hp"></td>
	                	</tr>
	                </table>
			    </div>
			    <div class="modal-footer">
	                <input type="hidden" name="action" id="action" value="add">
	                <input type="hidden" name="hidden_id" id="hidden_id">
			        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
			        <button type="submit" class="btn btn-primary" id="action_button">Tambah</button>
			    </div>
			</form>
	    </div>
	  </div>
	</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#tambah_konsumen").click(function(){
		$("#formModal").modal('show');
		$(".title-form").text('Tambah Konsumen');
		$("#action_button").text("Tambah");
	});

	$('#formModal').on('hidden.bs.modal', function(e) {
	  	$(this).find('#konsumen_form')[0].reset();
	});

});	
</script>
</html>