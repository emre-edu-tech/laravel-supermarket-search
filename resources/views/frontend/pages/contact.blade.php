@extends('layouts.frontend')

@section('title', 'İletişim')

@section('content')
	<div class="content">

        <div class="contact-page white-background-section site-section">
            <div class="section-description text-center">
                <h1>İletişim</h1>
            </div>
            
            <div class="contact-section">
                <div id="contact-form">
                    <form action="#" method="post">
                        <h3 class="formHeader text-center">
                            MARKETİNİZİ KAYDETİRMEK İÇİN İLETİŞİME GEÇİN
                        </h3>
                        <div class="form-group">
                            <label for="name">Adınız</label>
                            <input name="name" id="name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input name="email" id="email" type="text">
                        </div>
                        <div class="form-group">
                            <label for="subject">Konu</label>
                            <input name="subject" id="subject" type="text">
                        </div>
                        <div class="form-group">
                            <label for="message">Mesaj</label>
                            <textarea name="message" id="message" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="button button-secondary button-block" type="submit" value="Gönder">
                        </div>
                    </form>
                </div>
                <div class="contact-img">
                    <img src="{{ asset('images/contact-page-img.png') }}" alt="İletişim Sayfası">
                </div>
            </div>
        
        </div>
    
    </div>
@endsection