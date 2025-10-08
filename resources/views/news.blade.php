<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <head>
        @include('layouts.navbar')
    </head>

    <body>
        <div style="width: 90%; align-items: center; margin: auto;">
            <div class="text-center">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <img src="https://www.news.lk/images/2025/09/22/WhatsApp%20Image%202025-09-22%20at%2012.31.31_large.jpeg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title fs-2">President Anura Kumara Disanayaka to undertake an Official Visit to Japan from 27-30 September 2025</h5>
                                <p class="card-text fs-4 align-items-center">At the invitation of the Government of Japan, President Anura Kumara Disanayaka will undertake an Official Visit to Japan from 27-30 September 2025.

                                    During the visit, the President will have an audience with His Majesty the Emperor of Japan and he will hold a summit meeting with the Japanese Prime Minister on a wide range of issues of mutual interest.

                                    The President will address a Business Forum attended by high-level representatives of key Japanese businesses and investors in Tokyo focused on emerging economic opportunities in Sri Lanka.

                                    President Disanayaka will also attend “EXPO 2025 Osaka” as a Guest of the Government of Japan on the occasion of Sri Lanka Day at the Expo 2025. The event aims to highlight Sri Lanka’s cultural heritage and economic potential before an international audience.

                                    The President will also address members of the Sri Lankan expatriate community residing in Japan.

                                    President Disanayaka will be accompanied by the Minister of Foreign Affairs, Foreign Employment and Tourism Vijitha Herath and senior Government officials.

                                    The visit to Japan will further consolidate and deepen the longstanding bonds of friendship and cooperation between the two countries.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        @include('layouts.recent-news')
                    </div>
                </div>
            </div>
        </div>
    </body>

    <footer>
        @include('layouts.footer')
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>