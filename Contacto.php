<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto | Viaja Con Nosotros</title>
  <style>
    * {margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', Arial, sans-serif;}

    body {
      background: #f1f0ddff;
      color: #333;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    header {
      background: linear-gradient(135deg, #00b4db, #0083b0);
      color: white;
      text-align: center;
      padding: 30px 10px;
    }

    header h1 {
      font-size: 2em;
      margin-bottom: 10px;
    }

    nav {
      background: #004d61;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 25px;
      padding: 15px 0;
    }

    nav a {
      color: white;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    nav a:hover { color: #f1f0ddff; }

    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
      background: url('https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1') no-repeat center/cover;
    }

    form {
      background: rgba(255,255,255,0.9);
      padding: 30px;
      border-radius: 10px;
      width: 100%;
      max-width: 480px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    }

    form h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #004d61;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
      display: block;
      color: #004d61;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #4d4343ff;
      border-radius: 5px;
      font-size: 1em;
    }

    textarea {
      resize: none;
      height: 100px;
    }

    button {
      width: 100%;
      background: #00b4db;
      border: none;
      color: white;
      padding: 12px;
      border-radius: 8px;
      font-weight: bold;
