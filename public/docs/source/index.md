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

Controlador para listar todas as aplicações de second screen existentes
<!-- START_a937e1af565b778c570275206e33dd74 -->
## -&gt; Lista as aplicações de todos os utilizadores e permite query das series por parametros de url

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
{
    "data": [
        {
            "id": 2,
            "nome": "Dora a Exploradora",
            "descricao": "A descrição",
            "imagem": "imagem.jpg",
            "ficheiro_inicial": "file.rar",
            "ativo_app": 1,
            "idade": 11,
            "created_at": "2017-01-09 16:17:22",
            "updated_at": "2017-01-09 16:17:22",
            "ref_id_episodios": 1,
            "ref_id_disciplinas": 1,
            "ref_id_tipos": 1
        },
        {
            "id": 3,
            "nome": "O urso João",
            "descricao": "A descrição",
            "imagem": "imagem.jpg",
            "ficheiro_inicial": "file.rar",
            "ativo_app": 1,
            "idade": 11,
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "ref_id_episodios": 1,
            "ref_id_disciplinas": 1,
            "ref_id_tipos": 1
        },
        {
            "id": 4,
            "nome": "Carrinha mágica",
            "descricao": "A descrição",
            "imagem": "imagem.jpg",
            "ficheiro_inicial": "file.rar",
            "ativo_app": 1,
            "idade": 11,
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "ref_id_episodios": 1,
            "ref_id_disciplinas": 1,
            "ref_id_tipos": 1
        }
    ],
    "data2": [
        {
            "id_series": 1,
            "nome_series": "Dexter",
            "imagem_series": "http:\/\/tbsila.cdn.turner.com\/toonla\/images\/cnemea\/content\/375\/downloadable\/dexter\/uk\/dexter01_600x400.jpg",
            "created_at": "2017-01-09 16:17:21",
            "updated_at": "2017-01-09 16:17:21",
            "ref_id_canal": 1
        },
        {
            "id_series": 2,
            "nome_series": "Cow and Chicken",
            "imagem_series": "http:\/\/assets2.pop-buzz.com\/2015\/39\/cow-and-chicken-1443625206-responsive-large-0.jpg",
            "created_at": "2017-01-09 16:17:21",
            "updated_at": "2017-01-09 16:17:21",
            "ref_id_canal": 1
        }
    ]
}
```

### HTTP Request
`GET api/biblioteca-geral`

`HEAD api/biblioteca-geral`


<!-- END_a937e1af565b778c570275206e33dd74 -->
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
{
    "data": null
}
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
## -&gt; Eliminar aplicação

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
#Editar Perfil

Método geral para alterar informações do user
<!-- START_ca76bbe684edf4e1f711256943f65ca0 -->
## -&gt; Lista as informações de todos os users

> Example request:

```bash
curl "http://localhost/api/editar-perfil" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil",
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
{
    "data": [
        {
            "id_users": 1,
            "username": "umueller",
            "email": "casimir00@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-12 15:39:19",
            "imagem_user": "images\/profile\/7bc64c64c69211f2917e1227a385f226.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": "lisboa2",
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 2,
            "username": "rippin.ona",
            "email": "alexandra.morar@yahoo.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-12 16:46:32",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 3,
            "username": "crooks.daron",
            "email": "eloy.rice@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 4,
            "username": "bahringer.adaline",
            "email": "dedrick.schaefer@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 5,
            "username": "vicky06",
            "email": "fahey.ashly@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 6,
            "username": "keagan28",
            "email": "loraine.considine@effertz.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 7,
            "username": "funk.aidan",
            "email": "wcrist@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 8,
            "username": "eparker",
            "email": "fernando.wunsch@jakubowski.org",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 9,
            "username": "hettie29",
            "email": "elsa75@abbott.biz",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 10,
            "username": "wilber.schuster",
            "email": "raoul.keeling@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 11,
            "username": "xkuphal",
            "email": "pearline.cartwright@hotmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 12,
            "username": "kiley28",
            "email": "elindgren@west.net",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 13,
            "username": "raphaelle.yost",
            "email": "clemmie.zboncak@abshire.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 14,
            "username": "mayert.jayne",
            "email": "cleve78@leannon.info",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 15,
            "username": "ycollier",
            "email": "emmalee33@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 16,
            "username": "keanu54",
            "email": "cletus79@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 17,
            "username": "sonny65",
            "email": "angelo.lemke@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 18,
            "username": "nicolas.brianne",
            "email": "ufritsch@gmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 19,
            "username": "urodriguez",
            "email": "runte.olaf@vandervort.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 20,
            "username": "junius.effertz",
            "email": "daugherty.kelli@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 21,
            "username": "lizeth22",
            "email": "renner.brendon@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 22,
            "username": "frobel",
            "email": "sylvan16@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 23,
            "username": "zboncak.dariana",
            "email": "rey.buckridge@koelpin.org",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 24,
            "username": "eldon.lemke",
            "email": "roxane05@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 25,
            "username": "david.turner",
            "email": "cronin.kianna@stroman.info",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 26,
            "username": "forrest.abernathy",
            "email": "champlin.anna@franecki.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 27,
            "username": "julia.hansen",
            "email": "rose.robel@medhurst.info",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 28,
            "username": "douglas.myrna",
            "email": "robyn.schaefer@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 29,
            "username": "oheidenreich",
            "email": "stroman.briana@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 30,
            "username": "gulgowski.amos",
            "email": "mackenzie61@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 31,
            "username": "udubuque",
            "email": "gus44@ernser.biz",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 32,
            "username": "vfranecki",
            "email": "ekovacek@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 33,
            "username": "silas.bayer",
            "email": "franz61@kshlerin.org",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 34,
            "username": "cathrine.kuphal",
            "email": "ashly40@stoltenberg.net",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 35,
            "username": "bernhard.odessa",
            "email": "estefania.von@hamill.biz",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 36,
            "username": "myrtis50",
            "email": "kian84@ryan.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 37,
            "username": "wfeeney",
            "email": "katrine95@nader.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 38,
            "username": "mckenzie.johan",
            "email": "stroman.antonia@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 39,
            "username": "webster.parker",
            "email": "adolphus.gerhold@rowe.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 40,
            "username": "elza78",
            "email": "gutkowski.carley@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 41,
            "username": "nicolas.loy",
            "email": "denis.roberts@hotmail.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 42,
            "username": "neoma.mckenzie",
            "email": "lionel02@strosin.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 43,
            "username": "green78",
            "email": "yost.jerrell@lueilwitz.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 44,
            "username": "russel.cory",
            "email": "eheathcote@johnson.info",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 45,
            "username": "cokuneva",
            "email": "pauline60@keeling.biz",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 46,
            "username": "richard53",
            "email": "hpredovic@gmail.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 47,
            "username": "walker.nader",
            "email": "nwolf@yahoo.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 48,
            "username": "andres.mcglynn",
            "email": "wilson.klein@yahoo.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 49,
            "username": "lincoln83",
            "email": "genesis.lindgren@bergstrom.org",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 50,
            "username": "lynch.ward",
            "email": "kgusikowski@gmail.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 51,
            "username": "tostas",
            "email": "tostas@ua.pt",
            "created_at": "2017-01-09 23:20:15",
            "updated_at": "2017-01-10 02:06:11",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 53,
            "username": "tostas2",
            "email": "tostas2@ua.pt",
            "created_at": "2017-01-11 17:49:46",
            "updated_at": "2017-01-11 17:49:46",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 54,
            "username": "gay",
            "email": "gay@ua.pt",
            "created_at": "2017-01-11 20:04:54",
            "updated_at": "2017-01-11 22:29:22",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 55,
            "username": "el_diaz",
            "email": "rit@ua.pt",
            "created_at": "2017-01-11 22:29:38",
            "updated_at": "2017-01-11 22:29:38",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        }
    ]
}
```

### HTTP Request
`GET api/editar-perfil`

`HEAD api/editar-perfil`


<!-- END_ca76bbe684edf4e1f711256943f65ca0 -->
<!-- START_9f55e41f30883f3de7547bbf66edd67f -->
## -&gt; Mostra os dados de um único utilizador - nome, email, imagem, .

..

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{editar_perfil}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{editar_perfil}",
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
{
    "data": [
        {
            "id_users": 1,
            "username": "umueller",
            "email": "casimir00@gmail.com",
            "imagem_user": "images\/profile\/7bc64c64c69211f2917e1227a385f226.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": "lisboa2",
            "nacionalidade": null,
            "descricao": null
        }
    ]
}
```

