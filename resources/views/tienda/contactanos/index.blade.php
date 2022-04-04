@extends('layouts.layoutienda')
@section('content')
    <div class="block-map block">
        <div class="block-map__body">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.9202777851983!2d-70.61942415624047!3d-33.425322748222044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf631b174fc3%3A0xb481f406f97beba0!2sAv.%20Providencia%201438%2C%20Providencia%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses-419!2scl!4v1619115830659!5m2!1ses-419!2scl"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
        </div>
    </div>
    <div class="page-header">
        <div class="page-header__container container">
            <div class="page-header__breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ url('/') }}">Inicio</a>
                            <svg class="breadcrumb-arrow" width="6px" height="9px">
                                <use xlink:href="{{ asset('dist/images/sprite.svg#arrow-rounded-right-6x9')}}"></use>
                            </svg>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contáctanos
                        </li>
                    </ol>
                </nav>
            </div>
            <div class="page-header__title">
                <h1>Contáctanos</h1>
            </div>
        </div>
    </div>
    <div class="block">
        <div class="container">
            <div class="card mb-0">
                <div class="card-body contact-us">
                    <div class="contact-us__container">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <h4 class="contact-us__header card-title">Our Address</h4>
                                <div class="contact-us__address">
                                    <p>
                                        715 Fake Ave, Apt. 34, New York, NY 10021 USA<br />Email:
                                        stroyka@example.com<br />Phone Number: +1 754
                                        000-00-00
                                    </p>
                                    <p>
                                        <strong>Opening Hours</strong><br />Monday to Friday:
                                        8am-8pm<br />Saturday: 8am-6pm<br />Sunday: 10am-4pm
                                    </p>
                                    <p>
                                        <strong>Comment</strong><br />Lorem ipsum dolor sit
                                        amet, consectetur adipiscing elit. Curabitur suscipit
                                        suscipit mi, non tempor nulla finibus eget. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <h4 class="contact-us__header card-title">
                                    Leave us a Message
                                </h4>
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="form-name">Your Name</label>
                                            <input type="text" id="form-name" class="form-control"
                                                placeholder="Your Name" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="form-email">Email</label>
                                            <input type="email" id="form-email" class="form-control"
                                                placeholder="Email Address" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="form-subject">Subject</label>
                                        <input type="text" id="form-subject" class="form-control" placeholder="Subject" />
                                    </div>
                                    <div class="form-group">
                                        <label for="form-message">Message</label>
                                        <textarea id="form-message" class="form-control" rows="4"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        Send Message
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
