@extends('layouts.frontend')

@section('title', 'İletişim')

@section('content')
<div class="content">

    <div class="details-section site-section">
        <div class="section-description text-center">
            <h1>Market Adı</h1>
            <div class="marketImg">
                <img src="{{ asset('images/markets/market-1.jpg') }}" alt="Market 1">
            </div>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, maiores, aspernatur! In quos saepe quisquam at expedita, aliquam accusantium repellendus!</h3>
            <a href="#contact-form" class="button button-secondary">İLETİŞİM FORMU</a>
        </div>
        
        <div class="market-detail">
            <table>

                <tr class="detailRow">
                    <td class="columnName">Adı</td>
                    <td class="columnVal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, quisquam.</td>
                </tr>

                <tr class="detailRow">
                    <td class="columnName">Adı</td>
                    <td class="columnVal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, quisquam.</ts>
                </tr>

                <tr class="detailRow">
                    <td class="columnName">Adı</td>
                    <td class="columnVal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae, quisquam.</td>
                </tr>

            </table>
        </div>

        <div id="contact-form">
            <form action="#" method="post">
                <h3 class="formHeader text-center">
                    MARKET İLE İLETİŞİME GEÇ
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

        <div class="callToAction text-center">
            <a href="/market-ara" class="button button-secondary">ARAMA SAYFASINA DÖN</a>
        </div>
    
    </div>

</div>
@endsection