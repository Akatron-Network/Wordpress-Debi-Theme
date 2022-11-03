

<!-- -- FOOTER -- -->
<footer class="footer">
<div class="container">

  <div class="row">
    <div class="col-xl-6">
      <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/akt-icon.png" alt="">
      <h2>AKATRON <span>NETWORK</span></h2>
      <ul>
        <li><a href=""><span>info</span>@akatron.net</a></li>
        <li><a href=""><span>debi</span>@akatron.net</a></li>
      </ul>
      <p class="adress">
        İsmet Kaptan mah. Kasman İş Merkezi 1371 sokak No: 2 Kat: 1 Daire: 109<br>
      </p>
      <p class="adress-alt">Çankaya / KONAK / İZMİR</p>

      <div class="row justify-content-start" style="margin-top: 50px;">
      
        <div class="footer-social">
          <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        
        <div class="footer-social">
          <a href=""><i class="fa-brands fa-twitter"></i></a>
        </div>
        
        <div class="footer-social">
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
        </div>
        
        <div class="footer-social">
          <a href=""><i class="fa-brands fa-instagram"></i></a>
        </div>
        
        <div class="footer-social">
          <a href=""><i class="fa-brands fa-github"></i></a>
        </div>

      </div>
    </div>

    <div class="col-xl-6 footer-right">
      <img src="<?php echo get_template_directory_uri().'/assets/'; ?>img/debi-icon.png" alt="" style="width: 40%;">
      <h1><span>De</span>signable  <span>B</span>usiness <span>I</span>ntelligence</h1>
      <div class="row">
        <div class="col-lg-6 menu-col">
          <a href="" class="menu-link">Nerde Kullanılır</a>
        </div>
        <div class="col-lg-6 menu-col">
          <a href="" class="menu-link">Kurumsal</a>
        </div>
        <div class="col-lg-6 menu-col">
          <a href="" class="menu-link">Fiyatlandırma</a>
        </div>
        <div class="col-lg-6 menu-col">
          <a href="" class="menu-link">Bilgi Merkezi</a>
        </div>
      </div>
      <div class="row ask-row">
        <div class="col-lg-9 ask-col">
          Sorunuza Cevap Bulamadınız mı?
        </div>
        <div class="col-lg-3 ask-btn">
          <button type="button" class="btn btn-primary">İletişim</button>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="copyright">All Rights Reserved for <a href="http://akatron.net/">Akatron Network</a></div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script src="<?php echo get_template_directory_uri().'/assets/'; ?>js/misc.js"></script>
<script src="<?php echo get_template_directory_uri().'/assets/'; ?>js/navbar.js"></script>
<script src="<?php echo get_template_directory_uri().'/assets/'; ?>js/window.js"></script>
<script src="<?php echo get_template_directory_uri().'/assets/'; ?>js/stage.js"></script>
<script src="<?php echo get_template_directory_uri().'/assets/'; ?>js/features.js"></script>
<script>

async function themeDetect() {
  if (localStorage.getItem('theme') === null) {
    //* Auto Theme Detect
    if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      await setTheme('dark')
    }
    else {
      await setTheme('light')
    }
  }
  else {
    if (localStorage.getItem('theme') === 'dark') { await setTheme('dark'); }
    else {   
      document.getElementById('theme-loader').style.backgroundColor = "var(--platinium)"
      await setTheme('light');
    }
  }
}

window.onload = async function () {

  await themeDetect()

  //* Close loader
  await timeout(200)
  document.getElementById('theme-loader').style.opacity = "0"
  await timeout(200)
  document.getElementById('theme-loader').style.display = "none"


  if (document.getElementById('win') === null) { return; }
  dragElement(document.getElementById("win"));
  dragElement(document.getElementById("win2"));
  dragElement(document.getElementById("win3"));
  integrateFeatures();
}
</script>
</body>
</html>