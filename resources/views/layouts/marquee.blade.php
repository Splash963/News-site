<head>
    <style>
        .news-ticker {
            overflow: hidden;
            white-space: nowrap;
            background-color: #181C14;
            padding: 10px 0;
            position: relative;
        }

        .ticker-content {
            display: inline-block;
            padding-left: 100%;
            animation: scroll-left 80s linear infinite;
        }

        .ticker-content:hover {
            animation-play-state: paused;
        }

        .ticker-item {
            display: inline-block;
            margin-right: 50px;
            color: white;
            text-decoration: none;
        }

        .ticker-item:hover {
            color: yellow;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12">
            <div class="news-ticker">
                <div class="ticker-content">
                    @foreach($recent_news as $news)
                    <a href="{{ route('news.show', $news->id) }}" class="ticker-item">
                        <svg xmlns="http://www.w3.org/2000/svg" style="color: red;" width="20" height="20" fill="currentColor" class="bi bi-skip-backward" viewBox="0 0 16 16">
                            <path d="M.5 3.5A.5.5 0 0 1 1 4v3.248l6.267-3.636c.52-.302 1.233.043 1.233.696v2.94l6.267-3.636c.52-.302 1.233.043 1.233.696v7.384c0 .653-.713.998-1.233.696L8.5 8.752v2.94c0 .653-.713.998-1.233.696L1 8.752V12a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5m7 1.133L1.696 8 7.5 11.367zm7.5 0L9.196 8 15 11.367z" />
                        </svg>
                        {{ $news->title }}
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</body>