### HTTP Request
`GET api/editar-perfil/{editar_perfil}`

`HEAD api/editar-perfil/{editar_perfil}`


<!-- END_9f55e41f30883f3de7547bbf66edd67f -->
<!-- START_43e47feaba9dfaad0d221661316a1dda -->
## -&gt; Edita os dados de cada campo recebido

> Example request:

```bash
curl "http://localhost/api/editar-perfil/{editar_perfil}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-perfil/{editar_perfil}",
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
`PUT api/editar-perfil/{editar_perfil}`

`PATCH api/editar-perfil/{editar_perfil}`


<!-- END_43e47feaba9dfaad0d221661316a1dda -->
<!-- START_2c8b3feb375ac6166f99bb85bc0f3bd9 -->
## -&gt; Altera imagem do user - POST

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
#Editar Registo

Método geral para ler e alterar dados sensíveis do utilizador
<!-- START_0efb85a8a7ad35d28c29f8df057f0038 -->
## -&gt; Mostra o nome/email de todos os utilizadores.

> Example request:

```bash
curl "http://localhost/api/editar-registo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo",
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
{
    "data": [
        {
            "id_users": 1,
            "username": "umueller",
            "email": "casimir00@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-12 15:39:19",
            "imagem_user": "images\/profile\/7bc64c64c69211f2917e1227a385f226.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": "lisboa2",
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 2,
            "username": "rippin.ona",
            "email": "alexandra.morar@yahoo.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-12 16:46:32",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 3,
            "username": "crooks.daron",
            "email": "eloy.rice@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 4,
            "username": "bahringer.adaline",
            "email": "dedrick.schaefer@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 5,
            "username": "vicky06",
            "email": "fahey.ashly@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 6,
            "username": "keagan28",
            "email": "loraine.considine@effertz.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 7,
            "username": "funk.aidan",
            "email": "wcrist@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 8,
            "username": "eparker",
            "email": "fernando.wunsch@jakubowski.org",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 9,
            "username": "hettie29",
            "email": "elsa75@abbott.biz",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 10,
            "username": "wilber.schuster",
            "email": "raoul.keeling@gmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 11,
            "username": "xkuphal",
            "email": "pearline.cartwright@hotmail.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 12,
            "username": "kiley28",
            "email": "elindgren@west.net",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 13,
            "username": "raphaelle.yost",
            "email": "clemmie.zboncak@abshire.com",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 14,
            "username": "mayert.jayne",
            "email": "cleve78@leannon.info",
            "created_at": "2017-01-09 16:17:23",
            "updated_at": "2017-01-09 16:17:23",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 15,
            "username": "ycollier",
            "email": "emmalee33@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 16,
            "username": "keanu54",
            "email": "cletus79@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 17,
            "username": "sonny65",
            "email": "angelo.lemke@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 18,
            "username": "nicolas.brianne",
            "email": "ufritsch@gmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 19,
            "username": "urodriguez",
            "email": "runte.olaf@vandervort.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 20,
            "username": "junius.effertz",
            "email": "daugherty.kelli@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 21,
            "username": "lizeth22",
            "email": "renner.brendon@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 22,
            "username": "frobel",
            "email": "sylvan16@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 23,
            "username": "zboncak.dariana",
            "email": "rey.buckridge@koelpin.org",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 24,
            "username": "eldon.lemke",
            "email": "roxane05@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 25,
            "username": "david.turner",
            "email": "cronin.kianna@stroman.info",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 26,
            "username": "forrest.abernathy",
            "email": "champlin.anna@franecki.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 27,
            "username": "julia.hansen",
            "email": "rose.robel@medhurst.info",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 28,
            "username": "douglas.myrna",
            "email": "robyn.schaefer@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 29,
            "username": "oheidenreich",
            "email": "stroman.briana@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 30,
            "username": "gulgowski.amos",
            "email": "mackenzie61@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 31,
            "username": "udubuque",
            "email": "gus44@ernser.biz",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 32,
            "username": "vfranecki",
            "email": "ekovacek@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 33,
            "username": "silas.bayer",
            "email": "franz61@kshlerin.org",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 34,
            "username": "cathrine.kuphal",
            "email": "ashly40@stoltenberg.net",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 35,
            "username": "bernhard.odessa",
            "email": "estefania.von@hamill.biz",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 36,
            "username": "myrtis50",
            "email": "kian84@ryan.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 37,
            "username": "wfeeney",
            "email": "katrine95@nader.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 38,
            "username": "mckenzie.johan",
            "email": "stroman.antonia@yahoo.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 39,
            "username": "webster.parker",
            "email": "adolphus.gerhold@rowe.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 40,
            "username": "elza78",
            "email": "gutkowski.carley@hotmail.com",
            "created_at": "2017-01-09 16:17:24",
            "updated_at": "2017-01-09 16:17:24",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 41,
            "username": "nicolas.loy",
            "email": "denis.roberts@hotmail.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 42,
            "username": "neoma.mckenzie",
            "email": "lionel02@strosin.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 43,
            "username": "green78",
            "email": "yost.jerrell@lueilwitz.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 44,
            "username": "russel.cory",
            "email": "eheathcote@johnson.info",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 45,
            "username": "cokuneva",
            "email": "pauline60@keeling.biz",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 46,
            "username": "richard53",
            "email": "hpredovic@gmail.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 47,
            "username": "walker.nader",
            "email": "nwolf@yahoo.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 48,
            "username": "andres.mcglynn",
            "email": "wilson.klein@yahoo.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 49,
            "username": "lincoln83",
            "email": "genesis.lindgren@bergstrom.org",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 50,
            "username": "lynch.ward",
            "email": "kgusikowski@gmail.com",
            "created_at": "2017-01-09 16:17:25",
            "updated_at": "2017-01-09 16:17:25",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 51,
            "username": "tostas",
            "email": "tostas@ua.pt",
            "created_at": "2017-01-09 23:20:15",
            "updated_at": "2017-01-10 02:06:11",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 53,
            "username": "tostas2",
            "email": "tostas2@ua.pt",
            "created_at": "2017-01-11 17:49:46",
            "updated_at": "2017-01-11 17:49:46",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 54,
            "username": "gay",
            "email": "gay@ua.pt",
            "created_at": "2017-01-11 20:04:54",
            "updated_at": "2017-01-11 22:29:22",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 55,
            "username": "el_diaz",
            "email": "rit@ua.pt",
            "created_at": "2017-01-11 22:29:38",
            "updated_at": "2017-01-11 22:29:38",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        }
    ]
}
```

### HTTP Request
`GET api/editar-registo`

`HEAD api/editar-registo`


<!-- END_0efb85a8a7ad35d28c29f8df057f0038 -->
<!-- START_cb1e3ea3e2a21017c4dc6053601764a7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl "http://localhost/api/editar-registo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo",
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
`POST api/editar-registo`


<!-- END_cb1e3ea3e2a21017c4dc6053601764a7 -->
<!-- START_f73fcfca559b59070ab7257dd841e0aa -->
## Mostra um único utilizador de acordo com o seu ID

> Example request:

```bash
curl "http://localhost/api/editar-registo/{editar_registo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{editar_registo}",
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
{
    "data": [
        {
            "id_users": 1,
            "username": "umueller",
            "email": "casimir00@gmail.com",
            "imagem_user": "images\/profile\/7bc64c64c69211f2917e1227a385f226.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": "lisboa2",
            "nacionalidade": null,
            "descricao": null
        }
    ]
}
```

### HTTP Request
`GET api/editar-registo/{editar_registo}`

`HEAD api/editar-registo/{editar_registo}`


<!-- END_f73fcfca559b59070ab7257dd841e0aa -->
<!-- START_bf29eb298ddd8bd978f95863b10ccef4 -->
## -&gt; Altera valores de nome/email/password

> Example request:

```bash
curl "http://localhost/api/editar-registo/{editar_registo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{editar_registo}",
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
`PUT api/editar-registo/{editar_registo}`

