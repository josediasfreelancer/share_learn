---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#Biblioteca Geral

Método geral para listar todas as aplicações de second screen existentes
<!-- START_a937e1af565b778c570275206e33dd74 -->
## -&gt; Lista as aplicações de todos os utilizadores

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral`

`HEAD api/biblioteca-geral`


<!-- END_a937e1af565b778c570275206e33dd74 -->
<!-- START_f69550591aac402d1002c5a3e3b914b7 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/create`

`HEAD api/biblioteca-geral/create`


<!-- END_f69550591aac402d1002c5a3e3b914b7 -->
<!-- START_47e24fcfd4720c73d595fe71fdc8aa5a -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/biblioteca-geral`


<!-- END_47e24fcfd4720c73d595fe71fdc8aa5a -->
<!-- START_e5523691f36e72fadb1c1cf9a0c6d8cd -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{biblioteca_geral}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{biblioteca_geral}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/{biblioteca_geral}`

`HEAD api/biblioteca-geral/{biblioteca_geral}`


<!-- END_e5523691f36e72fadb1c1cf9a0c6d8cd -->
<!-- START_897726a4aae848033e843897889a3607 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{biblioteca_geral}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{biblioteca_geral}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/{biblioteca_geral}/edit`

`HEAD api/biblioteca-geral/{biblioteca_geral}/edit`


<!-- END_897726a4aae848033e843897889a3607 -->
<!-- START_3a889cf245139a3f63f233f1cccfe1c7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{biblioteca_geral}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{biblioteca_geral}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/biblioteca-geral/{biblioteca_geral}`

`PATCH api/biblioteca-geral/{biblioteca_geral}`


<!-- END_3a889cf245139a3f63f233f1cccfe1c7 -->
<!-- START_2dc7287dde4ce1fab26529db8f353182 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{biblioteca_geral}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{biblioteca_geral}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/biblioteca-geral/{biblioteca_geral}`


<!-- END_2dc7287dde4ce1fab26529db8f353182 -->
#Biblioteca Geral - Detalhe

Método geral para mostrar detalhes de uma aplicação
<!-- START_234fcd45bead2b91842d3a97b2380917 -->
## -&gt; Lista os detalhes da aplicação

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/{id}/detalhe`

`HEAD api/biblioteca-geral/{id}/detalhe`


<!-- END_234fcd45bead2b91842d3a97b2380917 -->
<!-- START_cb9eff3e9e68ea638aac659e85e56b9d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/{id}/detalhe/create`

`HEAD api/biblioteca-geral/{id}/detalhe/create`


<!-- END_cb9eff3e9e68ea638aac659e85e56b9d -->
<!-- START_79e5d3d99c5116dfb1b0dfd33bd74202 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/biblioteca-geral/{id}/detalhe`


<!-- END_79e5d3d99c5116dfb1b0dfd33bd74202 -->
<!-- START_ea71aba893aa533f2f142460180ebf5c -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/{id}/detalhe/{detalhe}`

`HEAD api/biblioteca-geral/{id}/detalhe/{detalhe}`


<!-- END_ea71aba893aa533f2f142460180ebf5c -->
<!-- START_432c37c857d24b533f1a5f987e28e5bc -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-geral/{id}/detalhe/{detalhe}/edit`

`HEAD api/biblioteca-geral/{id}/detalhe/{detalhe}/edit`


<!-- END_432c37c857d24b533f1a5f987e28e5bc -->
<!-- START_9ef6e01e6b2abab12f2a56eaca612372 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/biblioteca-geral/{id}/detalhe/{detalhe}`

`PATCH api/biblioteca-geral/{id}/detalhe/{detalhe}`


<!-- END_9ef6e01e6b2abab12f2a56eaca612372 -->
<!-- START_fe9a0975b550e2aa65b3ff2af2fcdbf3 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-geral/{id}/detalhe/{detalhe}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/biblioteca-geral/{id}/detalhe/{detalhe}`


<!-- END_fe9a0975b550e2aa65b3ff2af2fcdbf3 -->
#Biblioteca Pessoal

