<?php
public function criar($nome, $grupo) {
    // 1. Prepara o comando SQL com "espaços vazios" (:nome e :grupo)
    $query = "INSERT INTO selecoes (nome, grupo) VALUES (:nome, :grupo)";
    $stmt = $this->conn->prepare($query);

    // 2. Preenche os espaços com segurança (evita ataques de hackers)
    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':grupo', $grupo);

    // 3. Executa o comando e retorna verdadeiro se deu certo
    if($stmt->execute()) {
        return true;
    }
    return false;
}

// --- FUNÇÃO 3: Buscar apenas UMA seleção pelo ID (Para a tela de edição) ---
    public function buscarPorId($id) {
        $query = "SELECT * FROM selecoes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        
        // Protege o ID antes de buscar
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        // Retorna os dados daquela seleção específica
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // --- FUNÇÃO 4: Atualizar os dados no banco ---
    public function atualizar($id, $nome, $grupo) {
        // Comando UPDATE: "Atualize a tabela selecoes, mudando o nome e o grupo ONDE o ID for igual a..."
        $query = "UPDATE selecoes SET nome = :nome, grupo = :grupo WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        
        // Preenche os espaços vazios com segurança
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':grupo', $grupo);

        if($stmt->execute()) {
            return true;
        }
        return false;

        // --- FUNÇÃO 5: Deletar uma seleção ---
    public function deletar($id) {
        // Comando DELETE: "Apague da tabela selecoes ONDE o ID for igual a..."
        $query = "DELETE FROM selecoes WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        
        // Protege o ID antes de executar
        $stmt->bindParam(':id', $id);

        if($stmt->execute()) {
            return true;
        }
        return false;
    }
    }
?>