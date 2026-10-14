<div class="site-nav">
    <nav class="navbar" aria-label="Main navigation">
        <a href="../home/home.php#home" class="brand">
            <img src="../home/image.png" alt="Sulis East Africa">
        </a>

        <ul class="nav-links" id="primary-navigation">
            <li><a href="../home/home.php#home">Home</a></li>
            <li><a href="../home/home.php#about">About</a></li>
            <li><a href="../home/home.php#products">Products</a></li>
            <li><a href="../home/home.php#propbill">PropBill</a></li>
            <li><a href="../home/home.php#services">Services</a></li>
            <li><a href="../support/support.php">Support</a></li>
            <li><a href="../home/home.php#contact">Contact Us</a></li>
        </ul>
    </nav>
</div>

<script>
    document.querySelectorAll('.menu-toggle').forEach((toggle) => {
        const navigation = document.getElementById(toggle.getAttribute('aria-controls'));

        toggle.addEventListener('click', () => {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!isExpanded));
            toggle.setAttribute('aria-label', isExpanded ? 'Open navigation menu' : 'Close navigation menu');
        });

        navigation.addEventListener('click', (event) => {
            if (event.target.closest('a')) {
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Open navigation menu');
            }
        });
    });
</script>