Método geral para listar as aplicações do meu perfil
<!-- START_201667d1f7ec406e91b30fcbdf31d5f2 -->
## -&gt; Mostra a lista das minhas aplicações

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal`

`HEAD api/biblioteca-pessoal`


<!-- END_201667d1f7ec406e91b30fcbdf31d5f2 -->
<!-- START_8c2f09f8d56e75b3358f0d9a0c6cbf2c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/create`

`HEAD api/biblioteca-pessoal/create`


<!-- END_8c2f09f8d56e75b3358f0d9a0c6cbf2c -->
<!-- START_5f231e0674a13c1b7e60544f7b9345ed -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/biblioteca-pessoal`


<!-- END_5f231e0674a13c1b7e60544f7b9345ed -->
<!-- START_ad130ef05ea9ef49212ad88abe3b1093 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/{biblioteca_pessoal}`

`HEAD api/biblioteca-pessoal/{biblioteca_pessoal}`


<!-- END_ad130ef05ea9ef49212ad88abe3b1093 -->
<!-- START_bd1f8eefc9992e47fad09c0b591285a5 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/{biblioteca_pessoal}/edit`

`HEAD api/biblioteca-pessoal/{biblioteca_pessoal}/edit`


<!-- END_bd1f8eefc9992e47fad09c0b591285a5 -->
<!-- START_6bdd0c93b13425e36ff42db76aa55a6e -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/biblioteca-pessoal/{biblioteca_pessoal}`

`PATCH api/biblioteca-pessoal/{biblioteca_pessoal}`


<!-- END_6bdd0c93b13425e36ff42db76aa55a6e -->
<!-- START_7499a782035cc5e2e1da9591c83cf258 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{biblioteca_pessoal}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/biblioteca-pessoal/{biblioteca_pessoal}`


<!-- END_7499a782035cc5e2e1da9591c83cf258 -->
#Biblioteca Pessoal - Detalhe

Método geral para listar o detalhe das minhas aplicações
<!-- START_5f5e056d3f3eea0a01f14cdd84cacb29 -->
## -&gt; Lista todas as minhas aplicações.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/{id}/detalhe`

`HEAD api/biblioteca-pessoal/{id}/detalhe`


<!-- END_5f5e056d3f3eea0a01f14cdd84cacb29 -->
<!-- START_9007f295d3e4d0cbe7a1abc5634277b2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/{id}/detalhe/create`

`HEAD api/biblioteca-pessoal/{id}/detalhe/create`


<!-- END_9007f295d3e4d0cbe7a1abc5634277b2 -->
<!-- START_bba3d37bad07a27c0cf2f2ff5143ddac -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/biblioteca-pessoal/{id}/detalhe`


<!-- END_bba3d37bad07a27c0cf2f2ff5143ddac -->
<!-- START_4d4ed2822ec61cd5da8c4c7b776a4921 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/{id}/detalhe/{detalhe}`

`HEAD api/biblioteca-pessoal/{id}/detalhe/{detalhe}`


<!-- END_4d4ed2822ec61cd5da8c4c7b776a4921 -->
<!-- START_7233f7913fa6ea001d2b655a62800078 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/biblioteca-pessoal/{id}/detalhe/{detalhe}/edit`

`HEAD api/biblioteca-pessoal/{id}/detalhe/{detalhe}/edit`


<!-- END_7233f7913fa6ea001d2b655a62800078 -->
<!-- START_3ce268d8f88197475b7977d1c3f0a98e -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/biblioteca-pessoal/{id}/detalhe/{detalhe}`

`PATCH api/biblioteca-pessoal/{id}/detalhe/{detalhe}`


<!-- END_3ce268d8f88197475b7977d1c3f0a98e -->
<!-- START_76b418d382d6f24d41c6d14a24944450 -->
## -&gt; Eliminar aplicação

> Example request:

```bash
curl "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/biblioteca-pessoal/{id}/detalhe/{detalhe}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/biblioteca-pessoal/{id}/detalhe/{detalhe}`


<!-- END_76b418d382d6f24d41c6d14a24944450 -->
#Criar Conteúdo

