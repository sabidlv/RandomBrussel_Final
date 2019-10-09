<?php
if (isset($_POST['nom'], $_POST['email'], $_POST['message'], $_POST['titre'])) {
  $nom= $_POST['nom'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $titre = $_POST['titre'];
​
  switch($titre){
		case "madam":
			$titreShow = 'Mrs.';
			break;
​
		case "miss":
			$titreShow = 'Miss';
			break;
		default:
			$titreShow = 'Mr.';
			break;
	}
​
  echo '<p>Thank you $titreShow $nom. We will deal with your inquiry promptly. </p>';
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Brussels - Contact</title>
</head>
<body>
    <div class="page-route">
      <header>
        <a href="index.html">
          <img id="mylogo" src="/assets/images/Logo.png" alt="Logo"
        /></a>
        <div class="bars" id="bar-action">
          <div class="bar" id="bar-top"></div>
          <div class="bar" id="bar-middle"></div>
          <div class="bar" id="bar-bottom"></div>
        </div>

        <nav id="nav">
          <ul>
            <li id="li">
              <a class="liens" href="index.html">
                <span class=" spans span-left" id="span-one">H</span>
                <span class="spans span-left" id="span-two">o</span>
                <span class="spans span-left" id="span-three">m</span>
                <span class=" spans span-left" id="span-four">e</span>
              </a>
            </li>
            <li>
              <a class="liens" href="question.html">
                <span class="spans span-right" id="span-five">R</span>
                <span class="spans span-right" id="span-six">o</span>
                <span class="spans span-right" id="span-seven">u</span>
                <span class="spans span-right" id="span-eight">t</span>
                <span class="spans span-right" id="span-nine">e</span>
              </a>
            </li>

            <li>
              <a class="liens" href="contact.html">
                <span class="spans span-left" id="span-ten">C</span>
                <span class="spans span-left" id="span-eleven">o</span>
                <span class="spans span-left" id="span-twelve">n</span>
                <span class="spans span-left" id="span-thirteen">t</span>
                <span class="spans span-left" id="span-fourteen">a</span>
                <span class="spans span-left" id="span-fiveteen">c</span>
                <span class="spans span-left" id="span-sixteen">t</span>
              </a>
            </li>
          </ul>
        </nav>
      </header>

      <main>

      <h1>Contact</h1>
        <p>* required fields</p>
        <form action="#" method="POST">
          <div id="container-form">
            <div class="ipt-container">
              <select name="titre" id="" required>
                <option value="mister">Mr.</option>
                <option value="madam">Mrs.</option>
                <option value="miss">Miss</option>
              </select>
              <label for="nom">Name*</label>
              <input type="text" name="nom" required class="border-orange" />
            </div>
            <div class="ipt-container">
              <label for="email">Email*</label>
              <input
                type="email"
                name="email"
                id="email"
                required
                class="border-orange"
              />
              <span id="aideCourriel"></span>
            </div>
            <div class="ipt-container">
              <label for="message">Your message*</label>
              <textarea
                name="message"
                id=""
                cols="20"
                rows="5"
                required
                class="border-orange"
              ></textarea>
            </div>
          </div>
          <input type="submit" name="send" value="Send" id="" class="button" />
        </form>

      </main>

      <footer>
        <p>M.Denotte, E.Pardi, S.Delvaux</p>
      </footer>
</body>
</html>