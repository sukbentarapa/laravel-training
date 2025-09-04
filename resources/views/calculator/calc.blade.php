@extends('layouts.bizland')

@section('content')
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Mini Calculator</h2>
            <p><span>Calculator </span> <span class="description-title">{{ $number }}</span></p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">


                    <form class="php-email-form" data-aos="fade-up"
                        data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-12">
                                <label for="name-field" class="pb-2">Input any number</label>
                                <input type="text" name="number" id="number" class="form-control rounded-pill" required="" value="{{ $number }}" />
                            </div>

                            <div class="col-md-12">
                                <label for="name-field" class="pb-2">Calculate to number </label>
                                <input type="text" name="to" id="to" class="form-control rounded-pill" required="" value="{{ $to }}" />
                            </div>


                            <div class="col-md-12 text-left">
                                <button type="submit"><i class="bi bi-calculator-fill"></i> Calculate</button>
                            </div>

                        </div>
                    </form>
                </div>

                <div class="col-lg-7">

                    <div class="info-wrap">


                    @for ($i = 1; $i <= $to; $i++)
                        @if ($i % 2 == 0)
                            <b>{{ $i }} * {{ $number }} = {{ $i * $number }}</b><br />
                        @else
                            {{ $i }} * {{ $number }} = {{ $i * $number }}<br />
                        @endif
                    @endfor
                    </div>

                </div><!-- End Contact Form -->

            </div>

        </div>

    </section>
@endsection
