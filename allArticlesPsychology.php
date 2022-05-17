<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset = "UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="pspi.css">
    <!-- Font icons pulled from remix icon CDN (Content delivery network) -->
   <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
   <!-- Link to your stylesheet -->
   <link rel="stylesheet" href="./styles.css">
   <!-- -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <?php require_once('config.php') ?>
    <title>Improve Your Health | Ψυχολογία</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">

    <style>

    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    /*a{text-decoration: none;}*/
    </style>
  </head>

  <body>
    <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
    <?php $posts = getPublishedPostsPsychology(); ?>
    <?php
    include 'includes\header.php';
     ?>
<br>
    <div class="center">
            <h2><strong>ΨΥΧΟΛΟΓΙΑ</strong></h2>
      </div>
<?php foreach ($posts as $post): ?>
    <!--first article-->
    <div class="containerBlog">
      <br>

      <p>
        <a class="containerBlog__img_link" href="single_post.php?post-slug=<?php echo $post['slug'];?>">
          <img class="containerBlog__img" src="<?php echo $post['image']; ?>"/>
        </a>
        <!--restart diet-->
<a href="single_post.php?post-slug=<?php echo $post['slug']; ?>"><strong><?php echo $post['title'] ?></strong></a><br><br><?php echo $post['description']?><a href="single_post.php?post-slug=<?php echo $post['slug']; ?>" style="color:grey;">...Διαβάστε περισσότερα</a>
<!--Η σύνδεση φαγητού και ψυχολογίας είναι αδιαμφισβήτητη. Όλοι έχουμε «φάει» τα συναισθήματα μας, άγχος, λύπη, αγωνία, βαρεμάρα και πόσα ακόμα θετικά, αλλά κυρίως αρνητικά συναισθήματα και καταστάσεις. Όλοι έχουμε επιβραβεύσει ή τιμωρήσει τον εαυτό μας με φαγητό ή στέρηση φαγητού. Το δύσκολο κομμάτι έρχεται όταν οι παραπάνω καταστάσεις παγιώνονται και καθιστούν την καθημερινότητα μας δυσλειτουργική.

Μικρές διατροφικές αλλαγές μπορούν να κάνουν τη μεγάλη διαφορά. Ευρήματα από σχετικές έρευνες έχουν αποδείξει ότι πολύ μικρές προσαρμογές όπως

Η κατανάλωση μικρότερης ποσότητας junk food και μεγαλύτερης ποσότητας πιο θρεπτικών τροφών όπως όσπρια, ψάρι και λαχανικά και
Μικρά γεύματα στη διάρκεια της μέρας
είχαν ευεργετική δράση όχι μόνο στη βελτίωση της αυτοεικόνας των συμμετεχόντων, αλλά και στην ψυχολογία τους. Τέτοιου είδους έρευνες ενισχύουν την πεποίθηση ότι διατροφικά μοτίβα, συμπληρώματα διατροφής (σε συνεννόηση με τον γιατρό) και βιταμίνες, ιχνοστοιχεία και άλλες θρεπτικές ουσίες μπορεί να είναι η αιτιολογία για προβλήματα ψυχικής υγείας ή η θεραπεία.
Τα είπαμε πολύ ωραία παραπάνω, αλλά στην πραγματικότητα, πόσο εύκολο είναι να γίνουν οι μικρές αυτές προσαρμογές? Η απάντηση είναι ότι είναι δύσκολο, αλλά όχι ακατόρθωτο. Το μυστικό είναι να θέτεις μικρούς και εφικτούς στόχους και να προσπαθείς να τους κατακτάς μέρα με τη μέρα. Μην πεις από τη μια στιγμή στην άλλη, ενώ δεν πίνεις καθόλου νερό, ότι ‘ από αύριο θα πίνω 2 λίτρα νερό τη μέρα’. Αντί γι’ αυτό πες ‘ θα πίνω ένα ποτήρι νερό πριν από κάθε γεύμα για τον υπόλοιπο μήνα’.

Για να κερδίσεις όλους αυτούς τους μικρούς στόχους που θα σε κάνουν να επαναπροσδιορίσεις τη σχέση σου με το φαγητό και να αλλάξεις τη ζωή σου αυτό που χρειάζεσαι είναι υποστηρικτικό πλαίσιο και εκπαίδευση. Μην φοβηθείς να ζητήσεις βοήθεια από ειδικούς και μην το αφήσεις για αύριο.

Και να θυμάσαι ότι δεν χρειάζεται κανείς να είναι τέλειος.  Χρειάζεται μόνο να είναι όσο πιο συνεπής μπορεί και να μην σταματήσει να προσπαθεί. -->
</p>

</div>
<?php endforeach ?>

        <?php
        include 'includes\footer.php';
         ?>

    <br>
  </div>
</html>
