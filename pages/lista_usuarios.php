<?php
    include "config/config.php";
    
    $sql="SELECT * FROM usuarios ORDER BY id DESC";
    $consulta=$pdo->query($sql);
    $usuarios=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Módulo de Listagem de Usuários -->
<div class="bg-estokei-panel rounded-2xl border border-white/5 overflow-hidden">
    
    <!-- Cabeçalho da Tabela -->
    <div class="p-6 border-b border-white/5 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
        <h3 class="text-lg font-bold text-white">Usuários Cadastrados</h3>
        <button onclick="location.href='index.php?page=cadastro_usuario.php'" class="bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-2 px-5 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-0.5 flex items-center gap-2 text-sm">
            <i class="ph ph-user-plus text-lg"></i>
            <span>Novo Usuário</span>
        </button>
    </div>

    <!-- Container da Tabela com Scroll Horizontal para Mobile -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-white/5 text-estokei-textMuted text-xs uppercase tracking-wider">
                    <th class="p-4 font-semibold whitespace-nowrap">ID</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Usuário</th>
                    <th class="p-4 font-semibold whitespace-nowrap">E-mail</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Perfil</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Data de Criação</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5 text-sm">
                
                <?php if(count($usuarios) > 0): ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr class="hover:bg-white/5 transition-colors group">
                            <!-- ID -->
                            <td class="p-4 text-estokei-textMuted">
                                #<?php echo $usuario['id']; ?>
                            </td>
                            
                            <!-- Nome com Ícone/Avatar -->
                            <td class="p-4 flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center border border-white/10 group-hover:border-estokei-accent/30 transition-colors">
                                    <i class="ph ph-user text-xl text-gray-300"></i>
                                </div>
                                <span class="font-semibold text-white">
                                    <?php echo htmlspecialchars($usuario['nome']); ?>
                                </span>
                            </td>
                            
                            <!-- Email -->
                            <td class="p-4 text-estokei-textMuted">
                                <?php echo htmlspecialchars($usuario['email']); ?>
                            </td>
                            
                            <!-- Perfil (Transformado em Badge) -->
                            <td class="p-4">
                                <span class="px-3 py-1 rounded-full bg-estokei-accent/10 text-estokei-accent text-xs font-bold border border-estokei-accent/20">
                                    <?php echo htmlspecialchars($usuario['perfil']); ?>
                                </span>
                            </td>
                            
                            <!-- Data -->
                            <td class="p-4 text-estokei-textMuted">
                                <?php 
                                    // Opcional: Formatação de data no padrão brasileiro
                                    echo date('d/m/Y H:i', strtotime($usuario['criado_em'])); 
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Estado Vazio (Caso não tenha usuários) -->
                    <tr>
                        <td colspan="6" class="p-8 text-center text-estokei-textMuted">
                            <i class="ph ph-users text-4xl mb-2 opacity-50"></i>
                            <p>Nenhum usuário encontrado.</p>
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>