Método geral para criar conteúdos de second screen (Quiz)
<!-- START_9911fe4a4840e7a63f9fd1ad7a6bd4d8 -->
## -&gt; Lista cores, episódios e séries a apresentar ao utilizador

> Example request:

```bash
curl "http://localhost/api/criar-conteudo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/criar-conteudo`

`HEAD api/criar-conteudo`


<!-- END_9911fe4a4840e7a63f9fd1ad7a6bd4d8 -->
<!-- START_47a44572d0b4eafa07eb360886dd971c -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/criar-conteudo/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/criar-conteudo/create`

`HEAD api/criar-conteudo/create`


<!-- END_47a44572d0b4eafa07eb360886dd971c -->
<!-- START_4e1cb3d0501db188c6c86b0fb9f898b8 -->
## -&gt; Armazena perguntas, escolhas, cores e título da aplicação

> Example request:

```bash
curl "http://localhost/api/criar-conteudo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/criar-conteudo`


<!-- END_4e1cb3d0501db188c6c86b0fb9f898b8 -->
<!-- START_cbb8228fd376f5d8dec7cf9078e16dd3 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/criar-conteudo/{criar_conteudo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo/{criar_conteudo}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/criar-conteudo/{criar_conteudo}`

`HEAD api/criar-conteudo/{criar_conteudo}`


<!-- END_cbb8228fd376f5d8dec7cf9078e16dd3 -->
<!-- START_58c5f31a8f1988e6a1e78439dd727097 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/criar-conteudo/{criar_conteudo}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo/{criar_conteudo}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/criar-conteudo/{criar_conteudo}/edit`

`HEAD api/criar-conteudo/{criar_conteudo}/edit`


<!-- END_58c5f31a8f1988e6a1e78439dd727097 -->
<!-- START_f0c34c1607353b637daaa4210353fabd -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/criar-conteudo/{criar_conteudo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo/{criar_conteudo}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/criar-conteudo/{criar_conteudo}`

`PATCH api/criar-conteudo/{criar_conteudo}`


<!-- END_f0c34c1607353b637daaa4210353fabd -->
<!-- START_5fee164f489750cc07ef928d16bbcd2d -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/criar-conteudo/{criar_conteudo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/criar-conteudo/{criar_conteudo}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/criar-conteudo/{criar_conteudo}`


<!-- END_5fee164f489750cc07ef928d16bbcd2d -->
#Cronologia

Método geral de acesso à minha cronologia
<!-- START_1aff597c81cd829a8d50bbfcb0326137 -->
## -&gt; Lista as minhas aplicações com comentários associados, e imagem pessoal

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/cronologia/{id}`

`HEAD api/cronologia/{id}`


<!-- END_1aff597c81cd829a8d50bbfcb0326137 -->
<!-- START_fd3490d1fc71549c07a0c40437b0fb48 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/cronologia/{id}/create`

`HEAD api/cronologia/{id}/create`


<!-- END_fd3490d1fc71549c07a0c40437b0fb48 -->
<!-- START_01d606ce9978dcc7dd55574c50b68687 -->
## -&gt; Inserir comentário

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/cronologia/{id}`


<!-- END_01d606ce9978dcc7dd55574c50b68687 -->
<!-- START_2aea58f3693e3b63534ef4bf94e4e5d4 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}/{{id}}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/cronologia/{id}/{{id}}`

`HEAD api/cronologia/{id}/{{id}}`


<!-- END_2aea58f3693e3b63534ef4bf94e4e5d4 -->
<!-- START_52ec69bf030d0827dcaeac6202f1b8a3 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}/{{id}}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}/{{id}}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/cronologia/{id}/{{id}}/edit`

`HEAD api/cronologia/{id}/{{id}}/edit`


<!-- END_52ec69bf030d0827dcaeac6202f1b8a3 -->
<!-- START_a1eb18779f8fa8c8634b8b6284dafb52 -->
## -&gt; Altera o meu comentário

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}/{{id}}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/cronologia/{id}/{{id}}`

`PATCH api/cronologia/{id}/{{id}}`


<!-- END_a1eb18779f8fa8c8634b8b6284dafb52 -->
<!-- START_116b16861f32876e5a373e8553ff9a4e -->
## -&gt; Elimina o meu comentário

