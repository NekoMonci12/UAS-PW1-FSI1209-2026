<?php
include 'includes/header.php';

// Mock data for display only
$mock_booking = [
    'booking_id' => 'ORD-W12345',
    'package_name' => 'Royal Grandeur',
    'status' => 'In Progress',
    'wedding_date' => date('Y-m-d', strtotime('+6 months')),
    'progress' => 65
];
?>

<div style="margin-bottom: 5rem; text-align: center;">
    <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem; color: var(--text-primary);">Tracking Progres Pernikahan</h1>
    <p style="color: var(--text-secondary); max-width: 700px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8;">Pantau setiap tahapan perencanaan pernikahan Anda secara real-time.</p>
</div>

<div style="background: var(--white); border-radius: 20px; box-shadow: var(--shadow); padding: 3rem; margin-bottom: 3rem;">
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem; border-bottom: 1px solid rgba(0,0,0,0.05); padding-bottom: 1.5rem;">
        <div>
            <span style="color: var(--accent); font-weight: 700; font-size: 0.9rem;">ID BOOKING: <?= $mock_booking['booking_id'] ?></span>
            <h2 style="font-size: 2rem;"><?= htmlspecialchars($mock_booking['package_name']) ?></h2>
        </div>
        <div style="text-align: right;">
            <span style="background: #fef3c7; color: #92400e; padding: 0.5rem 1rem; border-radius: 50px; font-size: 0.8rem; font-weight: 600;">
                <?= htmlspecialchars($mock_booking['status']) ?>
            </span>
            <p style="font-size: 0.9rem; color: var(--text-secondary); margin-top: 0.5rem;">Rencana: <?= date('d M Y', strtotime($mock_booking['wedding_date'])) ?></p>
        </div>
    </div>

    <div class="progress-section" style="margin-bottom: 3rem;">
        <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
            <span style="font-weight: 600;">Progres Perencanaan Keseluruhan</span>
            <span style="font-weight: 700; color: var(--accent);"><?= $mock_booking['progress'] ?>%</span>
        </div>
        <div style="width: 100%; height: 12px; background: #eee; border-radius: 10px; overflow: hidden;">
            <div style="width: <?= $mock_booking['progress'] ?>%; height: 100%; background: var(--accent); transition: width 1s ease;"></div>
        </div>
    </div>

    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 1rem; text-align: center;">
        <div style="opacity: <?= $mock_booking['progress'] >= 10 ? '1' : '0.3' ?>;">
            <div style="width: 50px; height: 50px; background: var(--bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: var(--accent);">
                <i class="fas fa-file-invoice"></i>
            </div>
            <span style="font-size: 0.8rem; font-weight: 600;">Booking Diterima</span>
        </div>
        <div style="opacity: <?= $mock_booking['progress'] >= 40 ? '1' : '0.3' ?>;">
            <div style="width: 50px; height: 50px; background: var(--bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: var(--accent);">
                <i class="fas fa-comments"></i>
            </div>
            <span style="font-size: 0.8rem; font-weight: 600;">Konsultasi Desain</span>
        </div>
        <div style="opacity: <?= $mock_booking['progress'] >= 70 ? '1' : '0.3' ?>;">
            <div style="width: 50px; height: 50px; background: var(--bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: var(--accent);">
                <i class="fas fa-hotel"></i>
            </div>
            <span style="font-size: 0.8rem; font-weight: 600;">Vendor Locked</span>
        </div>
        <div style="opacity: <?= $mock_booking['progress'] >= 100 ? '1' : '0.3' ?>;">
            <div style="width: 50px; height: 50px; background: var(--bg-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1rem; color: var(--accent);">
                <i class="fas fa-glass-cheers"></i>
            </div>
            <span style="font-size: 0.8rem; font-weight: 600;">Ready to Go!</span>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
