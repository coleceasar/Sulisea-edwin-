<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support | Sulis EA</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../includes/navbar.css">
  <link rel="stylesheet" href="../footer/footer.css">
</head>
<body>
       <?php require __DIR__ . '/../includes/navbar.php'; ?>
  <main class="customer-service">
    <header class="hero">
      <h1>Support</h1>
    </header>

    <section class="help-section" aria-labelledby="help-heading">
      <h2 id="help-heading">Our Customer Service Centre is <strong>ready to help you the best way we can:</strong></h2>

      <div class="contact-options">
        <a class="contact-option" href="mailto:info@sulis.co.ke" aria-label="Raise a support ticket by email">
          <span class="icon-circle" aria-hidden="true">
            <svg viewBox="0 0 200 200">
              <circle class="icon-outline" cx="100" cy="100" r="87"/>
              <g class="icon-lines">
                <path d="M55 72h31M42 98h44M55 124h31"/>
                <rect x="111" y="63" width="69" height="72" rx="2"/>
                <path d="M113 69l33 28 32-28"/>
              </g>
            </svg>
          </span>
          <span class="option-label">RAISE A TICKET</span>
        </a>

        <span class="or-label" aria-hidden="true">Or</span>

        <a class="contact-option" href="tel:+254700000000" aria-label="Call customer service">
          <span class="icon-circle" aria-hidden="true">
            <svg viewBox="0 0 200 200">
              <circle class="icon-outline" cx="100" cy="100" r="87"/>
              <g class="phone-shape">
                <path d="M70 48c-7-4-17 5-20 13-7 18 10 52 29 73 19 22 48 38 65 30 8-4 15-15 10-22l-17-24c-3-4-8-5-12-2l-14 10c-6-3-15-11-22-20-7-10-11-20-12-26l13-12c4-4 4-9 1-13z"/>
                <rect x="64" y="37" width="22" height="45" rx="5" transform="rotate(-31 75 59)"/>
                <rect x="119" y="123" width="22" height="45" rx="5" transform="rotate(-31 130 145)"/>
              </g>
            </svg>
          </span>
          <span class="option-label">CALL US</span>
        </a>
      </div>
    </section>
  </main>
        <?php require __DIR__ . '/../footer/footer.php'; ?>
</body>
</html>
