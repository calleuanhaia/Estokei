<div class="bg-estokei-panel rounded-2xl p-6 border border-white/5 flex flex-col w-full max-w-2xl mx-auto">
    
    <div class="flex items-center gap-3 mb-6">
        <div class="p-2 bg-estokei-accent/10 rounded-lg text-estokei-accent">
            <i class="ph ph-truck text-xl"></i>
        </div>
        <div>
            <h3 class="text-lg font-bold text-white">Cadastro de Fornecedor</h3>
            <p class="text-estokei-textMuted text-xs mt-1">Adicione um novo parceiro ao sistema.</p>
        </div>
    </div>
    
    <form action="api/cadastrar_fornecedores.php" method="POST" class="space-y-4 flex-1 flex flex-col">
        
        <div>
            <label for="nome_fornecedor" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Nome</label>
            <div class="relative">
                <i class="ph ph-buildings absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                <input type="text" id="nome_fornecedor" name="nome" placeholder="Ex: Fornecedora ABC Ltda" required 
                       class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
            </div>
        </div>

        <div>
            <label for="contato_fornecedor" class="block text-xs font-semibold text-estokei-textMuted uppercase tracking-wider mb-2">Contato</label>
            <div class="relative">
                <i class="ph ph-phone absolute left-3 top-1/2 transform -translate-y-1/2 text-estokei-textMuted"></i>
                <input type="text" id="contato_fornecedor" name="contato" placeholder="Ex: (11) 99999-9999 ou email@empresa.com" required 
                       class="w-full bg-estokei-bg border border-white/10 rounded-xl py-3 pl-10 pr-4 text-sm focus:outline-none focus:border-estokei-accent focus:ring-1 focus:ring-estokei-accent transition-all text-white placeholder-estokei-textMuted">
            </div>
        </div>

        <div class="pt-4 mt-auto">
            <button type="submit" class="w-full bg-estokei-accent hover:bg-estokei-accentHover text-estokei-bg font-bold py-3 rounded-xl transition-all shadow-neon hover:shadow-neon-strong transform hover:-translate-y-1 flex justify-center items-center gap-2">
                <i class="ph ph-check-circle text-xl"></i>
                Cadastrar Fornecedor
            </button>
        </div>
        
    </form>
</div>