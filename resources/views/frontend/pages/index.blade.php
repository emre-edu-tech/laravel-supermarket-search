@extends('layouts.frontend')

@section('title', 'Anasayfa')

@section('hero')
    @include('frontend.partials.index.hero')
@endsection

@section('content')              
<div class="content">
    <div class="find-therapist site-section">
        <div class="section-description text-center">
            <h1>Market Arama</h1>
            <h3>Aşağıdaki arama formunu kullanarak yakınınızda bulunan marketleri listeleyebilirsiniz</h3>
        </div>
        <div class="searchZone">
            <div class="homePageForm">
                <form action="#" method="post">
                    <h3 class="formHeader text-center">
                        YAKININIZDAKİ MARKETİ BULUN
                    </h3>
                    <div class="form-group">
                        <label for="city">Şehir seçiniz</label>
                        <select name="city" id="city">
                            <option value="Berlin">Berlin</option>
                            <option value="Frankfurt">Frankfurt</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zipcode">Posta Kodu</label>
                        <input name="zipcode" id="zipcode" type="text">
                    </div>
                    <div class="form-group">
                        <input class="button button-secondary button-block" type="submit" value="Ara">
                    </div>
                </form>
            </div>
            <div class="map">MARKETLERİN İŞARETLİ OLDUĞU HARİTA BURADA OLACAK</div>
        </div>
    </div>

    <div class="match-needs site-section">
        <div class="section-description text-center">
            <h1>Detaylı Arama</h1>
            <h3>Aramak yapmak istediğiniz marketin herhangi bir özelliğini girerek de arama yapabilirsiniz.</h3>
        </div>
        <form action="#" method="post">
            <div class="detailedSearch">
                <div class="row">
                    <div class="searchBlock">
                        <div class="form-group">
                            <h3>Market Kategorisi</h3>
                            <label for="category">Arama yaptığınız market hangi kategorideki ürünlerden satmaktadır?</label>
                            <select name="category" id="category">
                                <option value="Gıda">Gıda</option>
                                <option value="Dondurulmuş Gıda">Dondurulmuş Gıda</option>
                            </select>
                        </div>
                    </div>

                    <div class="searchBlock">
                        <div class="form-group">
                            <h3>Market Adı</h3>
                            <label for="marketName">Arama yaptığınız marketin adını giriniz. En az 3 karakter.</label>
                            <input type="text" name="marketName" id="marketName">
                        </div>
                    </div>

                    <div class="searchBlock">
                        <div class="form-group">
                            <h3>Posta Kodu</h3>
                            <label for="postcode">Arama yaptığınız marketin posta kodunu giriniz</label>
                            <input type="text" name="postcode" id="postcode">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="searchBlock">
                        <div class="form-group">
                            <h3>Şehir</h3>
                            <label for="marketCity">Hangi şehirde bulunan marketleri aramak istersiniz?</label>
                            <input type="text" name="marketCity" id="marketCity">
                        </div>
                    </div>

                    <div class="searchBlock">
                        <div class="form-group">
                            <h3>Firma Bilgileri</h3>
                            <label>Aradığınız marketin hangi özellikleri kesin olarak bulunmalı?</label>
                            <div class="checkboxGroup">

                                <input type="checkbox" name="website" id="website">
                                <label for="website">Website</label>

                                <input type="checkbox" name="email" id="email"> <label for="email">E-mail</label>

                                <input type="checkbox" name="information" id="information"> <label for="information">Firma Bilgisi</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group text-center">
                <input class="button button-secondary button-lg" type="submit" value="Detaylı Ara">
            </div>
        </form>
    </div>

    <div class="services site-section">
        <div class="section-description text-center">
            <h1>Hizmetlerimiz</h1>
            <h3>Gerek Almanya'daki gerekse Türkiye'deki market ve benzeri işletmelere verdiğimiz online hizmetler</h3>
        </div>
        <div class="serviceList">
            <div class="service">
                <div class="serviceIcon">
                    <i class="fas fa-search fa-2x"></i>
                </div>
                <h3>Arama Motoru Optimizasyonu</h3>
                <div class="serviceDesc">
                    Arama motorlarında market websitenizin üst sıralarda olmasını sağlamak için size yardım edebiliriz
                </div>
            </div>
            <div class="service">
                <div class="serviceIcon">
                    <i class="fas fa-paint-brush fa-2x"></i>
                </div>
                <h3>Web Tasarım</h3>
                <div class="serviceDesc">
                    Websitesi olmayan ya da sahip olduğu websitesinden memnun olmayan marketler için marketinize uygun web tasarımları yapabiliriz
                </div>
            </div>
            <div class="service">
                <div class="serviceIcon">
                    <i class="fas fa-server fa-2x"></i>
                </div>
                <h3>Hosting</h3>
                <div class="serviceDesc">
                    Mevcut olan websitenizi barındırdığınız hizmetten memnun olmayan marketlere hosting hizmeti verebiliriz
                </div>
            </div>
        </div>
    </div>
</div>
@endsection