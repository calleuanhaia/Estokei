<?php
    include "config/config.php";
    
    $sql="SELECT * FROM produtos ORDER BY id DESC";
    $consulta=$pdo->query($sql);
    $produtos=$consulta->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Módulo de Listagem de Produtos -->
<div class="bg-estokei-panel rounded-2xl border border-white/5 overflow-hidden">
    
    <!-- Cabeçalho da Tabela -->
    <div class="p-6 border-b border-white/5 flex flex-col sm:flex-row sm:justify-between sm:items-center gap-4">
        <h3 class="text-lg font-bold text-white">Produtos Cadastrados</h3>
        <button onclick="location.href='index.php?page=cadastro_produtos.php'" class="bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-2 px-5 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-0.5 flex items-center gap-2 text-sm">
            <i class="ph ph-plus-circle text-lg"></i>
            <span>Novo Produto</span>
        </button>
    </div>

    <!-- Container da Tabela com Scroll Horizontal para Mobile -->
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="bg-white/5 text-estokei-textMuted text-xs uppercase tracking-wider">
                    <th class="p-4 font-semibold whitespace-nowrap">ID</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Produto</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Descrição</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Estoque Atual</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Mínimo</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Custo</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Venda</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Localização</th>
                    <th class="p-4 font-semibold whitespace-nowrap">Datas</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-white/5 text-sm">
                
                <?php if(count($produtos) > 0): ?>
                    <?php foreach ($produtos as $produto): ?>
                        <tr class="hover:bg-white/5 transition-colors group">
                            <!-- ID -->
                            <td class="p-4 text-estokei-textMuted">
                                #<?php echo $produto['id']; ?>
                            </td>
                            
                            <!-- Produto (Nome + SKU) -->
                            <td class="p-4 flex items-center gap-3 whitespace-nowrap">
                                <div class="w-10 h-10 rounded-lg bg-gray-800 flex items-center justify-center border border-white/10 group-hover:border-estokei-accent/30 transition-colors">
                                    <i class="ph ph-package text-xl text-gray-300 group-hover:text-estokei-accent transition-colors"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-white">
                                        <?php echo htmlspecialchars($produto['nome']); ?>
                                    </p>
                                    <p class="text-xs text-estokei-textMuted">
                                        SKU: <?php echo htmlspecialchars($produto['sku']); ?>
                                    </p>
                                </div>
                            </td>
                            
                            <!-- Descrição (Limitada e com reticências para não quebrar a tabela) -->
                            <td class="p-4 text-estokei-textMuted max-w-[150px] truncate" title="<?php echo htmlspecialchars($produto['descricao']); ?>">
                                <?php echo htmlspecialchars($produto['descricao']); ?>
                            </td>
                            
                            <!-- Quantidade Atual (Com lógica visual de alerta) -->
                            <td class="p-4">
                                <?php if ($produto['quantidade_atual'] <= $produto['estoque_minimo']): ?>
                                    <span class="px-3 py-1 rounded-full bg-estokei-danger/10 text-estokei-danger text-xs font-bold border border-estokei-danger/20 flex items-center gap-1 w-max">
                                        <i class="ph ph-warning-circle"></i> <?php echo $produto['quantidade_atual']; ?> unid.
                                    </span>
                                <?php else: ?>
                                    <span class="px-3 py-1 rounded-full bg-estokei-success/10 text-estokei-success text-xs font-bold border border-estokei-success/20 w-max inline-block">
                                        <?php echo $produto['quantidade_atual']; ?> unid.
                                    </span>
                                <?php endif; ?>
                            </td>
                            
                            <!-- Estoque Mínimo -->
                            <td class="p-4 text-estokei-textMuted">
                                <?php echo $produto['estoque_minimo']; ?>
                            </td>

                            <!-- Preço de Custo -->
                            <td class="p-4 text-estokei-textMuted whitespace-nowrap">
                                R$ <?php echo number_format($produto['preco_custo'], 2, ',', '.'); ?>
                            </td>

                            <!-- Preço de Venda (Em destaque) -->
                            <td class="p-4 font-medium text-white whitespace-nowrap">
                                R$ <?php echo number_format($produto['preco_venda'], 2, ',', '.'); ?>
                            </td>
                            
                            <!-- Localização -->
                            <td class="p-4 text-estokei-textMuted whitespace-nowrap">
                                <span class="flex items-center gap-1">
                                    <i class="ph ph-map-pin"></i>
                                    <?php echo htmlspecialchars($produto['localizacao']); ?>
                                </span>
                            </td>
                            
                            <!-- Datas (Criação e Atualização agrupadas) -->
                            <td class="p-4 text-xs text-estokei-textMuted whitespace-nowrap">
                                <div class="mb-1" title="Criado em">
                                    <span class="opacity-50">C:</span> <?php echo date('d/m/Y H:i', strtotime($produto['criado_em'])); ?>
                                </div>
                                <div title="Atualizado em">
                                    <span class="opacity-50">A:</span> <?php echo date('d/m/Y H:i', strtotime($produto['atualizado_em'])); ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <!-- Estado Vazio -->
                    <tr>
                        <td colspan="9" class="p-8 text-center text-estokei-textMuted">
                            <i class="ph ph-package text-4xl mb-2 opacity-50"></i>
                            <p>Nenhum produto encontrado no estoque.</p>
                        </td>
                    </tr>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</div>