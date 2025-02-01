@extends('Layout.app')
@section('page-main-content')
    <div class="container my-5">
        <h1 class="text-center mb-4">Contact Us</h1>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-6">
                <h3>Get In Touch</h3>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Your Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

            <!-- Contact Information -->
            <div class="col-md-6">
                <h3 class="mb-4">Our Contact Information</h3>
                <div class="bg-light p-4 rounded shadow-sm">
                    <ul class="list-unstyled">
                        <li class="d-flex mb-3">
                            <i class="bi bi-geo-alt-fill fs-3 me-3 text-primary"></i>
                            <div>
                                <strong>Address:</strong>
                                <p class="mb-0">123 Main Street, Cityville, Country</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-telephone-fill fs-3 me-3 text-primary"></i>
                            <div>
                                <strong>Phone:</strong>
                                <p class="mb-0">+1 (234) 567-890</p>
                            </div>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="bi bi-envelope-fill fs-3 me-3 text-primary"></i>
                            <div>
                                <strong>Email:</strong>
                                <p class="mb-0">contact@company.com</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
