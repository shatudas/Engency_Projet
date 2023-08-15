
@extends('frontend.layouts.index')
@section('homepage')


 <!-- ======= Top contact ======= -->
 <section id="about" class="d-flex align-items-center">
  <div class="container" data-aos="zoom-out" data-aos-delay="100" align="center">
   <h1><span>Company</span> Contact US</h1>
   <ul class="ct-breadcrumb">
    <li>
     <a class="text-dark" href="{{ route('/') }}">Home</a>
    </li>
    <li>
     <span>| Contact</span>
    </li>
   </ul>
  </div>
 </section>


 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
  <div class="container" data-aos="fade-up">

    <div class="row mb-3" data-aos="fade-up" data-aos-delay="100">

     <div class="col-lg-4 col-md-6 mt-2">
      <div class="info-box mb-4">
       <i class="bx bx-map"></i>
       <h3>Our Address</h3>
       <p class="px-2">{{ $contact->address }}</p>
      </div>
     </div>

     <div class="col-lg-4 col-md-6 mt-2">
      <div class="info-box  mb-4">
       <i class="bx bx-envelope"></i>
       <h3>Email Us</h3>
       <p><a href="mailto:{{ $contact->email }}" style="text-decoration:none;">&nbsp; {{ $contact->email }} </a></p>
      </div>
     </div>

     <div class="col-lg-4 col-md-6 mt-2">
      <div class="info-box  mb-4">
       <i class="bx bx-phone-call"></i>
       <h3>Call Us</h3>
       <p> <a href="tel:{{ $contact->phone }}" style="text-decoration:none;"> {{ $contact->phone }} </a> </p>
      </div>
     </div>

    </div>

    <div class="row mt-5" data-aos="fade-up" data-aos-delay="100">

     <div class="col-lg-6 bg-white p-2">
     	<iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.7519024988123!2d90.40939227426021!3d23.7918474871859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70a053825c7%3A0x1b4b6e2bd3e62dc2!2s43%20Rd%2042%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1685517867871!5m2!1sen!2sbd" width="600" height="450" style="border:0; width: 100%; height: 384px;"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
     	</iframe>
     </div>

     <div class="col-lg-6">
      <form action="{{ route('contact.store') }}"  method="POST"  class=" bg-white h-100" id="myForm">
       @csrf

       <div class="row pt-5 px-2">
        <div class="col form-group">
         <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
         <font style="color:red">{{ ($errors->has('name'))?($errors->first('name')):'' }}</font>
        </div>
        <div class="col form-group ">
         <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
         <font style="color:red">{{ ($errors->has('email'))?($errors->first('email')):'' }}</font>
        </div>
       </div>

       <div class="form-group pt-4 px-2">
        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
        <font style="color:red">{{ ($errors->has('subject'))?($errors->first('subject')):'' }}</font>
       </div>

       <div class="form-group pt-4 px-2">
        <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
        <font style="color:red">{{ ($errors->has('message'))?($errors->first('message')):'' }}</font>
       </div>

       <div class="text-center pt-4 mb-2">
        <button type="submit" class="btn btn-primary">Send Message</button>
       </div>

      </form>
     </div>
    </div>

  </div>
 </section>


 <script>
 $(function () {
  $('#myForm').validate({
    rules: {
    name: {
     required: true,
    },
     email: {
     required: true,
     email: true,
    },
     subject: {
     required: true,
    },
     message: {
     required: true,
    },

    },
    messages: {
     user_type: {
        name: "Enter Your Name",
      },
     email: {
        required: "Enter Email Address",
      },
      subject: {
        required: "Please Enter Subject",
      },
       message: {
        required: "Please Enter Massage",
      },
      
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

 
@endsection