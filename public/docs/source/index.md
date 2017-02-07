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
    "data": [],
    "data2": [
        {
            "id_series": 1,
            "nome_series": "Dexter",
            "imagem_series": "http:\/\/tbsila.cdn.turner.com\/toonla\/images\/cnemea\/content\/375\/downloadable\/dexter\/uk\/dexter01_600x400.jpg",
            "created_at": "2017-01-14 18:14:22",
            "updated_at": "2017-01-14 18:14:22",
            "ref_id_canal": 1
        },
        {
            "id_series": 2,
            "nome_series": "Cow and Chicken",
            "imagem_series": "http:\/\/assets2.pop-buzz.com\/2015\/39\/cow-and-chicken-1443625206-responsive-large-0.jpg",
            "created_at": "2017-01-14 18:14:23",
            "updated_at": "2017-01-14 18:14:23",
            "ref_id_canal": 1
        },
        {
            "id_series": 3,
            "nome_series": "toze",
            "imagem_series": "asdsadzqwdd",
            "created_at": "2017-02-08 00:00:00",
            "updated_at": "2017-02-15 00:00:00",
            "ref_id_canal": 1
        }
    ],
    "data3": [
        {
            "id_series": 1,
            "nome_series": "Dexter",
            "imagem_series": "http:\/\/tbsila.cdn.turner.com\/toonla\/images\/cnemea\/content\/375\/downloadable\/dexter\/uk\/dexter01_600x400.jpg",
            "created_at": "2017-01-14 18:14:22",
            "updated_at": "2017-01-14 18:14:22",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 3,
                    "nome": "O urso João",
                    "descricao": "A descrição",
                    "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                    "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-14 18:14:24",
                    "updated_at": "2017-01-14 18:14:24",
                    "ref_id_episodios": 1,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                },
                {
                    "id": 4,
                    "nome": "Carrinha mágica",
                    "descricao": "A descrição",
                    "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                    "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-14 18:14:24",
                    "updated_at": "2017-01-14 18:14:24",
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
            "created_at": "2017-01-14 18:14:23",
            "updated_at": "2017-01-14 18:14:23",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 2,
                    "nome": "Dora a Exploradora",
                    "descricao": "A descrição",
                    "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                    "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-14 18:14:24",
                    "updated_at": "2017-01-14 18:14:24",
                    "ref_id_episodios": 2,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                }
            ]
        },
        {
            "id_series": 3,
            "nome_series": "toze",
            "imagem_series": "asdsadzqwdd",
            "created_at": "2017-02-08 00:00:00",
            "updated_at": "2017-02-15 00:00:00",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 37,
                    "nome": "teste",
                    "descricao": "asdxzaazx<",
                    "imagem": "<zxz<x<zxz<",
                    "ficheiro_inicial": "<zx<zcxzxvxz",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-02-15 00:00:00",
                    "updated_at": "2017-02-07 00:00:00",
                    "ref_id_episodios": 3,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 4
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET api/biblioteca-geral`

`HEAD api/biblioteca-geral`


<!-- END_a937e1af565b778c570275206e33dd74 -->
<!-- START_e5523691f36e72fadb1c1cf9a0c6d8cd -->
## Mostra as aplicações de um utilizador

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
            "username": "ola",
            "email": "evans05@hotmail.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-27 17:01:18",
            "imagem_user": "images\/profile\/50535cc40c31bb54ac3f776ebddf87e6.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 2,
            "username": "rkulas",
            "email": "obogisich@yahoo.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-17 01:16:00",
            "imagem_user": "C:\\xampp\\tmp\\php6A69.tmp",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 3,
            "username": "marjorie.ratke",
            "email": "wrippin@yahoo.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-14 18:14:24",
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
            "username": "raynor.ward",
            "email": "sheridan71@mcdermott.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-14 18:14:24",
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
            "username": "mante.eli",
            "email": "elouise39@gmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "bwalker",
            "email": "vallie40@gmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "ashtyn.bailey",
            "email": "reilly.marley@kuphal.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "lrobel",
            "email": "xmonahan@gmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "towne.werner",
            "email": "bradford10@hansen.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "meda.witting",
            "email": "okuneva.mossie@renner.info",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "norris.hilll",
            "email": "predovic.issac@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "camilla83",
            "email": "mae.crist@gutkowski.biz",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "vnicolas",
            "email": "amari30@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "ncronin",
            "email": "scarroll@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "lturner",
            "email": "macy52@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "bridie.will",
            "email": "dannie.daniel@haley.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "edward57",
            "email": "jerde.howell@lind.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "adams.kelvin",
            "email": "gisselle13@volkman.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "mills.april",
            "email": "toney34@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "aufderhar.ken",
            "email": "nienow.tyree@green.net",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "maggio.gabriella",
            "email": "kim.schamberger@haley.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "ratke.art",
            "email": "haag.ryley@gmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "david.hirthe",
            "email": "gmcclure@koss.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "purdy.buddy",
            "email": "jeremie.watsica@schroeder.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "jschuster",
            "email": "ardith77@runte.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "cmcdermott",
            "email": "warren.rohan@rogahn.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "collins.queen",
            "email": "lindgren.lolita@yahoo.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "gwen.rolfson",
            "email": "kwest@yahoo.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "marcelina.renner",
            "email": "percy.hackett@lindgren.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "marc04",
            "email": "cleuschke@gmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "catalina32",
            "email": "mona23@kutch.net",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "kris29",
            "email": "britney.gibson@hotmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "volkman.andy",
            "email": "frami.camylle@hotmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "imogene64",
            "email": "rudy.reichert@yahoo.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "roob.evalyn",
            "email": "muhammad69@gmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "torn",
            "email": "hkutch@gmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "mckenzie.holly",
            "email": "jast.roxane@bernier.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "qsteuber",
            "email": "bettie.bauch@schroeder.info",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "ssanford",
            "email": "cdaugherty@murray.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "clint.tillman",
            "email": "donato.littel@gutmann.info",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "koss.moshe",
            "email": "klocko.maye@kling.net",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "kiera30",
            "email": "sid.heaney@wisozk.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "ehane",
            "email": "justice61@sanford.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "oswaldo.abshire",
            "email": "marcus.tremblay@stroman.info",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "ulices.marks",
            "email": "gia.spencer@hotmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "otha.koepp",
            "email": "hwilkinson@hotmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "cokeefe",
            "email": "dane.armstrong@gmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "armstrong.dorothy",
            "email": "buckridge.trever@yahoo.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "kaci.yundt",
            "email": "hcarroll@weber.net",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "kenyatta88",
            "email": "zratke@hotmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "laravel",
            "email": "laravel@ua.pt",
            "created_at": "2017-01-26 01:14:54",
            "updated_at": "2017-01-26 01:15:08",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 52,
            "username": "laravel2",
            "email": "laravel2@ua.pt",
            "created_at": "2017-01-26 01:22:08",
            "updated_at": "2017-01-26 01:22:12",
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
            "username": "laravel3",
            "email": "laravel3@ua.pt",
            "created_at": "2017-01-26 01:31:39",
            "updated_at": "2017-01-26 01:42:23",
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
            "username": "jose",
            "email": "jose@ua.pt",
            "created_at": "2017-01-31 18:34:58",
            "updated_at": "2017-01-31 18:35:03",
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
            "username": "ola",
            "email": "evans05@hotmail.com",
            "imagem_user": "images\/profile\/50535cc40c31bb54ac3f776ebddf87e6.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
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
## -&gt; Altera imagem do user e guarda imagem no servidor- POST

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
            "username": "ola",
            "email": "evans05@hotmail.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-27 17:01:18",
            "imagem_user": "images\/profile\/50535cc40c31bb54ac3f776ebddf87e6.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 2,
            "username": "rkulas",
            "email": "obogisich@yahoo.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-17 01:16:00",
            "imagem_user": "C:\\xampp\\tmp\\php6A69.tmp",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 3,
            "username": "marjorie.ratke",
            "email": "wrippin@yahoo.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-14 18:14:24",
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
            "username": "raynor.ward",
            "email": "sheridan71@mcdermott.com",
            "created_at": "2017-01-14 18:14:24",
            "updated_at": "2017-01-14 18:14:24",
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
            "username": "mante.eli",
            "email": "elouise39@gmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "bwalker",
            "email": "vallie40@gmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "ashtyn.bailey",
            "email": "reilly.marley@kuphal.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "lrobel",
            "email": "xmonahan@gmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "towne.werner",
            "email": "bradford10@hansen.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "meda.witting",
            "email": "okuneva.mossie@renner.info",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "norris.hilll",
            "email": "predovic.issac@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "camilla83",
            "email": "mae.crist@gutkowski.biz",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "vnicolas",
            "email": "amari30@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "ncronin",
            "email": "scarroll@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "lturner",
            "email": "macy52@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "bridie.will",
            "email": "dannie.daniel@haley.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "edward57",
            "email": "jerde.howell@lind.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "adams.kelvin",
            "email": "gisselle13@volkman.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "mills.april",
            "email": "toney34@hotmail.com",
            "created_at": "2017-01-14 18:14:25",
            "updated_at": "2017-01-14 18:14:25",
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
            "username": "aufderhar.ken",
            "email": "nienow.tyree@green.net",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "maggio.gabriella",
            "email": "kim.schamberger@haley.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "ratke.art",
            "email": "haag.ryley@gmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "david.hirthe",
            "email": "gmcclure@koss.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "purdy.buddy",
            "email": "jeremie.watsica@schroeder.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "jschuster",
            "email": "ardith77@runte.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "cmcdermott",
            "email": "warren.rohan@rogahn.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "collins.queen",
            "email": "lindgren.lolita@yahoo.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "gwen.rolfson",
            "email": "kwest@yahoo.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "marcelina.renner",
            "email": "percy.hackett@lindgren.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "marc04",
            "email": "cleuschke@gmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "catalina32",
            "email": "mona23@kutch.net",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "kris29",
            "email": "britney.gibson@hotmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "volkman.andy",
            "email": "frami.camylle@hotmail.com",
            "created_at": "2017-01-14 18:14:26",
            "updated_at": "2017-01-14 18:14:26",
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
            "username": "imogene64",
            "email": "rudy.reichert@yahoo.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "roob.evalyn",
            "email": "muhammad69@gmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "torn",
            "email": "hkutch@gmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "mckenzie.holly",
            "email": "jast.roxane@bernier.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "qsteuber",
            "email": "bettie.bauch@schroeder.info",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "ssanford",
            "email": "cdaugherty@murray.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "clint.tillman",
            "email": "donato.littel@gutmann.info",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "koss.moshe",
            "email": "klocko.maye@kling.net",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "kiera30",
            "email": "sid.heaney@wisozk.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "ehane",
            "email": "justice61@sanford.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "oswaldo.abshire",
            "email": "marcus.tremblay@stroman.info",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "ulices.marks",
            "email": "gia.spencer@hotmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "otha.koepp",
            "email": "hwilkinson@hotmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "cokeefe",
            "email": "dane.armstrong@gmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "armstrong.dorothy",
            "email": "buckridge.trever@yahoo.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "kaci.yundt",
            "email": "hcarroll@weber.net",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "kenyatta88",
            "email": "zratke@hotmail.com",
            "created_at": "2017-01-14 18:14:27",
            "updated_at": "2017-01-14 18:14:27",
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
            "username": "laravel",
            "email": "laravel@ua.pt",
            "created_at": "2017-01-26 01:14:54",
            "updated_at": "2017-01-26 01:15:08",
            "imagem_user": "https:\/\/app.awolacademy.com\/img\/avatar.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
            "nacionalidade": null,
            "descricao": null,
            "ref_id_users_tipo": 1
        },
        {
            "id_users": 52,
            "username": "laravel2",
            "email": "laravel2@ua.pt",
            "created_at": "2017-01-26 01:22:08",
            "updated_at": "2017-01-26 01:22:12",
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
            "username": "laravel3",
            "email": "laravel3@ua.pt",
            "created_at": "2017-01-26 01:31:39",
            "updated_at": "2017-01-26 01:42:23",
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
            "username": "jose",
            "email": "jose@ua.pt",
            "created_at": "2017-01-31 18:34:58",
            "updated_at": "2017-01-31 18:35:03",
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
            "username": "ola",
            "email": "evans05@hotmail.com",
            "imagem_user": "images\/profile\/50535cc40c31bb54ac3f776ebddf87e6.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
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
                "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-01-14 18:14:24",
                "updated_at": "2017-01-14 18:14:24",
                "ref_id_episodios": 2,
                "ref_id_disciplinas": 1,
                "ref_id_tipos": 1
            }
        },
        {
            "app": {
                "id": 3,
                "nome": "O urso João",
                "descricao": "A descrição",
                "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-01-14 18:14:24",
                "updated_at": "2017-01-14 18:14:24",
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
                "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-01-14 18:14:24",
                "updated_at": "2017-01-14 18:14:24",
                "ref_id_episodios": 1,
                "ref_id_disciplinas": 1,
                "ref_id_tipos": 1
            }
        },
        {
            "app": {
                "id": 37,
                "nome": "teste",
                "descricao": "asdxzaazx<",
                "imagem": "<zxz<x<zxz<",
                "ficheiro_inicial": "<zx<zcxzxvxz",
                "ativo_app": 1,
                "idade": 11,
                "created_at": "2017-02-15 00:00:00",
                "updated_at": "2017-02-07 00:00:00",
                "ref_id_episodios": 3,
                "ref_id_disciplinas": 1,
                "ref_id_tipos": 4
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
<!-- START_979826e38efa7fde07164547e4966121 -->
## -&gt; Lista os comentários de uma série

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
{
    "data": []
}
```

### HTTP Request
`GET api/landingpage/{landingpage}`

`HEAD api/landingpage/{landingpage}`


<!-- END_979826e38efa7fde07164547e4966121 -->
#Login/Registo

Método geral para chamada de acesso e registo na API, com update de dados
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
            "created_at": "2017-01-14 18:14:22",
            "updated_at": "2017-01-14 18:14:22",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 3,
                    "nome": "O urso João",
                    "descricao": "A descrição",
                    "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                    "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-14 18:14:24",
                    "updated_at": "2017-01-14 18:14:24",
                    "ref_id_episodios": 1,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                },
                {
                    "id": 4,
                    "nome": "Carrinha mágica",
                    "descricao": "A descrição",
                    "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                    "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-14 18:14:24",
                    "updated_at": "2017-01-14 18:14:24",
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
            "created_at": "2017-01-14 18:14:23",
            "updated_at": "2017-01-14 18:14:23",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 2,
                    "nome": "Dora a Exploradora",
                    "descricao": "A descrição",
                    "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
                    "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-01-14 18:14:24",
                    "updated_at": "2017-01-14 18:14:24",
                    "ref_id_episodios": 2,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 1
                }
            ]
        },
        {
            "id_series": 3,
            "nome_series": "toze",
            "imagem_series": "asdsadzqwdd",
            "created_at": "2017-02-08 00:00:00",
            "updated_at": "2017-02-15 00:00:00",
            "ref_id_canal": 1,
            "apps": [
                {
                    "id": 37,
                    "nome": "teste",
                    "descricao": "asdxzaazx<",
                    "imagem": "<zxz<x<zxz<",
                    "ficheiro_inicial": "<zx<zcxzxvxz",
                    "ativo_app": 1,
                    "idade": 11,
                    "created_at": "2017-02-15 00:00:00",
                    "updated_at": "2017-02-07 00:00:00",
                    "ref_id_episodios": 3,
                    "ref_id_disciplinas": 1,
                    "ref_id_tipos": 4
                }
            ]
        }
    ]
}
```

### HTTP Request
`GET api/look-learn-series`

`HEAD api/look-learn-series`


<!-- END_11905ff92dab7e991184d7c1d060d8b4 -->
<!-- START_ae05f3281de08fed728ead5c8447ea5f -->
## -&gt; Lista as aplicações associadas à serie selecionada

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
{
    "data": [
        {
            "id": 3,
            "nome": "O urso João",
            "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
            "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
            "nome_series": "Dexter"
        },
        {
            "id": 4,
            "nome": "Carrinha mágica",
            "imagem": "http:\/\/vignette2.wikia.nocookie.net\/nickelodeon\/images\/b\/b1\/Gib-mir-10!.jpg\/revision\/latest?cb=20101008133109&path-prefix=de",
            "ficheiro_inicial": "https:\/\/www.youtube.com\/watch?v=HSlon_3VBn4&feature=youtu.be",
            "nome_series": "Dexter"
        }
    ]
}
```

