<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<?php
  $page = $page ?? [];
?>

<header class="ir-hero">
  <!-- NAVIGATION -->
  <nav class="navbar navbar-expand-lg navbar-dark ir-nav">
    <div class="d-flex w-100 align-items-center justify-content-between">
      <a class="ir-brand d-flex align-items-center gap-2" href="#">
        <img src="<?= base_url('assets/img/logo.svg') ?>" alt="IronSoftware Logo">
      </a>

      <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#topNav"
              aria-controls="topNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="topNav">
        <ul class="navbar-nav ir-navlinks ms-lg-4">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="productsMenu" role="button"
               data-bs-toggle="dropdown" aria-expanded="false">
              <?= esc($page['nav']['products_label'] ?? 'PRODUCTS') ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="productsMenu">
              <?php foreach (($page['nav']['products'] ?? ['IronPDF','IronXL','IronOCR']) as $prod): ?>
                <li><a class="dropdown-item" href="#"><?= esc($prod) ?></a></li>
              <?php endforeach; ?>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#"><?= esc($page['nav']['about_label'] ?? 'ABOUT US') ?></a></li>
          <li class="nav-item"><a class="nav-link" href="#"><?= esc($page['nav']['career_label'] ?? 'CAREER') ?></a></li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- HERO GRAPHIC -->
    <div class="ir-hero-graphic-wrap" aria-hidden="true">
      <img
        class="ir-hero-graphic"
        src="<?= base_url('assets/img/hero-graphic.svg') ?>"
        alt="Hero Graphic"
        aria-hidden="true"
        fetchpriority="high">
    </div>

  <div class="ir-hero-wrap">
    <!-- HERO CONTENT -->
    <section class="ir-hero-inner">
      <div class="container ir-container">
        <div class="row">
          <div class="col-xl-10 col-lg-7">
            <div class="ir-logo-line mb-3">
              <img
                src="<?= base_url('assets/img/pdf.svg') ?>"
                alt="PDF Icon">
              <span class="ir-logo-text">
                <?= esc($page['hero']['logo_prefix'] ?? 'IRON') ?><span class="ir-logo-accent"><?= esc($page['hero']['logo_accent'] ?? 'PDF') ?></span>
                <span class="ir-logo-sub"><?= esc($page['hero']['logo_suffix'] ?? 'for C++') ?></span>
              </span>
            </div>

            <p class="ir-kicker mb-2"><?= esc($page['hero']['kicker'] ?? 'Building on the success of IronPDF for .NET') ?></p>

            <h1 class="ir-h1 mb-1"><?= esc($page['hero']['title_primary'] ?? 'Beta Software Program') ?></h1>
            <h2 class="ir-h1 ir-h1-muted mb-2"><?= esc($page['hero']['title_secondary'] ?? 'IronPDF for C++') ?></h2>

            <p class="ir-coming mb-0"><?= esc($page['hero']['coming'] ?? 'Coming soon') ?></p>
          </div>
        </div>
      </div>
    </section>

    <!-- SIGNUP BAND -->
    <section class="ir-signup-band">
      <div class="container ir-container">
        <div class="row align-items-center g-4">
          <div class="col-lg-12">
            <h1 class="ir-band-title mb-1"><?= esc($page['signup_band']['title'] ?? 'Be one of the first') ?></h1>
            <p class="ir-band-sub mb-0"><?= esc($page['signup_band']['subtitle'] ?? 'Sign up NOW to get early access!') ?></p>
          </div>

          <div class="col-lg-12">
            <form class="ir-cta-form" action="#" method="post">
              <input class="ir-cta-input" type="email" placeholder="<?= esc($page['signup_band']['email_placeholder'] ?? 'Enter email address') ?>" />
              <button class="ir-cta-btn text-center" type="submit">
                <span class="ir-cta-text">
                  <?= esc($page['signup_band']['button'] ?? 'Sign up now') ?>
                </span>
                <span class="ir-cta-arrow"></span>
              </button>
            </form>
            <div class="ir-band-tags mt-3">
              <span class="ir-tag"><?= esc($page['signup_band']['tag'] ?? '# Coming Soon') ?></span>
              <span class="ir-tagline">
                <?= $page['signup_band']['tagline_html'] ?? 'IronPDF Beta Program also coming soon for <strong>Python</strong> | <strong>NodeJS</strong> | <strong>Java</strong>' ?>
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</header>

<main id="main">
<!-- SECTION: IronPDF for C++ -->
<section class="ir-section ir-section-early">
  <div class="container ir-container text-center">
    <div class="ir-title-row">
      <div class="ir-hero-title-badge mb-2">
        <h2 class="ir-section-title mb-0"><?= esc($page['feature_section']['title'] ?? 'IronPDF for C++') ?></h2>
        <img
          class="ir-coming-badge"
          src="<?= base_url('assets/img/badge.svg') ?>"
          alt="Coming soon">
      </div>
    </div>
    <div class="row ir-features">
      <?php $features = $page['feature_section']['features'] ?? []; ?>
      <div class="col-12 col-lg-4 ml-0">
        <span class="ir-feature">#&nbsp; <?= esc($features[0] ?? 'Generate PDFs from HTML in C++') ?></span>
      </div>
      <div class="col-12 col-lg-4 mr-2">
        <span class="ir-feature">#&nbsp; <?= esc($features[1] ?? 'Combine, split, and modify PDFs quickly in C++') ?></span>
      </div>
      <div class="col-12 col-lg-4">
        <span class="ir-feature">#&nbsp; <?= esc($features[2] ?? 'Extract text and images from PDFs using C++') ?></span>
      </div>
    </div>
  </div>
  <div class="ir-section-graphic">
    <img src="<?= base_url('assets/img/iron-pdf-gradient.svg') ?>" alt="Gradient background" aria-hidden="true" />
  </div>
