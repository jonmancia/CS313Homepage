<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <script src="index.js"></script>
  <title>Jonathan Mancia</title>
</head>
<body>
  <div class="container">
    <div class="hero-box">
      <div class="hero-box-main-text">
        <h1>I'm Jonathan Mancia</h1>
        <sub class="hero-box-main-text-sub">I'm a Husband, Father, and Technology Enthusiast <span class="noItalic">💻</span></sub>
      </div>
      <button class="cta-main" onclick="toggleAboutMe()">About Me 👋</button>
      <form action="assignments.php">
        <button type="submit" class="cta-main">Assignments</button>
      </form>
    </div>
    <div id="content-main" class="hide">
      <h2>About me</h2>
      
      <p>I love technology, esthetically pleasingly interfaces, and a well-seasoned hamburger.
         I was gifted my first computer at an early age and since then my love for technology has
         grown to such an extent that I'll like to get paid to play with it!
         I enjoy building web applications and solving problems for myself and others so this
         course will definitely will be a treat. 
      </p>
      <br>
      <p><?php echo "Today's Date: " . date("m/d/Y"); ?></p>
    </div>
  </div>
</body>
</html>