TagTracker Gerenciamento de Estoque com RFID

📚 Descrição do Projeto

Desenvolvimento de um sistema para gerenciamento e controle de estoque utilizando tecnologia RFID, interligando o Arduino a um site moderno e de fácil usabilidade. O site utiliza uma API em Laravel para comunicação entre o site, Arduino e o banco de dados PostgreSQL virtualizado em um contêiner Docker. O Arduino é utilizado para leitura e envio do UID para a API em Laravel, que também permite a consulta das informações das etiquetas RFID. Cada tag RFID é vinculada a um produto, o que possibilita alto nível de rastreabilidade e controle de cada item em estoque.
👥 Equipe e Funções

    Matheus Vilela Reis dos Santos
        Desenvolvimento do Protótipo
        Front-End e Back-End

    Otávio Henrique Nascimento de Souza
        Documentação

🛠️ Ferramentas Utilizadas
📄 Documentação

    Microsoft Teams
    Discord
    Trello
    WhatsApp
    Microsoft Word
    Draw.io

💻 Front-End

    Visual Studio Code
    Template HTML Codex
    Bootstrap v5.3
    Pure CSS
    HTML5
    CSS
    JavaScript

🖥️ Back-End

    PHP
    C++ Arduino
    Servidor Apache
    Docker
    PostgreSQL
    API Laravel

📦 Lista de Materiais
4.1 Estrutura Física

    Arduino MEGA – 1 x
    Protoboard – 1 x
    RFID-RC522 – 1 x
    I2C – 1 x
    Cabos Jumper – 13 x
    Cabo USB Padrão A/B – 1 x
    Cabo de Rede RJ45 – 1 x
    Display LCD 16x2 – 1 x
    Ethernet Shield W5100 – 1 x
    Etiqueta NFC Ntag Leitura 13,56MHz – 10 x

💰 Custo de Fabricação
Valor	Descrição
R$161,91	Arduino MEGA, 1 x
R$85,40	Ethernet Shield W5100, 1 x
R$24,70	Etiqueta NFC Ntag Leitura 13,56MHz, 10x
R$19,80	RFID-RC522, 1 x
R$19,53	Display LCD 16x2, 1 x
R$15,00	Cabo de Rede RJ45, 1 x
R$13,90	Cabos Jumper, 40 x
R$13,41	Protoboard, 1 x
R$10,00	Cabo USB Padrão A/B, 1 x
R$7,99	I2C, 1 x
R$0,00	Mão de obra dos discentes
R$357,74	Total gasto
🤝 Patrocínios

Estrutura de hardware fornecida pela instituição Fatec Cruzeiro - Prof. Waldomiro May.
⏰ Horas/Aulas Trabalhadas
Dia da Semana	Início	Término	Total	Observações
Segunda-feira	09:45	11:25	1:40	Foram ≅ 14 semanas = 147:00 horas/aulas trabalhadas na Fatec e ≅ 100:00 horas extras (Casa). Projeto iniciou em 05/08/2024 para ser apresentado em 11/11/2024.
Terça-feira	08:40	10:35	1:55	
Quinta-feira	08:40	12:00	3:20	
Sexta-feira	07:50	11:25	3:35	
Total Semanal			10:30	(Fatec)
🚀 Como Executar o Projeto
📋 Pré-requisitos

    Hardware:
        Arduino MEGA
        RFID-RC522
        Display LCD 16x2
        Ethernet Shield W5100
        Cabos e outros materiais listados acima

    Software:
        Arduino IDE
        PHP
        Laravel
        Docker
        PostgreSQL
        Visual Studio Code

🔧 Instalação e Configuração

    Clonar o Repositório:

    git clone https://github.com/Matheusvlz/API-TagTracker.git

    Configurar o Ambiente:
        Instale as dependências necessárias para o Laravel.
        Configure o Docker para o banco de dados PostgreSQL.

    Conectar o Hardware:
        Monte o Arduino MEGA com o RFID-RC522 e o Display LCD conforme o esquema do projeto.
        Conecte o Ethernet Shield ao Arduino e à rede.

    Executar a Aplicação:
        Inicie o servidor Apache e a API Laravel.
        Utilize o Visual Studio Code para desenvolver e monitorar o front-end.

📦 Deployment

    Utilize Docker para containerizar a aplicação e o banco de dados, facilitando o deployment e a escalabilidade.

📄 Licença

Este projeto está licenciado sob a MIT License.
📫 Contato

    Matheus Vilela Reis dos Santos
        Email: matheus@example.com
    Otávio Henrique Nascimento de Souza
        Email: otavio@example.com

📝 Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir uma issue ou enviar um pull request.

