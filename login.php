<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estokei - Login</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    <!-- Google Fonts (Outfit) -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Outfit', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            accent: '#ccff00',      // Verde Neon
                            accentHover: '#aadd00', // Verde Neon Escuro
                            bg: '#0A1526',          // Fundo Azul Escuro Principal
                            dark1: '#0F1E36',       // Azul Escuro Nível 1
                            dark2: '#142746',       // Azul Escuro Nível 2
                            dark3: '#1A335C',       // Azul Escuro Nível 3
                            dark4: '#224175',       // Azul Escuro Nível 4
                            dark5: '#2C5191',       // Azul Escuro Nível 5
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Outfit', sans-serif;
            background-color: #0A1526;
            color: #ffffff;
            /* Evita rolagem desnecessária se a tela for pequena, mas permite se precisar */
            min-height: 100vh; 
        }

        /* Efeitos visuais de fundo */
        .glow-bg {
            position: absolute;
            border-radius: 50%;
            background: rgba(204, 255, 0, 0.04);
            filter: blur(100px);
            z-index: 0;
            pointer-events: none;
        }

        /* Autofill styles correction for dark mode */
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus, 
        input:-webkit-autofill:active{
            -webkit-box-shadow: 0 0 0 30px #142746 inset !important;
            -webkit-text-fill-color: white !important;
            transition: background-color 5000s ease-in-out 0s;
        }
    </style>
</head>

<body class="relative flex items-center justify-center overflow-hidden selection:bg-brand-accent selection:text-brand-bg">

    <!-- Efeitos de Fundo -->
    <div class="glow-bg w-[600px] h-[600px] top-[-200px] left-[-200px]"></div>
    <div class="glow-bg w-[500px] h-[500px] bottom-[-150px] right-[-150px]"></div>

    <!-- Container Principal do Login -->
    <main class="relative z-10 w-full max-w-md p-6">
        
        <!-- Card do Formulário -->
        <div class="bg-brand-dark1/80 backdrop-blur-xl border border-brand-dark4 rounded-3xl p-8 shadow-2xl relative overflow-hidden">
            
            <!-- Detalhe decorativo no topo do card -->
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-brand-accent to-transparent opacity-50"></div>

            <!-- Header / Logo -->
            <div class="flex flex-col items-center justify-center mb-10">
                <div class="inline-flex items-center gap-2 mb-4 group cursor-default">
                    <div class="w-12 h-12 bg-brand-dark3 rounded-xl flex items-center justify-center border border-brand-accent/20 group-hover:border-brand-accent/50 transition-colors shadow-[0_0_15px_rgba(204,255,0,0.1)]">
                        <i data-lucide="package-open" class="text-brand-accent w-7 h-7"></i>
                    </div>
                    <span class="text-3xl font-extrabold tracking-tight text-white">
                        estok<span class="text-brand-accent">ei</span>
                    </span>
                </div>
                <h1 class="text-2xl font-semibold text-white mb-2">Bem-vindo de volta</h1>
                <p class="text-sm text-gray-400 font-light text-center">Acesse sua conta para gerenciar seu estoque.</p>
            </div>

            <!-- Formulário -->
            <form onsubmit="event.preventDefault(); /* Adicione a lógica de login aqui */" class="space-y-5">
                
                <!-- Campo de E-mail -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2 ml-1">E-mail</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="mail" class="w-5 h-5 text-gray-500"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="seu@email.com" required
                            class="w-full pl-11 pr-4 py-3 bg-brand-dark2 border border-brand-dark4 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all duration-300">
                    </div>
                </div>

                <!-- Campo de Senha -->
                <div>
                    <div class="flex items-center justify-between mb-2 ml-1">
                        <label for="password" class="block text-sm font-medium text-gray-300">Senha</label>
                        <a href="#" class="text-xs text-brand-accent hover:text-brand-accentHover transition-colors">Esqueceu a senha?</a>
                    </div>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                            <i data-lucide="lock" class="w-5 h-5 text-gray-500"></i>
                        </div>
                        <input type="password" id="password" name="password" placeholder="••••••••" required
                            class="w-full pl-11 pr-12 py-3 bg-brand-dark2 border border-brand-dark4 rounded-xl text-white placeholder-gray-500 focus:outline-none focus:border-brand-accent focus:ring-1 focus:ring-brand-accent transition-all duration-300">
                        
                        <!-- Botão mostrar/ocultar senha -->
                        <button type="button" onclick="togglePassword()" class="absolute inset-y-0 right-0 pr-4 flex items-center text-gray-500 hover:text-white transition-colors focus:outline-none">
                            <i data-lucide="eye" id="eye-icon" class="w-5 h-5"></i>
                        </button>
                    </div>
                </div>


                <!-- Botão de Login -->
                <button type="submit"
                    class="w-full flex items-center justify-center gap-2 bg-brand-accent hover:bg-brand-accentHover text-brand-bg font-bold py-3.5 px-4 rounded-xl transition-all duration-300 shadow-[0_5px_20px_rgba(204,255,0,0.15)] hover:shadow-[0_5px_25px_rgba(204,255,0,0.3)] hover:-translate-y-0.5 mt-4">
                    Entrar na plataforma
                    <i data-lucide="arrow-right" class="w-5 h-5"></i>
                </button>
            </form>

            <!-- Rodapé do Card -->
            <div class="mt-8 pt-6 border-t border-brand-dark4 text-center">
                <p class="text-sm text-gray-400">
                    Ainda não possui conta? 
                    <a href="#" class="font-medium text-brand-accent hover:text-brand-accentHover hover:underline underline-offset-4 transition-all">
                        Crie seu acesso grátis
                    </a>
                </p>
            </div>
        </div>
        
        <!-- Texto de Copyright fora do card -->
        <p class="text-center text-xs text-brand-dark5 mt-8 font-light uppercase tracking-widest">
            © 2024 Estokei. Todos os direitos reservados.
        </p>

    </main>

    <!-- Script de inicialização dos ícones e lógica da senha -->
    <script>
        // Inicializa os ícones Lucide
        lucide.createIcons();

        // Lógica para alternar a visibilidade da senha
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.getElementById('eye-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                // Troca o ícone de 'eye' para 'eye-off' (nós apenas mudamos os atributos SVG via lucide manualmente ou recriamos)
                eyeIcon.setAttribute('data-lucide', 'eye-off');
            } else {
                passwordInput.type = 'password';
                eyeIcon.setAttribute('data-lucide', 'eye');
            }
            
            // Re-renderiza o ícone específico modificado
            lucide.createIcons();
        }
    </script>
</body>

</html>