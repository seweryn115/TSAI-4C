<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Formularz podróży</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #acb6e5);
            margin: 0;
            padding: 20px;
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: slideUp 1s ease;
        }

        @keyframes slideUp {
            from { transform: translateY(40px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        h1 {
            text-align: center;
            color: #333;
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
        }

        legend {
            font-weight: bold;
            padding: 0 10px;
            color: #555;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 10px;
        }

        label {
            margin-bottom: 5px;
        }

        input, select, textarea {
            padding: 8px;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: 0.3s;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #74ebd5;
            outline: none;
            box-shadow: 0 0 5px rgba(116,235,213,0.7);
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
        }

        .submit-btn {
            background: #28a745;
            color: white;
        }

        .submit-btn:hover {
            background: #218838;
            transform: scale(1.05);
        }

        .reset-btn {
            background: #dc3545;
            color: white;
        }

        .reset-btn:hover {
            background: #c82333;
            transform: scale(1.05);
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
                    <label>Imię 😊</label>
                    <input type="text" required>
                </div>

                <div class="form-group">
                    <label>Nazwisko 🧾</label>
                    <input type="text" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Data urodzenia 🎂</label>
                    <input type="date">
                </div>

                <div class="form-group">
                    <label>Obywatelstwo 🌎</label>
                    <input type="text">
                </div>
            </div>

            <div class="form-group">
                <label>Email 📧</label>
                <input type="email">
            </div>
        </fieldset>

        <fieldset>
            <legend>✈️ Informacje o podróży</legend>

            <div class="form-group">
                <label>Kraj docelowy 🗺️</label>
                <input type="text">
            </div>

            <div class="row">
                <div class="form-group">
                    <label>Data startu 📅</label>
                    <input type="date">
                </div>

                <div class="form-group">
                    <label>Data powrotu 📅</label>
                    <input type="date">
                </div>
            </div>

            <div class="form-group">
                <label>Cel podróży 🎯</label>
                <select>
                    <option>Wypoczynek</option>
                    <option>Zwiedzanie</option>
                    <option>Biznes</option>
                </select>
            </div>
        </fieldset>

        <fieldset>
            <legend>🏨 Zakwaterowanie</legend>

            <div class="form-group">
                <label>Rodzaj 🏠</label>
                <input type="text">
            </div>

            <div class="form-group">
                <label>Pokój 🛏️</label>
                <select>
                    <option>Jednoosobowy</option>
                    <option>Dwuosobowy</option>
                    <option>Rodzinny</option>
                </select>
            </div>
        </fieldset>

        <fieldset>
            <legend>🚗 Transport</legend>

            <div class="form-group">
                <label>Środek transportu 🚀</label>
                <select>
                    <option>Samolot</option>
                    <option>Autokar</option>
                    <option>Własny</option>
                </select>
            </div>
        </fieldset>

        <fieldset>
            <legend>📝 Dodatkowe informacje</legend>

            <div class="form-group">
                <label>Uwagi 💬</label>
                <textarea rows="4"></textarea>
            </div>
        </fieldset>

        <div class="buttons">
            <button type="submit" class="submit-btn">🚀 Wyślij</button>
            <button type="reset" class="reset-btn">❌ Wyczyść</button>
        </div>

    </form>
</div>

</body>
</html>