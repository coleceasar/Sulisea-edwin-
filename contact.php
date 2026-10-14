<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#0202F5">
  <meta name="description" content="Contact Sulis. Get in touch by phone or visit our Nairobi office.">
  <title>Contact Us | Sulis</title>

  <!-- Bootstrap 5.3.8: latest stable release (Bootstrap 6 is currently alpha) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuqIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="../includes/navbar.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="../footer/footer.css">
</head>
<body>
  <?php require __DIR__ . '/../includes/navbar.php'; ?>

  <main class="contact-page">
    <div class="container contact-container">
      <header class="page-header">
        <p class="page-eyebrow">WE'RE HERE TO HELP</p>
        <h1>Contact Us</h1>
        <p class="page-intro">Have a question or want to learn more? Get in touch with our team.</p>
        <span class="title-accent" aria-hidden="true"></span>
      </header>

      <div class="row contact-layout">
        <section class="col-lg-6 contact-details" aria-label="Sulis contact information">
          <div class="contact-item">
            <div class="contact-icon" aria-hidden="true"><i class="bi bi-telephone"></i></div>
            <a class="contact-value phone-number" href="tel:+254203872607">+254-20-387-2607</a>
          </div>

          <div class="contact-item">
            <div class="contact-icon" aria-hidden="true"><i class="bi bi-envelope"></i></div>
            <address class="contact-value">
              P.O. BOX 79148 - 00200<br>
              Nairobi, Kenya.
            </address>
          </div>

          <div class="contact-item">
            <div class="contact-icon" aria-hidden="true"><i class="bi bi-geo-alt"></i></div>
            <address class="contact-value office-address">
              Methodist Ministries Centre, Block B, 1st Floor,<br class="desktop-break">
              Oloitoktok Road, Lavington.
            </address>
          </div>
        </section>

        <section class="col-lg-6 contact-form-section" aria-label="Send us a message">
          <!-- Connect this form to your backend or form service to receive messages. -->
          <form class="contact-form" action="#" method="post">
            <div class="form-field">
              <label for="name" class="form-label">Your Name <span>(required)</span></label>
              <input type="text" id="name" name="name" class="form-control"
                     autocomplete="name" required>
            </div>

            <div class="form-field">
              <label for="email" class="form-label">Your Email <span>(required)</span></label>
              <input type="email" id="email" name="email" class="form-control"
                     autocomplete="email" required>
            </div>

            <div class="form-field">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" id="subject" name="subject" class="form-control">
            </div>

            <div class="form-field message-field">
              <label for="message" class="form-label">Your Message</label>
              <textarea id="message" name="message" class="form-control" rows="8"></textarea>
            </div>

            <div class="form-actions">
              <button type="submit" class="btn btn-sulis">Send</button>
            </div>
          </form>
        </section>
      </div>
    </div>
  </main>

  <?php require __DIR__ . '/../footer/footer.php'; ?>
</body>
</html>
