<?php include 'includes/header.php'; ?>

<div class="auth-container">
    <h2 style="text-align: center; margin-bottom: 2rem;">Daftar Akun</h2>
    
    <form action="#" method="GET">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>
        <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">Daftar Sekarang</button>
    </form>
    
    <p style="text-align: center; margin-top: 2rem; color: var(--text-secondary);">
        Sudah punya akun? <a href="login.php" style="color: var(--accent); font-weight: 600;">Login di sini</a>
    </p>
</div>

<?php include 'includes/footer.php'; ?>
