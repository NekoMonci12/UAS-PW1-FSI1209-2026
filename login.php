<?php include 'includes/header.php'; ?>

<div class="auth-container">
    <h2 style="text-align: center; margin-bottom: 2rem;">Masuk ke Akun</h2>
    
    <form action="index.php" method="GET">
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="••••••••" required>
        </div>
        <button type="submit" class="btn" style="width: 100%; margin-top: 1rem;">Login</button>
    </form>
    
    <p style="text-align: center; margin-top: 2rem; color: var(--text-secondary);">
        Belum punya akun? <a href="register.php" style="color: var(--accent); font-weight: 600;">Daftar di sini</a>
    </p>
</div>

<?php include 'includes/footer.php'; ?>
