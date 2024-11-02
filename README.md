# CRUD - PHP

# Biblioteca - Sistema de Gerenciamento
Este é um sistema de gerenciamento de biblioteca que implementa operações CRUD (Criar, Ler, Atualizar, Deletar) para usuários e materiais. O sistema utiliza PHP e MySQL para a manipulação dos dados.

# Funcionalidades
 1. Cadastro de Usuários: Permite adicionar novos usuários ao sistema.
 2. Consulta de Usuários: Exibe informações sobre os usuários cadastrados.
 3. Atualização de Usuários: Permite modificar os dados de usuários existentes.
 4. Exclusão de Usuários: Permite remover usuários do sistema.
    Cadastro de Materiais: Permite adicionar novos materiais à biblioteca.
    Consulta de Materiais: Exibe informações sobre os materiais cadastrados.
    Atualização de Materiais: Permite modificar os dados dos materiais existentes.
    Exclusão de Materiais: Permite remover materiais do sistema.
    
# Tecnologias Utilizadas

PHP: Linguagem de programação para desenvolvimento do sistema.

MySQL: Sistema de gerenciamento de banco de dados.

HTML/CSS: Para a criação das páginas web.

# Estrutura do Banco de Dados

O banco de dados contém as seguintes tabelas:

usu: Armazena informações dos usuários, incluindo:
*codusu: Código do usuário (chave primária).                             
tipousu: Tipo de usuário (Professor, Aluno, Funcionário).               
nomeusu: Nome do usuário.                                               
endusu: Endereço do usuário.                                            
docusu: Documento do usuário.                                           
statususu: Status do usuário.                                          
materiais: Armazena informações dos materiais disponíveis na biblioteca.

# Instalação

 1. Clone o repositório para sua máquina local.
 2. Configure o banco de dados MySQL:
 3. Crie um banco de dados chamado biblioteca.
 4. Execute os scripts SQL para criar as tabelas necessárias.
 5. Configure as credenciais de conexão no arquivo conecta.php.
 6. Inicie um servidor local (como XAMPP ou WAMP) e acesse a aplicação pelo navegador.

# Uso
Acesse as funcionalidades através do menu disponível na interface.
Siga as instruções na tela para realizar as operações desejadas.

# Contribuição

Contribuições são bem-vindas! Sinta-se à vontade para abrir um problema ou enviar um pull request.
