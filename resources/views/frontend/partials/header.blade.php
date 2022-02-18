        <div class="header-container">
            <header>
                <div id="header">
                    <div id="logo">
                        <a href="/">
                            <img src="{{ asset('images/turkischer-markt.de-logo.png') }}" alt="türkischer-markt.de logo">
                        </a>
                    </div>
                    <div id="main-navigation">
                        <ul>
                            <li><a href="/">Anasayfa</a></li>
                            <li><a href="/market-ara">Firma Ara</a></li>
                            <li><a href="/iletisim">İletişim</a></li>
                            <li><a href="/gizlilik">Gizlilik</a></li>
                        </ul>
                    </div>
                    <div class="topSearch">
                        <form action="/market-arama-sonuc" method="post" class="topsearchForm">
                            <input type="text" name="topsearch" id="topsearch">
                            <input type="submit" value="Arama" class="button button-primary">
                        </form>
                    </div>
                </div>
            </header>
        </div>