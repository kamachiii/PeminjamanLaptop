<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
    body {
        background: -webkit-linear-gradient(left, #0072ff, #00c6ff);
    }

    .contact-form {
        background: #fff;
        margin-top: 10%;
        margin-bottom: 5%;
        width: 70%;
    }

    .contact-form .form-control {
        border-radius: 1rem;
    }

    .contact-image {
        text-align: center;
    }

    .contact-image img {
        border-radius: 6rem;
        width: 11%;
        margin-top: -3%;

    }

    .contact-form form {
        padding: 14%;
    }

    .contact-form form .row {
        margin-bottom: -7%;
    }

    .contact-form h3 {
        margin-bottom: 8%;
        margin-top: -10%;
        text-align: center;
        color: #0062cc;
    }

    .contact-form .btnContact {
        width: 50%;
        border: none;
        border-radius: 1rem;
        padding: 1.5%;
        background: #dc3545;
        font-weight: 600;
        color: #fff;
        cursor: pointer;
    }

    .btnContactSubmit {
        width: 50%;
        border-radius: 1rem;
        padding: 1.5%;
        color: #fff;
        background-color: #0062cc;
        border: none;
        cursor: pointer;
    }

</style>


<div class="container contact-form">
    <div class="contact-image">
        <img src="images/rpl.jpg">
    </div>
    <a href="/" type="submit" class="btn btn-primary float-right mr-10 pr-4 pl-4">back</a>


    <form  action="{{ route('loginStore') }}" method="POST">
        @csrf
        <h3>Login</h3>
        {{-- @if ($message = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                <p>{{ $message }}</p>
            </div>
        @endif --}}
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="example@gmail.com"/>
                    @error('email')
                        <div class="text-danger">{{ Session::get('email') }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="********" />
                </div>
                <div class="form-group text-center">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Submit" />

                </div>
            </div>
        </div>
    </form>
</div>

</body>
</html>
