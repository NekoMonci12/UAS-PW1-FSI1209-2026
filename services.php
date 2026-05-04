<?php include 'includes/header.php'; ?>

<div style="margin-bottom: 5rem; text-align: center;">
    <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem; color: var(--text-primary);">Pilihan Paket Pernikahan</h1>
    <p style="color: var(--text-secondary); max-width: 700px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8;">Temukan paket yang dirancang khusus untuk memenuhi ekspektasi Anda. Setiap paket dapat disesuaikan lebih lanjut melalui sesi konsultasi kami.</p>
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
            
            <ul style="margin-bottom: 2rem; font-size: 0.9rem; color: var(--text-secondary);">
                <?php foreach (array_slice($pkg['features'], 0, 3) as $feature): ?>
                    <li style="margin-bottom: 0.5rem;"><i class="fas fa-check" style="color: var(--accent); margin-right: 0.5rem;"></i> <?= htmlspecialchars($feature) ?></li>
                <?php endforeach; ?>
                <li><i class="fas fa-plus" style="color: var(--accent); margin-right: 0.5rem;"></i> Dan masih banyak lagi...</li>
            </ul>

            <a href="detail.php?id=<?= $pkg['id'] ?>" class="btn btn-outline" style="width: 100%; text-align: center;">Lihat Detail & Fasilitas</a>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<?php include 'includes/footer.php'; ?>
