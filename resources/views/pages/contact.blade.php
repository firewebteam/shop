@extends('layouts.app')

@section('content')
      <div class = 'center'>
      
      
            <!--Section: Contact v.2-->
<section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Napisz do nas</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Masz pytania? Napisz do nas bezpośrednio. Chętnie odpowiemy na wszystkie wątpliwości!
        
            <div class="row">
        
                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Twoje imię</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Twój mail</label>
                                </div>
                            </div>
                            <!--Grid column-->
        
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Temat</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
        
                        <!--Grid row-->
                        <div class="row">
        
                            <!--Grid column-->
                            <div class="col-md-12">
        
                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Wiadomość</label>
                                </div>
        
                            </div>
                        </div>
                        <!--Grid row-->
        
                    </form>
        
                    <div class="text-center text-md-right">
                        <a class="btn btn-primary" style="width:120px" onclick="document.getElementById('contact-form').submit();">Wyślij</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->
        
                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Jan Kowalski, Kraków </p>
                        </li>
        
                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p> (+48) 123 456 789</p>
                        </li>
        
                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>Janrobi@privet.ru</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
        
            </div>
        
        </section>
        <!--Section: Contact v.2-->

</div>


@endsection
