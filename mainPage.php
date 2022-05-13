
<html>
<head>
  <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="pspi.css">
<!-- Font icons pulled from remix icon CDN (Content delivery network) -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<!-- Link to your stylesheet -->
<link rel="stylesheet" href="./styles.css">
<!-- -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>main page</title>
<link rel="icon" type="image/x-icon" href="favicon.png">
<style>
  img {
    display: block;
    margin-left: auto;
    margin-right: auto;
  }
  body {
    background-color:white;
    font-family: Arial, Helvetica, sans-serif;
  }
  p {color:black;}

</style>
</head>
<body>

  <div class="upperBackground">
    <div class="logo" >
        <a href="mainPage.html"> <img alt="Improve Your Health" src="logo.png"
           width="400" height="100"></a>
    </div>
  <br><br>

    <form class="search" style="margin:auto;max-width:400px">
      <input type="text"  placeholder="Search.." name="search">
      <button type="submit"> <i class="fa fa-search"></i></button>
    </form>
  </div>

  <div class="page">
    <nav class="page__menu page__custom-settings menu">

      <ul class="menu__list r-list">
        <li class="menu__group"><a href="mainPage.html" class="menu__link r-link text-underlined">ΑΡΧΙΚΗ ΣΕΛΙΔΑ</a></li>
        <li class="menu__group"><a href="categories.html" class="menu__link r-link text-underlined">ΠΕΡΙΕΧΟΜΕΝΟ</a></li>
        <li class="menu__group"><a href="eidikoi.html" class="menu__link r-link text-underlined">Η ΟΜΑΔΑ ΜΑΣ</a></li>
        <li class="menu__group"><a href="contactpage.html" class="menu__link r-link text-underlined">ΕΠΙΚΟΙΝΩΝΙΑ</a></li>

      </ul>

    </nav>
  </div>
  <br>

  <!-- container - image - description paragraph -->
  <div class="container">
    <img src="img2.jpeg" style="width:80%;border-radius:7px;">
    <div class="text-block">
    <p class="container" style="font-size:17px;color:white;"><strong>Καλώς Ήρθες στην Improve Your Health!</strong><br><br>
Η επιδίωξή μας είναι να βοηθήσουμε στην προσπάθειά σου για ένα υγιεινό τρόπο ζωής.<br> Ως «υγεία», ορίζεται η κατάσταση πλήρους σωματικής, ψυχικής και κοινωνικής ευεξίας.
<br>Με άλλα λόγια υγιής, είναι ο άνθρωπος που αισθάνεται καλά τόσο σωματικά όσο και ψυχικά, με αποτέλεσμα να έχει ομαλές σχέσεις με τους συνανθρώπους του.
Γι αυτό και εμείς παρέχουμε πληροφορίες για τα παραπάνω.<br><br>
<a href="categories.html" style="color:white;"><strong>Δες εδώ περισσότερα για να πετύχεις τους στόχους σου!</strong></a>
</p>
</div>
</div>
<br>

  <footer class="footerCSS">
    <div class="footerRow">
      <br/>
      <div class="footerColumn">
    <div class="center"style="color:black" ><h2>Στοιχεία Επικοινωνίας</h2>
    <hr>
    <p><strong>e-mail:</strong><br/>
    hege@example.com <br/><br>
    <strong>Τηλέφωνο:</strong><br/>
    2310-___-___<br/></p>
  </div>
  </div>

  <div class="footerColumn">
    <div class="center"><h2><a id="footerHref" href="categories.html">Περιεχόμενο</a></h2>
    <hr>
    <p><a id="footerHref" href="allArticlesNutrition.html">Διατροφή</a></p>
    <p><a id="footerHref" href="allArticlesExercise.html">Σωματική Άσκηση</a></p>
    <p><a id="footerHref" href="allArticlesPsychology.html">Ψυχολογία</a></p>
  </div>
  </div>

  <div class="footerColumn">
    <div class="center"><h2 style="color:black;">Social Media</h2>
    <hr>
    <br>
    <p>
      <a href="https://www.instagram.com/" class="positioned ri-instagram-line icon"></a>
      <a href="https://el-gr.facebook.com/" class="positioned ri-facebook-circle-line icon"></a>
      <a href="https://www.youtube.com/" class="positioned ri-youtube-line icon"></a>
    </p>
    </div>
  </div>
  </footer>
