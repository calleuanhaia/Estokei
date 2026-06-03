<?php

    include "config/config.php";

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql="SELECT * FROM usuarios WHERE id=$id";
        $consulta=$pdo->prepare($sql);
        $consulta->execute();

        $usuario=$consulta->fetch(PDO::FETCH_ASSOC);
    }

?>
<!-- Container Principal do Formulário -->
<div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 flex flex-col w-full max-w-2xl mx-auto">
    
    <!-- Cabeçalho do Formulário -->
    <div class="flex items-center gap-3 mb-6">
        <div class="p-2 bg-estokei-accent/10 rounded-lg text-estokei-accent">
            <i class="ph ph-user-plus text-xl"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-white">Cadastro de Usuário</h3>
            <p class="text-estokei-textMuted text-xs mt-1">Adicione um novo membro ao sistema.</p>
        </div>
    </div>
    
    <!-- Formulário -->
    <form action="api/cadastrar_usuario.php" method="POST" class="space-y-4 flex-1 flex flex-col">
        
        <!-- Campo: Nome -->
        <div>
            <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Nome</label>
            <div class="relative">
                <i class="ph ph-user absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                <input value="<?php echo $usuario['nome'] ?>" type="text" name="nome" placeholder="Ex: João da Silva" required 
                       class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
            </div>
        </div>

        <!-- Campo: Email -->
        <div>
            <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Email</label>
            <div class="relative">
                <i class="ph ph-envelope-simple absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                <input value="<?php echo $usuario['email'] ?>" type="email" name="email" placeholder="joao@empresa.com.br" required 
                       class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
            </div>
        </div>

        <!-- Grid para Senha e Tipo de Usuário (Lado a lado no Desktop, Empilhado no Mobile) -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            
            <!-- Campo: Senha -->
            <div>
                <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Senha</label>
                <div class="relative">
                    <i class="ph ph-lock-key absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $usuario['senha_hash'] ?>" type="password" name="senha" placeholder="••••••••" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>

            <!-- Campo: Tipo de Usuário -->
            <div>
                <label class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2" for="tipo_user">Tipo de Usuário</label>
                <div class="relative">
                    <i class="ph ph-shield-check absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted z-10"></i>
                    <!-- Adicionado appearance-none para remover a seta padrão e incluída uma customizada do Phosphor -->
                    <select value="<?php echo $usuario['perfil'] ?>" name="tipo" id="tipo_user" required 
                            class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-10 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white appearance-none cursor-pointer">
                        <option value="OPERADOR">Operador</option>
                        <option value="ADMIN">Administrador</option>
                    </select>
                    <i class="ph ph-caret-down absolute right-4 top-1/2 transform -translate-y-1/2 text-estokei-textMuted pointer-events-none"></i>
                </div>
            </div>
            
        </div>

        <!-- Botão de Submit -->
        <div class="pt-4 mt-auto">
            <button type="submit" class="w-full bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-3 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-1 flex justify-center items-center gap-2">
                <i class="ph ph-check-circle text-xl"></i>
                Cadastrar Usuário
            </button>
        </div>
        
    </form>
</div>