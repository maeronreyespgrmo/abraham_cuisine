@extends('layouts.master')

@section('page_name', $page['name'])

@section('page_title', $page['title'])

@section('page_script')
<script>
    $(function() {
    $('#toggle_current_password').on('click', function (e) {
        var passwordType = $('#current_password').attr('type');
        
        
        if($(this).hasClass('bg-light')){
            $(this).removeClass('bg-light');
            $(this).addClass('btn-success');
        }else{
            $(this).removeClass('btn-success');
            $(this).addClass('bg-light');
        }
        if (passwordType == 'password') {
            $('#current_password').attr('type', 'text');
        } else {
            $('#current_password').attr('type', 'password');
        }
    });

    $('#toggle_new_password').on('click', function (e) {
        var passwordType = $('#new_password').attr('type');
        
        if($(this).hasClass('bg-light')){
            $(this).removeClass('bg-light');
            $(this).addClass('btn-success');
        }else{
            $(this).removeClass('btn-success');
            $(this).addClass('bg-light');
        }
        if (passwordType == 'password') {
            $('#new_password').attr('type', 'text');
        } else {
            $('#new_password').attr('type', 'password');
        }
    });

    
    $('#toggle_confirm_password').on('click', function (e) {
        var passwordType = $('#confirm_password').attr('type');

        if($(this).hasClass('bg-light')){
            $(this).removeClass('bg-light');
            $(this).addClass('btn-success');
        }else{
            $(this).removeClass('btn-success');
            $(this).addClass('bg-light');
        }
        if (passwordType == 'password') {
            $('#confirm_password').attr('type', 'text');
        } else {
            $('#confirm_password').attr('type', 'password');
        }
    });

    
      // Attach input event to both password fields
    $('#new_password, #confirm_password').on('change', function() {
        updateSubmitButton();
    });
});

function updateSubmitButton() {
    var newPassword = $('#new_password').val();
    var confirmPassword = $('#confirm_password').val();
    var submitButton = $('.btn-submit');

    // Check if passwords match and length is greater than 8
    if (newPassword === confirmPassword && newPassword.length >= 8) {
        submitButton.prop('disabled', false);
        $('#password_message').html("");
    } else {
        submitButton.prop('disabled', true);
        $('#password_message').html("New Password and Confirm Password must be the same.")
    }
}
</script>
@endsection

@section('content')

	<div class="container">
        @include('layouts.message')

        <div class="row">
            <div class="col-md-12">
                <div class="card user-profile o-hidden mb-4">
                    <div class="header-cover" style="background-image: url('/img/avatar/6.png')"></div>
                    <div class="user-info"><img class="profile-picture avatar-lg mb-2" src="/img/avatars/6.png" alt="">
                        <span class="badge bg-cyan">{{Auth::user()->email}}</span>
                        <p class="m-0 text-24">
                            {{Auth::user()->first_name}} {{Auth::user()->middle_name}} {{Auth::user()->last_name}} {{Auth::user()->suffix}}
                        </p>
                        <p class="text-muted m-0">{{$user->classification}} </p>
                        <p class="text-muted m-0">{{$user->office}} </p>
                        <small></small>
                        <br>
                        <a href="#" class="btn btn-primary mb-5"
                            data-toggle="modal"
                            data-target="#update_pw_modal"
                        > <i class="i-Key"></i> Update Password</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- update password modal --}}
        <div class="modal fade" role="dialog"  id="update_pw_modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="post" action="/profile/update" class="form">
                        @csrf()
                        <div class="modal-header">
                            <b class="modal-title text-primary"><i class="i-Key"></i> Update Password</b>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row"> 
                                <div class="col-md-12">
                                    <label>Current Password</label>
                                </div>
                                <div class="mb-2 col-10">
                                    <input type="password" id="current_password" name="current_password" class="form-control" minlength="8" required>
                                </div>
                                <div class="mb-2 col-2">
                                    <a href="#" class="btn bg-light text-white btn-block" id="toggle_current_password"><i class="i-Eye"></i></a>
                                </div>
                                <div class="col-md-12">
                                    <b><label for="" id="password_message" class="text-danger"></label></b>
                                </div>
                                <div class="col-md-12">
                                    <label>New Password</label>
                                </div>
                                <div class="mb-2 col-10">
                                    <input type="password" id="new_password" name="new_password" class="form-control" minlength="8" required>
                                </div>
                                <div class="mb-2 col-2">
                                    <a href="#" class="btn bg-light text-white  btn-block" id="toggle_new_password"><i class="i-Eye"></i></a>
                                </div>
                                <div class="col-md-12">
                                    <label>Confirm Password</label>
                                </div>
                                <div class="mb-2 col-10">
                                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" minlength="8" required>
                                </div>
                                <div class="mb-2 col-2">
                                    <a href="#" class="btn bg-light text-white btn-block" id="toggle_confirm_password"><i class="i-Eye"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a type="button" class="btn bg-dark text-white" data-dismiss="modal">Close</a>
                            <button class="btn btn-primary btn-submit ladda-button" disabled="true" data-style="slide-left">
                                <span class="ladda-label">Submit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection