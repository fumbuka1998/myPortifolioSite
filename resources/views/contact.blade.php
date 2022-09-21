<!DOCTYPE html>
<html>
<head>
<title>MESSAGE ME!</title>
<link rel="stylesheet", href="css/iletisim.css">


</head>
<body>
<div class="container">

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    <form id="iletisim" action="{{url('sendsms')}}" method="POST">
        @csrf
        <h2>MESSAGE ME!</h2>

        <div class="form-control">
        <input placeholder="full name" type="text" name="NAME" required autofocus>
        </div>

        <div class="form-control">
        <input placeholder="email" type="email" name="EMAIL" required>
        </div>

        <div class="form-control">
        <input placeholder="phone no" type="text" name="PHONE" required>
        </div>
        <div class="form-control">
            <input placeholder="subject here" type="text" name="SUBJECT" required>
            </div>

        <div class="form-control">
        <textarea placeholder="your message goes here..... " required name="MESSAGE"> </textarea>
        </div>

        <div class="form-control">
        <button name="submit" type="submit" id="submit">submit</button>
        </div>

    </form>
</div>

</body>
</html>
