<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ConcertEase | Online Concert Booking</title>
    <link rel="shortcut icon" type="image/png" href="/assets/logo.ico" /> <!-- Student note: Favicon path - adjust if needed -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Student note: Basic custom CSS for components - keeps original yellow theme, no fancy stuff */
        body {
            background: linear-gradient(to bottom, #312e81, #7c3aed, #ec4899); /* Original gradient */
            color: white;
            font-family: sans-serif;
            min-height: 100vh;
        }

        .overlay {
            background: rgba(0,0,0,0.3); /* Subtle overlay like original header/footer */
        }

        .header-title,
        h1,
        h2,
        h3,
        h4,
        .heading {
            font-weight: bold; /* Simple bold for headings, like original */
        }

        /* Reusable Button Styles - from original */
        .btn-main {
            padding: 10px 20px;
            border: 2px solid #facc15; /* Yellow border */
            color: #facc15;
            background: transparent;
            border-radius: 50px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s;
        }
        .btn-main:hover {
            background: #facc15;
            color: black;
        }
        .cta-button {
            background: #facc15 !important;
            color: black !important;
            padding: 15px 30px !important;
            font-size: 18px;
        }

        /* Card Styles - simple like original */
        .card-hover {
            background: rgba(255,255,255,0.1);
            border: 1px solid #facc15;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            transition: all 0.2s;
            margin-bottom: 20px; /* Extra space - student quirk */
        }
        .card-hover:hover {
            transform: scale(1.02); /* Basic hover, not too much */
        }
        .card-hover img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        /* Student note: Extra margin in sections for spacing */
        section { margin-bottom: 20px; }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    <div class="flex flex-col min-h-screen overlay">
        <?= view('components/header') ?> <!-- Include header like in structure example -->

        <main class="flex-grow">
            <!-- Hero Section - Original design, tall with image -->
            <section class="relative flex flex-col items-center justify-center text-center h-[90vh] px-6" 
                     style="background-image: url('https://wallpapers.com/images/featured/concert-background-dd0syeox7rmi78l0.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                <div class="absolute inset-0 bg-black bg-opacity-50"></div> <!-- Original overlay -->

                <div class="relative z-10 flex flex-col items-center text-center">
                    <h2 class="text-5xl md:text-6xl font-extrabold mb-4 leading-tight drop-shadow-lg">
                        Experience the Music Like Never Before <!-- Original text -->
                    </h2>
                    <p class="max-w-2xl mx-auto text-lg text-gray-200 mb-8 text-center">
                        Book your favorite concerts, discover new artists, and feel the rhythm — all from one platform. <!-- Original subtitle -->
                    </p>
                    <?= view('components/button', [
                        'label' => 'Get Tickets',
                        'href' => 'booking.html',
                        'class' => 'cta-button' // Bigger CTA style
                    ]) ?> <!-- Reusable CTA button -->
                </div>
            </section>

            <!-- Upcoming Concerts - Like featured products, but original grid -->
            <section id="events" class="py-20 text-center">
                <div class="mx-auto px-4 max-w-6xl">
                    <h3 class="mb-12 font-extrabold text-4xl header-title">
                        Upcoming Concerts <!-- Original title -->
                    </h3>

                    <div class="gap-8 grid sm:grid-cols-2 lg:grid-cols-3"> <!-- Original responsive grid -->
                        <?= view('components/cards/upcoming_card', [
                            "title" => "Jason Derulo",
                            "excerpt" => "November 22, 2025 — SM Mall of Asia",
                            "image" => "https://images1.smtickets.com/images/portrait_27052025194947.jpg",
                            "href" => "booking.html"
                        ]) ?>

                        <?= view('components/cards/upcoming_card', [
                            "title" => "BlackPink World Tour",
                            "excerpt" => "November 22, 2025 — SM Mall of Asia",
                            "image" => "https://images1.smtickets.com/images/portrait_23072025231047.jpg",
                            "href" => "booking.html"
                        ]) ?>

                        <?= view('components/cards/upcoming_card', [
                            "title" => "Doja Cat",
                            "excerpt" => "December 7, 2025 — SM Mall of Asia",
                            "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTc6jcTKGJKRKcXmB2NZZY9Eju0l0LdptdCpw&s",
                            "href" => "booking.html"
                        ]) ?>
                    </div>
                </div>
            </section>

            <!-- How It Works - Structure only, concert-themed content, original styling -->
            <section id="howitworks" class="py-20 bg-black bg-opacity-30 text-center"> <!-- Like original contact bg -->
                <div class="mx-auto px-4 max-w-6xl">
                    <h3 class="mb-12 font-bold text-4xl header-title">
                        How Booking Works <!-- Simple title -->
                    </h3>

                    <div class="gap-8 grid md:grid-cols-3">
                        <?= view('components/cards/how_card', [
                            "number" => "1",
                            "title" => "Browse Events",
                            "description" => "Explore upcoming concerts and pick your favorites."
                        ]) ?>

                        <?= view('components/cards/how_card', [
                            "number" => "2",
                            "title" => "Secure Tickets",
                            "description" => "Pay safely with card, GCash, or PayPal."
                        ]) ?>

                        <?= view('components/cards/how_card', [
                            "number" => "3",
                            "title" => "Enjoy the Show",
                            "description" => "Get instant confirmation—rock out live!"
                        ]) ?>
                    </div>
                </div>
            </section>

            <!-- About - Structure only, original simple text -->
            <section id="about" class="py-20 bg-black bg-opacity-30 text-center"> <!-- Matching original opacity -->
                <div class="mx-auto px-4 max-w-5xl">
                    <h3 class="mb-8 font-bold text-4xl header-title">About ConcertEase</h3>
                    <p class="mx-auto mb-6 max-w-3xl text-gray-300 text-lg leading-relaxed">
                        ConcertEase is your go-to platform for booking live music experiences. From pop icons to indie bands, we make it easy to discover, book, and attend concerts with secure payments and instant access. <!-- Student note: Kept short, like original contact p -->
                    </p>
                </div>
            </section>

            <!-- CTA - Structure only, simple like hero CTA -->
            <section id="cta-section" class="py-32 bg-black bg-opacity-30 text-center w-full"> <!-- Taller like hero py -->
                <div class="mx-auto max-w-4xl">
                    <?= view('components/cta', [
                        'heading' => 'Ready to Rock?',
                        'sub' => 'Browse concerts, grab tickets, and create unforgettable memories.',
                        'primary' => ['label' => 'Book Now', 'href' => 'booking.html'],
                    ]) ?> <!-- Reusable CTA -->
                </div>
            </section>

            <!-- Contact - Original design -->
            <section id="contact" class="py-20 bg-black bg-opacity-30 text-center">
                <div class="mx-auto px-4 max-w-4xl">
                    <h3 class="mb-8 font-bold text-3xl">Contact Us</h3> <!-- Original title -->
                    <p class="max-w-xl mx-auto text-gray-300 mb-8">
                        Have questions or need help with your booking? Reach out to our team anytime at 
                        <span class="text-yellow-300">support@concertease.com</span>. <!-- Original text -->
                    </p>
                    <?= view('components/button', [
                        'label' => 'Email Us',
                        'href' => 'mailto:support@concertease.com',
                        'class' => 'btn-main' // Standard button
                    ]) ?>
                </div>
            </section>

            <?= view('components/footer') ?> <!-- Include footer like in structure -->
        </main>
    </div>
</body>

</html>
