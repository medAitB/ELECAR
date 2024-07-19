@extends('layouts.admin')
@section('title','Create')
@section('content')

<main class="d-flex justify-content-center align-items-center flex-column" style="height: 100vh; background-color: #eee;">
    <!-- New Form with Image -->
    <section class="d-flex align-items-center shadow-lg" style="width: 100%; height: 60%; max-width: 900px; background-color: white; padding: 30px;">
        <!-- <div class="flex-shrink-0">
            <img src="{{ asset('images/createCar.jpg') }}" alt="Car Image" style="width: 300px; height: 100%; margin-right: 30px;">
        </div> -->
        <div class="flex-grow-1">
            <h2 class="mb-4" style="font-size: 1.75rem; text-align: center;">Add Car</h2>

            <form action="{{ route('cars.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="new_name" class="form-label" style="font-size: 1.5rem;">Name</label>
                    <input id="new_name" name="name" style="font-size: 1.5rem; height: 50px " type="text" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="new_origin" class="form-label" style="font-size: 1.5rem;">Origin</label>
                    <input id="new_origin" name="origin" style="font-size: 1.5rem; height: 50px "  type="text" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="new_image_url" class="form-label" style="font-size: 1.5rem;">Image</label>
                    <input id="new_image_url" name="image_url" style="font-size: 1.5rem; height: 50px " type="file" class="form-control" required>
                </div>
                <div class="form-group mb-3">
                    <label for="new_paragraph" class="form-label" style="font-size: 1.5rem;">Paragraph</label>
                    <textarea id="new_paragraph" name="paragraph" style="font-size: 1.5rem; " class="form-control" rows="6" required></textarea>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-block" style="font-size: 1.5rem; margin-top: 50px; padding: 10px;">Add Car</button>
                </div>
            </form>
        </div>
    </section>
</main>

@endsection






