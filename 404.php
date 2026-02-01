<?php
$pageTitle = 'Page Not Found | Excalibur Mobile Detail';
$pageDescription = 'The page you are looking for has moved or does not exist.';
include 'includes/head.php';
include 'includes/header.php';
?>

<main>
    <section style="min-height: 70vh; display: flex; align-items: center; justify-content: center; text-align: center; padding: 120px 20px; background: radial-gradient(circle at center, rgba(0, 184, 76, 0.05) 0%, var(--bg) 70%);">
        <div style="max-width: 600px;">
            <p style="color: var(--accent-green); font-family: var(--font-mono); letter-spacing: 2px; text-transform: uppercase;">Error 404</p>
            <h1 style="font-size: clamp(3rem, 10vw, 6rem); line-height: 1; margin: 20px 0;">LOST IN<br><span class="green-accent">THE SHINE?</span></h1>
            <p style="color: var(--muted); font-size: 1.1rem; margin-bottom: 40px; line-height: 1.6;">
                The detail package you are looking for has been moved or doesn't exist. Let's get you back to the garage.
            </p>
            <a href="/" class="tensile-button">Return Home</a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