> Example request:

```bash
curl "http://localhost/api/cronologia/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/cronologia/{id}/{{id}}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/cronologia/{id}/{{id}}`


<!-- END_116b16861f32876e5a373e8553ff9a4e -->
#Editar Perfil

Método geral para alterar informações do user
<!-- START_4aea1c975dfbe4fbb00b0b1c932614ee -->
## -&gt; Mostra a imagem do user, nome, email, data_nascimento, entre outros dados.

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-perfil/{id}`

`HEAD api/editar-perfil/{id}`


<!-- END_4aea1c975dfbe4fbb00b0b1c932614ee -->
<!-- START_99043971ac39084886f7946fb5a1068f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-perfil/{id}/create`

`HEAD api/editar-perfil/{id}/create`


<!-- END_99043971ac39084886f7946fb5a1068f -->
<!-- START_2c8b3feb375ac6166f99bb85bc0f3bd9 -->
## -&gt; Guarda os dados inseridos no campo vazio

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/editar-perfil/{id}`


<!-- END_2c8b3feb375ac6166f99bb85bc0f3bd9 -->
<!-- START_e5876d9deb6f36f362fe3d1d46fd3f41 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}/{{id}}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-perfil/{id}/{{id}}`

`HEAD api/editar-perfil/{id}/{{id}}`


<!-- END_e5876d9deb6f36f362fe3d1d46fd3f41 -->
<!-- START_26283cf01dade70a953bff9f938427dd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}/{{id}}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}/{{id}}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-perfil/{id}/{{id}}/edit`

`HEAD api/editar-perfil/{id}/{{id}}/edit`


<!-- END_26283cf01dade70a953bff9f938427dd -->
<!-- START_195b6b902ee317547242a7a039dc91da -->
## -&gt; Edita os dados de cada campo

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}/{{id}}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/editar-perfil/{id}/{{id}}`

`PATCH api/editar-perfil/{id}/{{id}}`


<!-- END_195b6b902ee317547242a7a039dc91da -->
<!-- START_ef9c2b456773d6cc3a19bcf4726e2eaa -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{id}/{{id}}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/editar-perfil/{id}/{{id}}`


<!-- END_ef9c2b456773d6cc3a19bcf4726e2eaa -->
#Editar Registo

Método geral para ler e alterar dados sensíveis do utilizador
<!-- START_633daadccecc9f9c867805b251ac43bb -->
## -&gt; Mostra o nome/email do utilizador.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-registo/{id}`

`HEAD api/editar-registo/{id}`


<!-- END_633daadccecc9f9c867805b251ac43bb -->
<!-- START_4bfb636dacf4c5cc36ae7b54fbecf834 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-registo/{id}/create`

`HEAD api/editar-registo/{id}/create`


<!-- END_4bfb636dacf4c5cc36ae7b54fbecf834 -->
<!-- START_7fd226ed51c3b71b1fd35cbb371196f3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/editar-registo/{id}`


<!-- END_7fd226ed51c3b71b1fd35cbb371196f3 -->
<!-- START_876c036ed7dbdce892ca9e5b15765f10 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}/{{id}}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-registo/{id}/{{id}}`

`HEAD api/editar-registo/{id}/{{id}}`


<!-- END_876c036ed7dbdce892ca9e5b15765f10 -->
<!-- START_983fdbbb6a9a78ecb1b347e3ef663fad -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}/{{id}}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}/{{id}}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/editar-registo/{id}/{{id}}/edit`

`HEAD api/editar-registo/{id}/{{id}}/edit`


<!-- END_983fdbbb6a9a78ecb1b347e3ef663fad -->
<!-- START_340d6fda69975ff086e70fd866ca7071 -->
## -&gt; Altera valores de nome/email/password

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}/{{id}}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/editar-registo/{id}/{{id}}`

`PATCH api/editar-registo/{id}/{{id}}`


<!-- END_340d6fda69975ff086e70fd866ca7071 -->
<!-- START_4c81cb1701394418a374ebe6691fa63a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{id}/{{id}}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{id}/{{id}}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/editar-registo/{id}/{{id}}`


