<?php include 'includes/header.php'; ?>

<section class="hero">
    <img src="https://picsum.photos/seed/wedding_hero/1200/600" alt="Eternity Weddings Hero">
    <div class="hero-content">
        <h1>Wujudkan Pernikahan Impian Anda</h1>
        <p style="font-size: 1.2rem; margin-bottom: 2rem;">Eternity Weddings hadir untuk merancang setiap momen berharga dalam perjalanan cinta Anda menjadi kenyataan yang tak terlupakan.</p>
        <a href="services.php" class="btn">Lihat Paket Layanan</a>
    </div>
</section>

<section class="featured-services">
    <div style="text-align: center; margin-bottom: 5rem;">
        <h2 style="font-size: 3.5rem; margin-bottom: 1.5rem;">Layanan Unggulan Kami</h2>
        <p style="color: var(--text-secondary); max-width: 700px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8;">Pilih dari kurasi paket pernikahan premium kami yang dirancang khusus untuk Anda.</p>
    </div>

    <div class="services-grid">
        <?php
        $packages = json_decode(file_get_contents('data/packages.json'), true);
        foreach ($packages as $pkg):
        ?>
        <div class="package-card">
            <div class="package-img">
                <img src="<?= htmlspecialchars($pkg['image']) ?>" alt="<?= htmlspecialchars($pkg['name']) ?>">
            </div>
            <div class="package-info">
                <div class="package-price">Mulai dari Rp <?= number_format($pkg['price'], 0, ',', '.') ?></div>
                <h3 style="font-size: 1.5rem; margin-bottom: 1rem;"><?= htmlspecialchars($pkg['name']) ?></h3>
                <p style="color: var(--text-secondary); margin-bottom: 1.5rem;"><?= htmlspecialchars($pkg['description']) ?></p>
                <a href="detail.php?id=<?= $pkg['id'] ?>" class="btn btn-outline" style="width: 100%; text-align: center;">Lihat Detail</a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="cta" style="margin-top: 5rem; background: var(--bg-secondary); padding: 5rem; border-radius: 20px; text-align: center;">
    <h2 style="font-size: 2.5rem; margin-bottom: 1.5rem;">Siap untuk memulai perencanaan?</h2>
    <p style="max-width: 600px; margin: 0 auto 2rem; color: var(--text-secondary);">Konsultasikan pernikahan Anda dengan tim ahli kami secara gratis dan temukan paket yang paling sesuai dengan impian Anda.</p>
    <a href="booking.php" class="btn">Booking Konsultasi</a>
</section>

<?php include 'includes/footer.php'; ?>