</section>

<!-- SECTION: IronPDF library paragraph -->
<section class="ir-library-paragraph">
  <div class="container ir-container text-center">
    <div class="ir-body my-3 text-start">
      <p class="mb-3">
        <?= $page['library_paragraph']['p1_html']
          ?? 'The new <strong>IronPDF</strong> library for <strong>C++</strong> will enhance the C++ developer’s tool set with robust PDF generation and conversion capabilities. Developers will be able to generate new PDFs from HTML content (from text or from URL), as well as to combine, split, extract, and modify content from existing PDFs.' ?>
      </p>
      <p class="mb-0">
        <?= $page['library_paragraph']['p2_html']
          ?? '<strong>IronPDF for C++</strong> will help developers create C++ applications that can do all of these PDF processing tasks and more, with speed, precision, control, and excellence.' ?>
      </p>
    </div>
  </div>
</section>

<!-- SECTION: Why -->
<section class="ir-section">
  <div class="container ir-container">
    <div class="row align-items-center g-4">
      <div class="col-lg-4">
        <div class="ir-why-icons" aria-hidden="true">
          <div class="ir-section-graphic">
            <img src="<?= base_url('assets/img/html-shadow.svg') ?>" width="267px" height="175px" alt="Html to C++ shadow" aria-hidden="true" />
          </div>
          <img class="ir-why-html" src="<?= base_url('assets/img/html.png') ?>" alt="HTML Icon">
          <img class="ir-why-cpp"  src="<?= base_url('assets/img/arrow-cpp.png') ?>"  alt="C++ Icon">
          <img class="ir-why-pdf"  src="<?= base_url('assets/img/pdf.png') ?>"  alt="PDF Icon">
        </div>
      </div>
      <div class="col-lg-8">
        <h2 class="ir-section-title mb-3">
          <?= $page['why']['title_html'] ?? 'Why make a <span>C++ PDF Library</span>' ?>
        </h2>
        <p class="ir-paragraph mb-2"><?= esc($page['why']['p1'] ?? 'C++ is one of the most popular, oldest, and important programming languages in use, being the language of choice in low-level systems and network programming and other domains where performance is critical.') ?></p>
        <p class="ir-paragraph mb-0"><?= esc($page['why']['p2'] ?? 'The release of IronPDF for C++ will aid developers in building performant applications that can carry out PDF-related processing tasks.') ?></p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION: Early Access -->
<section class="ir-section ir-section-early">
  <div class="container ir-container">
    <h2 class="ir-section-title mb-3">
      <?= $page['early_access']['title_html'] ?? 'Early Access to <span>C++ PDF Library</span>' ?>
    </h2>
    <p class="ir-earlyaccess-text mb-4"><?= esc($page['early_access']['paragraph'] ?? '') ?></p>

    <div class="ir-earlyaccess-pills">
      <?php $pills = $page['early_access']['pills'] ?? []; ?>

      <?php for ($i = 0; $i < 3; $i++): ?>
        <?php
          $badge = $pills[$i]['badge'] ?? ($i === 0 ? '# Released' : '# Coming Soon');
          $badgeClass = $pills[$i]['badge_class'] ?? ($i === 0 ? 'ir-pill-java' : 'ir-pill-badge--early');
          $for = $pills[$i]['for'] ?? ($i === 0 ? 'for Java' : ($i === 1 ? 'for Python' : 'for Node JS'));
        ?>
        <div class="ir-pill-card ir-pill-card--early">
          <span class="ir-pill-badge <?= esc($badgeClass) ?>"><?= esc($badge) ?></span>
          <span class="ir-logo-text">
            IRON<span class="ir-title-pdf">PDF</span>
            <span class="ir-logo-sub"><?= esc($for) ?></span>
          </span>
        </div>
      <?php endfor; ?>
    </div>
  </div>
  <div class="ir-section-graphic">
    <img src="<?= base_url('assets/img/iron-pdf-gradient.svg') ?>" alt="Gradient background" aria-hidden="true" />
  </div>
</section>

<!-- FOOTER SIGNUP -->
<section class="ir-footer-signup">
  <div class="container ir-container text-center">
    <h2 class="ir-section-title mb-3"><?= esc($page['footer_signup']['title'] ?? 'Sign up to our Beta Program') ?></h2>

    <form class="ir-cta-form ir-footer-form mx-auto" action="#" method="post">
      <input class="ir-cta-input" type="email" placeholder="<?= esc($page['footer_signup']['email_placeholder'] ?? 'Enter email address') ?>" />
        <button class="ir-cta-btn" type="submit">
            <span class="ir-cta-text">
                <?= esc($page['signup_band']['button'] ?? 'Sign up now') ?>
            </span>
            <span class="ir-cta-arrow"></span>
          </button>
    </form>
  </div>
</section>
</main>
<?= $this->endSection() ?>
