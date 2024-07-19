
@extends('layout')
     @section('title','contact page')
     @section('content')

     <main class= "contact">
        <h1 data-aos="fade-up">Contact <span >Us</span></h1>
        
    </main>
    <div class="container-fluid contact-section">
        <div class="contact-form-container" data-aos="zoom-in-down">
            <div class="contact-form">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label text-dark">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-dark">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label text-dark">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" value="{{ old('phone') }}">
                        @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label text-dark">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter your subject" value="{{ old('subject') }}">
                        @error('subject')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label text-dark">Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Feel free to type anything you want" rows="4">{{ old('message') }}</textarea>
                        @error('message')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="btn btn-danger w-100">Submit</button>
                    </div>
                </form>
            </div>
            <div class="contact-image-container">
                <img src="{{ asset('images/contactCAR.jpg') }}" alt="Contact Image" class="contact-image">
            </div>
        </div>
    </div>


    <section class="contactMap" data-aos="fade-up">
    <iframe class="Map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3054.585247840747!2d-82.90885872361213!3d40.040038578479376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883861d810561b99%3A0x579ad304fbefe297!2sEleCare!5e0!3m2!1sen!2sma!4v1720824249916!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    @endsection 
    
  
    
