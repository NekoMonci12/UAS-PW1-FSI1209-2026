<?php
include 'includes/header.php';

$id = $_GET['id'] ?? '';
$packages = json_decode(file_get_contents('data/packages.json'), true);
$selected_pkg = null;
foreach ($packages as $p) {
    if ($p['id'] === $id) {
        $selected_pkg = $p;
        break;
    }
}
?>

<div class="auth-container" style="max-width: 600px;">
    <h2 style="text-align: center; margin-bottom: 2rem;">Booking & Konsultasi</h2>
    
    <form action="tracking.php" method="GET">
        <div class="form-group">
            <label>Pilih Paket</label>
            <select name="package_id" class="form-control" required>
                <option value="">-- Pilih Paket --</option>
                <?php foreach ($packages as $pkg): ?>
                    <option value="<?= $pkg['id'] ?>" <?= ($selected_pkg && $selected_pkg['id'] === $pkg['id']) ? 'selected' : '' ?>>
                        <?= htmlspecialchars($pkg['name']) ?> - Rp <?= number_format($pkg['price'], 0, ',', '.') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        
        <div class="form-group">
            <label>Tanggal Rencana Pernikahan</label>
            <input type="date" name="wedding_date" class="form-control" required min="<?= date('Y-m-d') ?>">
        </div>

        <div class="form-group">
            <label>Catatan atau Permintaan Khusus</label>
            <textarea name="notes" class="form-control" rows="4" placeholder="Ceritakan konsep impian Anda atau permintaan khusus lainnya..."></textarea>
        </div>

        <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">
            Konfirmasi Booking
        </button>
    </form>
</div>

<?php include 'includes/footer.php'; ?>
