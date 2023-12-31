##
### GESTOR DE QUERIES
##



### 1 - INTRODUÇÃO

- PHP 
- MySQL 
- Postman
    - Site: https://www.postman.com/
- Laragon
    - Site: https://laragon.org/download/index.html
- Codeigniter 4
    - Site: https://www.codeigniter.com/
    - Downloads: https://www.codeigniter.com/download
- HeidiSQL
    - Site: https://www.heidisql.com/
- Bootstrap
    - Site: https://getbootstrap.com/docs/5.3/getting-started/download/
- Bootswatch
    - Site: https://bootswatch.com/
    - Theme Slate: https://bootswatch.com/slate/
- FontAwesome
    - Site: https://fontawesome.com/
    - Downloads: https://fontawesome.com/download
    - Free Icons: https://fsontawesome.com/search?m=free&o=r



**CRUD**

 - env

- Criar a Main
```
php spark make:controller Main
```

- URLs
    - Localhost: http://localhost/gestor_queries-codeigniter_4/code-app_01/public/

- Exemplo:
    - code-app_01





### 2 - LAYOUT BASE DA APLICAÇÃO

- Google fonts
    - Site: https://fonts.google.com/

- URLs
    - Localhost: http://localhost/gestor_queries-codeigniter_4/code-app_02/public/

- Exemplo:
    - code-app_02




### 3 - REPOSITÓRIO NO GITHUB

- URLs
    - Localhost: http://localhost/gestor_queries-codeigniter_4/code-app_03/public/

**Github**

```
git init
```

```
git config --global user.name "Seu Nome"
```

```
git config --global user.email "Exemplo.@gmail.com"
```

```
git status
```

```
git add .
```

```
git commit -m "meu commit"
```

- Criar um novo repositorio no site do github
- Site: https://github.com/new

**…or push an existing repository from the command line**
```
git remote add origin https://github.com/daniel-oliv3/gestor_queries-codeigniter_4.git
```

```
git branch -M main
```

```
git push -u origin main
```

- Exemplo:
    - code-app_03


### 4 - VIEW DE LOGIN

- Exemplo:
    - code-app_04


### 5 - DESENVOLVIMENTO DA PÁGINA INCIAL DA APLICAÇÃO

```html
<!--
    - campo para pesquisa (button)
    - um select com os varios projetos
    - um botão para adicionar a nova query

    tabela com as queries

    cada query
        - query sql
        - nome
        - tags de pesquisa
        - projeto
        - criado em
        - atualizado em
 -->
```

**DataTables**

- Plugin para criação de tabelas
    - Site: https://datatables.net/
    - Downloads: https://datatables.net/download/


*The latest iteration of the ever popular Bootstrap framework.*

- Bootstrap 5

```txt
https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.css
 
https://cdn.datatables.net/v/bs5/dt-1.13.5/datatables.min.js
```

**JQuery CDN**

- JQuery
    - Site: https://releases.jquery.com/

- Version: Minifield


```txt
https://code.jquery.com/jquery-3.7.0.min.js
```

- Exemplo:
    - code-app_05


### 6 - CONTINUAÇÃO DA PÁGINA INCIAL DA APLICAÇÃO

- Exemplo:
    - code-app_06


### 7 DATATABLES

- Exemplo:
    - code-app_07




### 8 - FORMULÁRIO PARA NOVA QUERY

**DataList**

- Datalist
    - Site Mozilla: https://developer.mozilla.org/en-US/docs/Web/HTML/Element/datalist

```html
<!-- exemplo datalist -->

<input list="ice-cream-flavors" id="ice-cream-choice" name="ice-cream-choice">

<datalist id="ice-cream-flavors">
    <option value="Chocolate">
    <option value="Coconut">
    <option value="Mint">
    <option value="Strawberry">
    <option value="Vanilla">
</datalist>

```

- Exemplo:
    - code-app_08




### 9 - BASE DE DADOS COM MIGRATIONS

**Base de Dados**

- Criação da base de dados 

**Migrations**

- Criação da migration Users, dentro do fichaiero `DataBase/Migrations` 

```
php spark make:migration Users
```

- Criando a migration Queries

```
php spark make:migration Queries
```

- Migrate (update)

```
php spark migrate
```

- how to rollback migration in codeigniter 4

```
php spark migrate:rollback
```

- Migrate (update)

```
php spark migrate
```

- Exemplo:
    - code-app_09




### 10 - ARRUMAÇÕES NO LAYOUT


- Exemplo:
    - code-app_10






































