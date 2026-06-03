<?php
    include "config/config.php";
    
    $sql="SELECT * FROM fornecedores ORDER BY id DESC";
    $consulta=$pdo->query($sql);
    $fornecedores=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Módulo de Listagem de Fornecedores -->
<div class="bg-estokei-panel rounded-2xl border border-white/5 overflow-hidden">
    
    <!-- Cabeçalho da Tabela -->
    <div class="p-6 border-b border-white/5 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
        <h3 class="text-lg font-bold text-white">Fornecedores Cadastrados</h3>
        <button onclick="location.href='index.php?page=cadastro_fornecedores.php'" class="bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-2 px-5 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-0.5 flex items-center gap-2 text-sm">
            <i class="ph ph-plus-circle text-lg"></i>
            <span>Novo Fornecedor</span>
        </button>
    </div>

    <!-- Container da Tabela com Scroll Horizontal para Mobile -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-white/5 text-estokei-textMuted text-xs uppercase tracking-wider">
                    <th class="p-4 font-semibold whitespace-nowrap">ID</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Fornecedor</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Contato</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Data de Criação</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5 text-sm">
                
                <?php if(count($fornecedores) > 0): ?>
                    <?php foreach ($fornecedores as $fornecedor): ?>
                        <tr class="hover:bg-white/5 transition-colors group">
                            <!-- ID -->
                            <td class="p-4 text-estokei-textMuted">
                                #<?php echo $fornecedor['id']; ?>
                            </td>
                            
                            <!-- Fornecedor (Nome + Ícone) -->
                            <td class="p-4 flex items-center gap-3 whitespace-nowrap">
                                <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center border border-white/10 group-hover:border-estokei-accent/30 transition-colors">
                                    <i class="ph ph-truck text-xl text-gray-300 group-hover:text-estokei-accent transition-colors"></i>
                                </div>
                                <span class="font-semibold text-white">
                                    <?php echo htmlspecialchars($fornecedor['nome']); ?>
                                </span>
                            </td>
                            
                            <!-- Contato -->
                            <td class="p-4 text-estokei-textMuted whitespace-nowrap">
                                <span class="flex items-center gap-2">
                                    <i class="ph ph-address-book"></i>
                                    <?php echo htmlspecialchars($fornecedor['contato']); ?>
                                </span>
                            </td>
                            
                            <!-- Data de Criação -->
                            <td class="p-4 text-estokei-textMuted whitespace-nowrap">
                                <?php echo date('d/m/Y H:i', strtotime($fornecedor['criado_em'])); ?>
                            </td>

                            <!-- Ações -->
                            <td class="p-4 text-estokei-textMuted whitespace-nowrap">
                                <a href="index.php?page=atualizar_fornecedor.php&id=<?php echo $fornecedor['id']; ?>">
                                    Editar
                                </a>
                                <a href="api/delete.php?table=fornecedores&id=<?php echo $fornecedor['id']; ?>">
                                    Excluir
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Estado Vazio (Caso não tenha fornecedores) -->
                    <tr>
                        <td colspan="4" class="p-8 text-center text-estokei-textMuted">
                            <i class="ph ph-truck text-4xl mb-2 opacity-50"></i>
                            <p>Nenhum fornecedor encontrado.</p>
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>