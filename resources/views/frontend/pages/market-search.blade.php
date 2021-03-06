@extends('layouts.frontend')

@section('title', 'Market Ara')

@section('content')
<div class="content">

    <div class="search-section site-section">
        <div class="section-description text-center">
            <h1>Detaylı Market Arama</h1>
            <h3>Arama sayfamızı kullanarak aramalarınızı filtreleyebilir, arama yaptıktan sonra market detaylarına ulaşıp, marketlerin iletişim bilgilerini öğrenebilirsiniz</h3>
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
                            <h3>Çalışan Sayısı</h3>
                            <label for="staffNumber">Arama yaptığınız marketteki çalışanların sayısı</label>
                            <select name="staffNumber" id="staffNumber">
                                <option value="1-5">1-5</option>
                                <option value="5-10">5-10</option>
                                <option value="10-50">10-50</option>
                                <option value="50-100">50-100</option>
                                <option value="100-500">100-500</option>
                                <option value="500-1000">500-1000</option>
                            </select>
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

    <div class="searchResultSection white-background-section site-section">

        <div class="section-description text-center">
            <h3>Arama Sonuçları</h3>
        </div>

        <div class="searchResults">
            <div class="row searchRow">
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
            </div>
            <div class="row searchRow">
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
                <div class="result">
                    <div class="resultHeader text-center">
                        <div class="marketImg">
                            Market Resmi
                        </div>
                        <h3 class="marketName">Market Adı</h3>
                        <p class="marketCategory small-text">Kategori</p>
                    </div>
                    <div class="resultMain">
                        <p><i class="fas fa-phone"></i> Telefon</p> 
                        <p><i class="fas fa-map-marker"></i> Adres</p>
                        <p><i class="fas fa-envelope-square"></i> E-mail</p>
                    </div>
                    <div class="resultFooter">
                        <div class="resultDetails text-center"><a href="#">Market Detay</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pagination">
            <ul>
                <li><a href="#">Önceki</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">Sonraki</a></li>
            </ul>
        </div>

    </div>

</div>
@endsection