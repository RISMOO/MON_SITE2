
    Amplitude.init({
        "songs": [
            {
                "name": "Le bal masqué",
                "artist": "Opium du peuple",
                "album": "La révolte des opiumettes",
                "url": "./images/son.mp3"
            },
            {
                "name": "Poupée de cire, poupée de son",
                "artist": "Opium du peuple",
                "album": "La révolte des opiumettes",
                "url": "./images/son2.mp3"
            },
            {
                "name": "Poupée de cire, poupée de son",
                "artist": "Opium du peuple",
                "album": "La révolte des opiumettes",
                "url": "./images/chllout.mp3"
            },
            {
                "name": "Poupée de cire, poupée de son",
                "artist": "Opium du peuple",
                "album": "La révolte des opiumettes",
                "url": "./images/ambiant.mp3"
            },
            {
                "name": "Poupée de cire, poupée de son",
                "artist": "Opium du peuple",
                "album": "La révolte des opiumettes",
                "url": "./images/piano.mp3"
            },
            {
                "name": "Poupée de cire, poupée de son",
                "artist": "Opium du peuple",
                "album": "La révolte des opiumettes",
                "url": "./images/groove.mp3"
            }
        ],
        callbacks: {
            //pour démarrer la lecture à chaque fois que l'on passe au morceau suivant ou préc
            song_change: function () {
                Amplitude.play();
            }
        }
    });