<!-- END_4c81cb1701394418a374ebe6691fa63a -->
#LandingPage

Método geral para chamar a biblioteca de conteúdos e inserção de comentários
<!-- START_33202d2e78c1e1fdedf4575cc7bf5097 -->
## -&gt; Mostra a listagem das aplicações existentes, sendo que também contém comentários e utilizadores associados para cada aplicação.

> Example request:

```bash
curl "http://localhost/api/landingpage" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "nome": "Quiz Pata",
        "descricao": "A descrição",
        "imagem": "imagem.jpg",
        "ficheiro_inicial": "file.rar",
        "ativo_app": 1,
        "idade": 11,
        "created_at": null,
        "updated_at": null,
        "ref_id_episodios": 1,
        "ref_id_disciplinas": 1,
        "ref_id_tipos": 1,
        "app_tem_comentarios": [
            {
                "id_comentarios": 1,
                "comentarios_texto": "qweqweqweqw",
                "ativo": 1,
                "created_at": null,
                "updated_at": null,
                "ref_id_aplicacao": 1,
                "ref_id_users": 1
            },
            {
                "id_comentarios": 2,
                "comentarios_texto": "slb",
                "ativo": 0,
                "created_at": null,
                "updated_at": null,
                "ref_id_aplicacao": 1,
                "ref_id_users": 1
            },
            {
                "id_comentarios": 3,
                "comentarios_texto": "qweqwe",
                "ativo": 1,
                "created_at": null,
                "updated_at": null,
                "ref_id_aplicacao": 1,
                "ref_id_users": 1
            }
        ],
        "app_tem_users": []
    },
    {
        "id": 2,
        "nome": "Dora a Exploradora",
        "descricao": "A descrição",
        "imagem": "imagem.jpg",
        "ficheiro_inicial": "file.rar",
        "ativo_app": 1,
        "idade": 11,
        "created_at": null,
        "updated_at": null,
        "ref_id_episodios": 1,
        "ref_id_disciplinas": 1,
        "ref_id_tipos": 1,
        "app_tem_comentarios": [],
        "app_tem_users": []
    },
    {
        "id": 3,
        "nome": "O urso João",
        "descricao": "A descrição",
        "imagem": "imagem.jpg",
        "ficheiro_inicial": "file.rar",
        "ativo_app": 1,
        "idade": 11,
        "created_at": null,
        "updated_at": null,
        "ref_id_episodios": 1,
        "ref_id_disciplinas": 1,
        "ref_id_tipos": 1,
        "app_tem_comentarios": [],
        "app_tem_users": []
    },
    {
        "id": 4,
        "nome": "Carrinha mágica",
        "descricao": "A descrição",
        "imagem": "imagem.jpg",
        "ficheiro_inicial": "file.rar",
        "ativo_app": 1,
        "idade": 11,
        "created_at": null,
        "updated_at": null,
        "ref_id_episodios": 1,
        "ref_id_disciplinas": 1,
        "ref_id_tipos": 1,
        "app_tem_comentarios": [],
        "app_tem_users": []
    }
]
```

### HTTP Request
`GET api/landingpage`

`HEAD api/landingpage`


<!-- END_33202d2e78c1e1fdedf4575cc7bf5097 -->
<!-- START_c33fae3d58c4091acf892609150039c5 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/landingpage/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/landingpage/create`

`HEAD api/landingpage/create`


<!-- END_c33fae3d58c4091acf892609150039c5 -->
<!-- START_f5983e644547da07226d5bd4ddad3660 -->
## -&gt; Inserção de comentários na store

> Example request:

```bash
curl "http://localhost/api/landingpage" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/landingpage`


<!-- END_f5983e644547da07226d5bd4ddad3660 -->
<!-- START_979826e38efa7fde07164547e4966121 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/landingpage/{landingpage}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage/{landingpage}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/landingpage/{landingpage}`

`HEAD api/landingpage/{landingpage}`


