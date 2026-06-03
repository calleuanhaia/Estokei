<?php

    include "config/config.php";

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql="SELECT * FROM produtos WHERE id=$id";
        $consulta=$pdo->prepare($sql);
        $consulta->execute();

        $produto=$consulta->fetch(PDO::FETCH_ASSOC);
    }

?>
<div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 flex flex-col w-full max-w-3xl mx-auto">
    
    <div class="flex items-center gap-3 mb-6">
        <div class="p-2 bg-estokei-accent/10 rounded-lg text-estokei-accent">
            <i class="ph ph-package text-xl"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-white">Cadastro de Produto</h3>
            <p class="text-estokei-textMuted text-xs mt-1">Adicione um novo item ao inventário.</p>
        </div>
    </div>
    
    <form action="api/cadastrar_produtos.php" method="POST" class="space-y-4 flex-1 flex flex-col">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="sku_produto" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">SKU</label>
                <div class="relative">
                    <i class="ph ph-barcode absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $produto['sku'] ?>" type="text" id="sku_produto" name="sku" placeholder="Ex: PRD-001" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>

            <div>
                <label for="nome_produto" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Nome</label>
                <div class="relative">
                    <i class="ph ph-box-taped absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $produto['nome'] ?>" type="text" id="nome_produto" name="nome" placeholder="Ex: Teclado Mecânico" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>
        </div>

        <div>
            <label for="descricao_produto" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Descrição</label>
            <div class="relative">
                <i class="ph ph-text-align-left absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                <input value="<?php echo $produto['descricao'] ?>" type="text" id="descricao_produto" name="descricao" placeholder="Breve descrição do produto..." 
                       class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="quantidade_atual" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Quantidade Atual</label>
                <div class="relative">
                    <i class="ph ph-stack absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $produto['quantidade_atual'] ?>" type="number" id="quantidade_atual" name="quantidade_atual" placeholder="0" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>

            <div>
                <label for="estoque_minimo" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Estoque Mínimo</label>
                <div class="relative">
                    <i class="ph ph-warning-circle absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $produto['estoque_minimo'] ?>" type="number" id="estoque_minimo" name="estoque_minimo" placeholder="Ex: 10" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <div>
                <label for="preco_custo" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Preço de Custo</label>
                <div class="relative">
                    <i class="ph ph-currency-dollar absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $produto['preco_custo'] ?>" type="number" step="0.01" id="preco_custo" name="preco_custo" placeholder="0.00" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>

            <div>
                <label for="preco_venda" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Preço de Venda</label>
                <div class="relative">
                    <i class="ph ph-tag absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                    <input value="<?php echo $produto['preco_venda'] ?>" type="number" step="0.01" id="preco_venda" name="preco_venda" placeholder="0.00" required 
                           class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
                </div>
            </div>
        </div>

        <div>
            <label for="localizacao_produto" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Localização (Prateleira/Corredor)</label>
            <div class="relative">
                <i class="ph ph-map-pin absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                <input value="<?php echo $produto['localizacao'] ?>" type="text" id="localizacao_produto" name="localizacao" placeholder="Ex: Corredor A - Prateleira 3" 
                       class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
            </div>
        </div>

        <div class="pt-4 mt-auto">
            <button type="submit" class="w-full bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-3 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-1 flex justify-center items-center gap-2">
                <i class="ph ph-check-circle text-xl"></i>
                Cadastrar Produtos
            </button>
        </div>
        
    </form>
</div>