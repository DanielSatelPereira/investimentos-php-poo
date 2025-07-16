# 📊 Projeto Gestão de Ativos (Versão Original)

Este sistema foi desenvolvido durante as aulas da disciplina **Desenvolvimento Web Avançado** (3º período).

## 📁 Estrutura e Arquivos Principais

- `index.php` — Página inicial com resumo dos investimentos (dashboard)
- `login.php` — Tela de login do usuário
- `registro.php` — Cadastro de novos usuários
- `usuarios.php` — Gerenciamento de usuários cadastrados
- `editar_usuario.php` — Edição dos dados de usuários
- `compras.php` — Cadastro de compras de ativos
- `dividendos.php` — Cadastro de dividendos recebidos
- `ativo.php` — Relatório de preço médio por ativo
- `relatorio.php` — Gráfico comparativo de investimentos x dividendos
- `posts.php` — Integração com API externa (JSONPlaceholder)

### Includes

- `includes/head.php` — Cabeçalho HTML e importação do CSS/JS
- `includes/header.php` — Navegação principal do sistema
- `includes/footer.php` — Rodapé comum
- `includes/functions.php` — Funções auxiliares de cálculo

### Classes

- `classes/Database.php` — Conexão PDO com o banco de dados MySQL
- `classes/Usuario.php` — CRUD de usuários e autenticação
- `classes/Compra.php` — Cadastro de compras
- `classes/Dividendo.php` — Cadastro e cálculo de dividendos
- `classes/Ativo.php` — Cálculo do preço médio por ativo
- `classes/PostApiService.php` — Comunicação com API externa

## 💡 Tecnologias Utilizadas

- PHP 7+ com Programação Orientada a Objetos básica
- MySQL (via PDO)
- HTML5 + CSS3
- Chart.js (para visualização gráfica)

## 🎯 Objetivos da Versão Original

- Praticar conceitos fundamentais de PHP OO
- Realizar persistência de dados com MySQL
- Criar páginas funcionais de cadastro e relatórios

## ⚠️ Observações Importantes

- Esta versão **não segue padrões de mercado**, mas reflete fielmente a didática aplicada em sala.
- Há mistura de responsabilidades entre visual e lógica (ex: HTML+PHP juntos).
- O sistema contém trechos repetidos e pode ser refatorado.

## 📌 Melhorias Futuras (Pendências)

- Separar lógica da visualização para melhor manutenção
- Exibir mensagens de sucesso/erro de forma padronizada
- Criar uma página de testes para API externa do ViaCEP
  - Exibir dados de endereço a partir de um campo de CEP
  - Mostrar os dados em uma tabela antes do envio