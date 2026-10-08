```blade
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exscurty Test</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f7fb;
            color: #172033;
        }

        /* ================= NAVBAR ================= */

        .navbar {
            height: 75px;
            padding: 0 8%;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #e8edf4;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 22px;
            font-weight: bold;
            color: #2563eb;
        }

        .logo-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #2563eb;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 19px;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .nav-link {
            text-decoration: none;
            color: #64748b;
            font-size: 14px;
        }

        .nav-link:hover {
            color: #2563eb;
        }

        .login-btn {
            text-decoration: none;
            background: #2563eb;
            color: white;
            padding: 11px 22px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        .login-btn:hover {
            background: #1d4ed8;
        }

        /* ================= HERO ================= */

        .hero {
            min-height: 590px;
            padding: 70px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 60px;
        }

        .hero-content {
            max-width: 590px;
        }

        .badge {
            display: inline-block;
            padding: 8px 14px;
            border-radius: 20px;
            background: #e8f0ff;
            color: #2563eb;
            font-size: 13px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-size: 52px;
            line-height: 1.15;
            margin-bottom: 22px;
            letter-spacing: -1px;
        }

        .hero h1 span {
            color: #2563eb;
        }

        .hero-description {
            font-size: 17px;
            line-height: 1.8;
            color: #64748b;
            margin-bottom: 32px;
            max-width: 520px;
        }

        .hero-buttons {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .primary-btn {
            display: inline-block;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 9px;
            background: #2563eb;
            color: white;
            font-weight: bold;
            box-shadow: 0 8px 20px rgba(37, 99, 235, 0.2);
        }

        .primary-btn:hover {
            background: #1d4ed8;
        }

        .secondary-btn {
            display: inline-block;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 9px;
            background: white;
            color: #334155;
            border: 1px solid #dbe2ea;
            font-weight: bold;
        }

        .secondary-btn:hover {
            border-color: #2563eb;
            color: #2563eb;
        }

        /* ================= HERO CARD ================= */

        .hero-visual {
            width: 440px;
            min-width: 440px;
            height: 370px;
            position: relative;
        }

        .main-card {
            width: 100%;
            height: 100%;
            background: white;
            border-radius: 25px;
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.10);
            padding: 25px;
            position: relative;
        }

        .card-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .card-title {
            font-size: 16px;
            font-weight: bold;
        }

        .status {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #16a34a;
            font-size: 12px;
            font-weight: bold;
        }

        .status-dot {
            width: 8px;
            height: 8px;
            background: #22c55e;
            border-radius: 50%;
        }

        .question-box {
            background: #f8fafc;
            border-radius: 14px;
            padding: 20px;
            margin-bottom: 15px;
        }

        .question-label {
            color: #2563eb;
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 9px;
        }

        .question-text {
            font-size: 15px;
            line-height: 1.5;
            font-weight: bold;
        }

        .answer {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 14px;
            border: 1px solid #e5eaf0;
            border-radius: 9px;
            margin-top: 9px;
            font-size: 13px;
            color: #475569;
        }

        .answer.active {
            border-color: #2563eb;
            background: #eff6ff;
            color: #2563eb;
        }

        .answer-circle {
            width: 18px;
            height: 18px;
            border: 1px solid #cbd5e1;
            border-radius: 50%;
        }

        .answer.active .answer-circle {
            border: 5px solid #2563eb;
        }

        .floating-card {
            position: absolute;
            right: -25px;
            bottom: -20px;
            width: 180px;
            background: white;
            padding: 18px;
            border-radius: 15px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
        }

        .floating-title {
            font-size: 11px;
            color: #64748b;
            margin-bottom: 8px;
        }

        .timer {
            font-size: 25px;
            font-weight: bold;
            color: #172033;
        }

        .timer-label {
            font-size: 11px;
            color: #94a3b8;
            margin-top: 3px;
        }

        /* ================= FEATURES ================= */

        .features {
            background: white;
            padding: 80px 8%;
        }

        .section-header {
            text-align: center;
            margin-bottom: 45px;
        }

        .section-header h2 {
            font-size: 32px;
            margin-bottom: 12px;
        }

        .section-header p {
            color: #64748b;
            font-size: 15px;
        }

        .feature-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .feature-card {
            padding: 30px;
            border: 1px solid #e7ebf0;
            border-radius: 16px;
            background: #ffffff;
            transition: 0.2s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.07);
        }

        .feature-icon {
            width: 52px;
            height: 52px;
            border-radius: 12px;
            background: #eff6ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .feature-card h3 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .feature-card p {
            color: #64748b;
            line-height: 1.7;
            font-size: 14px;
        }

        /* ================= CTA ================= */

        .cta {
            padding: 70px 8%;
            background: #2563eb;
            text-align: center;
            color: white;
        }

        .cta h2 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .cta p {
            color: #dbeafe;
            margin-bottom: 25px;
        }

        .cta-btn {
            display: inline-block;
            background: white;
            color: #2563eb;
            text-decoration: none;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: bold;
        }

        .cta-btn:hover {
            background: #eff6ff;
        }

        /* ================= FOOTER ================= */

        footer {
            background: #172033;
            color: #94a3b8;
            text-align: center;
            padding: 25px;
            font-size: 13px;
        }

        /* ================= RESPONSIVE ================= */

        @media (max-width: 950px) {

            .hero {
                flex-direction: column;
                text-align: center;
                padding-top: 55px;
            }

            .hero-content {
                max-width: 700px;
            }

            .hero-description {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-buttons {
                justify-content: center;
            }

            .hero-visual {
                width: 440px;
                max-width: 100%;
                min-width: auto;
            }

            .feature-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 550px) {

            .navbar {
                padding: 0 5%;
            }

            .nav-link {
                display: none;
            }

            .hero {
                padding: 50px 5%;
            }

            .hero h1 {
                font-size: 38px;
            }

            .hero-visual {
                height: 340px;
            }

            .floating-card {
                right: 5px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .primary-btn,
            .secondary-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            <div class="logo-icon">E</div>
            Exscurty Test
        </div>

        <div class="nav-right">
            <a href="#features" class="nav-link">
                Fitur
            </a>

            <a href="#about" class="nav-link">
                Tentang
            </a>

            <a href="{{ url('/login') }}" class="login-btn">
                Login
            </a>
        </div>

    </nav>


    <!-- HERO -->
    <section class="hero">

        <div class="hero-content">

            <div class="badge">
                PLATFORM UJIAN ONLINE
            </div>

            <h1>
                Ujian lebih mudah dengan
                <span>Exscurty Test.</span>
            </h1>

            <p class="hero-description">
                Exscurty Test adalah sistem ujian online yang
                dirancang untuk membantu peserta mengerjakan
                ujian dengan lebih teratur, mudah, dan aman.
            </p>

            <div class="hero-buttons">

                <a href="{{ url('/login') }}" class="primary-btn">
                    Mulai Ujian
                </a>

                <a href="#features" class="secondary-btn">
                    Lihat Fitur
                </a>

            </div>

        </div>


        <!-- MOCKUP -->
        <div class="hero-visual">

            <div class="main-card">

                <div class="card-top">

                    <div class="card-title">
                        Participant Exam
                    </div>

                    <div class="status">
                        <div class="status-dot"></div>
                        Monitoring Active
                    </div>

                </div>


                <div class="question-box">

                    <div class="question-label">
                        QUESTION 01
                    </div>

                    <div class="question-text">
                        Apa fungsi utama dari sistem operasi?
                    </div>

                </div>


                <div class="answer active">
                    <div class="answer-circle"></div>
                    Mengelola sumber daya komputer
                </div>

                <div class="answer">
                    <div class="answer-circle"></div>
                    Membuat desain grafis
                </div>

                <div class="answer">
                    <div class="answer-circle"></div>
                    Mengedit video
                </div>

                <div class="answer">
                    <div class="answer-circle"></div>
                    Membuat dokumen
                </div>

            </div>


            <div class="floating-card">

                <div class="floating-title">
                    Sisa Waktu
                </div>

                <div class="timer">
                    00:59:42
                </div>

                <div class="timer-label">
                    Exam session active
                </div>

            </div>

        </div>

    </section>


    <!-- FEATURES -->
    <section class="features" id="features">

        <div class="section-header">

            <h2>
                Fitur Utama
            </h2>

            <p>
                Semua kebutuhan dasar untuk proses ujian online.
            </p>

        </div>


        <div class="feature-container">

            <div class="feature-card">

                <div class="feature-icon">
                    📝
                </div>

                <h3>
                    Online Examination
                </h3>

                <p>
                    Peserta dapat mengerjakan soal ujian
                    secara langsung melalui halaman ujian
                    yang sederhana dan mudah digunakan.
                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    ⏱
                </div>

                <h3>
                    Countdown Timer
                </h3>

                <p>
                    Waktu pengerjaan ditampilkan secara
                    langsung sehingga peserta dapat
                    mengetahui sisa waktu ujian.
                </p>

            </div>


            <div class="feature-card">

                <div class="feature-icon">
                    📷
                </div>

                <h3>
                    Webcam Monitoring
                </h3>

                <p>
                    Webcam membantu proses pengawasan
                    peserta selama mengerjakan ujian
                    secara online.
                </p>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="cta" id="about">

        <h2>
            Siap mengerjakan ujian?
        </h2>

        <p>
            Login ke akun peserta dan mulai ujian kamu.
        </p>

        <a href="{{ url('/login') }}" class="cta-btn">
            Login Sekarang
        </a>

    </section>


    <!-- FOOTER -->
    <footer>

        © {{ date('Y') }} Exscurty Test. All Rights Reserved.

    </footer>

</body>
</html>
```
