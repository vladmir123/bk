<!doctype html>
<html class="no-js" lang="">
<?php $this->load->view('include/header');?>
<body>
	<div class="container-fluid">
		<?php $this->load->view('dashboard/include/nav');?>
		<div class="row  main-container">
			<?php $this->load->view('dashboard/include/sidebar');?>
						<div class="col-md-9">
							<?php $this->load->view('dashboard/include/alert');?>
							<nav class="breadcrumb">
							  <a class="breadcrumb-item" href="<?php echo site_url('dashboard');?>"><span class="glyphicon glyphicon-home"></span> Beranda</a> > 
							    <a class="breadcrumb-item" href="<?php echo site_url('HasilKonferensi/');?>"><span class="glyphicon glyphicon-blackboard"></span> Hasil Konferensi</a> > 
							  <span class="breadcrumb-item active"><span class="glyphicon glyphicon-plus"></span> Tambah</span>
							</nav>
							 <div class="panel panel-primary">
						      <div class="panel-heading">Formulir Buat Hasil Konferensi</div>
						      <div class="panel-body">
						      		<form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo base_url('HasilKonferensi/save') ;?>">
										<div class="row">
											<div class="col-md-4">
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">NIS</label>
												<div class="col-sm-9">
												<div class="input-group">
												  <input type="text" name="nis" class="form-control" id="nis" placeholder="Masukan NIS..">
												    <span class="input-group-btn">
											        <button class="btn btn-primary" type="button" id="search">Cari </button>
											      </span>
												</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Nama</label>
												<div class="col-sm-9">
													<input type="text" disabled name="nama" class="form-control" id="nama" placeholder="Masukan Nama siswa..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Kelas</label>
												<div class="col-sm-9">
													<input type="text"  disabled name="kelas" class="form-control" id="kelas" placeholder="Masukan kelas..">
												</div>
											</div>
												<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Jurusan</label>
												<div class="col-sm-9">
													<input type="text"  disabled name="jurusan" class="form-control" id="jurusan" placeholder="Masukan Jurusan..">
												</div>
											</div>
												</div>
												<div class="col-md-8">
												
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Tanggal</label>
												<div class="col-sm-9">
													<input type="date" name="tanggal" class="form-control" placeholder="Tanggal..">
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Deskripsi kasus</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Masukkan deskripsi kasus.." name="deskripsi_kasus" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label text-danger">Dafter Peserta Konferensi Kasus</label>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 1</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<input type="text" name="nama_1" class="form-control" id="input" placeholder="Masukan nama.. ">
														</div>
														<div class="col-sm-6">
														<input type="text" name="jabatan_1" class="form-control" id="input" placeholder="Masukan jabatan.. ">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 2</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<input type="text" name="nama_2" class="form-control" id="input" placeholder="Masukan nama.. ">
														</div>
														<div class="col-sm-6">
														<input type="text" name="jabatan_2" class="form-control" id="input" placeholder="Masukan jabatan.. ">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 3</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<input type="text" name="nama_3" class="form-control" id="input" placeholder="Masukan nama.. ">
														</div>
														<div class="col-sm-6">
														<input type="text" name="jabatan_3" class="form-control" id="input" placeholder="Masukan jabatan.. ">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 4</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<input type="text" name="nama_4" class="form-control" id="input" placeholder="Masukan nama.. ">
														</div>
														<div class="col-sm-6">
														<input type="text" name="jabatan_4" class="form-control" id="input" placeholder="Masukan jabatan.. ">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Peserta 5</label>
												<div class="col-sm-9">
													<div class="row">
														<div class="col-sm-6">
														<input type="text" name="nama_5" class="form-control" id="input" placeholder="Masukan nama.. ">
														</div>
														<div class="col-sm-6">
														<input type="text" name="jabatan_5" class="form-control" id="input" placeholder="Masukan jabatan.. ">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Hasil Konferensi kasus</label>
												<div class="col-sm-9">
													<textarea  style="text-align:justify" placeholder="Masukkan keperluan.." name="hasil" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Evaluasi Tindak Lanjut</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Masukkan keperluan.." name="evaluasi" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
											<div class="form-group">
												<label for="input" class="col-sm-3 control-label">Catatan khusus</label>
												<div class="col-sm-9">
													<textarea style="text-align:justify" placeholder="Masukkan keperluan.." name="catatan" class="text-left control-label form-control" rows="5" cols="30"></textarea>
												</div>
											</div>
										
											<input id="id_student" type="hidden" value="" name="id_student">
											<div class="form-group">
													<div class="col-sm-6 pull-right">
														<input type="submit"  class="form-control btn btn-block btn-primary" id="input" value="simpan">
													</div>
												</div>

												</div>
												
									</form>
						      </div>
						    </div>
						</div>
					</div>
				</div>
<?php $this->load->view('include/footer');?>
	<script type="text/javascript">
		$(document).ready(function(){
			var url="<?php echo site_url();?>";
			$("#search").click(function(e){
				e.preventDefault();
				var nis=$('#nis').val();
				$.getJSON({
				url:url+'visit/getData/'+nis,
				}).done(function(data){

					var result=data[0];
						console.log(result);
					if(result==undefined){
						alert("data siswa tidak ditemukan");
					}else{
						$("#nama").val(result.nama);
						$("#kelas").val(result.kelas);
						$("#alamat").val(result.alamat_rumah);
						$("#nis_view").val(result.nis);
						$("#id_student").val(result.id_student);
						$("#thn_ajaran").val(result.thn_pelajaran);
						$("#jurusan").val(result.jurusan);
							
					}
					
				});

			})
			

		})
	</script>
</body>
</html>