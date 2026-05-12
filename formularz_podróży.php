<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularz podróży</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            margin: 0;
            padding: 20px;

            /* Animacja pojawiania strony */
            animation: fadeIn 1.2s ease;
        }

        /* Animacja całej strony */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);

            /* Animacja formularza */
            animation: slideUp 1s ease;
        }

        /* Animacja wysuwania formularza */
        @keyframes slideUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        h1 {
            text-align: center;
            color: #333;

            /* Animacja tytułu */
            animation: glow 2s infinite alternate;
        }

        /* Delikatne świecenie tytułu */
        @keyframes glow {
            from {
                text-shadow: 0 0 5px #74ebd5;
            }

            to {
                text-shadow: 0 0 20px #74ebd5;
            }
        }

        fieldset {
            margin-bottom: 20px;
            padding: 15px;
            border-radius: 10px;
            border: 2px solid #e0e0e0;
            transition: 0.3s;
        }

        fieldset:hover {
            border-color: #74ebd5;
            box-shadow: 0 0 10px rgba(116,235,213,0.4);
            transform: scale(1.01);
        }

        legend {
            font-weight: bold;
            padding: 0 10px;
            color: #555;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 12px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            padding: 10px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 15px;
            transition: 0.3s;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #74ebd5;
            outline: none;
            box-shadow: 0 0 8px rgba(116,235,213,0.8);
            transform: scale(1.02);
        }

        .row {
            display: flex;
            gap: 10px;
        }

        .row .form-group {
            flex: 1;
        }

        .buttons {
            text-align: center;
        }

        button {
            padding: 12px 25px;
            margin: 5px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .submit-btn {
            background: #28a745;
            color: white;
        }

        .submit-btn:hover {
            background: #218838;
            transform: scale(1.08);
        }

        .reset-btn {
            background: #dc3545;
            color: white;
        }

        .reset-btn:hover {
            background: #c82333;
            transform: scale(1.08);
        }

        @media (max-width: 768px) {

            .row {
                flex-direction: column;
            }

        }

    </style>
</head>

<body>

<div class="container">

    <h1>🌍 Formularz podróży ✈️</h1>

    <form>

        <fieldset>

            <legend>👤 Dane osobowe</legend>

            <div class="row">

                <div class="form-group">
                    <label for="imie">Imię 😊</label>
                    <input type="text" id="imie" name="imie" required>
                </div>

                <div class="form-group">
                    <label for="nazwisko">Nazwisko 🧾</label>
                    <input type="text" id="nazwisko" name="nazwisko" required>
                </div>

            </div>

            <div class="row">

                <div class="form-group">
                    <label for="urodzenie">Data urodzenia 🎂</label>
                    <input type="date" id="urodzenie" name="urodzenie" required>
                </div>

                <div class="form-group">
                    <label for="obywatelstwo">Obywatelstwo 🌎</label>
                    <input type="text" id="obywatelstwo" name="obywatelstwo" required>
                </div>

            </div>

            <div class="form-group">
                <label for="email">Email 📧</label>
                <input type="email" id="email" name="email" required>
            </div>

        </fieldset>

        <fieldset>

            <legend>✈️ Informacje o podróży</legend>

            <div class="form-group">
                <label for="kraj">Kraj docelowy 🗺️</label>

                <select id="kraj" name="kraj" required>
                    <option value="">-- Wybierz kraj --</option>
                    <option>Polska</option>
                    <option>Hiszpania</option>
                    <option>Włochy</option>
                    <option>Grecja</option>
                    <option>Francja</option>
                    <option>Niemcy</option>
                    <option>Egipt</option>
                    <option>Turcja</option>
                    <option>Japonia</option>
                    <option>USA</option>
                </select>
            </div>

            <div class="row">

                <div class="form-group">
                    <label for="wylot">Data wylotu 📅</label>
                    <input type="date" id="wylot" name="wylot" required>
                </div>

                <div class="form-group">
                    <label for="powrot">Data przylotu 📅</label>
                    <input type="date" id="powrot" name="powrot" required>
                </div>

            </div>

            <div class="form-group">
                <label for="cel">Cel podróży 🎯</label>

                <select id="cel" name="cel" required>
                    <option value="">-- Wybierz --</option>
                    <option>Wypoczynek</option>
                    <option>Zwiedzanie</option>
                    <option>Biznes</option>
                </select>
            </div>

        </fieldset>

        <fieldset>

            <legend>🏨 Zakwaterowanie</legend>

            <div class="form-group">
                <label for="rodzaj">Rodzaj zakwaterowania 🏠</label>
                <input type="text" id="rodzaj" name="rodzaj" required>
            </div>

            <div class="form-group">
                <label for="pokoj">Pokój 🛏️</label>

                <select id="pokoj" name="pokoj" required>
                    <option value="">-- Wybierz --</option>
                    <option>Jednoosobowy</option>
                    <option>Dwuosobowy</option>
                    <option>Rodzinny</option>
                </select>
            </div>

        </fieldset>

        <fieldset>

            <legend>🚗 Transport</legend>

            <div class="form-group">
                <label for="transport">Środek transportu 🚀</label>

                <select id="transport" name="transport" required>
                    <option value="">-- Wybierz --</option>
                    <option>Samolot</option>
                    <option>Autokar</option>
                    <option>Własny</option>
                </select>
            </div>

        </fieldset>

        <fieldset>

            <legend>📝 Dodatkowe informacje</legend>

            <div class="form-group">
                <label for="uwagi">Uwagi 💬</label>
                <textarea id="uwagi" name="uwagi" rows="4"></textarea>
            </div>

        </fieldset>

        <div class="buttons">

            <button type="submit" class="submit-btn">
                🚀 Wyślij
            </button>

            <button type="reset" class="reset-btn">
                ❌ Wyczyść
            </button>

        </div>

    </form>

</div>

</body>
</html>
