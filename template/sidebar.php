        <aside id="sidebar" class="fixed lg:static inset-y-0 left-0 z-50 w-72 bg-estokei-panel border-r border-white/5 transform -translate-x-full lg:translate-x-0 transition-transform duration-300 ease-in-out flex flex-col h-full shadow-2xl lg:shadow-none">
            
            <!-- Logo Area -->
            <div class="h-20 flex items-center px-8 border-b border-white/5">
                <div class="flex items-center gap-3">
                    <div class="p-2 bg-estokei-bg rounded-xl shadow-neon border border-estokei-accent/20">
                        <i class="ph ph-package text-2xl text-estokei-accent"></i>
                    </div>
                    <h1 class="text-3xl font-extrabold tracking-tight">
                        esto<span class="text-estokei-accent">k</span>ei
                    </h1>
                </div>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 overflow-y-auto py-6 px-4 space-y-2">
                <p class="px-4 text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Menu Principal</p>
                
                <a href="home.php?page=exemplo.php" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-estokei-bg text-estokei-accent border border-estokei-accent/20 shadow-neon transition-all">
                    <i class="ph ph-squares-four text-xl"></i>
                    <span class="font-medium">Painel Principal</span>
                </a>

                <a href="index.php" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-airplay text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Sobre o Sistema</span>
                </a>

                <p class="px-4 text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Cadastros</p>

                <a href="home.php?page=cadastro_usuario.php" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-user-circle-plus text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Cadastro Usuário</span>
                    <!-- <span class="ml-auto bg-estokei-accent text-estokei-bg text-xs font-bold px-2 py-0.5 rounded-full">12</span> -->
                </a>

                <a href="home.php?page=cadastro_fornecedores.php" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-identification-card text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Cadastro Fornecedores</span>
                </a>

                <a href="home.php?page=cadastro_produtos.php" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-circles-three-plus text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Cadastro Produtos</span>
                </a>

                <p class="px-4 text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Listagens</p>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-user-list text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Listar Usuários</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-identification-badge text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Listar Fornecedores</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-file text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Listar Produtos</span>
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-arrows-clockwise text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Listar Movimentações</span>
                </a>

                <p class="px-4 text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Configurações</p>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-estokei-textMuted hover:text-white hover:bg-estokei-panelHover transition-all group">
                    <i class="ph ph-user-gear text-xl group-hover:text-estokei-accent transition-colors"></i>
                    <span class="font-medium">Configuração de Conta</span>
                </a>
            </nav>

            <!-- User Widget -->
            <div class="p-4 border-t border-white/5">
                <div class="flex items-center gap-3 p-3 rounded-xl hover:bg-estokei-panelHover cursor-pointer transition-all">
                    <img src="https://i.pravatar.cc/150?img=32" alt="User Profile" class="w-10 h-10 rounded-full border-2 border-estokei-accent/50">
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-semibold text-white truncate">Admin Sistema</p>
                        <p class="text-xs text-estokei-textMuted truncate">admin@estokei.com.br</p>
                    </div>
                    <i class="ph ph-sign-out text-estokei-textMuted hover:text-estokei-danger transition-colors text-xl"></i>
                </div>
            </div>
        </aside>