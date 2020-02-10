@extends('ads/main')
@section('promo')
    @component('ads._partials.inner_promo')
        @slot('title')
            <h1>Kontaktai</h1>
        @endslot
    @endcomponent
@stop
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-7 mb-5"  data-aos="fade">
                <form action="#" class="p-5 bg-white">
                    <div class="row form-group">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <label class="text-black" for="fname">Vardas</label>
                            <input type="text" id="fname" class="form-control">
                        </div>
                        <div class="col-md-6">
                            <label class="text-black" for="lname">Pavardė</label>
                            <input type="text" id="lname" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="email">El. paštas</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">

                        <div class="col-md-12">
                            <label class="text-black" for="subject">Tema</label>
                            <input type="subject" id="subject" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="text-black" for="message">Žinutė</label>
                            <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                        </div>
                    </div>


                </form>
            </div>
            <div class="col-md-5"  data-aos="fade" data-aos-delay="100">

                <div class="p-4 mb-3 bg-white">
                    <p class="mb-0 font-weight-bold">Adresas</p>
                    <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

                    <p class="mb-0 font-weight-bold">Telefonas</p>
                    <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

                    <p class="mb-0 font-weight-bold">El. paštas</p>
                    <p class="mb-0"><a href="#">youremail@domain.com</a></p>

                </div>
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Daugiau Info</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
                    <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
                </div>

            </div>
        </div>
    </div>
    @stop
