<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropBill | Sulis EA</title>
    <link rel="stylesheet" href="prop.css?v=2">
    <link rel="stylesheet" href="../includes/navbar.css">
    <link rel="stylesheet" href="../footer/footer.css">
</head>

<body>
    <?php require __DIR__ . '/../includes/navbar.php'; ?>
    <main>

        <section class="propbill-section" aria-labelledby="propbill-title">
            <div class="propbill-image">
                <img src="prop.png" alt="">
                <div class="propbill-copy">
                    <h1 id="propbill-title">M@JICS PropBill</h1>
                    <p>Usimamizi wa Malipo — Uliofanywa Kuwa Rahisi</p>
                </div>
            </div>
        </section>
        <section class="intro" aria-labelledby="hero-title">
            <div class="intro-inner">
                <h1 id="hero-title">Every billing headache, eliminated</h1>
                <p class="tagline">
                    From late-rent chaos to meter reading disputes — M@JICS PropBill handles the hard parts
                    so you can manage more properties with less stress.
                </p>
                <p class="description">
                    M@JICS PropBill replaces notebooks, WhatsApp chats, and manual spreadsheets with a single
                    intelligent platform, automating rent billing, utility metering, M-Pesa reconciliation,
                    and KRA eTIMS compliance for properties and tenants.
                </p>
                <h2 class="features-heading">KEY FEATURES</h2>
            </div>
        </section>

        <section class="features" aria-label="Key features">
            <div class="feature">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M3 10.5 12 3l9 7.5V21h-6v-6H9v6H3z" />
                    <circle cx="12" cy="9" r="2.2" fill="#0202F5" />
                </svg>
                <span>Rent Billing &amp; Collection</span>
            </div>
            <div class="feature">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 2C9 6 6.5 9 6.5 12a5.5 5.5 0 0 0 11 0C17.5 9 15 6 12 2Z" />
                    <path d="M3 20h18l-3 2H6z" />
                </svg>
                <span>Utilities Billing</span>
            </div>
            <div class="feature">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 2v20M17 6H9.5a3 3 0 0 0 0 6h5a3 3 0 0 1 0 6H6" fill="none" stroke="currentColor"
                        stroke-width="2.4" stroke-linecap="round" />
                    <path d="M3 19h18l-3 3H6z" />
                </svg>
                <span>Service Charges</span>
            </div>
            <div class="feature">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M5 2h10l4 4v16H5z" />
                    <path d="M14 2v5h5M8 11h8M8 15h8M8 19h5" fill="none" stroke="#0202F5" stroke-width="1.7" />
                </svg>
                <span>KRA Invoice Compliant<br>(eTIMS)</span>
            </div>
            <div class="feature">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="5" y="1" width="14" height="22" rx="2" />
                    <rect x="8" y="4" width="8" height="14" fill="#0202F5" />
                    <circle cx="12" cy="20" r="1" fill="#0202F5" />
                </svg>
                <span>MPESA Integration</span>
            </div>
        </section>

        <section class="video-section" aria-label="PropBill introduction video">
            <div class="video-frame">
                <iframe src="https://www.youtube.com/embed/LGdPmv3oeRc?start=10"
                    title="M@JICS PropBill by Sulis introduction video" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                </iframe>
            </div>
        </section>
    </main>

</body>

</html>