<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FareFlow – Just go with the flow</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts  -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&family=Chivo:wght@400;500&display=swap" rel="stylesheet">

    <style>
        :root {
            --header-bg: #E6F0FA;
            --btn-orange: #FF9800;
            --btn-orange-hover: #F57C00;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: 'Chivo', system-ui, -apple-system, sans-serif;
            background: #fff;
            color: #333;
            overflow: hidden;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* Header – SAME AS PRIVACY POLICY */
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
        .back-btn:hover {
            color: var(--btn-orange);
        }

        /* Top Orange Curve */
        .curve-top {
            position: absolute;
            top: -50px;
            left: -50px;
            width: 200px;
            height: 200px;
            border: 30px solid #FF5722;
            border-radius: 50%;
            border-top: none;
            border-left: none;
            transform: rotate(45deg);
            z-index: 1;
        }

        /* Bottom Red Curve */
        .curve-bottom {
            position: absolute;
            bottom: -60px;
            right: -60px;
            width: 220px;
            height: 220px;
            border: 35px solid #D32F2F;
            border-radius: 50%;
            border-bottom: none;
            border-right: none;
            transform: rotate(45deg);
            z-index: 1;
        }

        /* Bus */
        .bus-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }
        .bus-img {
            width: 100%;
            max-width: 380px;
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }

        /* BUTTONS – EXACT SAME AS PRIVACY POLICY */
        .btn-custom {
            background: var(--btn-orange) !important;
            color: #000000 !important;
            border: none !important;
            border-radius: 8px !important;
            padding: 0.85rem 2rem !important;
            font-weight: 700 !important;
            font-size: 1.1rem !important;
            width: 100% !important;
            max-width: 360px !important;
            margin: 0.75rem auto !important;
            display: block !important;
            text-align: center !important;
            text-decoration: none !important;
            transition: all 0.2s ease !important;
            box-shadow: none !important;
        }
        .btn-custom:hover {
            background: var(--btn-orange-hover) !important;
            color: #000 !important;
            letter-spacing: 0.5px !important;
            transform: translateY(-2px);
        }

        .btn-signup {
            background: #E3F2FD !important;
            color: #000 !important;
        }
        .btn-signup:hover {
            background: #BBDEFB !important;
            letter-spacing: 0.5px !important;
            transform: translateY(-2px);
        }

        /* Footer */
        .footer {
            background: var(--header-bg);
            padding: 1.5rem 1rem;
            text-align: center;
        }
        .footer-logo {
            height: 50px;
            margin-bottom: 0.5rem;
        }
        .footer-title {
            font-family: 'Roboto Mono', monospace;
            font-weight: 500;
            font-size: 1.5rem;
            color: #D32F2F;
            margin: 0;
        }
        .footer-tagline {
            color: black;
            font-size: 1rem;
            margin: 0.25rem 0 0;
            font-style: italic;
        }
    </style>
</head>
<body>

    <!-- Top Orange Curve -->
    <div class="curve-top"></div>

    <!-- HEADER – SAME AS PRIVACY POLICY -->
    <header class="app-header">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between">
                <div class="flex-grow-1 d-flex justify-content-center">
                    <img src="{{ asset('images/fareflow-logo.png') }}" alt="FareFlow" class="logo-img img-fluid">
                </div>
                <div style="width:40px;"></div>
            </div>
        </div>
    </header>

    <!-- BUS -->
    <div class="bus-container">
        <img src="{{ asset('images/fareflow-bus.png') }}" alt="FareFlow Bus" class="bus-img">
    </div>

    <!-- BUTTONS – EXACT MATCH -->
    <div class="container pb-3">
        <a href="/register" class="btn-custom btn-signup">Sign Up</a>
        <a href="/login" class="btn-custom">Log In</a>
    </div>

    <!-- FOOTER -->
    <div class="footer">
        <img src="{{ asset('images/fareflow-logo.png') }}" alt="FareFlow Logo" class="footer-logo">
        <p class="footer-tagline">Just go with the flow</p>
    </div>

    <!-- Bottom Red Curve -->
    <div class="curve-bottom"></div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>