`PATCH api/editar-registo/{editar_registo}`


<!-- END_bf29eb298ddd8bd978f95863b10ccef4 -->
<!-- START_803f642ad1b7458ca6c94a34185dfe43 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl "http://localhost/api/editar-registo/{editar_registo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/editar-registo/{editar_registo}",
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
`DELETE api/editar-registo/{editar_registo}`


<!-- END_803f642ad1b7458ca6c94a34185dfe43 -->
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
{
    "data": [
        {
            "app": {
                "id": 2,
                "nome": "Dora a Exploradora",
                "descricao": "A descrição",
                "imagem": "imagem.jpg",
                "ficheiro_inicial": "file.rar",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-01-09 16:17:22",
                "updated_at": "2017-01-09 16:17:22",
                "ref_id_episodios": 1,
                "ref_id_disciplinas": 1,
                "ref_id_tipos": 1
            }
        },
        {
            "app": {
                "id": 3,
                "nome": "O urso João",
                "descricao": "A descrição",
                "imagem": "imagem.jpg",
                "ficheiro_inicial": "file.rar",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-01-09 16:17:23",
                "updated_at": "2017-01-09 16:17:23",
                "ref_id_episodios": 1,
                "ref_id_disciplinas": 1,
                "ref_id_tipos": 1
            }
        },
        {
            "app": {
                "id": 4,
                "nome": "Carrinha mágica",
                "descricao": "A descrição",
                "imagem": "imagem.jpg",
                "ficheiro_inicial": "file.rar",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-01-09 16:17:23",
                "updated_at": "2017-01-09 16:17:23",
                "ref_id_episodios": 1,
                "ref_id_disciplinas": 1,
                "ref_id_tipos": 1
            }
        }
    ]
}
```

### HTTP Request
`GET api/landingpage`

`HEAD api/landingpage`


<!-- END_33202d2e78c1e1fdedf4575cc7bf5097 -->
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
#Login/Registo

Método geral para chamada de acesso e registo na API, com update de dados
<!-- START_50799eeda2f2fd956bc1f6a5526b52a1 -->
## -&gt; Login de utilizador

> Example request:

```bash
curl "http://localhost/api/registo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/registo",
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
{
    "data": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjAwMjRmMjQ3OThmZGI1MjBiMDRlMzkxNDZkYjM0Mjg0MmQ0ZmQ5YjgwODIxZmZhN2MzMTc1OTk4NjdjODQ0MjkyMDFjNmI0N2NkMTM0NjFkIn0.eyJhdWQiOiIxIiwianRpIjoiMDAyNGYyNDc5OGZkYjUyMGIwNGUzOTE0NmRiMzQyODQyZDRmZDliODA4MjFmZmE3YzMxNzU5OTg2N2M4NDQyOTIwMWM2YjQ3Y2QxMzQ2MWQiLCJpYXQiOjE0ODQyMzk5NzIsIm5iZiI6MTQ4NDIzOTk3MiwiZXhwIjoxNzk5NzcyNzcyLCJzdWIiOiI1NCIsInNjb3BlcyI6W119.sK5nwYl8d60ESSt-KmsnDbjnjpq90VB4CjgLlUAy4-7grZVggzC5IkgOTYgG9WwTIGtPjv5hoCkBgh6PMfAdq1rCNchzaoq1A9kr8Nb_ZC-KCMDeAimxdwj7DULlW_-RU_ntySRdNy30o5GqxTAn_WlbpOXBTR5Pg_vQGbX4TRs7-G02WVBOBdH-INdlW7ho6PKVeh5bV8EiQ4YugOSLRb3qi2KyVUNyX_lmj6CxjWVkxuvz6k0jySAECvsBh9paP1hBmVYbNJd7vnOjWgdU4GyrKxzLk2_X7btXWkU8hrAgxDxNC9AogDNhjjf7VkxvSIvOFNqIcewa6GNlD67APuB_h4nih4jUgmYT52UYJbRDnbc8O8oXvtU5WlAvNDn7AWfdHBUx90dLRYSmG0Wl_oPWWGnEM14a4FT4YC43WxDTPszJJ_Mkjez02nwRqtv2VTMz-YcCs92IanGZbu6A6jQrA2-iZ789DxZYRFS82jFR890y3-G1S8F4icB_fIjpICKPGTb4_1CxQdEJ6PEzkByOVoDum8zkeoTpVCkyxgl1Ct_aHUl2ftlBPZXSL03s5b2n5eP9cddyZqkCZ0KzrjusvKzdo0SwgRAQc-n7xycC6qg8lk-d7i2zXpwqOzmyaXxWL_D6Q1BD-8w9Z4YwkETAlXrhZvWjkzNjvhWCOus"
}
```

### HTTP Request
`GET api/registo`

`HEAD api/registo`


<!-- END_50799eeda2f2fd956bc1f6a5526b52a1 -->
<!-- START_71f49f7d8533b6e91eb82e351434ebda -->
## -&gt; Registar utilizador

> Example request:

```bash
curl "http://localhost/api/registo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/registo",
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
`POST api/registo`


