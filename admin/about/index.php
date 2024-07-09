<?php if($_settings->chk_flashdata('success')): ?>
<script>
	alert_toast("<?php echo $_settings->flashdata('success') ?>",'success')
</script>
<?php endif;?>
<div class="col-lg-12">
	<div class="card card-outline card-primary" style="border: 1px solid black;">
		<div class="card-header">
			<h5 style="font-family: 'Evogria', sans-serif;" class="card-title">About Me</h5>
		</div>
		<style>
			label{
				font-family: 'Evogria', sans-serif;
				}
				.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
    background-color: #84ac7c;
    color: #fff;
}.card-primary.card-outline {
    border-top: 3px solid white;
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
}.text-sm .content-header h1 {
    font-size: 1.5rem;
    color: #84ac7c;
}.content-wrapper{
	background-color: #84ac7c;
}.swal2-popup.swal2-toast .swal2-title {
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

		</style>
		<div class="card-body">
			<form id="about_c">
				<div class="form-group">
					<input type="hidden" name="file" value="about">
					<label for="" class="control-label">Content</label>
		             <textarea name="content" id="" cols="30" rows="10" class="form-control summernote"><?php echo (is_file(base_app.'about.html')) ? file_get_contents((base_app.'about.html')) : '' ?></textarea>
				</div>
			</form>
		</div>
		<div class="card-footer">
			<button style="background-color: #84ac7c;font-family: 'Evogria', sans-serif; border-color: #363e45;"class="btn btn-primary btn-sm" form="about_c">Update </button>
		</div>
	</div>
</div>

<script>

	$(document).ready(function(){
		$('#about_c').submit(function(e){
			e.preventDefault();
			start_loader();
			$.ajax({
				url:_base_url_+"classes/Content.php?f=update",
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
							location.reload()
						}else{
							alert_toast("An error occured",'error')
							console.log(resp);
							end_loader();
						}
					}
				}
			})
		})
		$('.summernote').summernote({
		        height: 200,
		        toolbar: [
		            [ 'style', [ 'style' ] ],
		            [ 'font', [ 'bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear'] ],
		            [ 'fontname', [ 'fontname' ] ],
		            [ 'fontsize', [ 'fontsize' ] ],
		            [ 'color', [ 'color' ] ],
		            [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
		            [ 'table', [ 'table' ] ],
		            [ 'view', [ 'undo', 'redo', 'fullscreen', 'codeview', 'help' ] ]
		        ]
		    })
	})
	
</script>