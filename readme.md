# 🚗 AutoManager — Sistema de Gerenciamento de Carros  
Projeto Prático — Programação Web  
Professor: Jeofton Costa Melo

---

## 📌 Sobre o Projeto
O **AutoManager** é um sistema web desenvolvido para a disciplina de **Programação Web**, utilizando exclusivamente **PHP** e **JavaScript puro**, conforme exigido no documento oficial do projeto.

O objetivo do sistema é permitir o gerenciamento simples de veículos através de um CRUD completo, sem uso de bancos de dados e sem frameworks proibidos.

---

## ✔ Tecnologias Permitidas e Utilizadas
- **PHP 8+**
- **JavaScript (Vanilla)**
- **HTML5**
- **CSS3**
- Persistência em arquivo `JSON`
- **XAMPP / Apache** (para rodar o projeto)

---

## 🧩 Funcionalidades Implementadas (MVP ATENDIDO)
O sistema contém todas as funcionalidades mínimas exigidas:

### 🔹 1. **Cadastrar Carro**
- Marca  
- Modelo  
- Ano  
- Preço  
- Validações de campos (JS + PHP)

### 🔹 2. **Listar Carros**
- Exibição em tabela
- Preço formatado
- Botões de ação (Editar/Excluir)

### 🔹 3. **Editar Carro**
- Carrega dados corretos pelo ID
- Permite editar todos os campos
- Atualiza o JSON

### 🔹 4. **Excluir Carro**
- Confirmação via JS
- Remove corretamente pelo ID

### 🔹 5. **Persistência**
Os dados são salvos no arquivo:
carros.json

yaml
Copiar código

### 🔹 6. **Validações**
- JS valida ano, preço, marca e modelo
- PHP garante integridade dos dados

---

## 📁 Estrutura do Projeto
AUTO-MANAGER/
├── assets/
│ ├── css/
│ │ └── style.css
│ └── js/
│ └── main.js
├── includes/
│ ├── header.php
│ ├── navbar.php
│ └── footer.php
├── pages/
│ ├── cadastro_carro.php
│ ├── salvar_carro.php
│ ├── listar_carros.php
│ ├── editar_carro.php
│ ├── atualizar_carro.php
│ └── excluir_carro.php
├── carros.json
└── index.php


## ▶ Como Executar o Projeto (XAMPP)
1. Baixe ou clone este repositório na pasta:
C:\xampp\htdocs\

2. Abra o XAMPP e inicie o **Apache**

3. Acesse no navegador:
http://localhost/AUTO-MANAGER/


## 🎬 Vídeo de Apresentação
O vídeo demonstrativo será enviado conforme regras do professor, com duração entre **8 e 10 minutos**, apresentando:

- Código no repositório
- Funcionalidades (CRUD)
- Sistema em execução

---

## 👥 Integrantes da Dupla
- **Bruno Sena**
- **Matheus Gabriel** 

*(Atualizar nome antes do envio)*

---

## 📄 Observações Importantes
- Nenhum framework JS ou PHP foi utilizado.  
- O sistema segue estritamente todas as regras do PDF do professor.  
- Persistência feita apenas com `json` conforme permitido.