<!-- END_71f49f7d8533b6e91eb82e351434ebda -->
<!-- START_1dce62b53b3af5134720b8512162c656 -->
## -&gt; Verifica se o input do user corresponde ao da base de dados

> Example request:

```bash
curl "http://localhost/api/validacao" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/validacao",
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
`POST api/validacao`


<!-- END_1dce62b53b3af5134720b8512162c656 -->
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
{
    "data": [
        {
            "id_series": 1,
            "nome_series": "Dexter",
            "imagem_series": "http:\/\/tbsila.cdn.turner.com\/toonla\/images\/cnemea\/content\/375\/downloadable\/dexter\/uk\/dexter01_600x400.jpg",
            "created_at": "2017-01-09 16:17:21",
            "updated_at": "2017-01-09 16:17:21",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 2,
                    "nome": "Dora a Exploradora",
                    "descricao": "A descrição",
                    "imagem": "imagem.jpg",
                    "ficheiro_inicial": "file.rar",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-09 16:17:22",
                    "updated_at": "2017-01-09 16:17:22",
                    "ref_id_episodios": 1,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                },
                {
                    "id": 3,
                    "nome": "O urso João",
                    "descricao": "A descrição",
                    "imagem": "imagem.jpg",
                    "ficheiro_inicial": "file.rar",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-09 16:17:23",
                    "updated_at": "2017-01-09 16:17:23",
                    "ref_id_episodios": 1,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                },
                {
                    "id": 4,
                    "nome": "Carrinha mágica",
                    "descricao": "A descrição",
                    "imagem": "imagem.jpg",
                    "ficheiro_inicial": "file.rar",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-09 16:17:23",
                    "updated_at": "2017-01-09 16:17:23",
                    "ref_id_episodios": 1,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                }
            ]
        },
        {
            "id_series": 2,
            "nome_series": "Cow and Chicken",
            "imagem_series": "http:\/\/assets2.pop-buzz.com\/2015\/39\/cow-and-chicken-1443625206-responsive-large-0.jpg",
            "created_at": "2017-01-09 16:17:21",
            "updated_at": "2017-01-09 16:17:21",
            "ref_id_canal": 1,
            "apps": []
        }
    ]
}
```

