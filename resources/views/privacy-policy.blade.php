<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FareFlow – Privacy Policy</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts – Roboto Mono (title) + Chivo (body) -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Chivo:wght@400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --header-bg: #E6F0FA;   /* light blue */
            --btn-orange: #FF5722;
            --btn-orange-hover: #e64a19;
        }

        body {
            background: #fff;
            font-family: 'Chivo', system-ui, -apple-system, sans-serif;
            color: #333;
        }

        /* ---------- HEADER ---------- */
        .app-header {
            background: var(--header-bg);
            padding: 0.75rem 1rem;
        }
        .logo-img {
            height: 38px;
        }
        .back-btn {
            font-size: 1.6rem;
            color: #212529;
        }
        .back-btn:hover { color: var(--btn-orange); }

        /* ---------- TITLE ---------- */
        .policy-title {
            font-family: 'Roboto Mono', monospace;
            font-weight: 500;
            font-size: 1.5rem;
            text-align: center;
            margin: 2rem 0 1.5rem;
        }

        /* ---------- TEXT ---------- */
        .policy-text {
            font-size: 0.95rem;
            line-height: 1.65;
            margin-bottom: 1.2rem;
            text-align: justify;
        }

        /* ---------- BUTTON ---------- */
        .accept-btn {
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

        .accept-btn:hover {
        background: #F57C00 !important;           /* Darker orange on hover */
        color: #000 !important;
        letter-spacing: 0.5px !important;
        line-height: 1.4 !important;
        }

        /* ---------- SUCCESS MESSAGE ---------- */
        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: .35rem;
        }
    </style>
</head>
<body>

<!-- ===== HEADER ===== -->
<header class="app-header">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <!-- Back -->
            <a href="javascript:history.back()" class="back-btn">
                <i class="bi bi-arrow-left"></i>
            </a>

            <!-- Logo (centered) -->
            <div class="flex-grow-1 d-flex justify-content-center">
                <img src="{{ asset('images/fareflow-logo.png') }}"
                     alt="FareFlow"
                     class="logo-img img-fluid">
            </div>

            <!-- Spacer -->
            <div style="width:40px;"></div>
        </div>
    </div>
</header>

<!-- ===== MAIN CONTENT ===== -->
<main class="container py-4">
    <h1 class="policy-title">Privacy Policy</h1>

    @if (session('status'))
        <div class="alert alert-success text-center mb-4">
            {{ session('status') }}
        </div>
    @endif

    <p class="policy-text">
        At FareFlow, we value your privacy and are committed to protecting your personal information. 
        We collect details such as your name, email, phone number, payment information, and device data 
        to process transactions, provide app features, and enhance your experience. With your consent, 
        we may also collect location data to improve trip notifications and route information.
    </p>

    <p class="policy-text">
        Your data is used solely to facilitate payments, send notifications, and improve the app's 
        functionality. We do not sell or share your personal data with third parties for marketing, 
        but may share with service providers helping us operate the app or as required by law.
    </p>

    <p class="policy-text">
        We implement standard security measures to safeguard your data but cannot guarantee complete 
        security due to the inherent risks of digital transmission. You have the right to access, 
        update, or delete your information at any time. This Privacy Policy may be updated periodically, 
        and any changes will be communicated through the app. If you have any questions or concerns, 
        please contact us immediately. By using FareFlow, you agree to the terms of this policy.
    </p>

    <!-- Accept Form -->
    <form method="POST" action="{{ route('privacy.accept') }}">
        @csrf
        <button type="submit" class="accept-btn">Accept All</button>
    </form>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>