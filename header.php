<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Eras Tour | Taylor Swift</title>


    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap"
        rel="stylesheet">


    <style>


        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            color: #222;
            background-color: #f8f3f5;
            line-height: 1.6;
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            font-family: 'Cormorant Garamond', serif;
        }

        .navbar {
            background-color: #ffffff !important;
            border-bottom: 2px solid #eadde3;
        }

        .navbar-brand {
            font-family: 'Cormorant Garamond', serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: #8b5c72 !important;
        }

        .navbar-brand:hover {
            color: #6f4558 !important;
        }

        .nav-link {
            color: #444 !important;
            font-size: 0.95rem;
            margin: 0 5px;
            transition: 0.3s;
        }

        .nav-link:hover {
            color: #8b5c72 !important;
        }

        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 3rem;
            color: #70465a;
            margin-bottom: 10px;
        }

        .section-title p {
            max-width: 700px;
            margin: auto;
            color: #666;
        }

        .hero {
            min-height: 650px;
            display: flex;
            align-items: center;

            background: linear-gradient(
                135deg,
                #f9edf2,
                #eee2e8
            );
        }

        .hero-text h1 {
            font-size: 4.5rem;
            line-height: 1;
            color: #70465a;
            margin-bottom: 20px;
        }

        .hero-text h2 {
            font-size: 2rem;
            color: #8b5c72;
            margin-bottom: 20px;
        }

        .hero-text p {
            color: #555;
            max-width: 600px;
        }

        .hero-image {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 20px;
        }

        .custom-btn {
            background-color: #8b5c72;
            border: 2px solid #8b5c72;
            color: white;
            padding: 11px 25px;
            border-radius: 30px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .custom-btn:hover {
            background-color: #70465a;
            border-color: #70465a;
            color: white;
        }

        .history {
            background-color: #ffffff;
        }

        .history-image {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 18px;
        }

        .history-text {
            padding: 10px;
        }

        .history-text h3 {
            font-size: 2.5rem;
            color: #70465a;
            margin-bottom: 20px;
        }

        .story {
            background-color: #f8f3f5;
        }

        .story-card {
            background-color: white;
            height: 100%;
            padding: 30px;
            border-radius: 18px;
            border: 1px solid #eadde3;
            transition: 0.3s;
        }

        .story-card:hover {
            transform: translateY(-5px);
        }

        .story-icon {
            font-size: 2.2rem;
            color: #8b5c72;
            margin-bottom: 15px;
        }

        .story-card h3 {
            font-size: 1.8rem;
            color: #70465a;
        }

        .timeline-section {
            background-color: white;
        }

        .timeline {
            border-left: 3px solid #8b5c72;
            padding-left: 30px;
        }

        .timeline-item {
            margin-bottom: 28px;
            position: relative;
        }

        .timeline-item::before {
            content: "";
            width: 13px;
            height: 13px;
            background-color: #8b5c72;
            border-radius: 50%;
            position: absolute;
            left: -38px;
            top: 7px;
        }

        .timeline-item h3 {
            margin-bottom: 3px;
            color: #70465a;
            font-size: 1.7rem;
        }

        .timeline-item p {
            margin: 0;
            color: #666;
        }

        .featured {
            background-color: #f8f3f5;
        }

        .era-card {
            width: 100%;
            height: 100%;
            background-color: white;
            border: 1px solid #eadde3;
            border-radius: 18px;
            overflow: hidden;
            transition: 0.3s;
        }

        .era-card:hover {
            transform: translateY(-6px);
        }

        .era-card img {
            width: 100%;
            height: auto;
            display: block;
        }

        .era-card-body {
            padding: 25px;
        }

        .era-card-body h3 {
            color: #70465a;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .era-card-body p {
            color: #666;
            margin-bottom: 0;
        }

        .words {
            background-color: white;
        }

        .quote-box {
            width: 100%;
            max-width: 850px;
            margin: auto;
            padding: 45px;
            background-color: #f8f3f5;
            border-left: 5px solid #8b5c72;
            border-radius: 15px;
        }

        .quote-box blockquote {
            font-family: 'Cormorant Garamond', serif;
            font-size: 2rem;
            font-style: italic;
            color: #70465a;
            margin-bottom: 20px;
        }

        .quote-source {
            color: #666;
            font-size: 0.9rem;
        }

        .legacy {
            background-color: #f8f3f5;
        }

        .legacy-card {
            background-color: white;
            padding: 30px;
            border-radius: 18px;
            border: 1px solid #eadde3;
            height: 100%;
        }

        .legacy-card h3 {
            color: #70465a;
            font-size: 1.9rem;
        }

        .legacy-card i {
            font-size: 2rem;
            color: #8b5c72;
            margin-bottom: 15px;
        }

        .sources {
            background-color: white;
        }

        .source-box {
            height: 100%;
            background-color: #f8f3f5;
            border: 1px solid #eadde3;
            padding: 25px;
            border-radius: 15px;
        }

        .source-box h3 {
            color: #70465a;
        }

        .source-box a {
            color: #8b5c72;
            text-decoration: none;
        }

        .source-box a:hover {
            text-decoration: underline;
        }

        .cta {
            background-color: #70465a;
            color: white;
            text-align: center;
        }

        .cta h2 {
            font-size: 3rem;
            margin-bottom: 15px;
        }

        .cta p {
            max-width: 700px;
            margin: 0 auto 25px;
        }

        .cta .custom-btn {
            background-color: white;
            color: #70465a;
            border-color: white;
        }

        .cta .custom-btn:hover {
            background-color: #f8f3f5;
            color: #70465a;
        }

        footer {
            background-color: #ffffff;
            border-top: 2px solid #eadde3;
            text-align: center;
            padding: 25px 15px;
            color: #666;
        }

        footer p {
            margin: 0;
        }

        a:focus,
        button:focus {
            outline: 3px solid #8b5c72;
            outline-offset: 3px;
        }

        @media (max-width: 991.98px) {

            .hero {
                min-height: auto;
                padding: 70px 0;
            }

            .hero-text h1 {
                font-size: 3.8rem;
            }

            section {
                padding: 65px 0;
            }

        }


        @media (max-width: 767.98px) {

            section {
                padding: 55px 0;
            }

            .section-title {
                margin-bottom: 35px;
            }

            .section-title h2 {
                font-size: 2.5rem;
            }

            .hero {
                text-align: center;
            }

            .hero-text h1 {
                font-size: 3.2rem;
            }

            .hero-text h2 {
                font-size: 1.7rem;
            }

            .hero-text p {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-image {
                margin-top: 30px;
            }

            .history-text {
                padding-top: 30px;
            }

            .history-text h3 {
                font-size: 2.2rem;
            }

            .timeline {
                padding-left: 25px;
            }

            .quote-box {
                padding: 30px 25px;
            }

            .quote-box blockquote {
                font-size: 1.7rem;
            }

            .cta h2 {
                font-size: 2.5rem;
            }

        }

        @media (max-width: 575.98px) {

            .navbar-brand {
                font-size: 1.5rem;
            }

            .hero-text h1 {
                font-size: 2.7rem;
            }

            .hero-text h2 {
                font-size: 1.45rem;
            }

            .section-title h2 {
                font-size: 2.2rem;
            }

            .era-card-body {
                padding: 20px;
            }

            .era-card-body h3 {
                font-size: 1.7rem;
            }

            .story-card,
            .legacy-card {
                padding: 25px;
            }

            .quote-box {
                padding: 25px 20px;
            }

            .quote-box blockquote {
                font-size: 1.5rem;
            }

            .cta h2 {
                font-size: 2.2rem;
            }

            .custom-btn {
                width: 100%;
                text-align: center;
            }

        }

    </style>

</head>


<body>


    