### HTTP Request
`GET api/look-learn-series`

`HEAD api/look-learn-series`


<!-- END_11905ff92dab7e991184d7c1d060d8b4 -->
#Look&amp;Learn - Video

Método geral para correr um video que foi submetido no Share&amp;Learn
<!-- START_ca5c21c4927d6fe786126336b00d7e57 -->
## -&gt; Mostra todos os videos

> Example request:

```bash
curl "http://localhost/api/videos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/videos",
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
{
    "data": [
        {
            "nome": "Dora a Exploradora",
            "ficheiro_inicial": "file.rar"
        },
        {
            "nome": "O urso João",
            "ficheiro_inicial": "file.rar"
        },
        {
            "nome": "Carrinha mágica",
            "ficheiro_inicial": "file.rar"
        }
    ]
}
```

### HTTP Request
`GET api/videos`

`HEAD api/videos`


<!-- END_ca5c21c4927d6fe786126336b00d7e57 -->
<!-- START_fd6b6612bfbb1aed6e022e593fca3aea -->
## Caminho para percorrer o video

> Example request:

```bash
curl "http://localhost/api/videos/{video}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/videos/{video}",
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
{
    "data": []
}
```

### HTTP Request
`GET api/videos/{video}`

`HEAD api/videos/{video}`