<!-- END_979826e38efa7fde07164547e4966121 -->
<!-- START_986c83094f6420f97b21ad9da89d4de1 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/landingpage/{landingpage}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage/{landingpage}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/landingpage/{landingpage}/edit`

`HEAD api/landingpage/{landingpage}/edit`


<!-- END_986c83094f6420f97b21ad9da89d4de1 -->
<!-- START_9d02256cf601d25ebe4f34b6e26da0c9 -->
## -&gt; Editar comentário da store.

> Example request:

```bash
curl "http://localhost/api/landingpage/{landingpage}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage/{landingpage}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/landingpage/{landingpage}`

`PATCH api/landingpage/{landingpage}`


<!-- END_9d02256cf601d25ebe4f34b6e26da0c9 -->
<!-- START_f2f9fc14dd8df4c0bbb6ada337a48efc -->
## -&gt; Eliminar comentário da store

> Example request:

```bash
curl "http://localhost/api/landingpage/{landingpage}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/landingpage/{landingpage}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/landingpage/{landingpage}`


<!-- END_f2f9fc14dd8df4c0bbb6ada337a48efc -->
#Login/Registo

Método geral para chamada de acesso e registo na API, com update de dados
<!-- START_10fb7d8fad114ca30c6e101867a5f70f -->
## -&gt; Lê o input do utilizador no client side e compara com valores da db. Se retornar um output negativo, o acesso não foi permitido.

> Example request:

```bash
curl "http://localhost/api/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/login`

`HEAD api/login`


<!-- END_10fb7d8fad114ca30c6e101867a5f70f -->
<!-- START_aeb00017dfb0d62cb96b1ae3b3b28ff5 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/login/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/login/create`

`HEAD api/login/create`


<!-- END_aeb00017dfb0d62cb96b1ae3b3b28ff5 -->
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## -&gt; Guarda um utilizador novo na store

> Example request:

```bash
curl "http://localhost/api/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->
<!-- START_1a5f1e2580b1b22b9d628dfe10a79e27 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/login/{login}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login/{login}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/login/{login}`

`HEAD api/login/{login}`


<!-- END_1a5f1e2580b1b22b9d628dfe10a79e27 -->
<!-- START_2ddca75ac0c99f8f4c4f3e55740a3c84 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/login/{login}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login/{login}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/login/{login}/edit`

`HEAD api/login/{login}/edit`


<!-- END_2ddca75ac0c99f8f4c4f3e55740a3c84 -->
<!-- START_ae3e91f005aa2c28f49e7d41e9890bda -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/login/{login}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login/{login}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/login/{login}`

`PATCH api/login/{login}`


<!-- END_ae3e91f005aa2c28f49e7d41e9890bda -->
<!-- START_c23c395e315b7ae1c5866223eb1f17bc -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/login/{login}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login/{login}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/login/{login}`


<!-- END_c23c395e315b7ae1c5866223eb1f17bc -->
#Look&amp;Learn - Episódio

Método geral para listar as apps de uma determinada série e nome do episódio respetivo
<!-- START_1b270511ca6c20fce6711fae240bcd80 -->
## -&gt; Listar todas as apps de uma série

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/episodio`

`HEAD api/look-learn-series/{id}/episodio`


<!-- END_1b270511ca6c20fce6711fae240bcd80 -->
<!-- START_dd5ad36281170a8d3aa99390e16084fa -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/episodio/create`

`HEAD api/look-learn-series/{id}/episodio/create`


<!-- END_dd5ad36281170a8d3aa99390e16084fa -->
<!-- START_de6ca2d804b4533263e30894f1826501 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/look-learn-series/{id}/episodio`


<!-- END_de6ca2d804b4533263e30894f1826501 -->
<!-- START_2e815749cfd4d03b35b7cd541784e5ea -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio/{episodio}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio/{episodio}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/episodio/{episodio}`

`HEAD api/look-learn-series/{id}/episodio/{episodio}`


<!-- END_2e815749cfd4d03b35b7cd541784e5ea -->
<!-- START_4c87eb29e8f65d05038c0c9a7395aa31 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio/{episodio}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio/{episodio}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/episodio/{episodio}/edit`

`HEAD api/look-learn-series/{id}/episodio/{episodio}/edit`


<!-- END_4c87eb29e8f65d05038c0c9a7395aa31 -->
<!-- START_955d35a1c7b409375726fafa24d5f27b -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio/{episodio}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio/{episodio}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/look-learn-series/{id}/episodio/{episodio}`

