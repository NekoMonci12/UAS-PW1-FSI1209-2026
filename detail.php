<?php
include 'includes/header.php';

$id = $_GET['id'] ?? '';
$packages = json_decode(file_get_contents('data/packages.json'), true);
$pkg = null;

foreach ($packages as $p) {
    if ($p['id'] === $id) {
        $pkg = $p;
        break;
    }
}

if (!$pkg) {
    echo "<h1>Paket tidak ditemukan</h1>";
    include 'includes/footer.php';
    exit;
}
?>

<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
    <div class="detail-gallery">
        <img src="<?= htmlspecialchars($pkg['image']) ?>" alt="<?= htmlspecialchars($pkg['name']) ?>" style="width: 100%; border-radius: 20px; box-shadow: var(--shadow);">
    </div>
    
    <div class="detail-info">
        <div class="package-price" style="font-size: 1.5rem;">Mulai dari Rp <?= number_format($pkg['price'], 0, ',', '.') ?></div>
        <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem;"><?= htmlspecialchars($pkg['name']) ?></h1>
        <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 2rem;">
            <?= htmlspecialchars($pkg['long_description']) ?>
        </p>

        <h3 style="margin-bottom: 1.5rem;">Apa yang Anda Dapatkan:</h3>
        <ul style="margin-bottom: 3rem;">
            <?php foreach ($pkg['features'] as $feature): ?>
                <li style="margin-bottom: 1rem; display: flex; align-items: center;">
                    <i class="fas fa-check-circle" style="color: var(--accent); margin-right: 1rem; font-size: 1.2rem;"></i>
                    <span><?= htmlspecialchars($feature) ?></span>
                </li>
            <?php endforeach; ?>
        </ul>

        <div style="display: flex; gap: 1rem;">
            <a href="booking.php?id=<?= $pkg['id'] ?>" class="btn" style="flex: 1; text-align: center;">Booking Sekarang</a>
            <a href="services.php" class="btn btn-outline">Kembali</a>
        </div>
    </div>
</div>

<div style="margin-top: 5rem; border-top: 1px solid rgba(0,0,0,0.05); padding-top: 5rem;">
    <h2 style="text-align: center; margin-bottom: 3rem;">Testimonial Pasangan</h2>
    <div class="services-grid" style="grid-template-columns: repeat(3, 1fr);">
        <div style="background: var(--bg-secondary); padding: 2rem; border-radius: 15px; font-style: italic;">
            "Terima kasih Eternity Weddings! Pernikahan kami yang bergaya <?= htmlspecialchars($pkg['name']) ?> berjalan sangat sempurna tanpa kendala sedikitpun."
            <p style="margin-top: 1rem; font-style: normal; font-weight: 600; color: var(--accent);">- Andi & Sarah</p>
        </div>
        <div style="background: var(--bg-secondary); padding: 2rem; border-radius: 15px; font-style: italic;">
            "Sangat profesional dan detail. Kami benar-benar bisa menikmati hari bahagia kami karena tim Eternity menangani segalanya."
            <p style="margin-top: 1rem; font-style: normal; font-weight: 600; color: var(--accent);">- Budi & Ani</p>
        </div>
        <div style="background: var(--bg-secondary); padding: 2rem; border-radius: 15px; font-style: italic;">
            "Worth every penny. Paket <?= htmlspecialchars($pkg['name']) ?> memberikan kualitas yang melebihi ekspektasi kami."
            <p style="margin-top: 1rem; font-style: normal; font-weight: 600; color: var(--accent);">- Rizky & Maya</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
