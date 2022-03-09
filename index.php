<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ilk Test</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/vendor/normalize.css">
    <link rel="stylesheet" href="./assets/dist/styles.min.css">
  </head>
  <body>
    <div class="page-wrapper">

      <header class="c-header">
        <div class="c-header__wrapper c-grid c-grid--justify-center c-grid--align-center">
          <nav>
            <ul class="c-grid c-nav-list">
              <li class="c-nav-list__item"><a class="c-nav-list__link" href="#">Projects</a></li>
              <li class="c-nav-list__item"><a class="c-nav-list__link" href="#">Products</a></li>
            </ul>
          </nav>

          <a class="c-logo" href="#"><img class="c-logo__img" src="./assets/icons/header-logo.svg" alt="logo"></a>
          <h1 class="screen-reader-text">Tombola</h1>

          <nav>
            <ul class="c-grid c-nav-list">
              <li class="c-nav-list__item"><a class="c-nav-list__link" href="#">About</a></li>
              <li class="c-nav-list__item"><a class="c-nav-list__link" href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </header>


      <div class="c-hero">
        <div class="c-hero__wrapper">
          <div class="c-hero__content">
            <div class="c-grid c-grid--justify-center"><h2 class="c-hero__title text-white bg-teal">6% return. 100% responsible.</h2></div>
            <div class="c-grid c-grid--justify-center"><h3 class="c-hero__sub-title text-teal bg-black">Coming soon: our new Innovative Finance ISA (IFISA).</h3></div>
          </div>
        </div>
      </div>


      <div class="c-wrapper c-wrapper__pad-large c-wrapper__small">
        <h2 class="c-wrapper__title">Our investment products have been designed to accelerate the growth of our projects, while aiming to provide outstanding returns for investors.</h2>
        <p class="c-wrapper__text">Alongside our existing Environmental EIS and SEIS funds we also have our Tombola Inheritance Tax Service, while we are preparing to launch an Innovative Finance Individual Savings Accounts (IFISA). As soon as this is up and running we'll add all the relevant information here.</p>
      </div>


      <div class="c-grid">
        <div class="c-grid--item-half c-block c-block__left">
          <div class="c-block__wrapper c-grid c-grid--direction-column c-grid--space-between">
            <h2>The Tombola SEIS Fund</h2>
            <p>This fund is currently fully subscribed and closed, but is worth £3million.</p>
            <a class="c-button c-button__bordered c-button__bordered-teal" href="">Find out more</a>
          </div>
        </div>
        <div class="c-grid--item-half c-block c-block__right">
          <div class="c-block__wrapper">
            <h2>The Tombola EIS Fund</h2>
            <p>Having raised over £32 million to date, this is an evergreen discretionary managed fund. Download our information memorandum below for further details.</p>
            <a class="c-button c-button__bordered c-button__bordered-red" href="">Find out more</a>
          </div>
        </div>
      </div>


      <div class="c-wrapper c-wrapper__pad-large c-wrapper__large">
        <div class="c-grid c-stats-list">
          <div class="c-grid c-grid--direction-column c-grid--justify-center c-grid--item-quarter c-stats-list__item">
            <div class="c-stats-list__icon c-icon c-icon__plane c-icon--large"></div>
            <div class="c-stats-list__divider"></div>
            <p class="c-stats-list__title">
              <span class="c-stats-list__pre-title">Over</span>
              £60million
            </p>
            <span class="c-stats-list__small-text">Assets under management</span>
          </div>

          <div class="c-grid c-grid--direction-column c-grid--justify-center c-grid--item-quarter c-stats-list__item">
            <div class="c-stats-list__icon c-icon c-icon__gears c-icon--large"></div>
            <div class="c-stats-list__divider"></div>
            <p class="c-stats-list__title">
            75
            </p>
            <span class="c-stats-list__small-text">Jobs created</span>
          </div>

          <div class="c-grid c-grid--direction-column c-grid--justify-center c-grid--item-quarter c-stats-list__item">
            <div class="c-stats-list__icon c-icon c-icon__plane c-icon--large"></div>
            <div class="c-stats-list__divider"></div>
            <p class="c-stats-list__title">
            167,000
            </p>
            <span class="c-stats-list__small-text">Tons of waste diverted from landfill</span>
          </div>

          <div class="c-grid c-grid--direction-column c-grid--justify-center c-grid--item-quarter c-stats-list__item">
            <div class="c-stats-list__icon c-icon c-icon__gears c-icon--large"></div>
            <div class="c-stats-list__divider"></div>
            <p class="c-stats-list__title">
              20
            </p>
            <span class="c-stats-list__small-text">Successful planning permissions</span>
          </div>
        </div>
      </div>


      <div class="bg-teal">
        <div class="c-grid c-grid--justify-center c-wrapper c-wrapper__pad-small c-wrapper__small bg-teal">
          <p class="c-wrapper__text">If you have any questions about our products and projects, or you'd just like to find out more about the Tombola ethos.</p>
          <a class="c-button c-button__bordered c-button__bordered-white" href="">Get in touch</a>
        </div>
      </div>


      <footer class="bg-black c-footer">
        <div class="c-wrapper c-wrapper c-wrapper__pad-small c-wrapper__medium">
          <div class="c-grid">

            <div class="c-grid--footer-left">
              <div class="c-footer__vertical-divider">
                <p class="c-footer__title">Join our mailing list to keep up-to-date with our latest projects and investment opportunities.</p>
                
                <form method="post" class="c-grid c-grid--no-wrap c-footer__signup">
                  <label class="screen-reader-text" for="join-email"></label>
                  <input id="join-email" type="email" name="join-email">
                  <input type="submit">
                </form>

                <p class="c-footer__address-title text-teal">Stay Connected</p>
                <address class="c-footer__address">
                  19 Ashington Field Court,<br>
                  Alesbury, OX26 3PQ
                </address>

                <div class="c-footer__contact">
                  <div class="c-footer__contact-info"><span class="text-teal">Telephone. </span><a class="text-white" href="tel: 0203 775 3421">0203 775 3421</a></div>
                  <div class="c-footer__contact-info"><span class="text-teal">Email. </span><a class="text-white" href="mailto: contact@Tombolagroup.com">contact@Tombolagroup.com</a></div>
                </div>

                <div class="c-grid c-social-icons">
                  <div class="c-icon--small c-icon__twitter c-social-icon"><span class="screen-reader-text">Twitter</span></div>
                  <div class="c-icon--small c-icon__linkedin c-social-icon"><span class="screen-reader-text">Linkedin</span></div>
                </div>
              </div>
            </div>

            <div class="c-grid c-grid--direction-column c-grid--footer-right c-grid--justify-end c-footer__right">
              <p class="text-teal">Navigate</p>
              <nav class="c-footer__navigation">
                <ul class="c-grid c-nav-list">
                  <li class="c-grid--item-half c-nav-list__item-spacing"><a class="text-white" href="#">Home</a></li>
                  <li class="c-grid--item-half c-nav-list__item-spacing"><a class="text-white" href="#">About</a></li>
                  <li class="c-grid--item-half c-nav-list__item-spacing"><a class="text-white" href="#">Projects</a></li>
                  <li class="c-grid--item-half c-nav-list__item-spacing"><a class="text-white" href="#">Contact</a></li>
                  <li class="c-grid--item-half c-nav-list__item-spacing"><a class="text-white" href="#">Products</a></li>
                </ul>
              </nav>

              <div class="c-grid c-grid--space-between">
                <a class="text-white" href="#">Privacy policy </a>
                <span>|</span>
                <span>&copy; Tombola 2018</span>
              </div>
            </div>
          </div>
        </div>
      </footer>

    </div>
  </body>
</html>
