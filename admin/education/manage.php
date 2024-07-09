<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<?php 
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * from education where id = '{$_GET['id']}' ");
	foreach($qry->fetch_array() as $k => $v){
		if(!is_numeric($k)){
			$$k = $v;
		}
	}
}
?>
<style>.swal2-popup.swal2-toast .swal2-title {
    margin: 0;
    color: black;
    font-size: 1.5rem;
	border: 1px solid green;
	background-color: #84ac7c;
}

.swal2-popup.swal2-toast .swal2-title {
    flex-grow: 1;
    justify-content: flex-start;
    margin: 0 0.6em;
    font-size: 1.25rem;
}

.swal2-title {
    margin: 0;
    font-size: 2.5rem;
	font-family: 'Evogria', sans-serif !important;
}

[class^=swal2] {
    -webkit-tap-highlight-color: transparent;
}

.swal2-title {
    position: relative;
    max-width: 100%;
    margin: 0 0 0.4em;
    padding: 0;
    color: #595959;
    font-size: 3.75rem;
    font-weight: 600;
    text-align: center;
    text-transform: none;
    word-ext-align: center;
    text-transform: none;
    word-wrap: break-word;
}.swal2-container {
    display: flex !important;
    justify-content: center !important;
    align-items: center !important;
}

		.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
    background-color: #84ac7c;
    color: #fff;
}.border-primary {
    border-color: black !important;
}.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color:  #84ac7c;
    border-color:black;
}.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
	object-fit: cover;box-shadow: 0px 2px 4px -1px rgb(0 0 0 / 20%), 0px 4px 5px 0px rgb(0 0 0 / 14%), 0px 1px 10px 0px rgb(0 0 0 / 12%);
}.card-primary.card-outline {
    border-top: 3px solid white;
}.card-title,.control-label{
    font-family: 'Evogria', sans-serif;
}.text-sm .content-header h1 {
    font-size: 1.5rem;
    color: #84ac7c;
}.content-wrapper{
	background-color: #84ac7c;
}#preloader .loader-holder div {
    box-sizing: border-box;
    display: block;
    position: absolute;
    width: 64px;
    height: 64px;
    margin: 5px;
    border: 5px solid #fff;
    border-radius: 50%;
    animation: lds-ring 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
    border-color: #84ac7c transparent transparent transparent;
}
</style>
<div class="col-lg-12">
	<div class="card card-outline card-primary"style="border: 1px solid black;">
		<div class="card-header">
			<h5 class="card-title">Educational Attainment</h5>
		</div>
		<div class="card-body">
			<form id="education">
				<div class="row" class="details">
					<input type="hidden" name="id" value="<?php echo isset($id) ? $id : '' ?>">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">School</label>
							<textarea name="school" cols="30" rows="2" class="form-control"><?php echo isset($school) ? $school : '' ?></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="" class="control-label">Year Level / Course</label>
							<textarea name="course" cols="30" rows="2" class="form-control"><?php echo isset($course) ? $course : '' ?></textarea>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="form-group">
							<label for="" class="control-label">Year Started</label>
							<select name="started" id="" class="select custom-select custom-select-sm">
								<?php 
									for ($y =0; $y < 100; $y++) {
									     $_started = date('Y') - $y;
									     echo "<option ".((isset($started) && $started == $_started) ? "selected" : "").">" .$_started.'</option>';
									    }
								?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="" class="control-label">Year Ended</label>
							<select name="year" id="" class="select custom-select custom-select-sm">
								<?php 
									for ($y =0; $y < 100; $y++) {
									     $_year = date('Y') - $y;
									     echo "<option ".((isset($year) && $year == $_year) ? "selected" : "").">" .$_year.'</option>';
									    }
								?>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
		<div class="card-footer">
			<button style="background-color: #84ac7c;font-family: 'Evogria', sans-serif; border-color: #363e45;"class="btn btn-primary btn-sm" form="education"><?php echo isset($_GET['id']) ? "Update": "Save" ?></button>
			<a style="background-color: #84ac7c;font-family: 'Evogria', sans-serif; border-color: #363e45;"class="btn btn-primary btn-sm" href="./?page=education">Cancel</a>
		</div>
	</div>
</div>

<script>

	$(document).ready(function(){
		$('.select')
		$('#education').submit(function(e){
			e.preventDefault();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Content.php?f=education",
				method:"POST",
				data:$(this).serialize(),
				error: err=>{
					alert_toast("An error occured",'error')
					console.log(err);
				},
				success:function(resp){
					if(resp != undefined){
						resp = JSON.parse(resp)
						if(resp.status == 'success'){
							location.href=_base_url_+"admin/?page=education";
						}else{
							alert_toast("An error occured",'error')
							console.log(resp);
							end_loader();
						}
					}
				}
			})
		})
	})
	
</script>