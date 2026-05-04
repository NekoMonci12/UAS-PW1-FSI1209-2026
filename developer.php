<?php 
include 'includes/header.php'; 
$team_data = json_decode(file_get_contents('data/team.json'), true);
$members = $team_data['team_members'];
?>

<div style="margin-bottom: 5rem; text-align: center;">
    <h1 style="font-size: 3.5rem; margin-bottom: 1.5rem; color: var(--text-primary);">Developer Credits</h1>
    <p style="color: var(--text-secondary); max-width: 700px; margin: 0 auto; font-size: 1.1rem; line-height: 1.8;">Meet the creative minds behind Eternity Weddings digital experience.</p>
</div>

<div style="max-width: 1000px; margin: 0 auto; background: var(--white); padding: 4rem; border-radius: 30px; box-shadow: var(--shadow);">
    <h3 style="font-size: 1.8rem; margin-bottom: 3rem; text-align: center;">Development Team</h3>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; text-align: left;">
            <?php foreach ($members as $member): ?>
            <div class="developer-card" style="background: var(--bg-primary); padding: 1.5rem; border-radius: 15px; border-left: 4px solid var(--accent); display: flex; align-items: center; gap: 1.5rem; transition: var(--transition); position: relative;">
                <img src="<?= $member['image'] ?>" alt="<?= $member['name'] ?>" style="width: 60px; height: 60px; object-fit: cover; border-radius: 50%;">
                <div>
                    <a href="<?= $member['social_link'] ?>" target="_blank" style="text-decoration: none; color: inherit;">
                        <h4 style="font-size: 1.1rem; margin-bottom: 0.3rem;" class="developer-name">
                            <?= $member['name'] ?>
                            <?php if (!empty($member['is_lead'])): ?>
                                <i class="fas fa-crown" style="color: #d4af37; font-size: 0.8rem; margin-left: 0.3rem;" title="Lead Developer"></i>
                            <?php endif; ?>
                        </h4>
                    </a>
                    <p style="font-size: 0.85rem; color: var(--text-secondary); font-family: monospace;"><?= $member['nim'] ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php include 'includes/footer.php'; ?>
