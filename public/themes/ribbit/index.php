<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet/less" href="/themes/ribbit/css/style.less">
    <script src="/themes/ribbit/js/less.js"></script>
</head>
<body>
    <header>
        <div class="wrapper">
            <img src="/assets/images/logo.png">
            <span>Twitter Clone</span>

            <form>
              <input type="email">
              <input type="password">
            </form>
            </p>
      </div>
   </header>
   <div id="content">
      <div class="wrapper">
        <?= Template::content(); ?>
      </div>
   </div>
   <footer>
      <div class="wrapper">
         Ribbit - A Twitter Clone Tutorial<img src="/assets/images/logo-nettuts.png">
      </div>
   </footer>
</body>
</html>