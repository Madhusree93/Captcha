
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Form</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
   <body>
   @if(Session::get('success'))
        <script>
            swal("Good job!", "{{Session::get('success')}}", "success");
        </script>
    @endif

    @if(Session::get('error'))
        <script>
            swal("Sorry!", "{{Session::get('error')}}", "error");
        </script>
    @endif

      <form class="form" id="myForm" action="{{route('contact_submit')}}" method="post" >
         @csrf
         <div class="form-item">
            <h3>Form</h3>
         </div><br>
         <div class="form-item">
         <label for="name">Name*</label>
            <input type="text" name="name" id="name" autocomplete="off" value="{{old('name')}}">
            @if($errors->has('name'))
            <span class="text-danger">
                <strong>{{$errors->first('name')}}</strong>
            </span>
            @endif
         </div><br>
         <div class="form-item">
            <label for="cnumber">Contact Number*</label>
            <input type="text" name="contactno"  id="cnumber"  autocomplete="off" value="{{old('contactno')}}" >
            @if($errors->has('contactno'))
            <span class="text-danger">
                <strong>{{$errors->first('contactno')}}</strong>
            </span>
            @endif
         </div><br>
         <div class="form-item">
            <label for="cname">Company Name*</label>
            <input type="text" name="companyname" id="cname" autocomplete="off"  value="{{old('companyname')}}">
            @if($errors->has('companyname'))
            <span class="text-danger">
                <strong>{{$errors->first('companyname')}}</strong>
            </span>
            @endif
         </div><br>
         <div class="form-item">
             <label for="ycemail">Your Company Email*</label>
            <input type="email" name="companyemail" id="ycemail"  autocomplete="off" value="{{old('companyemail')}}">
            @if($errors->has('companyemail'))
            <span class="text-danger">
                <strong>{{$errors->first('companyemail')}}</strong>
            </span>
            @endif
         </div><br>
         <div class="form-item">{!!captcha_img('math')!!} <input type="text" name="captcha" required > 
             @if($errors->has('captcha'))
            <span class="text-danger">
                <strong>{{$errors->first('captcha')}}</strong>
            </span>
            @endif</div>
         <br>
         <div class="buttons_ocbtnarea">
            <button class="blob-btn">
            Book a Free Demo
            <span class="blob-btn__inner">
            <span class="blob-btn__blobs">
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            <span class="blob-btn__blob"></span>
            </span>
            </span>
            </button>
            <br/>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
               <defs>
                  <filter id="goo">
                     <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
                     <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
                     <feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
                  </filter>
               </defs>
            </svg>
         </div>
      </form>
   </body>
</html>