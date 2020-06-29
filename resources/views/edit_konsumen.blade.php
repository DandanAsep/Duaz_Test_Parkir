<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Edit Konsumen</h1>
		<form id="konsumen_form" action="/konsumen/update/{{$konsumen->id}}" method="POST">
	        	@csrf
				<div class="box-body">
	                <table width="100%" class="table-bordered">
	                	<tr>
	                		<td>Konsumen</td>
	                		<td></td>
	                		<td><input type="text" name="konsumen" id="konsumen" value="{{$konsumen->konsumen}}"></td>
	                	</tr>
	                	<tr>
	                		<td>Jenis Kendaraan</td>
	                		<td></td>
	                		<td>
	                			<select id="jenis_kendaraan" name="jenis_kendaraan">
	                				<option value="Mobil" @if($konsumen->jenis_kendaraan == 'Mobil') selected @endif>Mobil</option>
	                				<option value="Motor" @if($konsumen->jenis_kendaraan == 'Motor') selected @endif>Motor</option>
	                			</select>
	                		</td>
	                	</tr>
	                	<tr>
	                		<td>No Polisi</td>
	                		<td></td>
	                		<td><input type="text" name="no_polisi" value="{{$konsumen->no_polisi}}"></td>
	                	</tr>
	                	<tr>
	                		<td>Tanggal Lahir</td>
	                		<td></td>
	                		<td><input type="text" name="tgl_lahir" id="tgl_lahir" value="{{$konsumen->tgl_lahir}}"></td>
	                	</tr>
	                	<tr>
	                		<td>Jenis kelamin</td>
	                		<td></td>
	                		<td>
	                			<select id="jenis_kelamin" name="jenis_kelamin">
	                				<option value="L" @if($konsumen->jenis_kelamin == 'L') selected @endif> Laki-laki</option>
	                				<option value="P" @if($konsumen->jenis_kelamin == 'P') selected @endif> Perempuan</option>
	                			</select>
	                		</td>
	                	</tr>
	                	<tr>
	                		<td>No HP</td>
	                		<td></td>
	                		<td><input type="text" name="no_hp" id="no_hp" value="{{$konsumen->no_hp}}"></td>
	                	</tr>
	                </table>
			    </div>
			    <div class="modal-footer">
	                <input type="hidden" name="action" id="action" value="add">
	                <input type="hidden" name="hidden_id" id="hidden_id">
			        <a href="/konsumen" class="btn btn-secondary">Batal</a>
			        <button type="submit" class="btn btn-primary" id="action_button">Update</button>
			    </div>
			</form>		
	</div>
	</body>
</html>