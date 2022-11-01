<?php get_header(); ?>

<!-- -- STAGE -- -->
<div class="stage-outer">

<!--* STAGE TOP SHOW -->
<div class="row justify-content-center">
  <div class="col-xl-5 stage-text">
    <div class="heading">YÖNETİM<br />ASİSTANINIZ<span>!</span></div>
    <div class="divider"></div>
    <div class="details">
      Anlaşılır ve sadeleştirilmiş <b>pivot tablolar, grafikler</b> ve bir
      çok panel çeşidine sahip anlık raporlar ile doğru kararlar verin!
    </div>
  </div>
  <div class="col-xl-6 stage-anim">
    <img id="anim-0" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/stage-screen-anim_0.png" alt="" style="transition: .5s; transform: scale(1.2) translateY(20px);">
    <img id="anim-1" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/stage-screen-anim_1.png" alt="" style="position: absolute; width: 0%; left: 10%; top: 11%; transition: 1s; opacity: 0;">
    <img id="anim-2" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/stage-screen-anim_2.png" alt="" style="position: absolute; width: 0%; right: 12.5%; top: 3.5%; transition: 1s; opacity: 0;">
    <img id="anim-3" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/stage-screen-anim_3.png" alt="" style="position: absolute; width: 0%; left: 13%; top: 51%; transition: 1s; opacity: 0;">
    <img id="anim-4" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/stage-screen-anim_4.png" alt="" style="position: absolute; width: 0%; right: 10.5%; top: 44%; transition: 1s; opacity: 0;">
  </div>
</div>

<!--* STAGE BOTTOM HEADINGS -->
<div class="stage-feature-outer">
  <div class="stage-feature">
    <span>Gerçek Zamanlı</span> Raporlara Her Yerden Ulaşın!
  </div>
</div>

</div>

<!-- -- FEATURES -->
<div class="features-outer">
<div class="row justify-content-around">
  <div id="feature-easy-to-use" class="col-lg-4 col-xs-12 feature-col">
    <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/Icon_easy-to-use.png" alt="">
    <h2>Kolay Kullanım</h2>
  </div>
  <div id="feature-real-time" class="col-lg-4 col-xs-12 feature-col feature-mid-col feature-passive">
    <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/Icon_real-time.png" alt="">
    <h2>Gerçek Zamanlı</h2>
  </div>
  <div id="feature-integrations" class="col-lg-4 col-xs-12 feature-col feature-passive">
    <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/Icon_integrations.png" alt="">
    <h2>Zengin Entegrasyon</h2>
  </div>
</div>
</div>

<!-- -- FETAURE DETAILS -- -->
<div class="feature-details-outer">

<div class="feature-details" onmouseenter="featureChanger = false;" onmouseleave="featureChanger = true;">

  <div id="detail-feature-easy-to-use" class="feature-details-element container-fluid">
    <div class="row justify-content-evenly">
      <div class="col-xxl-5 col-xl-5 feature-element-window">
        <div class="feature-window-outer">
          <div class="window" id="win">
            <div class="window-headbar" id="winheader">
              <div class="head-text">
                <img src="img/akt-icon.png" alt="">
                <h2>DeBI</h2>
              </div>
              <div class="head-icons">
                <i class="fa-solid fa-window-minimize"></i>
                <i class="fa-solid fa-expand"></i>
                <i class="fa-solid fa-xmark"></i>
              </div>
            </div>
            <div class="window-context">
              <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-screen-2.png" alt="" style="width: 100%">
            </div>
          </div>
        </div>

      </div>
      <div class="col-xxl-5 col-xl-6 feature-element-text">
        <h3>Teknik Bilgi Gerektirmez!</h3>
        <div class="divider"></div>
        <p>
          <span class="spacing"></span> DeBI hiçbir kod yazmanızı gerektirmeden tüm 
          raporlarınızı basit arayüzler ile hazırlamanızı sağlar. 
          Bu sayede özel eğitim olmaksızın herkes veri raporlarını 
          oluşturabilir, paylaşabilir ve sunabilir.
        </p>
        <p>
          <span class="spacing"></span> Küçük ve orta ölçekli işletmelerin raporlarını oluşturabilmek 
          için özel destek almasına gerek kalmaksızın DeBI ile raporlar 
          oluşturabilir ve karar verebilmek için, gerekli temiz bir analizi 
          gözlemleyebilmesini sağlar.
      </p>
      </div>
    </div>
  </div>

  <div id="detail-feature-real-time" class="feature-details-element container-fluid" style="opacity: 0;">
    <div class="row justify-content-evenly">
      <div class="col-xxl-5 col-xl-5 feature-element-window">
        <div class="feature-window-outer">
          <div class="window" id="win2">
            <div class="window-headbar" id="winheader">
              <div class="head-text">
                <img src="img/akt-icon.png" alt="">
                <h2>DeBI</h2>
              </div>
              <div class="head-icons">
                <i class="fa-solid fa-window-minimize"></i>
                <i class="fa-solid fa-expand"></i>
                <i class="fa-solid fa-xmark"></i>
              </div>
            </div>
            <div class="window-context">
              <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-screen-2.png" alt="" style="width: 100%">
            </div>
          </div>
        </div>

      </div>
      <div class="col-xxl-5 col-xl-6 feature-element-text">
        <h3>Her Zaman Güncel!</h3>
        <div class="divider"></div>
        <p>
          <span class="spacing"></span> DeBI raporlarınızın her zaman son halini görmenizi sağlayarak
          eski bilgi ile yanlış kararlar almanızı engeller. Rapor sayfalarınız
          otomatik olarak son verilere göre oluşturulur.
        </p>
        <p>
          <span class="spacing"></span> Pasif eski usül raporların yerine DeBI ile sürekli yeni raporlar
          oluşturmak zorunda kalmadan aynı rapor sayfalarını güncel olarak
          görüntüleyebilir günün şartlarına göre hızlıca düzenleyebilirsiniz.
      </p>
      </div>
    </div>
  </div>

  <div id="detail-feature-integrations" class="feature-details-element container-fluid" style="opacity: 0;">
    <div class="row justify-content-evenly">
      <div class="col-xxl-5 col-xl-5 feature-element-window">
        <div class="feature-window-outer">
          <div class="window" id="win3">
            <div class="window-headbar" id="winheader">
              <div class="head-text">
                <img src="img/akt-icon.png" alt="">
                <h2>DeBI</h2>
              </div>
              <div class="head-icons">
                <i class="fa-solid fa-window-minimize"></i>
                <i class="fa-solid fa-expand"></i>
                <i class="fa-solid fa-xmark"></i>
              </div>
            </div>
            <div class="window-context">
              <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-screen-2.png" alt="" style="width: 100%">
            </div>
          </div>
        </div>

      </div>
      <div class="col-xxl-5 col-xl-6 feature-element-text">
        <h3>Uygulamalarınızı Tanır!</h3>
        <div class="divider"></div>
        <p>
          <span class="spacing"></span> DeBI kullanmakta olduğunuz bir çok uygulamayı tanıyarak size daha
          kolay bir kullanım sağlamak için çeviri ve kısa yollar sunar. Bu
          destekler sonucunda teknik bilgi gerekmeksizin desteklenen tüm platform
          ve uygulamaların raporlarını alabilir ve bunları kendi aralarında 
          karşılaştırabilirsiniz.
        </p>
        <p>
          <span class="spacing"></span> Her geçen gün yeni entegrasyonlar ile kütüphanemizi büyüterek size daha
          iyi bir hizmet sunmaya çalışıyoruz.
      </p>
      </div>
    </div>
  </div>

