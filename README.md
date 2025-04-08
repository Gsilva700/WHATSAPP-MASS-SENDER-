# WHATSAPP-MASS-SENDER
WHATSAPP MASS SENDER - INSTRUÇÕES DE USO

1. Requisitos:
- PHP 7.x ou superior
- Servidor Apache/Nginx com suporte a PHP
- MySQL
- Composer (opcional, não utilizado neste projeto)

2. Instalação:
- Extraia todos os arquivos em um diretório do seu servidor web
- Crie o banco de dados com o seguinte SQL:
  (substituir `conexao.php` para conexão com o banco)
  
CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(100) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

CREATE TABLE listas (
  id INT AUTO_INCREMENT PRIMARY KEY,
  usuario_id INT,
  nome VARCHAR(100),
  data_envio DATE,
  hora_envio TIME,
  template VARCHAR(100),
  tempo_min INT,
  tempo_max INT,
  status VARCHAR(20) DEFAULT 'pendente'
);

CREATE TABLE contatos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  lista_id INT,
  numero VARCHAR(20),
  nome VARCHAR(100),
  var1 VARCHAR(100),
  var2 VARCHAR(100),
  var3 VARCHAR(100),
  var4 VARCHAR(100),
  status_envio VARCHAR(20),
  data_hora_envio DATETIME
);

CREATE TABLE configuracoes (
  id INT AUTO_INCREMENT PRIMARY KEY,
  hora_inicio TIME,
  hora_fim TIME
);

3. Acesso:
- Acesse o sistema via navegador, por exemplo: http://localhost/index.php
- Faça login (ou implemente tela de cadastro conforme desejar)
- Cadastre lista, importe CSV, inicie disparos

4. Observações:
- Envio usa a API: https://api.zdg.com/sendtemplatewaba
- O botão "Pausar" cria um arquivo que interrompe o envio temporariamente
- O sistema respeita o horário configurado para envio
- Geração de relatório em CSV disponível

Dúvidas? Fale comigo!
