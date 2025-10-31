<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile – FareFlow</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --header-bg: #E6F0FA;
            --btn-orange: #FF5722;
        }
        body {
            background: #fff;
            font-family: 'Chivo', sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Header */
        .header {
            background: var(--header-bg);
            padding: 0.75rem 1rem;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .logo-img { height: 38px; }

        /* Profile Section */
        .profile-card {
            text-align: center;
            padding: 2rem 1rem 1.5rem;
            background: #fff;
        }
        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            margin-bottom: 1rem;
        }

        /* Name + Edit Button Row */
        .name-edit {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            margin: 0.5rem 0 0.25rem;
        }
        .user-name {
            font-weight: 700;
            font-size: 1.1rem;
            margin: 0;
            color: #212529;
        }
        .edit-link {
            color: #212529;
            font-size: 1.1rem;
            text-decoration: none;
            transition: color 0.2s;
        }
        .edit-link:hover {
            color: var(--btn-orange);
        }

        .user-phone {
            color: #6c757d;
            font-size: 0.95rem;
            margin: 0;
        }

        /* Menu Items */
        .menu-item {
            display: flex;
            align-items: center;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #e9ecef;
            text-decoration: none;
            color: #212529;
            transition: background 0.2s;
        }
        .menu-item:hover {
            background: #f8f9fa;
        }
        .menu-icon {
            width: 40px;
            height: 40px;
            background: #000;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            margin-right: 1rem;
        }
        .menu-text {
            flex-grow: 1;
            font-size: 1rem;
            font-weight: 500;
        }
        .menu-arrow {
            color: #6c757d;
        }

        /* Sign Out Button */
        .btn-signout {
        background: #FF9800 !important;           /* Exact orange */
        color: #000000 !important;                /* Black text */
        border: none !important;
        border-radius: 8px !important;            /* Rounded corners */
        padding: 0.85rem 2rem !important;
        font-weight: 700 !important;              /* Bold */
        font-size: 1.1rem !important;
        width: 100% !important;
        max-width: 360px !important;
        margin: 2rem auto !important;
        display: block !important;
        text-align: center !important;
        transition: background 0.2s ease !important;
        box-shadow: none !important;
        }
        .btn-signout:hover {
        background: #F57C00 !important;           /* Darker orange on hover */
        color: #000 !important;
        letter-spacing: 0.5px !important;
        line-height: 1.4 !important;
        }
    </style>
</head>
<body>

<!-- HEADER -->
<header class="header">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <a href="javascript:history.back()" class="text-dark">
                <i class="bi bi-arrow-left fs-3"></i>
            </a>
            <div class="flex-grow-1 d-flex justify-content-center">
                <img src="{{ asset('images/fareflow-logo.png') }}" alt="FareFlow" class="logo-img img-fluid">
            </div>
            <div style="width:40px;"></div>
        </div>
    </div>
</header>

<!-- PROFILE CARD -->
<div class="profile-card">
    <img src="{{ $user->profile_photo_url ?? asset('images/default-avatar.png') }}"
         alt="Avatar" class="avatar">

    <!-- Name + Edit Button -->
    <div class="name-edit">
        <h5 class="user-name">{{ $user->name }}</h5>
        <a href="/profile/edit" class="edit-link">
            <i class="bi bi-pencil-fill"></i>
        </a>
    </div>

    <p class="user-phone">{{ $user->phone ?? '0815986432543' }}</p>
</div>

<!-- MENU -->
<div class="container">

    <!-- Help Center -->
    <a href="/support" class="menu-item">
        <div class="menu-icon"><i class="bi bi-question-circle"></i></div>
        <div class="menu-text">Help Center</div>
        <i class="bi bi-chevron-right menu-arrow"></i>
    </a>

    <!-- Privacy Policy -->
    <a href="{{ route('privacy-policy') }}" class="menu-item">
        <div class="menu-icon"><i class="bi bi-shield-check"></i></div>
        <div class="menu-text">Privacy Policy</div>
        <i class="bi bi-chevron-right menu-arrow"></i>
    </a>

    <!-- Terms of Privacy -->
    <a href="/terms" class="menu-item">
        <div class="menu-icon"><i class="bi bi-lock"></i></div>
        <div class="menu-text">Terms of Privacy</div>
        <i class="bi bi-chevron-right menu-arrow"></i>
    </a>

</div>

<!-- SIGN OUT BUTTON -->
<div class="text-center">
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="btn-signout">
            Sign out
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>