### HTTP Request
`GET api/look-learn-series/{look_learn_series}`

`HEAD api/look-learn-series/{look_learn_series}`


<!-- END_ae05f3281de08fed728ead5c8447ea5f -->
<!-- START_95a6ce0deea53be8ecebef8600802c28 -->
## -&gt; Lista uma aplicação

> Example request:

```bash
curl "http://localhost/api/look-learn-app/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-app/{id}",
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
`GET api/look-learn-app/{id}`

`HEAD api/look-learn-app/{id}`


<!-- END_95a6ce0deea53be8ecebef8600802c28 -->
<!-- START_4f88f054fdccd19673dcce104919cbe4 -->
## Seleciona todas as aplicações associadas a uma série, ou apenas uma aplicação - query por post

> Example request:

```bash
curl "http://localhost/api/look-learn-series/query" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-series/query",
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
`POST api/look-learn-series/query`


<!-- END_4f88f054fdccd19673dcce104919cbe4 -->
<!-- START_166b963a85f7d02ac8517921b9ce4b9e -->
## Seleciona todas as aplicações de uma série - via GET

> Example request:

```bash
curl "http://localhost/api/look-learn-query" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/look-learn-query",
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
    "data2": []
}
```

### HTTP Request
`GET api/look-learn-query`

`HEAD api/look-learn-query`


<!-- END_166b963a85f7d02ac8517921b9ce4b9e -->
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
    "error": "Unauthenticated."
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
    "error": "Unauthenticated."
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
            "username": "ola",
            "email": "evans05@hotmail.com",
            "imagem_user": "images\/profile\/50535cc40c31bb54ac3f776ebddf87e6.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
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
## -&gt; Lista os detalhes do utilizador por id

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
            "username": "ola",
            "email": "evans05@hotmail.com",
            "imagem_user": "images\/profile\/50535cc40c31bb54ac3f776ebddf87e6.png",
            "area_formacao": null,
            "data_nascimento": null,
            "localidade": null,
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
#Upload

Método geral para upload de aplicações e acesso ao editor de conteúdos
<!-- START_6e7e2bdf41dacf38a5c6768ef817e8b6 -->
## -&gt; Armazena texto de uma nova aplicação

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
<!-- START_9155e3895a43c0e8245d74bf78c005cc -->
## -&gt; Armazena imagem e vídeo da nova aplicação

> Example request:

```bash
curl "http://localhost/api/uploadimagem" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/uploadimagem",
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
`POST api/uploadimagem`


<!-- END_9155e3895a43c0e8245d74bf78c005cc -->