</div>

<div class="free-trial-outer container-fluid">
  <div class="row justify-content-center" style="width: 100%">
    <div class="col-xxl-5 col-lg-6 col-md-12 free-trial-card">
      <h1>ÜCRETSİZ DENEYİN</h1>
      <h2>Deneme Talebi</h2>
      <br>
      <form action="" class="free-trial-form mb-3">
        <div class="row">
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">İsim *</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Firma</label>
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Zorunlu Değildir">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Telefon veya E-Mail *</label>
              <input type="email" class="form-control" id="exampleFormControlInput1">
            </div>
          </div>
          <div class="col-lg-12 mt-2" style="text-align: right">
            <button type="submit" class="btn">Gönder</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div style="height: 200px"></div>

<div class="supported-platforms-outer">
  <div class="header">
    <h1>Desteklenen Kaynaklar</h1>
    <p>Kullanmakta Olduğunuz Programları <span>DeBI</span> Tanıyor!</p>
  </div>
</div>

</div>

<!-- -- SUPPORTED PLATFORMS -- -->
<div class="supported-platforms-details-outer container-fluid">
<div class="row align-items-end justify-content-evenly">
  <div class="col-xl-3 col-sm-6 platform-col">
    <img id="supp_netsis" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/supported_Netsis.png" alt="">
  </div>
  <div class="col-xl-3 col-sm-6 platform-col">
    <img id="supp_parasut" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/supported_parasut.png" alt="">
  </div>
  <div class="col-xl-3 col-sm-6 platform-col">
    <img id="supp_binance" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/supported_binance.png" alt="">
  </div>
  <div class="col-xl-3 col-sm-6 platform-col">
    <img id="supp_trendyol" src="<?php echo get_template_directory_uri().'/assets/'; ?>img/supported_trendyol.png" alt="">
  </div>
</div>
<div class="platform-details">
  <a href="">Detaylı bilgi için tıklayın.</a>
</div>
</div>

<!-- -- SECTORAL -- -->
<div class="sectoral-outer">
<div class="container-fluid">

  <h1>HERKES İÇİN VERİ ANALİZİ</h1>
  <div class="row justify-content-evenly">
    <div class="col-xxl-3 col-lg-4">
      <div class="sectoral-col side-col">
        <h2>Finans</h2>
        <p>
          Finansal durumunuzun tüm 
          detaylarına kolayca erişin ve bu 
          bilginin ışığında doğru kararlar 
          alarak riski en aza indirin.
        </p>
      </div>
    </div>
    <div class="col-xxl-3 col-lg-4">
      <div class="sectoral-col">
        <h2>Satış</h2>
        <p>
          Finansal durumunuzun tüm 
          detaylarına kolayca erişin ve bu 
          bilginin ışığında doğru kararlar 
          alarak riski en aza indirin.
        </p>
    </div>
    </div>
    <div class="col-xxl-3 col-lg-4">
      <div class="sectoral-col side-col">
        <h2>Üretim</h2>
        <p>
          Finansal durumunuzun tüm 
          detaylarına kolayca erişin ve bu 
          bilginin ışığında doğru kararlar 
          alarak riski en aza indirin.
        </p>
    </div>
    </div>
  </div>
  <div class="details">
    <a href="">Detaylı bilgi için tıklayın.</a>
  </div>
</div>


<div class="footer-gradient"></div>


</div>



<?php get_footer(); ?>