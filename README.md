# crudrest
<h4 align="center"> 
	🚧 CRUD SIMPLES E INTUITIVO FEITO EM PHP+REST 🚀 Em construção...  🚧
</h4>

## Descrição do Projeto
<p align="center">Exemplo de um CRUD feito em PHP utilizando do REST para requisição e acesso ao banco de dados, Script utilizado como "desafio" para uma entrevista de emprego</p>

### Já feito

- [x] Conexão com o banco de dados [23/12/2021];
- [x] Requisições ao banco de dados da tabela empregados como exemplo[23/12/2021];
- [x] Requisição GET para pegar todos os empregados[24/12/2021];
- [x] Requisição GET pegar um único empregado[26/12/2021];
- [x] Requisição POST para adicionar um empregado[26/12/2021];
- [x] Requisição PUT/POST para editar um empregado[27/12/2021];
- [x] Requisição DELETE para deletar um empregado[27/12/2021];

### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas: <br>
[Git](https://git-scm.com), [XAMPP ou WAMPP ] Utilizei o XAMPP Segue o link: (https://www.apachefriends.org/pt_br/index.html). <br>
Além disto é bom ter um editor para trabalhar com o código como [VSCode ou Sublime, Notepad++, PHPStorm...] Utilizei o PHPStorm mas o visual é gratuito e tem praticamente as mesmas funcionalidades ou não...(https://code.visualstudio.com/) <br>

### 🎲 Rodando o Back End (servidor)

```bash
# Clone este repositório
$ git clone <https://github.com/aspiretony/crudrest>
```
Acesse a pasta do projeto, ir na pasta banco, copie o arquivo e subir para o mysql utilizando o phpmyadmin por exemplo. <br>
<br>
Ainda na pasta do projeto vá para config e abra com o editor o arquivo "db.php", edite o arquivo como por exemplo abaixo: <br>
<br>
OBS: DIGITE APENAS DENTRO DAS ASPAS...<br>
define("servidor_sql", "localhost");  >> troque localhost pelo host do seu servidor MySQL;<br>
define("usuario_sql", "root"); >> troque root pelo usuario do seu servidor MySQL;<br>
define("senha_sql", ""); >> dentro das aspas digite a senha do seu servidor MySQL;<br>
define("banco_de_dados", "bancocrud"); >> troque bancocrud pelo nome do banco de dados do seu servidor MySQL;<br>
<br>
# Pronto, só correr para o abraço

#Todas as requisições deve ser feita utilizando a pasta /api/   exemplo: https://localhost/api/ler.php || < Irar retornar todos os empregados.

### Autor
---

<a href="https://mdbr.tech/">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/21254630?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Marcos Antonio ou Tonhão</b></sub></a> <a href="https://mdbr.tech" title="Voialá">🚀</a>


Feito com ❤️ por SirTonhão 👋🏽 Entre em contato!

[![Linkedin Badge](https://img.shields.io/badge/-Tony-blue?style=flat-square&logo=Linkedin&logoColor=white&link=https://www.linkedin.com/in/marcosasneves/)](https://www.linkedin.com/in/marcosasneves/) 
[![Hotmail Badge](https://img.shields.io/badge/-otherside540n@hotmail.com-c14438?style=flat-square&logo=Hotmail&logoColor=white&link=mailto:otherside540n@hotmail.com)](mailto:otherside540n@hotmail.com)