`PATCH api/look-learn-series/{id}/episodio/{episodio}`


<!-- END_955d35a1c7b409375726fafa24d5f27b -->
<!-- START_02d7d3dd470ab01d51a22a103d358037 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/episodio/{episodio}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/episodio/{episodio}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/look-learn-series/{id}/episodio/{episodio}`


<!-- END_02d7d3dd470ab01d51a22a103d358037 -->
#Look&amp;Learn - Quiz

Método geral para correr um quiz criado
<!-- START_d8172add02151e8fdb3d44f6ae7bf261 -->
## -&gt; Mostra o quiz

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/app`

`HEAD api/look-learn-series/{id}/app`


<!-- END_d8172add02151e8fdb3d44f6ae7bf261 -->
<!-- START_97ee8848793513842ddba04782c44847 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/app/create`

`HEAD api/look-learn-series/{id}/app/create`


<!-- END_97ee8848793513842ddba04782c44847 -->
<!-- START_ebe03c8529825fd40458e3f3c2efcc42 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/look-learn-series/{id}/app`


<!-- END_ebe03c8529825fd40458e3f3c2efcc42 -->
<!-- START_6d825c7b56897afb5c62e587f9620fe3 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app/{app}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app/{app}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/app/{app}`

`HEAD api/look-learn-series/{id}/app/{app}`


<!-- END_6d825c7b56897afb5c62e587f9620fe3 -->
<!-- START_0caa12d350e3777aad138e88f3c5581a -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app/{app}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app/{app}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{id}/app/{app}/edit`

`HEAD api/look-learn-series/{id}/app/{app}/edit`


<!-- END_0caa12d350e3777aad138e88f3c5581a -->
<!-- START_48af63959741d52197804cf9e0780d18 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app/{app}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app/{app}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/look-learn-series/{id}/app/{app}`

`PATCH api/look-learn-series/{id}/app/{app}`


<!-- END_48af63959741d52197804cf9e0780d18 -->
<!-- START_cbf57c42aaf221b03782a28333754fef -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{id}/app/{app}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{id}/app/{app}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/look-learn-series/{id}/app/{app}`


<!-- END_cbf57c42aaf221b03782a28333754fef -->
#Look&amp;Learn - Séries

Método geral para listar todas as séries de TV com app de second screen associada
<!-- START_11905ff92dab7e991184d7c1d060d8b4 -->
## -&gt; Mostra todas as séries

> Example request:

```bash
curl "http://localhost/api/look-learn-series" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series`

`HEAD api/look-learn-series`


<!-- END_11905ff92dab7e991184d7c1d060d8b4 -->
<!-- START_2c6dc40614366c64bcb66608a864fe63 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/create`

`HEAD api/look-learn-series/create`


<!-- END_2c6dc40614366c64bcb66608a864fe63 -->
<!-- START_921520b8679fe478cb245e4d90a08137 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/look-learn-series`


<!-- END_921520b8679fe478cb245e4d90a08137 -->
<!-- START_ae05f3281de08fed728ead5c8447ea5f -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{look_learn_series}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{look_learn_series}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{look_learn_series}`

`HEAD api/look-learn-series/{look_learn_series}`


<!-- END_ae05f3281de08fed728ead5c8447ea5f -->
<!-- START_04199a4edb4fea9cfad28bdd5a59b7e0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{look_learn_series}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{look_learn_series}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/look-learn-series/{look_learn_series}/edit`

`HEAD api/look-learn-series/{look_learn_series}/edit`


<!-- END_04199a4edb4fea9cfad28bdd5a59b7e0 -->
<!-- START_32967024d163404c745fb55b4bff68dc -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{look_learn_series}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{look_learn_series}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/look-learn-series/{look_learn_series}`

`PATCH api/look-learn-series/{look_learn_series}`


<!-- END_32967024d163404c745fb55b4bff68dc -->
<!-- START_1dad34495f1ce83247c365b622932b64 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/look-learn-series/{look_learn_series}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/{look_learn_series}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/look-learn-series/{look_learn_series}`


