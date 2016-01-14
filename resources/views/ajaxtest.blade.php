<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Furbook</title>
    {{--<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">--}}
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js"></script>
    <meta name="_token" content="{!! csrf_token() !!}"/>
</head>
<body>
<div class="container">
    <div class="secure">Secure Login form</div>
    {!! Form::open(array('method'=>'POST', 'id'=>'myform')) !!}
    <div class="control-group">
        <div class="controls">
            {!! Form::text('email','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Email')) !!}
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            {!! Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Please Enter your Password')) !!}
        </div>
    </div>
    {!! Form::button('Login', array('class'=>'send-btn')) !!}
    {!! Form::close() !!}


    <script type="text/javascript">
        $.ajaxSetup({
            headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.send-btn').click(function(){
                $.ajax({
                    url: 'ajaxtest',
                    type: "post",
                    data: {'email':$('input[name=email]').val(), '_token' :$('meta[name=_token]').attr('content')},
                    success: function(data){
                        alert(data);
                    }
                });
            });
        });
    </script>
</div>
</body>