<!-- END_fd6b6612bfbb1aed6e022e593fca3aea -->
#Sobre

Método geral para ler os detalhes do utilizador
<!-- START_766877fd20e6f8e0b3033e309aeffceb -->
## -&gt; Lista os detalhes do utilizador

> Example request:

```bash
curl "http://localhost/api/sobre" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre",
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
{
    "data": [
        {
            "id_users": 1,
            "username": "umueller",
            "email": "casimir00@gmail.com",
            "imagem_user": "images\/profile\/7bc64c64c69211f2917e1227a385f226.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": "lisboa2",
            "nacionalidade": null,
            "descricao": null
        }
    ]
}
```

### HTTP Request
`GET api/sobre`

`HEAD api/sobre`


<!-- END_766877fd20e6f8e0b3033e309aeffceb -->
<!-- START_798a0529285c2c785d8326c0f9866e0e -->
## -&gt; Lista os detalhes do utilizador

> Example request:

```bash
curl "http://localhost/api/sobre/{sobre}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/sobre/{sobre}",
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
{
    "data": [
        {
            "id_users": 1,
            "username": "umueller",
            "email": "casimir00@gmail.com",
            "imagem_user": "images\/profile\/7bc64c64c69211f2917e1227a385f226.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": "lisboa2",
            "nacionalidade": null,
            "descricao": null
        }
    ]
}
```

### HTTP Request
`GET api/sobre/{sobre}`

`HEAD api/sobre/{sobre}`


<!-- END_798a0529285c2c785d8326c0f9866e0e -->