<!-- END_1dad34495f1ce83247c365b622932b64 -->
#Sobre

Método geral para ler/escrever detalhes do utilizador
<!-- START_27d3d0ad222d50a8f28674db6388678a -->
## -&gt; Lista os detalhes do utilizador

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sobre/{id}/user`

`HEAD api/sobre/{id}/user`


<!-- END_27d3d0ad222d50a8f28674db6388678a -->
<!-- START_92e477426b7f1048bc50e4a7b8125c06 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sobre/{id}/user/create`

`HEAD api/sobre/{id}/user/create`


<!-- END_92e477426b7f1048bc50e4a7b8125c06 -->
<!-- START_7a8f4c037f73b25e62e96c7f1ae99589 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/sobre/{id}/user`


<!-- END_7a8f4c037f73b25e62e96c7f1ae99589 -->
<!-- START_dbe4565024014f51d040c7fbafadc286 -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sobre/{id}/user/{user}`

`HEAD api/sobre/{id}/user/{user}`


<!-- END_dbe4565024014f51d040c7fbafadc286 -->
<!-- START_606510756123dbb685716937bf298d1b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user/{user}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user/{user}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/sobre/{id}/user/{user}/edit`

`HEAD api/sobre/{id}/user/{user}/edit`


<!-- END_606510756123dbb685716937bf298d1b -->
<!-- START_2e69c1c0f36f0bf025e5a970a1ba6290 -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user/{user}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/sobre/{id}/user/{user}`

`PATCH api/sobre/{id}/user/{user}`


<!-- END_2e69c1c0f36f0bf025e5a970a1ba6290 -->
<!-- START_3a40d881a684284c912cf1cd26581b66 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/sobre/{id}/user/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{id}/user/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/sobre/{id}/user/{user}`


<!-- END_3a40d881a684284c912cf1cd26581b66 -->
#Upload

Método geral para upload de aplicações e acesso ao editor de conteúdos
<!-- START_a1dfff809184a700822d8b4686fce822 -->
## -&gt; Mostra uma lista de aplicações já existentes

> Example request:

```bash
curl "http://localhost/api/upload" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/upload`

`HEAD api/upload`


<!-- END_a1dfff809184a700822d8b4686fce822 -->
<!-- START_1f75b9d08047aabd39a3a87f3ab95eb3 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl "http://localhost/api/upload/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/upload/create`

`HEAD api/upload/create`


<!-- END_1f75b9d08047aabd39a3a87f3ab95eb3 -->
<!-- START_6e7e2bdf41dacf38a5c6768ef817e8b6 -->
## -&gt; Armazena parâmetros necessários para que a aplicação fique disponível na biblioteca

> Example request:

```bash
curl "http://localhost/api/upload" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/upload`


<!-- END_6e7e2bdf41dacf38a5c6768ef817e8b6 -->
<!-- START_9d0b5ac3dc959edb9ab819f21431c55a -->
## Display the specified resource.

> Example request:

```bash
curl "http://localhost/api/upload/{upload}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload/{upload}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/upload/{upload}`

`HEAD api/upload/{upload}`


<!-- END_9d0b5ac3dc959edb9ab819f21431c55a -->
<!-- START_50794804d22b4fa127026004be716eb8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl "http://localhost/api/upload/{upload}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload/{upload}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/upload/{upload}/edit`

`HEAD api/upload/{upload}/edit`


<!-- END_50794804d22b4fa127026004be716eb8 -->
<!-- START_290ee0838c19fced242045c990164acc -->
## Update the specified resource in storage.

> Example request:

```bash
curl "http://localhost/api/upload/{upload}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload/{upload}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/upload/{upload}`

`PATCH api/upload/{upload}`


<!-- END_290ee0838c19fced242045c990164acc -->
<!-- START_7948aa0ef76496b3e0c697a574f69c85 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/upload/{upload}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/upload/{upload}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/upload/{upload}`


<!-- END_7948aa0ef76496b3e0c697a574f69c85 -->
