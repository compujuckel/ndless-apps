@extends('layouts.master')

@section('content')
	<div class="container">
		<h1>Account settings</h1>
		@if($errors->any())
			<div class="alert alert-danger">{{{ $errors->first() }}}</div>
		@endif
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Change password
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="/account">
							<div class="form-group">
								<label class="control-label" for="oldPass">Old password</label>
								<input type="password" class="form-control" name="oldPass" id="oldPass">
							</div>
							<div class="form-group">
								<label class="control-label" for="newPass1">New password (min. 8 characters)</label>
								<input type="password" class="form-control" name="newPass1" id="newPass1">
							</div>
							<div class="form-group">
								<label class="control-label" for="newPass2">Confirm new password</label>
								<input type="password" class="form-control" name="newPass2" id="newPass2">
							</div>
							<button type="submit" class="btn btn-default" id="passBtn" name="changepw" value="1" disabled="disabled"><i class="fa fa-key"></i> Change password</button>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-danger">
					<div class="panel-heading">
						Delete account
					</div>
					<div class="panel-body">
						<form role="form" method="POST" action="/account">
							<div class="form-group">
								<label for="remPass">Enter password</label>
								<input type="password" class="form-control" name="remPass" id="remPass">
							</div>
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" id="iamsure">
										Yes, I want to permanently remove my account.
									</label>
								</div>
							</div>
							<button type="submit" class="btn btn-danger" id="removeacc" name="removeacc" value="1" disabled="disabled"><i class="fa fa-trash-o"></i> Remove account</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script>
		$(document).ready(function(){
			$("#newPass1").keyup(function(){
				var len = $(this).val().length;
				if(len < 8 && len > 0) {
					$(this).parent().addClass("has-error");
					$(this).parent().removeClass("has-success");
				}
				else if(len >= 8) {
					$(this).parent().removeClass("has-error");
					$(this).parent().addClass("has-success");
				}
				else {
					$(this).parent().removeClass("has-error");
					$(this).parent().removeClass("has-success");
				}
				$("#newPass2").keyup();
			});
			$("#newPass2").keyup(function(){
				if($(this).val() != $("#newPass1").val() && $(this).val().length > 0) {
					$(this).parent().addClass("has-error");
					$(this).parent().removeClass("has-success");
				}
				else if($(this).val() == $("#newPass1").val() && $(this).val().length > 0) {
					$(this).parent().removeClass("has-error");
					$(this).parent().addClass("has-success");
				}
				else {
					$(this).parent().removeClass("has-error");
					$(this).parent().removeClass("has-success");
				}
				
				if($(this).parent().hasClass("has-success") && $("#newPass1").parent().hasClass("has-success")) {
					$("#passBtn").removeAttr("disabled");
				}
				else {
					$("#passBtn").attr("disabled","disabled");
				}
			});
			$("#iamsure").change(function(){
				if($(this).is(":checked")) {
					$("#removeacc").removeAttr("disabled");
				}
				else {
					$("#removeacc").attr("disabled","disabled");
				}
			});
		});
	</script>
@stop