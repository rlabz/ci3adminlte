<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ONGKIR</title>
	<style>
		html,body,p{font-family:arial;font-size:14px;font-color: #666;}
		h3{font-color:#797979;}
		#tempel{padding:20px;border:1px solid #ddd;margin:20px;float:left;width:40%;min-height:300px;}
		table{border-collapse: collapse;}
		table, th, td { border:1px solid #d9d9d9;padding:5px;}
		.form-cari{width:40%;padding:20px;border:1px solid #ddd;margin:20px;position:relative;float:left;min-height:300px;}

	</style>
</head>
<body>
	<div class="form-cari">
		<h3>cek ongkir</h3>
		<form action="#" method="POST" name="cekOngkir" id="cekOngkir">
			<!-- <input type="text" name="asal" id="asal" placeholder="asal"> -->
			<p><label for="provinsi_asal">Dari :</label>
			<select name="provinsi_asal" id="provinsi_asal">
				<option value="0">-- pilih provinsi --</option>
				<?php echo $result;?>
			</select>
			<select name="city_asal" id="city_asal">
				<option value="">-- pilih kota --</option>
			</select></p>
			<p><label for="provinsi_tujuan">Ke :</label>
			<select name="provinsi_tujuan" id="provinsi_tujuan">
				<option value="0">-- pilih provinsi --</option>
				<?php echo $result;?>
			</select>
			<select name="city_tujuan" id="city_tujuan">
				<option value="">-- pilih kota --</option>
			</select></p>


			<p><label for="">Berat :</label>
			<input type="text" name="weight" id="weight" placeholder="berat(gram)" value="1000"></p>
			<p><label for="">Kurir :</label>
			<select name="kurir" id="kurir">
				<option value="pos">POS</option>
				<option value="jne">JNE</option>
				<option value="tiki">TIKI</option>
			</select></p>
			<p><button type="button" name="submit" id="btnCheck">Cek Ongkir</button></p>
		</form>	
	</div>
<div id="tempel">
		<h3>Tarif Pengiriman</h3>
</div>
</body>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery-1.12.0.min.js')?>"></script>
<script type="text/javascript">
$(document).ready(function(){
	$("#city_asal").prop('disabled', true);
	$("#provinsi_tujuan").prop('disabled', true);
	$("#city_tujuan").prop('disabled', true);
	$(document).on("change","#provinsi_asal",function(e){
		var prov = $(this).val();
		var that = $("#city_asal");
		var url = "<?php echo site_url('ongkir/getcity');?>/"+prov;
		$.ajax({
			url : url,
			type:"POST",
			dataType:"html",
			data:{prov:prov},
			success: function(data){
				$("#city_asal").prop('disabled', false);
				$("#provinsi_tujuan").prop('disabled', false);				
				if(data){
					that.html(data);
				}else{
					that.html('<option value="0">-- pilih kota --</option>');
				}
			}
		});
	});
	$(document).on("change","#provinsi_tujuan",function(e){		
		var prov = $(this).val();
		var that = $("#city_tujuan");
		var url = "<?php echo site_url('ongkir/getcity');?>/"+prov;
		$.ajax({
			url : url,
			type:"POST",
			dataType:"html",
			data:{prov:prov},
			success: function(data){
				$("#city_tujuan").prop('disabled', false);
				if(data){
					that.html(data);
				}else{
					that.html('<option value="0">-- pilih kota --</option>');
				}
			}
		});
	});
	$(document).on('click','#btnCheck', function(e){
		var url = "<?php echo site_url('ongkir/getongkir');?>",
		origin = $("#city_asal").val(),
		destination = $("#city_tujuan").val(),
		weight = $("#weight").val(),
		courier = $("#kurir").val(),
		hasil = $("#tempel");

		$.ajax({
			url: url,
			type: 'POST',
			data: {origin:origin,destination:destination,weight:weight,courier:courier},
			dataType: "HTML",
			success: function(response){
				hasil.html(response);
			}
		});
		// e.preventDefault();
	})	
});
</script>
</html>