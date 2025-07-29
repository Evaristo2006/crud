
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Dom-cadastro</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      background-color: #0f172a;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      perspective: 1000px;
    }

    .title {
      display: flex;
      gap: 0.5em;
      flex-wrap: wrap;
      justify-content: center;
      font-family: 'Segoe UI', sans-serif;
      font-size: clamp(2rem, 6vw, 4rem);
      text-align: center;
      line-height: 1.2;
      margin-bottom: 30px;
    }

    .letter {
      color: #38bdf8;
      text-shadow: 0 0 5px #38bdf8, 0 0 10px #0ea5e9, 0 0 20px #38bdf8;
      opacity: 0;
      transform: rotateX(90deg);
      animation:
        appear 0.8s forwards,
        float 3s ease-in-out infinite,
        glow 2s ease-in-out infinite alternate;
    }

    /* Animação em cascata */
    .letter:nth-child(1)  { animation-delay: 0.1s, 1s, 1s; }
    .letter:nth-child(2)  { animation-delay: 0.2s, 1.1s, 1.1s; }
    .letter:nth-child(3)  { animation-delay: 0.3s, 1.2s, 1.2s; }
    .letter:nth-child(4)  { animation-delay: 0.4s, 1.3s, 1.3s; }
    .letter:nth-child(5)  { animation-delay: 0.5s, 1.4s, 1.4s; }
    .letter:nth-child(6)  { animation-delay: 0.6s, 1.5s, 1.5s; }
    .letter:nth-child(7)  { animation-delay: 0.7s, 1.6s, 1.6s; }
    .letter:nth-child(8)  { animation-delay: 0.8s, 1.7s, 1.7s; }
    .letter:nth-child(9)  { animation-delay: 0.9s, 1.8s, 1.8s; }
    .letter:nth-child(10)  { animation-delay: 1s, 1.9s, 1.9s; }
    .letter:nth-child(11)  { animation-delay: 1.1s, 2s, 2s; }
    .letter:nth-child(12)  { animation-delay: 1.2s, 2.1s, 2.1s; }
    .letter:nth-child(13)  { animation-delay: 1.3s, 2.2s, 2.2s; }
    .letter:nth-child(14)  { animation-delay: 1.4s, 2.3s, 2.3s; }
    .letter:nth-child(15)  { animation-delay: 1.5s, 2.4s, 2.4s; }
    .letter:nth-child(16)  { animation-delay: 1.6s, 2.5s, 2.5s; }
    .letter:nth-child(17)  { animation-delay: 1.7s, 2.6s, 2.6s; }

    @keyframes appear {
      to {
        transform: rotateX(0deg);
        opacity: 1;
      }
    }

    @keyframes float {
      0%   { transform: translateY(0px) rotateX(0deg); }
      50%  { transform: translateY(-10px) rotateX(5deg); }
      100% { transform: translateY(0px) rotateX(0deg); }
    }

    @keyframes glow {
      0% {
        text-shadow: 0 0 5px #38bdf8, 0 0 10px #0ea5e9, 0 0 20px #38bdf8;
      }
      100% {
        text-shadow: 0 0 10px #7dd3fc, 0 0 20px #0ea5e9, 0 0 40px #38bdf8;
      }
    }

    /* BOTÃO LOGIN */
    .login-btn {
      padding: 0.8em 1.5em;
      font-size: clamp(1rem, 2.5vw, 1.3rem);
      background-color: #38bdf8;
      color: #0f172a;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      opacity: 0;
      transform: rotateX(90deg);
      animation: appear-btn 0.8s forwards, float-btn 3s ease-in-out infinite;
      animation-delay: 1.9s, 2s;
      transition: transform 0.3s ease;
    }

    .login-btn:hover {
      transform: scale(1.05) translateY(-5px);
    }

    @keyframes appear-btn {
      to {
        transform: rotateX(0deg);
        opacity: 1;
      }
    }

    @keyframes float-btn {
      0%   { transform: translateY(0px); }
      50%  { transform: translateY(-8px); }
      100% { transform: translateY(0px); }
    }

    /* Responsivo extra */
    @media (max-width: 400px) {
      .title {
        font-size: clamp(1.5rem, 8vw, 2.5rem);
      }
    }
  </style>
</head>
<body>
  <div class="title">
    <span class="letter">C</span>
    <span class="letter">R</span>
    <span class="letter">U</span>
    <span class="letter">D</span>
    <span class="letter"> </span>
    <span class="letter">E</span>
    <span class="letter">v</span>
    <span class="letter">a</span>
    <span class="letter">r</span>
    <span class="letter">i</span>
    <span class="letter">s</span>
    <span class="letter">t</span>
    <span class="letter">o</span>
    <span class="letter">2</span>
    <span class="letter">0</span>
    <span class="letter">0</span>
    <span class="letter">6</span>

  </div>

  <a href="{{ route('pessoas.index') }}"><button class="login-btn">Entrar</button></a>
</body>
</html>
