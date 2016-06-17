@extends('layout.layout')

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 marg-top">
                Μπορείτε να με ακολουθήσετε στα κοινωνικά μου δίκτυα
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 marg-top">
                <div class="row">
                    <div class="col-md-1" style="padding-right:4rem;">
                        <a href="https://www.facebook.com/Zeinis-Efstathios--668926329811405"><img src="images/logo/fb-icon.png"></a>
                    </div>
                    <div class="col-md-1" style="padding-right:4rem;">
                        <a href=""><img src="images/logo/500px-icon.png"></a>
                    </div>
                    <!-- <div class="col-md-1" style="padding-right:4rem;">
                        <a href=""><img src="images/logo/insta-icon.png"></a>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 marg-top">
                ή να μου αποστείλετε απευθείας μήνυμα
            </div>
        </div>
        <div class="row">
            <div id="contact_section" class="col-md-8 col-md-offset-2">
                <form action="/mail/send" method="GET">
                    <div class="row">
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="name" placeholder="Πώς σας φωνάζει η μαμά σας?">
                        </div>
                        <div class="col-md-6">
                            <input class="form-control" type="text" name="e-mail" placeholder="Σε ποιο email θα θα σας βρω?">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" placeholder="Το μήνυμά σας..."></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 center">
                            <button type="submit" class="round-button round-button-circle">Αποστολή</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
