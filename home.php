<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sulis East Africa</title>
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="../includes/navbar.css">
    <link rel="stylesheet" href="../footer/footer.css">
</head>
<body>

    <?php require __DIR__ . '/../includes/navbar.php'; ?>

    <header class="site-header" id="home">
        <div class="hero">
            <div class="hero-content">
                <div class="tagline-pill">
                    <svg viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2c-1.4 2.6-5 6.1-5 10.1A5 5 0 0 0 12 17a5 5 0 0 0 5-4.9C17 8.1 13.4 4.6 12 2Zm0 6.2c-.8 1.1-2.3 2.6-2.3 4.3A2.3 2.3 0 0 0 12 15.1a2.3 2.3 0 0 0 2.3-2.6c0-1.7-1.5-3.2-2.3-4.3Z"/>
                    </svg>
                    <span>SUSTAINABLE UTILITY INFORMATION SOLUTIONS</span>
                </div>

                <h1>
                    <span class="title-main">Sulis East Africa</span>
                    <span class="title-line">Smarter Utilities.</span>
                    <span class="title-line">Sustainable Futures.</span>
                </h1>

                <p class="subtitle">
                    Building sustainable IT solutions for your utility needs.<br>
                    Connecting water, electricity and communities through technology<br>
                    across East Africa and beyond.
                </p>
            </div>
        </div>

        <div class="stats-bar">
            <div class="stat-item">
                <strong>Since 2002</strong>
                <span>Built on experience</span>
            </div>
            <div class="stat-item">
                <strong>East Africa</strong>
                <span>Local expertise. Wider impact.</span>
            </div>
            <div class="stat-item">
                <strong>Water + Electricity</strong>
                <span>Purpose-built solutions</span>
            </div>
        </div>
    </header>

    <main class="home-content">
        <section class="home-section about-section" id="about">
            <div class="home-section-inner split-layout">
                <div>
                    <p class="section-kicker">ABOUT SULIS</p>
                    <h2>Sustainable technology for essential services.</h2>
                </div>
                <div class="section-copy">
                    <p>
                        SULIS East Africa Limited develops sustainable information
                        technology solutions for water and electricity utilities.
                        Since 2002, we have helped organizations improve utility
                        management, asset performance and service quality.
                    </p>
                    <a class="section-link" href="../about/about.php">Learn more about SULIS <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>

        <section class="home-section solutions-section" id="products">
            <div class="home-section-inner">
                <div class="section-heading">
                    <p class="section-kicker">OUR PRODUCTS</p>
                    <h2>Purpose-built solutions for utilities</h2>
                    <p>Tools that support customer management, billing and field operations.</p>
                </div>
                <div class="home-card-grid">
                    <article class="home-card">
                        <span class="home-card-number">01</span>
                        <h3>M@JICS</h3>
                        <p>Water utility management for customer accounts, metering, billing and revenue collection.</p>
                    </article>
                    <article class="home-card">
                        <span class="home-card-number">02</span>
                        <h3>GESCLI</h3>
                        <p>Electricity utility management built to support essential customer and operational workflows.</p>
                    </article>
                    <article class="home-card">
                        <span class="home-card-number">03</span>
                        <h3>Mobile Meter Reading</h3>
                        <p>Mobile tools to support accurate field readings and efficient data exchange.</p>
                    </article>
                </div>
                <div class="section-action">
                    <a class="section-link" href="../products/products.php">View our products <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
        <!-- OUR CLIENTS -->
        <section class="home-section clients-section" id="clients">
            <div class="home-section-inner">
                <div class="split-layout">
                    <div><p class="section-kicker">OUR CLIENTS</p>
                        <h2>Trusted by utilities across the region</h2>
                    </div>
                    <div class="section-copy">
                        <p>SULIS works with water utilities across East Africa to support reliable services and stronger operations.</p>
                    </div>
                </div>
                <div class="client-carousel" role="region" aria-label="SULIS client logos">
                    <div class="client-carousel-track">
                        <div class="client-logo-group">
                            <div class="client-logo-card"><img src="embu.png" alt="Embu Water and Sanitation Company"></div>
                            <div class="client-logo-card"><img src="kwale.png" alt="Kwale Water and Sewerage Company"></div>
                            <div class="client-logo-card"><img src="malindi.jpg" alt="Malindi Water and Sewerage Company"></div>
                            <div class="client-logo-card client-logo-card--mavwasco"><img src="MAVWASCO.jpg" alt="Mavoko Water and Sewerage Company"></div>
                            <div class="client-logo-card"><img src="EdD.jpg" alt="Djibouti"></div>
                        </div>

        <!-- Duplicate logos for continuous scrolling -->
            <div class="client-logo-group" aria-hidden="true">
              <div class="client-logo-card"><img src="embu.png" alt=""></div>
               <div class="client-logo-card"><img src="kwale.png" alt=""></div>
                <div class="client-logo-card"><img src="malindi.jpg" alt=""></div>
                <div class="client-logo-card client-logo-card--mavwasco"><img src="MAVWASCO.jpg" alt=""></div>
                <div class="client-logo-card"><img src="EdD.jpg" alt=""></div>
            </div>
        </div>
</div>

            </div>
        </section>
        <!-- PROPBILL SECTION -->
        <section class="home-section propbill-section" id="propbill">
            <div class="home-section-inner split-layout">
                <div>
                    <p class="section-kicker">PROPBILL</p>
                    <h2>Automated  billing for property & services.</h2>
                </div>
                <div class="section-copy">
                    <p>
                        Looking for information about PropBill? Talk with our team
                        about your property billing needs and how SULIS solutions
                        can support your operations.
                    </p>
                    <a class="section-link" href="../propbill/propbill.php">Know More about PropBill <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
        <!-- SERVICES SECTION -->
        <section class="home-section services-section" id="services">
            <div class="home-section-inner">
                <div class="section-heading">
                    <p class="section-kicker">OUR SERVICES</p>
                    <h2>Expertise across the utility lifecycle</h2>
                    <p>Practical support to help utilities plan, implement and improve their information systems.</p>
                </div>
                <div class="service-list">
                    <div><span aria-hidden="true">✓</span><p>Utility Management</p></div>
                    <div><span aria-hidden="true">✓</span><p>Consultancy Services</p></div>
                    <div><span aria-hidden="true">✓</span><p>Customer Identification Surveys</p></div>
                </div>
                <div class="section-action">
                    <a class="section-link" href="../services/services.php">Explore our experience <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
        <!-- CONTACT SECTION -->
        <section class="home-section contact-section" id="contact">
            <div class="home-section-inner">
                <div class="section-heading">
                    <p class="section-kicker">CONTACT US</p>
                    <h2>Let’s start a conversation</h2>
                    <p>Reach out to SULIS East Africa. We’d be glad to hear from you.</p>
                </div>
                <div class="contact-summary">
                    <div>
                        <span class="contact-summary-label">CALL US</span>
                        <a href="tel:+254203872607">+254-20-387-2607</a>
                    </div>
                    <div>
                        <span class="contact-summary-label">VISIT US</span>
                        <p>Methodist Ministries Centre, Block B, 1st Floor,<br>Oloitoktok Road, Lavington, Nairobi.</p>
                    </div>
                </div>
                <div class="section-action">
                    <a class="section-link" href="../contact/contact.php">Contact Sulis<span aria-hidden="true">→</span></a>
                </div>
            </div>
        </section>
    </main>

    <?php require __DIR__ . '/../footer/footer.php'; ?>

</body>
</html>