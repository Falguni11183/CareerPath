<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>My Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">

<link rel="stylesheet" href="<?= base_url('css/profile.css') ?>">

</head>

<body>

<div class="profile-container">

<div class="profile-card">

<div class="profile-header">

<img src="https://ui-avatars.com/api/?name=<?= urlencode($user['full_name']) ?>&background=6C63FF&color=fff&size=200"
class="profile-photo">

<h2><?= esc($user['full_name']) ?></h2>

<p><?= esc($user['email']) ?></p>

</div>

<div class="profile-body">

<div class="info-box">

<span class="info-title">
<i class="fa-solid fa-user"></i>
Full Name
</span>

<span class="info-value">
<?= esc($user['full_name']) ?>
</span>

</div>

<div class="info-box">

<span class="info-title">
<i class="fa-solid fa-envelope"></i>
Email
</span>

<span class="info-value">
<?= esc($user['email']) ?>
</span>

</div>

<div class="info-box">

<span class="info-title">
<i class="fa-solid fa-phone"></i>
Phone
</span>

<span class="info-value">
<?= !empty($user['phone']) ? esc($user['phone']) : 'Not Updated'; ?>
</span>

</div>

<div class="info-box">

<span class="info-title">
<i class="fa-solid fa-graduation-cap"></i>
Qualification
</span>

<span class="info-value">
<?= !empty($user['qualification']) ? esc($user['qualification']) : 'Not Updated'; ?>
</span>

</div>

<div class="info-box">

<span class="info-title">
<i class="fa-solid fa-location-dot"></i>
Location
</span>

<span class="info-value">
<?= !empty($user['location']) ? esc($user['location']) : 'Not Updated'; ?>
</span>

</div>

<div class="info-box">

<span class="info-title">
<i class="fa-solid fa-venus-mars"></i>
Gender
</span>

<span class="info-value">
<?= !empty($user['gender']) ? esc($user['gender']) : 'Not Updated'; ?>
</span>

</div>

<div class="text-center mt-4">

<a href="<?= base_url('profile/edit') ?>" class="btn btn-edit">
<i class="fa-solid fa-pen"></i>
Edit Profile
</a>

<a href="<?= base_url('dashboard') ?>" class="btn btn-back ms-2">
Dashboard
</a>

</div>

</div>

</div>

</div>

</body>
</html>